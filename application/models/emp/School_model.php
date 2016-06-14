<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class School_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all($employee_id) {
		$this->db->select('s.*, e.education_name');
		$this->db->from('hrd_school s');
		$this->db->join('hrd_education e', 's.education_id=e.education_id');
		$this->db->where('s.emp_id', $employee_id);
		$this->db->order_by('s.school_id','asc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		// From
		$from 		= trim($this->input->post('from'));
		$xfrom		= explode("-",$from);
		$thn1 		= $xfrom[2];
		$bln1 		= $xfrom[1];
		$tgl1 		= $xfrom[0];
		$tanggalfrom	= $thn1.'-'.$bln1.'-'.$tgl1;

		// To
		$to 		= trim($this->input->post('to'));
		$xto		= explode("-",$to);
		$thn2 		= $xto[2];
		$bln2 		= $xto[1];
		$tgl2 		= $xto[0];
		$tanggalto	= $thn2.'-'.$bln2.'-'.$tgl2;

		$data = array(
				'emp_id' 			=> $this->uri->segment(4),
    			'school_name' 		=> strtoupper(trim($this->input->post('name'))),
    			'school_address'	=> trim($this->input->post('address')),
    			'school_periode_1'	=> $tanggalfrom,
    			'school_periode_2'	=> $tanggalto,
    			'education_id'		=> trim($this->input->post('lstEducation')),
    			'school_department'	=> strtoupper(trim($this->input->post('department'))),
    			'school_phone'		=> trim($this->input->post('phone')),
    			'school_email'		=> trim($this->input->post('email')),
    			'school_web'		=> trim($this->input->post('website')),
    			'school_date_update'=> date('Y-m-d'),
	    		'school_time_update'=> date('Y-m-d H:i:s'),
	    		'user_username' 	=> trim($this->session->userdata('username'))
				);
		
		$this->db->insert('hrd_school', $data);
	}

	function update_data() {
		$school_id     = $this->input->post('id');
		
		// From
		$from 		= trim($this->input->post('from'));
		$xfrom		= explode("-",$from);
		$thn1 		= $xfrom[2];
		$bln1 		= $xfrom[1];
		$tgl1 		= $xfrom[0];
		$tanggalfrom	= $thn1.'-'.$bln1.'-'.$tgl1;

		// To
		$to 		= trim($this->input->post('to'));
		$xto		= explode("-",$to);
		$thn2 		= $xto[2];
		$bln2 		= $xto[1];
		$tgl2 		= $xto[0];
		$tanggalto	= $thn2.'-'.$bln2.'-'.$tgl2;

		$data = array(				
    			'school_name' 		=> strtoupper(trim($this->input->post('name'))),
    			'school_address'	=> trim($this->input->post('address')),
    			'school_periode_1'	=> $tanggalfrom,
    			'school_periode_2'	=> $tanggalto,
    			'education_id'		=> trim($this->input->post('lstEducation')),
    			'school_department'	=> strtoupper(trim($this->input->post('department'))),
    			'school_phone'		=> trim($this->input->post('phone')),
    			'school_email'		=> trim($this->input->post('email')),
    			'school_web'		=> trim($this->input->post('website')),
    			'school_date_update'=> date('Y-m-d'),
	    		'school_time_update'=> date('Y-m-d H:i:s'),
	    		'user_username' 	=> trim($this->session->userdata('username'))
				);

		$this->db->where('school_id', $school_id);
		$this->db->update('hrd_school', $data);
	}

	function delete_data($kode) {
		$this->db->where('school_id', $kode);
		$this->db->delete('hrd_school');		
	}		
}
/* Location: ./application/model/emp/School_model.php */