<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');
		$this->load->model('practice/student_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			$data['daftarlist'] = $this->student_model->select_all()->result();
			$this->template->display('practice/student_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function adddata() {
		$data['schoollist']	=  $this->student_model->select_school()->result();
		$this->template->display('practice/student_add_view', $data);
	}
	
	public function savedata() {
		$this->form_validation->set_rules('lstSchool','<b>School Name</b>','trim|required');
		$this->form_validation->set_rules('name','<b>Name</b>','trim|required|is_unique[hrd_practice_student.student_name]');
		$this->form_validation->set_rules('address','<b>Address</b>','trim|required');
		$this->form_validation->set_rules('phone','<b>Phone</b>','trim|required');
		$this->form_validation->set_rules('department','<b>Department</b>','trim|required');
		$this->form_validation->set_rules('teacher','<b>Teacher</b>','trim|required');
		$this->form_validation->set_rules('start_date','<b>Start Date</b>','trim|required');
		$this->form_validation->set_rules('end_date','<b>End Date</b>','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['schoollist']	=  $this->student_model->select_school()->result();
			$this->template->display('practice/student_add_view', $data);
		} else {
			if (!empty($_FILES['userfile']['name'])) {
				$jam 	= time();
				$kode 	= seo_title(strtolower($this->input->post('name')));
					
				$config['file_name']    = 'Student_'.$kode.'_'.$jam.'.jpg';
				$config['upload_path'] = './photo/student/';
				$config['allowed_types'] = 'jpg|png|gif|jpeg';		
				$config['overwrite'] = TRUE;
				$this->load->library('upload', $config);
				$this->upload->do_upload('userfile');
				$config['image_library'] = 'gd2';
				$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
				$config['maintain_ratio'] = TRUE;
												
				$config['width'] = 200;
				$config['height'] = 350;
				$this->load->library('image_lib',$config);
				 
				$this->image_lib->resize();
			} elseif (empty($_FILES['userfile']['name'])){
				$config['file_name'] = '';
			}

			$this->student_model->insert_data();
	 		redirect(site_url('practice/student'));
 		}
	}
	
	public function editdata($student_id) {
		$data['schoollist']		=  $this->student_model->select_school()->result();		
		$data['detail'] 		= $this->student_model->select_by_id($student_id)->row();
		$this->template->display('practice/student_edit_view', $data);
	}

	public function updatedata() {
		if (!empty($_FILES['userfile']['name'])) {
			$jam 	= time();
			$kode 	= seo_title(strtolower($this->input->post('name')));
				
			$config['file_name']    = 'Student_'.$kode.'_'.$jam.'.jpg';
			$config['upload_path'] = './photo/student/';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';		
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->do_upload('userfile');
			$config['image_library'] = 'gd2';
			$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
			$config['maintain_ratio'] = TRUE;
											
			$config['width'] = 200;
			$config['height'] = 350;
			$this->load->library('image_lib',$config);
			 
			$this->image_lib->resize();
		} elseif (empty($_FILES['userfile']['name'])){
			$config['file_name'] = '';
		}

		$this->student_model->update_data();
 		redirect(site_url('practice/student'));
	}
	
	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));

		if ($kode == null) {
			redirect(site_url('practice/student'));
		} else {
			$this->student_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."practice/student\">";
		}
	}
}
/* Location: ./application/controller/practice/Student.php */