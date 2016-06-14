<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaction_punishment_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('t.*, e.emp_name, r.punishment_name, p.position_name');
		$this->db->from('hrd_transaction_punishment t');
		$this->db->join('hrd_employee e', 't.emp_id=e.emp_id');
		$this->db->join('hrd_punishment r', 't.punishment_id=r.punishment_id');
		$this->db->join('hrd_position p', 'e.position_id=p.position_id');
		$this->db->order_by('t.trans_id','desc');
		
		return $this->db->get();
	}

	function select_employee() {
		$this->db->select('e.emp_id, e.emp_nik, e.emp_name, d.department_name, p.position_name');
		$this->db->from('hrd_employee e');
		$this->db->join('hrd_department d', 'e.department_id=d.department_id');		
		$this->db->join('hrd_position p', 'e.position_id=p.position_id');
		$this->db->order_by('e.emp_name','asc');
		
		return $this->db->get();
	}

	function select_punishment_type() {
		$this->db->select('*');
		$this->db->from('hrd_punishment');
		$this->db->order_by('punishment_name','asc');
		
		return $this->db->get();
	}

	function select_punishment_employee($employee_id) {
		$this->db->select('t.*, r.punishment_name');
		$this->db->from('hrd_transaction_punishment t');		
		$this->db->join('hrd_punishment r', 't.punishment_id=r.punishment_id');		
		$this->db->where('t.emp_id', $employee_id);
		$this->db->order_by('t.trans_id','desc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		// Date
		$tanggal 	= trim($this->input->post('date_punishment'));
		$xtanggal	= explode("-",$tanggal);
		$thn1 		= $xtanggal[2];
		$bln1 		= $xtanggal[1];
		$tgl1 		= $xtanggal[0];
		$date_punish= $thn1.'-'.$bln1.'-'.$tgl1;

		$data = array(    			
    			'emp_id' 			=> $this->input->post('lstEmployee'),
    			'trans_no' 			=> trim($this->input->post('punishment_no')),
    			'punishment_id' 	=> trim($this->input->post('lstPunishment')),
    			'trans_date' 		=> $date_punish,
    			'trans_desc' 		=> trim($this->input->post('desc')),
    			'trans_date_update' => date('Y-m-d'),
    			'trans_time_update' => date('Y-m-d H:i:s'),
    			'user_username' 	=> trim($this->session->userdata('username'))
				);
		
		$this->db->insert('hrd_transaction_punishment', $data);
	}
	
	function select_by_id($transaction_id) {
		$this->db->select('t.*, e.emp_id, e.emp_nik, e.emp_name, d.department_name, p.position_name');
		$this->db->from('hrd_transaction_punishment t');
		$this->db->join('hrd_employee e', 't.emp_id=e.emp_id');
		$this->db->join('hrd_department d', 'e.department_id=e.department_id');
		$this->db->join('hrd_position p', 'p.position_id=e.position_id');
		$this->db->where('t.trans_id', $transaction_id);
		
		return $this->db->get();
	}

	function update_data() {
		$trans_id   = $this->input->post('id');
		// Date
		$tanggal 	= trim($this->input->post('date_punishment'));
		$xtanggal	= explode("-",$tanggal);
		$thn1 		= $xtanggal[2];
		$bln1 		= $xtanggal[1];
		$tgl1 		= $xtanggal[0];
		$date_punish= $thn1.'-'.$bln1.'-'.$tgl1;

		$data = array(    			
    			'trans_no' 			=> trim($this->input->post('punishment_no')),
    			'punishment_id' 	=> trim($this->input->post('lstPunishment')),
    			'trans_date' 		=> $date_punish,
    			'trans_desc' 		=> trim($this->input->post('desc')),
    			'trans_date_update' => date('Y-m-d'),
    			'trans_time_update' => date('Y-m-d H:i:s'),
    			'user_username' 	=> trim($this->session->userdata('username'))
				);

		$this->db->where('trans_id', $trans_id);
		$this->db->update('hrd_transaction_punishment', $data);
	}

	function delete_data($kode) {
		$this->db->where('trans_id', $kode);
		$this->db->delete('hrd_transaction_punishment');		
	}		
}
/* Location: ./application/model/rew-pun/Transaction_punishment_model.php */