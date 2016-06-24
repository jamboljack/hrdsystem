<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Record extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');
		$this->load->model('emp/record_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->record_model->select_all()->result();
			$this->template->display('emp/record_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {		
		$data['employeelist'] 	= $this->record_model->select_employee()->result();
		$data['absentlist'] 	= $this->record_model->select_absent()->result();
		$this->template->display('emp/record_add_view', $data);
	}
	
	public function savedata() {
		$this->form_validation->set_rules('lstEmployee','<b>Employee</b>','trim|required');
		$this->form_validation->set_rules('date_record','<b>Date</b>','trim|required');
		$this->form_validation->set_rules('lstInfo','<b>Information</b>','trim|required');
		$this->form_validation->set_rules('desc','<b>Description</b>','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['employeelist'] 	= $this->record_model->select_employee()->result();
			$data['absentlist'] 	= $this->record_model->select_absent()->result();
			$this->template->display('emp/record_add_view', $data);
		} else {
			$this->record_model->insert_data(); // Insert ke Table Record			
 			redirect(site_url('emp/record'));
		}
	}
	
	public function editdata($record_id) {		
		$data['employeelist'] 	= $this->record_model->select_employee()->result();
		$data['absentlist'] 	= $this->record_model->select_absent()->result();
		$data['detail'] 		= $this->record_model->select_by_id($record_id)->row();
		$this->template->display('emp/record_edit_view', $data);
	}

	public function updatedata() {
		$this->record_model->update_data(); // Update ke Table record		
 		redirect(site_url('emp/record'));
	}
	
	public function deletedata($record_id) {
		$record_id = $this->security->xss_clean($this->uri->segment(4));
		
		if ($record_id == null) {
			redirect(site_url('emp/record'));
		} else {			
			$this->record_model->delete_data($record_id); // Hapus Data di Tabel record
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."emp/record\">";
		}
	}
}
/* Location: ./application/controller/emp/Record.php */