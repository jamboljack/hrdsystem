<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Punishment_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}

	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_punishment');		
		$this->db->order_by('punishment_name','asc');
		
		return $this->db->get();
	}

	function insert_data() {
		$data = array(    			
    			'punishment_name' => strtoupper(trim($this->input->post('name')))
				);
		
		$this->db->insert('hrd_punishment', $data);
	}

	function select_by_id($punishment_id) {
		$this->db->select('*');
		$this->db->from('hrd_punishment');
		$this->db->where('punishment_id', $punishment_id);
		
		return $this->db->get();
	}

	function update_data() {
		$punishment_id     = $this->input->post('id');
		
		$data = array(
    			'punishment_name' => strtoupper(trim($this->input->post('name')))
				);

		$this->db->where('punishment_id', $punishment_id);
		$this->db->update('hrd_punishment', $data);
	}

	function delete_data($kode) {
		$this->db->where('punishment_id', $kode);
		$this->db->delete('hrd_punishment');		
	}		
}
/* Location: ./application/model/rew-pun/Punishment_model.php */