<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Decree_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_mail_decree');		
		$this->db->order_by('decree_id','desc');
		
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
	    			'decree_no' 			=> trim($this->input->post('mail_no')),
	    			'decree_title' 			=> strtoupper(trim($this->input->post('title'))),
	    			'decree_date' 			=> $date_mail,
	    			'decree_desc' 			=> trim($this->input->post('desc')),
	    			'decree_sign' 			=> trim($this->input->post('sign')),
	    			'decree_file' 			=> $this->upload->file_name,
	    			'decree_date_update' 	=> date('Y-m-d'),
	    			'decree_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 		=> trim($this->session->userdata('username'))
					);
		} else {
			$data = array(    			
	    			'decree_no' 			=> trim($this->input->post('mail_no')),
	    			'decree_title' 			=> strtoupper(trim($this->input->post('title'))),
	    			'decree_date' 			=> $date_mail,
	    			'decree_desc' 			=> trim($this->input->post('desc')),
	    			'decree_sign' 			=> trim($this->input->post('sign')),	    			
	    			'decree_date_update' 	=> date('Y-m-d'),
	    			'decree_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 		=> trim($this->session->userdata('username'))
					);
		}
		
		$this->db->insert('hrd_mail_decree', $data);
	}
	
	function select_by_id($decree_id) {
		$this->db->select('*');
		$this->db->from('hrd_mail_decree');		
		$this->db->where('decree_id', $decree_id);
		
		return $this->db->get();
	}

	function update_data() {
		$decree_id   = $this->input->post('id');
		// Date
		$tanggal 	= trim($this->input->post('date_mail'));
		$xtanggal	= explode("-",$tanggal);
		$thn1 		= $xtanggal[2];
		$bln1 		= $xtanggal[1];
		$tgl1 		= $xtanggal[0];
		$date_mail	= $thn1.'-'.$bln1.'-'.$tgl1;

		if (!empty($_FILES['userfile']['name'])) {
			$data = array(    			
	    			'decree_no' 			=> trim($this->input->post('mail_no')),
	    			'decree_title' 			=> strtoupper(trim($this->input->post('title'))),
	    			'decree_date' 			=> $date_mail,
	    			'decree_desc' 			=> trim($this->input->post('desc')),
	    			'decree_sign' 			=> trim($this->input->post('sign')),
	    			'decree_file' 			=> $this->upload->file_name,
	    			'decree_date_update' 	=> date('Y-m-d'),
	    			'decree_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 		=> trim($this->session->userdata('username'))
					);
		} else {
			$data = array(    			
	    			'decree_no' 			=> trim($this->input->post('mail_no')),
	    			'decree_title' 			=> strtoupper(trim($this->input->post('title'))),
	    			'decree_date' 			=> $date_mail,
	    			'decree_desc' 			=> trim($this->input->post('desc')),
	    			'decree_sign' 			=> trim($this->input->post('sign')),	    			
	    			'decree_date_update' 	=> date('Y-m-d'),
	    			'decree_time_update' 	=> date('Y-m-d H:i:s'),
	    			'user_username' 		=> trim($this->session->userdata('username'))
					);
		}

		$this->db->where('decree_id', $decree_id);
		$this->db->update('hrd_mail_decree', $data);
	}

	function delete_data($kode) {
		$this->db->where('decree_id', $kode);
		$this->db->delete('hrd_mail_decree');		
	}		
}
/* Location: ./application/model/mail/Decree_model.php */