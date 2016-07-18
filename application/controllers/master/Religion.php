<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Religion extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');
		$this->load->model('home_model');
		$this->load->model('master/religion_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->religion_model->select_all()->result();
			$this->template->display('master/religion_view', $data);
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {
		$this->template->display('master/religion_add_view');
	}
	
	public function savedata() {
		$this->religion_model->insert_data();
		$this->session->set_flashdata('notification','Save Data Success.');
 		redirect(site_url('master/religion'));		
	}
	
	public function editdata($religion_id) {
		$data['detail'] = $this->religion_model->select_by_id($religion_id)->row();
		$this->template->display('master/religion_edit_view', $data);
	}
	
	public function updatedata() {
		$this->religion_model->update_data();
		$this->session->set_flashdata('notification','Update Data Success.');
 		redirect(site_url('master/religion'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('master/religion'));
		} else {
			$this->religion_model->delete_data($kode);
			$this->session->set_flashdata('notification','Delete Data Success.');
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."master/religion\">";
		}
	}	
}
/* Location: ./application/controller/master/Religion.php */