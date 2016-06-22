<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_employee() {
		$this->db->select('*');
		$this->db->from('hrd_employee');		
		$this->db->where('emp_status', 'ACTIVE');
		
		return $this->db->get();
	}

	function select_resign() {
		$this->db->select('*');
		$this->db->from('hrd_resign');		
		
		return $this->db->get();
	}

	function select_student() {
		$this->db->select('*');
		$this->db->from('hrd_practice_student');		
		
		return $this->db->get();
	}

	function select_users() {
		$this->db->select('*');
		$this->db->from('hrd_users');
		$this->db->where('user_status', 'Active');
		
		return $this->db->get();
	}

	function select_employee_male() {
		$this->db->Select('COUNT(*) as total FROM hrd_employee');
		$this->db->where('emp_gender', 'Male');

		return $this->db->get();
	}

	function select_employee_female() {
		$this->db->Select('COUNT(*) as total FROM hrd_employee');
		$this->db->where('emp_gender', 'Female');

		return $this->db->get();
	}

	function select_education() {
		$this->db->select('*');
		$this->db->from('hrd_education');		
		
		return $this->db->get();
	}

	function select_by_education($education_id) {
		$this->db->select('COUNT(*) as total FROM hrd_employee');
		$this->db->where('education_id', $education_id);		
				
		return $this->db->get();
	}

	function select_religion() {
		$this->db->select('*');
		$this->db->from('hrd_religion');		
		
		return $this->db->get();
	}

	function select_by_religion($religion_id) {
		$this->db->select('COUNT(*) as total FROM hrd_employee');
		$this->db->where('religion_id', $religion_id);		
				
		return $this->db->get();
	}

	function select_marriage() {
		$this->db->select('*');
		$this->db->from('hrd_marriage');		
		
		return $this->db->get();
	}

	function select_by_marriage($marriage_id) {
		$this->db->select('COUNT(*) as total FROM hrd_employee');
		$this->db->where('marriage_id', $marriage_id);		
				
		return $this->db->get();
	}
}
/* Location: ./application/model/Home_model.php */