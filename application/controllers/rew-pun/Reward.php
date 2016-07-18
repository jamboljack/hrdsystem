<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reward extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');
		$this->load->model('home_model');
		$this->load->model('rew-pun/reward_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->reward_model->select_all()->result();
			//$this->output->enable_profiler(TRUE);
			$this->template->display('rew-pun/reward_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function savedata() {
		$this->reward_model->insert_data();
 		redirect(site_url('rew-pun/reward'));
	}
	
	public function updatedata() {
		$this->reward_model->update_data();
 		redirect(site_url('rew-pun/reward'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('rew-pun/reward'));
		} else {
			$this->reward_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."rew-pun/reward\">";
		}
	}	
}
/* Location: ./application/controller/rew-pun/Reward.php */