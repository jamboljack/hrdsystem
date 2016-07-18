<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_punishment extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');
		$this->load->model('home_model');
		$this->load->model('rew-pun/transaction_punishment_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->transaction_punishment_model->select_all()->result();
			$this->template->display('rew-pun/transaction_punishment_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {
		$data['employeelist']	= $this->transaction_punishment_model->select_employee()->result();
		$data['punishmentlist']	= $this->transaction_punishment_model->select_punishment_type()->result();
		$this->template->display('rew-pun/transaction_punishment_add_view', $data);
	}
	
	public function savedata() {										
		$this->form_validation->set_rules('lstEmployee','<b>Employee</b>','trim|required');
		$this->form_validation->set_rules('punishment_no','<b>Punishment No.</b>','trim|required|is_unique[hrd_transaction_punishment.trans_no]');
		$this->form_validation->set_rules('lstPunishment','<b>Punishment Type</b>','trim|required');		
		$this->form_validation->set_rules('date_punishment','<b>Date</b>','trim|required');
		$this->form_validation->set_rules('desc','<b>Description</b>','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['employeelist']	= $this->transaction_punishment_model->select_employee()->result();
			$data['punishmentlist']	= $this->transaction_punishment_model->select_punishment_type()->result();
			$this->template->display('rew-pun/transaction_punishment_add_view', $data);
		} else {
			$this->transaction_punishment_model->insert_data();
 			redirect(site_url('rew-pun/transaction_punishment'));
		}
	}
	
	public function editdata($transaction_id) {
		$data['employeelist']	= $this->transaction_punishment_model->select_employee()->result();
		$data['punishmentlist']	= $this->transaction_punishment_model->select_punishment_type()->result();
		$data['detail'] 		= $this->transaction_punishment_model->select_by_id($transaction_id)->row();
		$this->template->display('rew-pun/transaction_punishment_edit_view', $data);
	}
	
	public function updatedata() {
		$this->transaction_punishment_model->update_data();
 		redirect(site_url('rew-pun/transaction_punishment'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('rew-pun/transaction_punishment'));
		} else {
			$this->transaction_punishment_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."rew-pun/transaction_punishment\">";
		}
	}	
}
/* Location: ./application/controller/rew-pun/Transaction_punishment.php */