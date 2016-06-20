<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('p.*, s.school_name');
		$this->db->from('hrd_practice_student p');
		$this->db->join('hrd_practice_school s', 'p.school_id = s.school_id');
		$this->db->order_by('p.student_id','desc');
		
		return $this->db->get();
	}

	function select_school() {
		$this->db->select('*');
		$this->db->from('hrd_practice_school');		
		$this->db->order_by('school_name','asc');
		
		return $this->db->get();
	}
	
	function insert_data() {		
		// Start
		$tanggal 	= trim($this->input->post('start_date'));
		$xtanggal	= explode("-",$tanggal);
		$thn1 		= $xtanggal[2];
		$bln1 		= $xtanggal[1];
		$tgl1 		= $xtanggal[0]; 
		$start		= $thn1.'-'.$bln1.'-'.$tgl1;

		// End
		$tanggal2 	= trim($this->input->post('end_date'));
		$mtanggal	= explode("-",$tanggal2);
		$thn2 		= $mtanggal[2];
		$bln2 		= $mtanggal[1];
		$tgl2 		= $mtanggal[0]; 
		$end		= $thn2.'-'.$bln2.'-'.$tgl2;

		if (!empty($_FILES['userfile']['name'])) {
			$data = array(    			
	    			'school_id' 			=> trim($this->input->post('lstSchool')),
	    			'student_name' 			=> strtoupper(trim($this->input->post('name'))),
	    			'student_address' 		=> trim($this->input->post('address')),
	    			'student_phone' 		=> trim($this->input->post('phone')),
	    			'student_dept' 			=> strtoupper(trim($this->input->post('department'))),
	    			'student_teacher'		=> strtoupper(trim($this->input->post('teacher'))),
	    			'student_start'			=> $start,
	    			'student_end'			=> $end,
	    			'student_photo'			=> $this->upload->file_name,
	    			'student_date_update' 	=> date('Y-m-d'),
	    			'student_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 		=> trim($this->session->userdata('username'))
					);
		} else {
			$data = array(    			
	    			'school_id' 			=> trim($this->input->post('lstSchool')),
	    			'student_name' 			=> strtoupper(trim($this->input->post('name'))),
	    			'student_address' 		=> trim($this->input->post('address')),
	    			'student_phone' 		=> trim($this->input->post('phone')),
	    			'student_dept' 			=> strtoupper(trim($this->input->post('department'))),
	    			'student_teacher'		=> strtoupper(trim($this->input->post('teacher'))),
	    			'student_start'			=> $start,
	    			'student_end'			=> $end,	    			
	    			'student_date_update' 	=> date('Y-m-d'),
	    			'student_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 		=> trim($this->session->userdata('username'))
					);
		}
		
		$this->db->insert('hrd_practice_student', $data);
	}

	function select_by_id($student_id) {
		$this->db->select('p.*, s.school_address');
		$this->db->from('hrd_practice_student p');
		$this->db->join('hrd_practice_school s', 'p.school_id = s.school_id');
		$this->db->where('p.student_id', $student_id);
		
		return $this->db->get();
	}

	function update_data() {
		$student_id     = $this->input->post('id');

		// Start
		$tanggal 	= trim($this->input->post('start_date'));
		$xtanggal	= explode("-",$tanggal);
		$thn1 		= $xtanggal[2];
		$bln1 		= $xtanggal[1];
		$tgl1 		= $xtanggal[0]; 
		$start		= $thn1.'-'.$bln1.'-'.$tgl1;

		// End
		$tanggal2 	= trim($this->input->post('end_date'));
		$mtanggal	= explode("-",$tanggal2);
		$thn2 		= $mtanggal[2];
		$bln2 		= $mtanggal[1];
		$tgl2 		= $mtanggal[0]; 
		$end		= $thn2.'-'.$bln2.'-'.$tgl2;

		if (!empty($_FILES['userfile']['name'])) {
			$data = array(    			
	    			'school_id' 			=> trim($this->input->post('lstSchool')),
	    			'student_name' 			=> strtoupper(trim($this->input->post('name'))),
	    			'student_address' 		=> trim($this->input->post('address')),
	    			'student_phone' 		=> trim($this->input->post('phone')),
	    			'student_dept' 			=> strtoupper(trim($this->input->post('department'))),
	    			'student_teacher'		=> strtoupper(trim($this->input->post('teacher'))),
	    			'student_start'			=> $start,
	    			'student_end'			=> $end,
	    			'student_photo'			=> $this->upload->file_name,
	    			'student_date_update' 	=> date('Y-m-d'),
	    			'student_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 		=> trim($this->session->userdata('username'))
					);
		} else {
			$data = array(    			
	    			'school_id' 			=> trim($this->input->post('lstSchool')),
	    			'student_name' 			=> strtoupper(trim($this->input->post('name'))),
	    			'student_address' 		=> trim($this->input->post('address')),
	    			'student_phone' 		=> trim($this->input->post('phone')),
	    			'student_dept' 			=> strtoupper(trim($this->input->post('department'))),
	    			'student_teacher'		=> strtoupper(trim($this->input->post('teacher'))),
	    			'student_start'			=> $start,
	    			'student_end'			=> $end,	    			
	    			'student_date_update' 	=> date('Y-m-d'),
	    			'student_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 		=> trim($this->session->userdata('username'))
					);
		}

		$this->db->where('student_id', $student_id);
		$this->db->update('hrd_practice_student', $data);
	}

	function delete_data($kode) {
		$this->db->where('student_id', $kode);
		$this->db->delete('hrd_practice_student');		
	}		
}
/* Location: ./application/model/practice/Student_model.php */