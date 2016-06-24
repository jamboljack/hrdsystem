<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proposal_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('p.*, s.school_name');
		$this->db->from('hrd_practice_proposal p');
		$this->db->join('hrd_practice_school s', 'p.school_id = s.school_id');
		$this->db->order_by('p.proposal_id','desc');
		
		return $this->db->get();
	}

	function select_school() {
		$this->db->select('*');
		$this->db->from('hrd_practice_school');		
		$this->db->order_by('school_name','asc');
		
		return $this->db->get();
	}
	
	function insert_data() {		
		// Date
		$tanggal 	= trim($this->input->post('date_mail'));
		$xtanggal	= explode("-",$tanggal);
		$thn1 		= $xtanggal[2];
		$bln1 		= $xtanggal[1];
		$tgl1 		= $xtanggal[0]; 
		$date_mail	= $thn1.'-'.$bln1.'-'.$tgl1;

		if (!empty($_FILES['userfile']['name'])) {
			$data = array(    			
	    			'school_id' 			=> trim($this->input->post('lstSchool')),
	    			'proposal_title' 		=> trim($this->input->post('title')),
	    			'proposal_month' 		=> ucwords(strtolower(trim($this->input->post('month')))),
	    			'proposal_date' 		=> $date_mail,
	    			'proposal_desc' 		=> trim($this->input->post('desc')),	    			
	    			'proposal_file' 		=> $this->upload->file_name,
	    			'proposal_date_update' 	=> date('Y-m-d'),
	    			'proposal_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 		=> trim($this->session->userdata('username'))
					);
		} else {
			$data = array(    			
	    			'school_id' 			=> trim($this->input->post('lstSchool')),
	    			'proposal_title' 		=> trim($this->input->post('title')),
	    			'proposal_month' 		=> ucwords(strtolower(trim($this->input->post('month')))),
	    			'proposal_date' 		=> $date_mail,
	    			'proposal_desc' 		=> trim($this->input->post('desc')),	    			
	    			'proposal_date_update' 	=> date('Y-m-d'),
	    			'proposal_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 		=> trim($this->session->userdata('username'))
					);
		}
		
		$this->db->insert('hrd_practice_proposal', $data);
	}

	function select_by_id($proposal_id) {
		$this->db->select('p.*, s.school_address');
		$this->db->from('hrd_practice_proposal p');
		$this->db->join('hrd_practice_school s', 'p.school_id = s.school_id');
		$this->db->where('p.proposal_id', $proposal_id);
		
		return $this->db->get();
	}

	function update_data() {
		$proposal_id     = $this->input->post('id');

		// Date
		$tanggal 	= trim($this->input->post('date_mail'));
		$xtanggal	= explode("-",$tanggal);
		$thn1 		= $xtanggal[2];
		$bln1 		= $xtanggal[1];
		$tgl1 		= $xtanggal[0]; 
		$date_mail	= $thn1.'-'.$bln1.'-'.$tgl1;

		if (!empty($_FILES['userfile']['name'])) {
			$data = array(    			
	    			'school_id' 			=> trim($this->input->post('lstSchool')),
	    			'proposal_title' 		=> trim($this->input->post('title')),
	    			'proposal_month' 		=> ucwords(strtolower(trim($this->input->post('month')))),
	    			'proposal_date' 		=> $date_mail,
	    			'proposal_desc' 		=> trim($this->input->post('desc')),
	    			'proposal_status' 		=> trim($this->input->post('lstStatus')),
	    			'proposal_file' 		=> $this->upload->file_name,
	    			'proposal_date_update' 	=> date('Y-m-d'),
	    			'proposal_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 		=> trim($this->session->userdata('username'))
					);
		} else {
			$data = array(    			
	    			'school_id' 			=> trim($this->input->post('lstSchool')),
	    			'proposal_title' 		=> trim($this->input->post('title')),
	    			'proposal_month' 		=> ucwords(strtolower(trim($this->input->post('month')))),
	    			'proposal_date' 		=> $date_mail,
	    			'proposal_desc' 		=> trim($this->input->post('desc')),
	    			'proposal_status' 		=> trim($this->input->post('lstStatus')),
	    			'proposal_date_update' 	=> date('Y-m-d'),
	    			'proposal_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 		=> trim($this->session->userdata('username'))
					);
		}

		$this->db->where('proposal_id', $proposal_id);
		$this->db->update('hrd_practice_proposal', $data);
	}

	function delete_data($kode) {
		$this->db->where('proposal_id', $kode);
		$this->db->delete('hrd_practice_proposal');		
	}		
}
/* Location: ./application/model/practice/Proposal_model.php */