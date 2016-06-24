<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');		
		$this->load->model('master/status_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->status_model->select_all()->result();
			$this->template->display('master/status_view', $data);
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {
		$this->template->display('master/status_add_view');
	}
	
	public function savedata() {
		$this->status_model->insert_data();
		$this->session->set_flashdata('notification','Save Data Success.');
 		redirect(site_url('master/status'));		
	}
	
	public function editdata($status_id) {
		$data['detail'] = $this->status_model->select_by_id($status_id)->row();
		$this->template->display('master/status_edit_view', $data);
	}
	
	public function updatedata() {
		$this->status_model->update_data();
		$this->session->set_flashdata('notification','Update Data Success.');
 		redirect(site_url('master/status'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('master/status'));
		} else {
			$this->status_model->delete_data($kode);
			$this->session->set_flashdata('notification','Delete Data Success.');
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."master/status\">";
		}
	}	
}
/* Location: ./application/controller/master/Status.php */