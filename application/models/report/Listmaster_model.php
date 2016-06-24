<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listmaster_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_blood() {
		$this->db->select('*');
		$this->db->from('hrd_blood');		
		$this->db->order_by('blood_name','asc');
		
		return $this->db->get();
	}

	function select_marriage() {
		$this->db->select('*');
		$this->db->from('hrd_marriage');		
		$this->db->order_by('marriage_name','asc');
		
		return $this->db->get();
	}

	function select_religion() {
		$this->db->select('*');
		$this->db->from('hrd_religion');		
		$this->db->order_by('religion_name','asc');
		
		return $this->db->get();
	}

	function select_education() {
		$this->db->select('*');
		$this->db->from('hrd_education');		
		$this->db->order_by('education_name','asc');
		
		return $this->db->get();
	}

	function select_relation() {
		$this->db->select('*');
		$this->db->from('hrd_relation');		
		$this->db->order_by('relation_name','asc');
		
		return $this->db->get();
	}

	function select_status() {
		$this->db->select('*');
		$this->db->from('hrd_status');		
		$this->db->order_by('status_name','asc');
		
		return $this->db->get();
	}

	function select_department() {
		$this->db->select('*');
		$this->db->from('hrd_department');		
		$this->db->order_by('department_name','asc');
		
		return $this->db->get();
	}

	function select_position() {
		$this->db->select('*');
		$this->db->from('hrd_position');		
		$this->db->order_by('position_name','asc');
		
		return $this->db->get();
	}

	function select_absent() {
		$this->db->select('*');
		$this->db->from('hrd_absent');		
		$this->db->order_by('absent_name','asc');
		
		return $this->db->get();
	}		
}
/* Location: ./application/model/report/Listmaster_model.php */