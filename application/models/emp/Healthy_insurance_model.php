<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Healthy_insurance_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('e.*, d.department_name, p.position_name');		
		$this->db->from('hrd_employee e');		
		$this->db->join('hrd_department d', 'e.department_id = d.department_id'); // Department 
		$this->db->join('hrd_position p', 'e.position_id = p.position_id'); // Position		
		$this->db->where('e.emp_bpjs_h_id <>', '');
		$this->db->order_by('e.emp_name','asc');
		
		return $this->db->get();
	}	

	function select_by_id($emp_id) {
		$this->db->select('e.*, d.department_name, p.position_name');		
		$this->db->from('hrd_employee e');		
		$this->db->join('hrd_department d', 'e.department_id = d.department_id'); // Department 
		$this->db->join('hrd_position p', 'e.position_id = p.position_id'); // Position	
		$this->db->where('e.emp_id', $emp_id);
		
		return $this->db->get();
	}		
}
/* Location: ./application/model/emp/Healthy_insurance_model.php */