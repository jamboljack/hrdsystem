<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resign extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');
		$this->load->model('home_model');
		$this->load->model('emp/resign_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->resign_model->select_all()->result();
			$this->template->display('emp/resign_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {		
		$data['employeelist'] 	= $this->resign_model->select_employee()->result();
		$this->template->display('emp/resign_add_view', $data);
	}
	
	public function savedata() {
		$this->form_validation->set_rules('lstEmployee','<b>Employee</b>','trim|required|is_unique[hrd_resign.emp_id]');
		$this->form_validation->set_rules('date_resign','<b>Date</b>','trim|required');
		$this->form_validation->set_rules('reason','<b>Reason</b>','trim|required');		

		if ($this->form_validation->run() == FALSE) {
			$data['employeelist'] 	= $this->resign_model->select_employee()->result();
			$this->template->display('emp/resign_add_view', $data);
		} else {
			$this->resign_model->insert_data(); // Insert ke Table Resign
			$this->resign_model->update_data_employee(); // Update Status NON-ACTIVE ke Table Employee
 			redirect(site_url('emp/resign'));
		}
	}
	
	public function editdata($resign_id) {		
		$data['employeelist'] 	= $this->resign_model->select_employee()->result();		
		$data['detail'] 		= $this->resign_model->select_by_id($resign_id)->row();
		$this->template->display('emp/resign_edit_view', $data);
	}

	public function updatedata() {
		$this->resign_model->update_data(); // Update ke Table resign		
 		redirect(site_url('emp/resign'));
	}
	
	public function deletedata($resign_id) {
		$resign_id = $this->security->xss_clean($this->uri->segment(4));
		
		if ($resign_id == null) {
			redirect(site_url('emp/resign'));
		} else {
			$cek_emp 	= $this->resign_model->select_by_id($resign_id)->row();
			if (count($cek_emp) > 0) {
				$emp_id = $cek_emp->emp_id;				
				$this->resign_model->update_status_employee($emp_id); // Update Status ACTIVE ke Table Employee
			}
			
			$this->resign_model->delete_data($resign_id); // Hapus Data di Tabel Resign
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."emp/resign\">";
		}
	}
}
/* Location: ./application/controller/emp/Resign.php */