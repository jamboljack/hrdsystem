<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_reward extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');		
		$this->load->model('rew-pun/transaction_reward_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->transaction_reward_model->select_all()->result();
			$this->template->display('rew-pun/transaction_reward_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {
		$data['employeelist']	= $this->transaction_reward_model->select_employee()->result();
		$data['rewardlist']		= $this->transaction_reward_model->select_reward_type()->result();
		$this->template->display('rew-pun/transaction_reward_add_view', $data);
	}
	
	public function savedata() {										
		$this->form_validation->set_rules('lstEmployee','<b>Employee</b>','trim|required');
		$this->form_validation->set_rules('reward_no','<b>Reward No.</b>','trim|required|is_unique[hrd_transaction_reward.trans_no]');
		$this->form_validation->set_rules('lstReward','<b>Reward Type</b>','trim|required');		
		$this->form_validation->set_rules('date_reward','<b>Date</b>','trim|required');
		$this->form_validation->set_rules('desc','<b>Description</b>','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['employeelist']	= $this->transaction_reward_model->select_employee()->result();
			$data['rewardlist']		= $this->transaction_reward_model->select_reward_type()->result();
			$this->template->display('rew-pun/transaction_reward_add_view', $data);
		} else {
			$this->transaction_reward_model->insert_data();
 			redirect(site_url('rew-pun/transaction_reward'));
		}
	}
	
	public function editdata($transaction_id) {
		$data['employeelist']	= $this->transaction_reward_model->select_employee()->result();
		$data['rewardlist']		= $this->transaction_reward_model->select_reward_type()->result();
		$data['detail'] 		= $this->transaction_reward_model->select_by_id($transaction_id)->row();
		$this->template->display('rew-pun/transaction_reward_edit_view', $data);
	}
	
	public function updatedata() {
		$this->transaction_reward_model->update_data();
 		redirect(site_url('rew-pun/transaction_reward'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('rew-pun/transaction_reward'));
		} else {
			$this->transaction_reward_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."rew-pun/transaction_reward\">";
		}
	}	
}
/* Location: ./application/controller/rew-pun/Transaction_reward.php */