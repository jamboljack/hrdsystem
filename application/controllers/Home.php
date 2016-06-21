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
			$render = array();
			foreach ($education as $row) {
			    $render[] = array(
			        "Education" => $row->education_name,
			        "Total" 	=> (int) $this->home_model->select_by_education($row->education_id)->row()->total
				);
			}
			$data['render'] = json_encode($render);				

			$this->template->display('home_view', $data);
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		}		
	}	
}
/* Location: ./application/controller/Home.php */