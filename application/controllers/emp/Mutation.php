<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mutation extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');
		$this->load->model('home_model');
		$this->load->model('emp/mutation_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->mutation_model->select_all()->result();
			$this->template->display('emp/mutation_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {
		$data['departmentlist']	= $this->mutation_model->select_department()->result();
		$data['positionlist'] 	= $this->mutation_model->select_position()->result();
		$data['decreelist'] 	= $this->mutation_model->select_decree_mail()->result();
		$data['employeelist'] 	= $this->mutation_model->select_employee()->result();

		$this->template->display('emp/mutation_add_view', $data);
	}
	
	public function savedata() {
		$this->form_validation->set_rules('lstEmployee','<b>Employee</b>','trim|required');		
		$this->form_validation->set_rules('lstMail','<b>Decree Mail No.</b>','trim|required');		
		$this->form_validation->set_rules('date_mutation','<b>Date</b>','trim|required');
		$this->form_validation->set_rules('lstDepartment','<b>Department</b>','trim|required');
		$this->form_validation->set_rules('lstPosition','<b>Position</b>','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['departmentlist']	= $this->mutation_model->select_department()->result();
			$data['positionlist'] 	= $this->mutation_model->select_position()->result();
			$data['decreelist'] 	= $this->mutation_model->select_decree_mail()->result();
			$data['employeelist'] 	= $this->mutation_model->select_employee()->result();

			$this->template->display('emp/mutation_add_view', $data);
		} else {
			$this->mutation_model->insert_data(); // Insert ke Table Mutation
			$this->mutation_model->update_data_employee(); // Update ke Table Employee
 			redirect(site_url('emp/mutation'));
		}
	}
	
	public function editdata($mutation_id) {
		$data['departmentlist']	= $this->mutation_model->select_department()->result();
		$data['positionlist'] 	= $this->mutation_model->select_position()->result();
		$data['decreelist'] 	= $this->mutation_model->select_decree_mail()->result();
		$data['employeelist'] 	= $this->mutation_model->select_employee()->result();		
		$data['detail'] 		= $this->mutation_model->select_by_id($mutation_id)->row();

		$this->template->display('emp/mutation_edit_view', $data);
	}

	public function updatedata() {
		$this->mutation_model->update_data(); // Update ke Table Mutation
		$this->mutation_model->update_data_employee(); // Update ke Table Employee
 		redirect(site_url('emp/mutation'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('emp/mutation'));
		} else {
			$this->mutation_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."emp/mutation\">";
		}
	}
}
/* Location: ./application/controller/emp/Mutation.php */