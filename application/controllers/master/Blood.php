<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blood extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');		
		$this->load->model('home_model');
		$this->load->model('master/blood_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->blood_model->select_all()->result();
			//$this->output->enable_profiler(TRUE);
			$this->template->display('master/blood_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {
		$this->template->display('master/blood_add_view');
	}
	
	public function savedata() {
		$this->blood_model->insert_data();
		$this->session->set_flashdata('notification','Save Data Success.');
 		redirect(site_url('master/blood'));		
	}
	
	public function editdata($blood_id) {
		$data['detail'] = $this->blood_model->select_by_id($blood_id)->row();
		$this->template->display('master/blood_edit_view', $data);
	}
	
	public function updatedata() {
		$this->blood_model->update_data();
		$this->session->set_flashdata('notification','Update Data Success.');
 		redirect(site_url('master/blood'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('master/blood'));
		} else {
			$this->blood_model->delete_data($kode);
			$this->session->set_flashdata('notification','Delete Data Success.');
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."master/blood\">";
		}
	}	
}
/* Location: ./application/controller/master/Blood.php */