<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');		
		$this->load->model('emp/employee_model');
		$this->load->model('emp/school_model');
		$this->load->model('emp/company_model');
		$this->load->model('emp/family_model');
		$this->load->model('emp/record_model');
		$this->load->model('rew-pun/transaction_reward_model');
		$this->load->model('rew-pun/transaction_punishment_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->employee_model->select_all()->result();
			$this->template->display('emp/employee_view', $data);
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {
		$data['daftarprovinsi'] 	= $this->employee_model->select_province()->result();
		$data['daftarkabupaten'] 	= $this->employee_model->select_country()->result();
		$data['daftarmarriage'] 	= $this->employee_model->select_marriage()->result();
		$data['daftarreligion'] 	= $this->employee_model->select_religion()->result();
		$data['daftareducation'] 	= $this->employee_model->select_education()->result();
		$data['daftarblood'] 		= $this->employee_model->select_blood()->result();
		$data['daftardepartment']	= $this->employee_model->select_department()->result();
		$data['daftarposition'] 	= $this->employee_model->select_position()->result();
		$data['daftarstatus']		= $this->employee_model->select_status()->result();

		$this->template->display('emp/employee_add_view', $data);
	}
	
	public function savedata() {										
		$this->form_validation->set_rules('nik','<b>N I K</b>','trim|required|is_unique[hrd_employee.emp_nik]');
		$this->form_validation->set_rules('finger','<b>ID Finger</b>','trim|required|is_unique[hrd_employee.emp_finger]');
		$this->form_validation->set_rules('name','<b>Name</b>','trim|required|is_unique[hrd_employee.emp_name]');
		$this->form_validation->set_rules('lstGender','<b>Gender</b>','trim|required');
		$this->form_validation->set_rules('birthplace','<b>Birth Place</b>','trim|required');
		$this->form_validation->set_rules('tgl_lahir','<b>Birth Date</b>','trim|required');
		$this->form_validation->set_rules('lstDepartment','<b>Department</b>','trim|required');
		$this->form_validation->set_rules('lstPosition','<b>Position</b>','trim|required');
		$this->form_validation->set_rules('lstStatus','<b>Status</b>','trim|required');
		$this->form_validation->set_rules('lstWorktype','<b>Worktype</b>','trim|required');
		$this->form_validation->set_rules('salary','<b>Salary</b>','trim|required|integer');
		$this->form_validation->set_rules('tgl_start_join','<b>Start Join</b>','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['daftarprovinsi'] 	= $this->employee_model->select_province()->result();
			$data['daftarkabupaten'] 	= $this->employee_model->select_country()->result();
			$data['daftarmarriage'] 	= $this->employee_model->select_marriage()->result();
			$data['daftarreligion'] 	= $this->employee_model->select_religion()->result();
			$data['daftareducation'] 	= $this->employee_model->select_education()->result();
			$data['daftarblood'] 		= $this->employee_model->select_blood()->result();
			$data['daftardepartment']	= $this->employee_model->select_department()->result();
			$data['daftarposition'] 	= $this->employee_model->select_position()->result();
			$data['daftarstatus']		= $this->employee_model->select_status()->result();

			$this->template->display('emp/employee_add_view', $data);
		} else {
			if (!empty($_FILES['userfile']['name'])) {
				$jam 	= time();
				$kode 	= seo_title(strtolower($this->input->post('name')));
					
				$config['file_name']    = 'Foto_'.$kode.'_'.$jam.'.jpg';
				$config['upload_path'] = './photo/';
				$config['allowed_types'] = 'jpg|png|gif|jpeg';		
				$config['overwrite'] = TRUE;
				$this->load->library('upload', $config);
				$this->upload->do_upload('userfile');
				$config['image_library'] = 'gd2';
				$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
				$config['maintain_ratio'] = TRUE;
												
				$config['width'] = 150;
				$config['height'] = 200;
				$this->load->library('image_lib',$config);
				 
				$this->image_lib->resize();
			} elseif (empty($_FILES['userfile']['name'])){
				$config['file_name'] = '';
			}

			$this->employee_model->insert_data();
 			redirect(site_url('emp/employee'));
		}
	}
	
	public function editdata($employee_id) {
		$data['daftarprovinsi'] 	= $this->employee_model->select_province()->result();
		$data['daftarkabupaten'] 	= $this->employee_model->select_country()->result();
		$data['daftarmarriage'] 	= $this->employee_model->select_marriage()->result();
		$data['daftarreligion'] 	= $this->employee_model->select_religion()->result();
		$data['daftareducation'] 	= $this->employee_model->select_education()->result();
		$data['daftarblood'] 		= $this->employee_model->select_blood()->result();
		$data['daftardepartment']	= $this->employee_model->select_department()->result();
		$data['daftarposition'] 	= $this->employee_model->select_position()->result();
		$data['daftarstatus']		= $this->employee_model->select_status()->result();

		$data['detail'] 			= $this->employee_model->select_by_id($employee_id)->row();		
		// School
		$data['schoollist'] 		= $this->school_model->select_all($employee_id)->result();
		// Company
		$data['companylist'] 		= $this->company_model->select_all($employee_id)->result();
		// Family
		$data['relationlist']		= $this->family_model->select_relation()->result();
		$data['familylist'] 		= $this->family_model->select_all($employee_id)->result();
		// Reward
		$data['rewardlist'] 		= $this->transaction_reward_model->select_reward_employee($employee_id)->result();
		// Punishment
		$data['punishmentlist'] 	= $this->transaction_punishment_model->select_punishment_employee($employee_id)->result();
		// Record
		$data['recordlist'] 		= $this->record_model->select_record_employee($employee_id)->result();

		$this->template->display('emp/employee_edit_view', $data);
	}
	
	public function updatedata() {
		if (!empty($_FILES['userfile']['name'])) {
			$jam 	= time();
			$kode 	= seo_title(strtolower($this->input->post('name')));
					
			$config['file_name']    = 'Foto_'.$kode.'_'.$jam.'.jpg';
			$config['upload_path'] = './photo/';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';		
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->do_upload('userfile');
			$config['image_library'] = 'gd2';
			$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
			$config['maintain_ratio'] = TRUE;
											
			$config['width'] = 150;
			$config['height'] = 200;
			$this->load->library('image_lib',$config);
			 
			$this->image_lib->resize();
		} elseif (empty($_FILES['userfile']['name'])){
			$config['file_name'] = '';
		}

		$this->employee_model->update_data();
 		redirect(site_url('emp/employee'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));
		
		if ($kode == null) {
			redirect(site_url('emp/employee'));
		} else {
			$this->employee_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."emp/employee\">";
		}
	}	
}
/* Location: ./application/controller/emp/Employee.php */