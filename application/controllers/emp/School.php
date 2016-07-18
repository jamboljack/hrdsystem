<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->model('home_model');
		$this->load->model('emp/school_model');	
	}

	public function index()
	{
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
	}
	
	public function savedata() {
		$this->school_model->insert_data();
 		redirect(site_url('emp/employee/editdata/'.$this->uri->segment(4)));
	}
	
	public function updatedata() {
		$this->school_model->update_data();
 		redirect(site_url('emp/employee/editdata/'.$this->uri->segment(4)));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(5));
		
		if ($kode == null) {
			redirect(site_url('emp/employee/editdata/'.$this->uri->segment(4)));
		} else {
			$this->school_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."emp/employee/editdata/".$this->uri->segment(4)."\">";
		}
	}
}
/* Location: ./application/controller/emp/School.php */