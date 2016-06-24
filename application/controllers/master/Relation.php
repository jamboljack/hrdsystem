<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relation extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');		
		$this->load->model('master/relation_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->relation_model->select_all()->result();
			//$this->output->enable_profiler(TRUE);
			$this->template->display('master/relation_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {
		$this->template->display('master/relation_add_view');
	}
	
	public function savedata() {										
		$this->relation_model->insert_data();
		$this->session->set_flashdata('notification','Save Data Success.');
 		redirect(site_url('master/relation'));		
	}
	
	public function editdata($relation_id) {
		$data['detail'] = $this->relation_model->select_by_id($relation_id)->row();
		$this->template->display('master/relation_edit_view', $data);
	}
	
	public function updatedata() {
		$this->relation_model->update_data();
		$this->session->set_flashdata('notification','Update Data Success.');
 		redirect(site_url('master/relation'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('master/relation'));
		} else {
			$this->relation_model->delete_data($kode);
			$this->session->set_flashdata('notification','Delete Data Success.');
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."master/relation\">";
		}
	}	
}
/* Location: ./application/controller/master/Relation.php */