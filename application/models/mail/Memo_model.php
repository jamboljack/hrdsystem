<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Memo_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_mail_memo');		
		$this->db->order_by('memo_id','desc');
		
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
	    			'memo_no' 			=> trim($this->input->post('memo_no')),
	    			'memo_title' 		=> strtoupper(trim($this->input->post('title'))),
	    			'memo_date' 		=> $date_mail,
	    			'memo_desc' 		=> trim($this->input->post('desc')),
	    			'memo_sign' 		=> trim($this->input->post('sign')),
	    			'memo_file' 		=> $this->upload->file_name,
	    			'memo_date_update' 	=> date('Y-m-d'),
	    			'memo_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 	=> trim($this->session->userdata('username'))
					);
		} else {
			$data = array(    			
	    			'memo_no' 			=> trim($this->input->post('memo_no')),
	    			'memo_title' 		=> strtoupper(trim($this->input->post('title'))),
	    			'memo_date' 		=> $date_mail,
	    			'memo_desc' 		=> trim($this->input->post('desc')),
	    			'memo_sign' 		=> trim($this->input->post('sign')),	    			
	    			'memo_date_update' 	=> date('Y-m-d'),
	    			'memo_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 	=> trim($this->session->userdata('username'))
					);
		}
		
		$this->db->insert('hrd_mail_memo', $data);
	}
	
	function select_by_id($memo_id) {
		$this->db->select('*');
		$this->db->from('hrd_mail_memo');		
		$this->db->where('memo_id', $memo_id);
		
		return $this->db->get();
	}

	function update_data() {
		$memo_id   = $this->input->post('id');
		// Date
		$tanggal 	= trim($this->input->post('date_mail'));
		$xtanggal	= explode("-",$tanggal);
		$thn1 		= $xtanggal[2];
		$bln1 		= $xtanggal[1];
		$tgl1 		= $xtanggal[0];
		$date_mail	= $thn1.'-'.$bln1.'-'.$tgl1;

		if (!empty($_FILES['userfile']['name'])) {
			$data = array(    			
	    			'memo_no' 			=> trim($this->input->post('memo_no')),
	    			'memo_title' 		=> strtoupper(trim($this->input->post('title'))),
	    			'memo_date' 		=> $date_mail,
	    			'memo_desc' 		=> trim($this->input->post('desc')),
	    			'memo_sign' 		=> trim($this->input->post('sign')),
	    			'memo_file' 		=> $this->upload->file_name,
	    			'memo_date_update' 	=> date('Y-m-d'),
	    			'memo_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 	=> trim($this->session->userdata('username'))
					);
		} else {
			$data = array(    			
	    			'memo_no' 			=> trim($this->input->post('memo_no')),
	    			'memo_title' 		=> strtoupper(trim($this->input->post('title'))),
	    			'memo_date' 		=> $date_mail,
	    			'memo_desc' 		=> trim($this->input->post('desc')),
	    			'memo_sign' 		=> trim($this->input->post('sign')),	    			
	    			'memo_date_update' 	=> date('Y-m-d'),
	    			'memo_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 	=> trim($this->session->userdata('username'))
					);
		}

		$this->db->where('memo_id', $memo_id);
		$this->db->update('hrd_mail_memo', $data);
	}

	function delete_data($kode) {
		$this->db->where('memo_id', $kode);
		$this->db->delete('hrd_mail_memo');		
	}		
}
/* Location: ./application/model/mail/Memo_model.php */