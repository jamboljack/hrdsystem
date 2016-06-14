<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Position extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');		
		$this->load->model('master/position_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->position_model->select_all()->result();
			$this->template->display('master/position_view', $data);
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {
		$this->template->display('master/position_add_view');
	}
	
	public function savedata() {		
		$this->position_model->insert_data();
 		redirect(site_url('master/position'));		
	}
	
	public function editdata($position_id) {
		$data['detail'] = $this->position_model->select_by_id($position_id)->row();
		$this->template->display('master/position_edit_view', $data);
	}
	
	public function updatedata() {
		$this->position_model->update_data();
 		redirect(site_url('master/position'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('master/position'));
		} else {
			$this->position_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."master/position\">";
		}
	}	
}
/* Location: ./application/controller/master/Position.php */