<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listemployeedetail_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}		

	function select_all() {
		$this->db->select('e.*, d.department_name, p.position_name, s.status_name');
		$this->db->from('hrd_employee e');
		$this->db->join('hrd_department d', 'e.department_id = d.department_id');
		$this->db->join('hrd_position p', 'e.position_id = p.position_id');
		$this->db->join('hrd_status s', 'e.status_id = s.status_id');		
		$this->db->where('e.emp_status', 'ACTIVE');
		$this->db->order_by('e.emp_name','asc');
		
		return $this->db->get();
	}		

	function select_detail_employee($emp_id) {
		$this->db->select('e.*, d.department_name, p.position_name, s.status_name,
			pr.province_name, c.country_name, m.marriage_name, r.religion_name, ed.education_name,
			b.blood_name');
		$this->db->from('hrd_employee e');
		$this->db->join('hrd_department d', 'e.department_id = d.department_id');
		$this->db->join('hrd_position p', 'e.position_id = p.position_id');
		$this->db->join('hrd_status s', 'e.status_id = s.status_id');
		$this->db->join('hrd_province pr', 'e.province_id = pr.province_id');
		$this->db->join('hrd_country c', 'e.country_id = c.country_id');
		$this->db->join('hrd_marriage m', 'e.marriage_id = m.marriage_id');
		$this->db->join('hrd_religion r', 'e.religion_id = r.religion_id');
		$this->db->join('hrd_education ed', 'e.education_id = ed.education_id');
		$this->db->join('hrd_blood b', 'e.blood_id = b.blood_id');
		$this->db->where('e.emp_id', $emp_id);		
		
		return $this->db->get();
	}

	function select_school($emp_id) {
		$this->db->select('s.*, e.education_name');
		$this->db->from('hrd_school s');
		$this->db->join('hrd_education e', 's.education_id=e.education_id');
		$this->db->where('s.emp_id', $emp_id);
		
		return $this->db->get();
	}

	function select_work($emp_id) {
		$this->db->select('*');
		$this->db->from('hrd_company');		
		$this->db->where('emp_id', $emp_id);		
		
		return $this->db->get();
	}

	function select_family($emp_id) {
		$this->db->select('f.*, r.relation_name');
		$this->db->from('hrd_family f');
		$this->db->join('hrd_relation r', 'f.relation_id=r.relation_id');
		$this->db->where('f.emp_id', $emp_id);
		
		return $this->db->get();
	}

	function select_reward($emp_id) {
		$this->db->select('t.*, r.reward_name');
		$this->db->from('hrd_transaction_reward t');
		$this->db->from('hrd_reward r', 't.reward_id=r.reward_id');
		$this->db->where('t.emp_id', $emp_id);
		
		return $this->db->get();
	}

	function select_punishment($emp_id) {
		$this->db->select('t.*, p.punishment_name');
		$this->db->from('hrd_transaction_punishment t');
		$this->db->from('hrd_punishment p', 't.punishment_id=p.punishment_id');
		$this->db->where('t.emp_id', $emp_id);
		
		return $this->db->get();
	}

	function select_record($emp_id) {
		$this->db->select('r.*, a.absent_name');
		$this->db->from('hrd_record r');
		$this->db->join('hrd_absent a', 'r.absent_id=a.absent_id');
		$this->db->where('r.emp_id', $emp_id);
		
		return $this->db->get();
	}
}
/* Location: ./application/model/report/Listemployeedetail_model.php */