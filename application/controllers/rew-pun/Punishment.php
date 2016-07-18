<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Punishment extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');
		$this->load->model('home_model');
		$this->load->model('rew-pun/punishment_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->punishment_model->select_all()->result();			
			$this->template->display('rew-pun/punishment_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {
		$this->template->display('rew-pun/punishment_add_view');
	}
	
	public function savedata() {
		$this->punishment_model->insert_data();
 		redirect(site_url('rew-pun/punishment'));
	}
	
	public function editdata($punishment_id) {
		$data['detail'] = $this->punishment_model->select_by_id($punishment_id)->row();
		$this->template->display('rew-pun/punishment_edit_view', $data);
	}
	
	public function updatedata() {
		$this->punishment_model->update_data();
 		redirect(site_url('rew-pun/punishment'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('rew-pun/punishment'));
		} else {
			$this->punishment_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."rew-pun/punishment\">";
		}
	}	
}
/* Location: ./application/controller/rew-pun/Punishment.php */