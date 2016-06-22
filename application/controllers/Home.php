<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');
		$this->load->model('home_model');
	}
	
	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['dataemployee'] 	= $this->home_model->select_employee()->result();
			$data['dataresign'] 	= $this->home_model->select_resign()->result();			
			$data['datastudent']	= $this->home_model->select_student()->result();
			$data['datausers'] 		= $this->home_model->select_users()->result();
			// Chart Gender			
	 		$data['employee_male']	= $this->home_model->select_employee_male()->row()->total; // Cowok Karyawan Aktif	 	
	 		$data['employee_female']= $this->home_model->select_employee_female()->row()->total; // Cewek Karyawan Aktif	
			// Akhir Chart Gender

			// Education
			$education 				= $this->home_model->select_education()->result();
			$render_education = array();
			foreach ($education as $row) {
			    $render_education[] = array(
			        "Education" => $row->education_name,
			        "Total" 	=> (int) $this->home_model->select_by_education($row->education_id)->row()->total
				);
			}
			$data['render_education'] = json_encode($render_education);

			// Religion
			$religion 				= $this->home_model->select_religion()->result();
			$render_religion = array();
			foreach ($religion as $row) {
			    $render_religion[] = array(
			        "Religion" 	=> $row->religion_name,
			        "Total" 	=> (int) $this->home_model->select_by_religion($row->religion_id)->row()->total
				);
			}
			$data['render_religion'] = json_encode($render_religion);

			// Marriage
			$marriage 				= $this->home_model->select_marriage()->result();
			$render_marriage = array();
			foreach ($marriage as $row) {
			    $render_marriage[] = array(
			        "Marriage" 	=> $row->marriage_name,
			        "Total" 	=> (int) $this->home_model->select_by_marriage($row->marriage_id)->row()->total
				);
			}
			$data['render_marriage'] = json_encode($render_marriage);

			// Calendar
			$event 				= $this->home_model->select_event()->result();
			$render_event = array();
			foreach ($event as $row) {
			    $render_event[] = array(
			        "title" 	=> $row->event_name,
			        "start" 	=> $row->event_start_date.'T'.$row->event_start_time,
			        "end" 		=> $row->event_end_date.'T'.$row->event_end_time			        
				);
			}
			$data['render_event'] = json_encode($render_event);


			$this->template->display('home_view', $data);
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		}		
	}	
}
/* Location: ./application/controller/Home.php */