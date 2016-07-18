<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');
		$this->load->model('home_model');		
		$this->load->model('sistem/event_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->event_model->select_all()->result();
			$this->template->display('sistem/event_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {		
		$this->template->display('sistem/event_add_view');
	}
	
	public function savedata() {										
		$this->form_validation->set_rules('name','<b>Event Name</b>','trim|required');
		$this->form_validation->set_rules('start_date','<b>Start Date</b>','trim|required');		
		$this->form_validation->set_rules('start_time','<b>Start Time</b>','trim|required');
		$this->form_validation->set_rules('end_date','<b>End Date</b>','trim|required');
		$this->form_validation->set_rules('end_time','<b>End Time</b>','trim|required');
		$this->form_validation->set_rules('lstColor','<b>Color</b>','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->template->display('sistem/event_add_view');
		} else {			
			$this->event_model->insert_data();
 			redirect(site_url('sistem/event'));
		}
	}
	
	public function editdata($event_id) {		
		$data['detail'] 		= $this->event_model->select_by_id($event_id)->row();
		$this->template->display('sistem/event_edit_view', $data);
	}
	
	public function updatedata() {		
		$this->event_model->update_data();
 		redirect(site_url('sistem/event'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('sistem/event'));
		} else {
			$this->event_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."sistem/event\">";
		}
	}	
}
/* Location: ./application/controller/sistem/Event.php */