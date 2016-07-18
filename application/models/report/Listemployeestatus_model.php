<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listemployeestatus_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_department() {
		$this->db->select('*');
		$this->db->from('hrd_department');
		$this->db->order_by('department_name', 'asc');
		
		return $this->db->get();
	}

	function select_status() {
		$this->db->select('*');
		$this->db->from('hrd_status');
		$this->db->order_by('status_name', 'asc');
		
		return $this->db->get();
	}

	function select_status_name() {
		$Status 	= trim($this->input->post('lstStatus'));

		$this->db->select('*');
		$this->db->from('hrd_status');
		$this->db->where('status_id', $Status);
		
		return $this->db->get();
	}

	function select_status_name_report() {
		$Status 	= trim($this->uri->segment(5));

		$this->db->select('*');
		$this->db->from('hrd_status');
		$this->db->where('status_id', $Status);
		
		return $this->db->get();
	}

	function select_dept_by_id($department_id) {
		$this->db->select('*');
		$this->db->from('hrd_department');
		$this->db->where('department_id', $department_id);		
		
		return $this->db->get();
	}

	function select_all_employee($department_id) {		
		$lstStatus 	= trim($this->input->post('lstStatus'));

		if ($department_id <> 'all' && $lstStatus == 'all') {
			$this->db->select('e.*, d.department_name, p.position_name, s.status_name');
			$this->db->from('hrd_employee e');
			$this->db->join('hrd_department d', 'e.department_id = d.department_id');
			$this->db->join('hrd_position p', 'e.position_id = p.position_id');
			$this->db->join('hrd_status s', 'e.status_id = s.status_id');
			$this->db->where('e.department_id', $department_id);
			$this->db->where('e.emp_status', 'ACTIVE');		
			$this->db->order_by('e.department_id','asc');
			
			return $this->db->get();
		} elseif ($department_id <> 'all' && $lstStatus <> 'all') {
			$this->db->select('e.*, d.department_name, p.position_name, s.status_name');
			$this->db->from('hrd_employee e');
			$this->db->join('hrd_department d', 'e.department_id = d.department_id');
			$this->db->join('hrd_position p', 'e.position_id = p.position_id');
			$this->db->join('hrd_status s', 'e.status_id = s.status_id');
			$this->db->where('e.department_id', $department_id);
			$this->db->where('e.status_id', $lstStatus);
			$this->db->where('e.emp_status', 'ACTIVE');		
			$this->db->order_by('e.department_id','asc');
			
			return $this->db->get();
		}
	}

	function select_employee_by_status ($department_id) {
		$Status 		= trim($this->input->post('lstStatus'));

		$this->db->select('e.*, d.department_name, p.position_name, s.status_name');
		$this->db->from('hrd_employee e');
		$this->db->join('hrd_department d', 'e.department_id = d.department_id');
		$this->db->join('hrd_position p', 'e.position_id = p.position_id');
		$this->db->join('hrd_status s', 'e.status_id = s.status_id');
		$this->db->where('e.department_id', $department_id);
		$this->db->where('e.status_id', $Status);		
		$this->db->where('e.emp_status', 'ACTIVE');
		
		return $this->db->get();
	}

	function select_total_emp() {
		$Dept 		= trim($this->input->post('lstDept'));
		$Status 	= trim($this->input->post('lstStatus'));

		if ($Dept == 'all' && $Status == 'all') { // All
			$this->db->select('count(*) as total');
			$this->db->from('hrd_employee');			
		
			return $this->db->get();
		} elseif ($Dept == 'all' && $Status <> 'all') { // All Department By Status
			$this->db->select('count(*) as total');
			$this->db->from('hrd_employee');
			$this->db->where('status_id', $Status);		
		
			return $this->db->get();
		} elseif ($Dept <> 'all' && $Status == 'all') { // By Department All Status
			$this->db->select('count(*) as total');
			$this->db->from('hrd_employee');
			$this->db->where('department_id', $Dept);		
		
			return $this->db->get();
		} elseif ($Dept <> 'all' && $Status <> 'all') { // By Department By Status
			$this->db->select('count(*) as total');
			$this->db->from('hrd_employee');
			$this->db->where('department_id', $Dept);
			$this->db->where('status_id', $Status);
		
			return $this->db->get();
		}		
	}

	function select_check_department_status($department_id) {
		$Dept 		= trim($this->input->post('lstDept'));
		$Status 	= trim($this->input->post('lstStatus'));

		if ($Dept == 'all' && $Status <> 'all') { // All Department By Status
			$this->db->select('*');
			$this->db->from('hrd_employee');
			$this->db->where('department_id', $department_id);
			$this->db->where('status_id', $Status);
		
			return $this->db->get();
		} elseif ($Dept <> 'all' && $Status == 'all') { // By Department All Status
			$this->db->select('count(*) as total');
			$this->db->from('hrd_employee');
			$this->db->where('department_id', $Dept);		
		
			return $this->db->get();
		} elseif ($Dept <> 'all' && $Status <> 'all') { // By Department By Status
			$this->db->select('count(*) as total');
			$this->db->from('hrd_employee');
			$this->db->where('department_id', $Dept);
			$this->db->where('status_id', $Status);
		
			return $this->db->get();
		}
	}

	function select_check_department_status_report($department_id) {
		$Dept 		= trim($this->uri->segment(4));
		$Status 	= trim($this->uri->segment(5));

		if ($Dept == 'all' && $Status <> 'all') { // All Department By Status
			$this->db->select('*');
			$this->db->from('hrd_employee');
			$this->db->where('department_id', $department_id);
			$this->db->where('status_id', $Status);
		
			return $this->db->get();
		} elseif ($Dept <> 'all' && $Status == 'all') { // By Department All Status
			$this->db->select('count(*) as total');
			$this->db->from('hrd_employee');
			$this->db->where('department_id', $Dept);		
		
			return $this->db->get();
		} elseif ($Dept <> 'all' && $Status <> 'all') { // By Department By Status
			$this->db->select('count(*) as total');
			$this->db->from('hrd_employee');
			$this->db->where('department_id', $Dept);
			$this->db->where('status_id', $Status);
		
			return $this->db->get();
		}
	}

	function select_all_employee_report($department_id) {
		$this->db->select('e.*, d.department_name, p.position_name, s.status_name');
		$this->db->from('hrd_employee e');
		$this->db->join('hrd_department d', 'e.department_id = d.department_id');
		$this->db->join('hrd_position p', 'e.position_id = p.position_id');
		$this->db->join('hrd_status s', 'e.status_id = s.status_id');
		$this->db->where('e.department_id', $department_id);
		$this->db->where('e.emp_status', 'ACTIVE');		
		$this->db->order_by('e.department_id','asc');
				
		return $this->db->get();
	}

	function select_employee_by_status_report ($department_id) {
		$Status 		= trim($this->uri->segment(5));

		$this->db->select('e.*, d.department_name, p.position_name, s.status_name');
		$this->db->from('hrd_employee e');
		$this->db->join('hrd_department d', 'e.department_id = d.department_id');
		$this->db->join('hrd_position p', 'e.position_id = p.position_id');
		$this->db->join('hrd_status s', 'e.status_id = s.status_id');
		$this->db->where('e.department_id', $department_id);
		$this->db->where('e.status_id', $Status);		
		$this->db->where('e.emp_status', 'ACTIVE');
		
		return $this->db->get();
	}

	function select_all_employee_dept($department_id) {
		$this->db->select('e.*, d.department_name, p.position_name, s.status_name');
		$this->db->from('hrd_employee e');
		$this->db->join('hrd_department d', 'e.department_id = d.department_id');
		$this->db->join('hrd_position p', 'e.position_id = p.position_id');
		$this->db->join('hrd_status s', 'e.status_id = s.status_id');
		$this->db->where('e.department_id', $department_id);
		$this->db->where('e.emp_status', 'ACTIVE');
		$this->db->order_by('e.department_id','asc');
			
		return $this->db->get();		
	}

	function select_all_employee_dept_status($department_id) {
		$status_id 	= trim($this->uri->segment(5));

		$this->db->select('e.*, d.department_name, p.position_name, s.status_name');
		$this->db->from('hrd_employee e');
		$this->db->join('hrd_department d', 'e.department_id = d.department_id');
		$this->db->join('hrd_position p', 'e.position_id = p.position_id');
		$this->db->join('hrd_status s', 'e.status_id = s.status_id');
		$this->db->where('e.department_id', $department_id);
		$this->db->where('e.status_id', $status_id);
		$this->db->where('e.emp_status', 'ACTIVE');
		$this->db->order_by('e.department_id','asc');
			
		return $this->db->get();		
	}

	function select_total_emp_report() {
		$Dept 		= trim($this->uri->segment(4));
		$Status 	= trim($this->uri->segment(5));

		if ($Dept == 'all' && $Status == 'all') { // All
			$this->db->select('count(*) as total');
			$this->db->from('hrd_employee');		
		
			return $this->db->get();
		} elseif ($Dept == 'all' && $Status <> 'all') { // All Department By Status
			$this->db->select('count(*) as total');
			$this->db->from('hrd_employee');
			$this->db->where('status_id', $Status);		
		
			return $this->db->get();
		} elseif ($Dept <> 'all' && $Status == 'all') { // By Department All Status
			$this->db->select('count(*) as total');
			$this->db->from('hrd_employee');
			$this->db->where('department_id', $Dept);		
		
			return $this->db->get();
		} elseif ($Dept <> 'all' && $Status <> 'all') { // By Department By Status
			$this->db->select('count(*) as total');
			$this->db->from('hrd_employee');
			$this->db->where('department_id', $Dept);
			$this->db->where('status_id', $Status);
		
			return $this->db->get();
		}		
	}
}
/* Location: ./application/model/report/Listemployeestatus_model.php */