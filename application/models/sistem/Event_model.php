<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_event');		
		$this->db->order_by('event_id','desc');
		
		return $this->db->get();
	}
	
	function insert_data() {
		// Start Date
		$tanggal1 	= trim($this->input->post('start_date'));
		$xtanggal1	= explode("-",$tanggal1);
		$thn1 		= $xtanggal1[2];
		$bln1 		= $xtanggal1[1];
		$tgl1 		= $xtanggal1[0];
		$start_date = $thn1.'-'.$bln1.'-'.$tgl1;

		// End Date
		$tanggal2 	= trim($this->input->post('end_date'));
		$xtanggal2	= explode("-",$tanggal2);
		$thn2 		= $xtanggal2[2];
		$bln2 		= $xtanggal2[1];
		$tgl2 		= $xtanggal2[0];
		$end_date   = $thn2.'-'.$bln2.'-'.$tgl2;

		$data = array(    			
	    		'event_name' 		=> ucwords(strtolower(trim($this->input->post('name')))),
	    		'event_start_date' 	=> $start_date,
	    		'event_start_time' 	=> trim($this->input->post('start_time')),
	    		'event_end_date' 	=> $end_date,
	    		'event_end_time' 	=> trim($this->input->post('end_time')),
	    		'event_color' 		=> trim($this->input->post('lstColor')),
	    		'event_date_update' => date('Y-m-d'),
	    		'event_time_update' => date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);		
		
		$this->db->insert('hrd_event', $data);
	}
	
	function select_by_id($event_id) {
		$this->db->select('*');
		$this->db->from('hrd_event');		
		$this->db->where('event_id', $event_id);
		
		return $this->db->get();
	}

	function update_data() {
		$event_id  = $this->input->post('id');		

		// Start Date
		$tanggal1 	= trim($this->input->post('start_date'));
		$xtanggal1	= explode("-",$tanggal1);
		$thn1 		= $xtanggal1[2];
		$bln1 		= $xtanggal1[1];
		$tgl1 		= $xtanggal1[0];
		$start_date = $thn1.'-'.$bln1.'-'.$tgl1;

		// End Date
		$tanggal2 	= trim($this->input->post('end_date'));
		$xtanggal2	= explode("-",$tanggal2);
		$thn2 		= $xtanggal2[2];
		$bln2 		= $xtanggal2[1];
		$tgl2 		= $xtanggal2[0];
		$end_date   = $thn2.'-'.$bln2.'-'.$tgl2;

		$data = array(    			
	    		'event_name' 		=> ucwords(strtolower(trim($this->input->post('name')))),
	    		'event_start_date' 	=> $start_date,
	    		'event_start_time' 	=> trim($this->input->post('start_time')),
	    		'event_end_date' 	=> $end_date,
	    		'event_end_time' 	=> trim($this->input->post('end_time')),
	    		'event_color' 		=> trim($this->input->post('lstColor')),
	    		'event_date_update' => date('Y-m-d'),
	    		'event_time_update' => date('Y-m-d H:i:s'),
	    		'user_username' 		=> trim($this->session->userdata('username'))
				);

		$this->db->where('event_id', $event_id);
		$this->db->update('hrd_event', $data);
	}

	function delete_data($kode) {
		$this->db->where('event_id', $kode);
		$this->db->delete('hrd_event');	
	}		
}
/* Location: ./application/model/Event_model.php */