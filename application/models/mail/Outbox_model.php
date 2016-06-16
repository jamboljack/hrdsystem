<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Outbox_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_mail_outbox');		
		$this->db->order_by('outbox_id','desc');
		
		return $this->db->get();
	}

	function select_company() {
		$this->db->select('*');
		$this->db->from('hrd_mail_company');		
		$this->db->order_by('company_name','asc');
		
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
		
		$data = array(    			
	    		'company_id'			=> trim($this->input->post('lstCompany')),
	    		'outbox_no' 			=> trim($this->input->post('mail_no')),
	    		'outbox_title' 			=> trim($this->input->post('title')),
	    		'outbox_date' 			=> $date_mail,
	    		'outbox_desc' 			=> trim($this->input->post('desc')),	    		
	    		'outbox_date_update' 	=> date('Y-m-d'),
	    		'outbox_time_update' 	=> date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);
				
		$this->db->insert('hrd_mail_outbox', $data);
	}
	
	function select_by_id($outbox_id) {
		$this->db->select('*');
		$this->db->from('hrd_mail_outbox');		
		$this->db->where('outbox_id', $outbox_id);
		
		return $this->db->get();
	}

	function update_data() {
		$outbox_id   = $this->input->post('id');
		// Date
		$tanggal 	= trim($this->input->post('date_mail'));
		$xtanggal	= explode("-",$tanggal);
		$thn1 		= $xtanggal[2];
		$bln1 		= $xtanggal[1];
		$tgl1 		= $xtanggal[0];
		$date_mail	= $thn1.'-'.$bln1.'-'.$tgl1;

		$data = array(
				'company_id'			=> trim($this->input->post('lstCompany')),   			
    			'outbox_no' 				=> trim($this->input->post('mail_no')),
    			'outbox_title' 			=> trim($this->input->post('title')),
    			'outbox_date' 			=> $date_mail,
    			'outbox_desc' 			=> trim($this->input->post('desc')),    			
    			'outbox_date_update' 	=> date('Y-m-d'),
    			'outbox_time_update' 	=> date('Y-m-d H:i:s'),
    			'user_username' 		=> trim($this->session->userdata('username'))
				);

		$this->db->where('outbox_id', $outbox_id);
		$this->db->update('hrd_mail_outbox', $data);
	}

	function delete_data($kode) {
		$this->db->where('outbox_id', $kode);
		$this->db->delete('hrd_mail_outbox');		
	}		
}
/* Location: ./application/model/mail/Outbox_model.php */