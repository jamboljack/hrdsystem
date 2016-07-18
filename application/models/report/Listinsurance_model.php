<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listinsurance_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}		

	function select_all_healthy_insurance($department_id) {
		$this->db->select('e.*, d.department_name, p.position_name, s.status_name');
		$this->db->from('hrd_employee e');
		$this->db->join('hrd_department d', 'e.department_id = d.department_id');
		$this->db->join('hrd_position p', 'e.position_id = p.position_id');
		$this->db->join('hrd_status s', 'e.status_id = s.status_id');
		$this->db->where('e.emp_status', 'ACTIVE');
		$this->db->where('e.emp_bpjs_h_id <>', '');
		$this->db->where('e.emp_join_date_h <>', '');		
		$this->db->order_by('e.department_id','asc');
		
		return $this->db->get();
	}

	function select_check_department_join ($department_id) {
		$Tgl1 		= trim($this->input->post('tgl1'));
		$xtgl1 		= explode("-",$Tgl1);
		$thn 		= $xtgl1[2];
		$bln 		= $xtgl1[1];
		$tgl 		= $xtgl1[0];
		$TGL1 		= $thn.'-'.$bln.'-'.$tgl; // Tgl 1

		$Tgl2 		= trim($this->input->post('tgl2'));
		$xtgl2 		= explode("-",$Tgl2);
		$thn1 		= $xtgl2[2];
		$bln1 		= $xtgl2[1];
		$tgl1 		= $xtgl2[0];
		$TGL2 		= $thn1.'-'.$bln1.'-'.$tgl1; // Tgl 2	

		$this->db->select('*');
		$this->db->from('hrd_employee');
		$this->db->where('department_id', $department_id);
		$this->db->where('emp_start_join >=', $TGL1);
		$this->db->where('emp_start_join <=', $TGL2);
		$this->db->where('emp_status', 'ACTIVE');
		
		return $this->db->get();
	}

	function select_check_department_join_report($department_id) {
		$TGL1 		= trim($this->uri->segment(6));		
		$TGL2 		= trim($this->uri->segment(7));		

		$this->db->select('*');
		$this->db->from('hrd_employee');
		$this->db->where('department_id', $department_id);
		$this->db->where('emp_start_join >=', $TGL1);
		$this->db->where('emp_start_join <=', $TGL2);
		$this->db->where('emp_status', 'ACTIVE');
		
		return $this->db->get();
	}


	function select_check_department_start ($department_id) {
		$Tgl1 		= trim($this->input->post('tgl1'));
		$xtgl1 		= explode("-",$Tgl1);
		$thn 		= $xtgl1[2];
		$bln 		= $xtgl1[1];
		$tgl 		= $xtgl1[0];
		$TGL1 		= $thn.'-'.$bln.'-'.$tgl; // Tgl 1

		$Tgl2 		= trim($this->input->post('tgl2'));
		$xtgl2 		= explode("-",$Tgl2);
		$thn1 		= $xtgl2[2];
		$bln1 		= $xtgl2[1];
		$tgl1 		= $xtgl2[0];
		$TGL2 		= $thn1.'-'.$bln1.'-'.$tgl1; // Tgl 2	

		$this->db->select('*');
		$this->db->from('hrd_employee');
		$this->db->where('department_id', $department_id);
		$this->db->where('emp_start_contract >=', $TGL1);
		$this->db->where('emp_start_contract <=', $TGL2);
		$this->db->where('emp_status', 'ACTIVE');
		
		return $this->db->get();
	}

	function select_check_department_start_report ($department_id) {
		$TGL1 		= trim($this->uri->segment(6));
		$TGL2 		= trim($this->uri->segment(7));		

		$this->db->select('*');
		$this->db->from('hrd_employee');
		$this->db->where('department_id', $department_id);
		$this->db->where('emp_start_contract >=', $TGL1);
		$this->db->where('emp_start_contract <=', $TGL2);
		$this->db->where('emp_status', 'ACTIVE');
		
		return $this->db->get();
	}

	function select_check_department_end ($department_id) {
		$Tgl1 		= trim($this->input->post('tgl1'));
		$xtgl1 		= explode("-",$Tgl1);
		$thn 		= $xtgl1[2];
		$bln 		= $xtgl1[1];
		$tgl 		= $xtgl1[0];
		$TGL1 		= $thn.'-'.$bln.'-'.$tgl; // Tgl 1

		$Tgl2 		= trim($this->input->post('tgl2'));
		$xtgl2 		= explode("-",$Tgl2);
		$thn1 		= $xtgl2[2];
		$bln1 		= $xtgl2[1];
		$tgl1 		= $xtgl2[0];
		$TGL2 		= $thn1.'-'.$bln1.'-'.$tgl1; // Tgl 2	

		$this->db->select('*');
		$this->db->from('hrd_employee');
		$this->db->where('department_id', $department_id);
		$this->db->where('emp_end_contract >=', $TGL1);
		$this->db->where('emp_end_contract <=', $TGL2);
		$this->db->where('emp_status', 'ACTIVE');
		
		return $this->db->get();
	}

	function select_check_department_end_report ($department_id) {
		$TGL1 		= trim($this->uri->segment(6));
		$TGL2 		= trim($this->uri->segment(7));	

		$this->db->select('*');
		$this->db->from('hrd_employee');
		$this->db->where('department_id', $department_id);
		$this->db->where('emp_end_contract >=', $TGL1);
		$this->db->where('emp_end_contract <=', $TGL2);
		$this->db->where('emp_status', 'ACTIVE');
		
		return $this->db->get();
	}

	function select_employee_start_join($department_id) {
		$Tgl1 		= trim($this->input->post('tgl1'));
		$xtgl1 		= explode("-",$Tgl1);
		$thn 		= $xtgl1[2];
		$bln 		= $xtgl1[1];
		$tgl 		= $xtgl1[0];
		$TGL1 		= $thn.'-'.$bln.'-'.$tgl; // Tgl 1

		$Tgl2 		= trim($this->input->post('tgl2'));
		$xtgl2 		= explode("-",$Tgl2);
		$thn1 		= $xtgl2[2];
		$bln1 		= $xtgl2[1];
		$tgl1 		= $xtgl2[0];
		$TGL2 		= $thn1.'-'.$bln1.'-'.$tgl1; // Tgl 2		
		
		$this->db->select('e.*, d.department_name, p.position_name, s.status_name');
		$this->db->from('hrd_employee e');
		$this->db->join('hrd_department d', 'e.department_id = d.department_id');
		$this->db->join('hrd_position p', 'e.position_id = p.position_id');
		$this->db->join('hrd_status s', 'e.status_id = s.status_id');
		$this->db->where('e.department_id', $department_id);
		$this->db->where('e.emp_start_join >=', $TGL1);
		$this->db->where('e.emp_start_join <=', $TGL2);
		$this->db->where('e.emp_status', 'ACTIVE');		
		$this->db->order_by('e.department_id','asc');
		
		return $this->db->get();
	}

	function select_employee_start_join_report($department_id) {		
		$TGL1 		= trim($this->uri->segment(6));
		$TGL2 		= trim($this->uri->segment(7));		
		
		$this->db->select('e.*, d.department_name, p.position_name, s.status_name');
		$this->db->from('hrd_employee e');
		$this->db->join('hrd_department d', 'e.department_id = d.department_id');
		$this->db->join('hrd_position p', 'e.position_id = p.position_id');
		$this->db->join('hrd_status s', 'e.status_id = s.status_id');
		$this->db->where('e.department_id', $department_id);
		$this->db->where('e.emp_start_join >=', $TGL1);
		$this->db->where('e.emp_start_join <=', $TGL2);
		$this->db->where('e.emp_status', 'ACTIVE');		
		$this->db->order_by('e.department_id','asc');
		
		return $this->db->get();
	}

	function select_employee_start_contract($department_id) {
		$Tgl1 		= trim($this->input->post('tgl1'));
		$xtgl1 		= explode("-",$Tgl1);
		$thn 		= $xtgl1[2];
		$bln 		= $xtgl1[1];
		$tgl 		= $xtgl1[0];
		$TGL1 		= $thn.'-'.$bln.'-'.$tgl; // Tgl 1

		$Tgl2 		= trim($this->input->post('tgl2'));
		$xtgl2 		= explode("-",$Tgl2);
		$thn1 		= $xtgl2[2];
		$bln1 		= $xtgl2[1];
		$tgl1 		= $xtgl2[0];
		$TGL2 		= $thn1.'-'.$bln1.'-'.$tgl1; // Tgl 2		
		
		$this->db->select('e.*, d.department_name, p.position_name, s.status_name');
		$this->db->from('hrd_employee e');
		$this->db->join('hrd_department d', 'e.department_id = d.department_id');
		$this->db->join('hrd_position p', 'e.position_id = p.position_id');
		$this->db->join('hrd_status s', 'e.status_id = s.status_id');
		$this->db->where('e.department_id', $department_id);
		$this->db->where('e.emp_start_contract >=', $TGL1);
		$this->db->where('e.emp_start_contract <=', $TGL2);
		$this->db->where('e.emp_status', 'ACTIVE');		
		$this->db->order_by('e.department_id','asc');
		
		return $this->db->get();
	}

	function select_employee_start_contract_report($department_id) {
		$TGL1 		= trim($this->uri->segment(6));
		$TGL2 		= trim($this->uri->segment(7));		
		
		$this->db->select('e.*, d.department_name, p.position_name, s.status_name');
		$this->db->from('hrd_employee e');
		$this->db->join('hrd_department d', 'e.department_id = d.department_id');
		$this->db->join('hrd_position p', 'e.position_id = p.position_id');
		$this->db->join('hrd_status s', 'e.status_id = s.status_id');
		$this->db->where('e.department_id', $department_id);
		$this->db->where('e.emp_start_contract >=', $TGL1);
		$this->db->where('e.emp_start_contract <=', $TGL2);
		$this->db->where('e.emp_status', 'ACTIVE');		
		$this->db->order_by('e.department_id','asc');
		
		return $this->db->get();
	}

	function select_employee_end_contract($department_id) {
		$Tgl1 		= trim($this->input->post('tgl1'));
		$xtgl1 		= explode("-",$Tgl1);
		$thn 		= $xtgl1[2];
		$bln 		= $xtgl1[1];
		$tgl 		= $xtgl1[0];
		$TGL1 		= $thn.'-'.$bln.'-'.$tgl; // Tgl 1

		$Tgl2 		= trim($this->input->post('tgl2'));
		$xtgl2 		= explode("-",$Tgl2);
		$thn1 		= $xtgl2[2];
		$bln1 		= $xtgl2[1];
		$tgl1 		= $xtgl2[0];
		$TGL2 		= $thn1.'-'.$bln1.'-'.$tgl1; // Tgl 2		
		
		$this->db->select('e.*, d.department_name, p.position_name, s.status_name');
		$this->db->from('hrd_employee e');
		$this->db->join('hrd_department d', 'e.department_id = d.department_id');
		$this->db->join('hrd_position p', 'e.position_id = p.position_id');
		$this->db->join('hrd_status s', 'e.status_id = s.status_id');
		$this->db->where('e.department_id', $department_id);
		$this->db->where('e.emp_end_contract >=', $TGL1);
		$this->db->where('e.emp_end_contract <=', $TGL2);
		$this->db->where('e.emp_status', 'ACTIVE');		
		$this->db->order_by('e.department_id','asc');
		
		return $this->db->get();
	}

	function select_employee_end_contract_report($department_id) {
		$TGL1 		= trim($this->uri->segment(6));
		$TGL2 		= trim($this->uri->segment(7));		
		
		$this->db->select('e.*, d.department_name, p.position_name, s.status_name');
		$this->db->from('hrd_employee e');
		$this->db->join('hrd_department d', 'e.department_id = d.department_id');
		$this->db->join('hrd_position p', 'e.position_id = p.position_id');
		$this->db->join('hrd_status s', 'e.status_id = s.status_id');
		$this->db->where('e.department_id', $department_id);
		$this->db->where('e.emp_end_contract >=', $TGL1);
		$this->db->where('e.emp_end_contract <=', $TGL2);
		$this->db->where('e.emp_status', 'ACTIVE');		
		$this->db->order_by('e.department_id','asc');
		
		return $this->db->get();
	}
			
}
/* Location: ./application/model/report/Listinsurance_model.php */