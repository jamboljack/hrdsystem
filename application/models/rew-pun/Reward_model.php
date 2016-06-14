<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reward_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}

	function select_all() {
		$this->db->select('*');
		$this->db->from('hrd_reward');		
		$this->db->order_by('reward_name','asc');
		
		return $this->db->get();
	}

	function insert_data() {
		$data = array(    			
    			'reward_name' => strtoupper(trim($this->input->post('name')))
				);
		
		$this->db->insert('hrd_reward', $data);
	}

	function select_by_id($reward_id) {
		$this->db->select('*');
		$this->db->from('hrd_reward');
		$this->db->where('reward_id', $reward_id);
		
		return $this->db->get();
	}

	function update_data() {
		$reward_id     = $this->input->post('id');
		
		$data = array(
    			'reward_name' => strtoupper(trim($this->input->post('name')))
				);

		$this->db->where('reward_id', $reward_id);
		$this->db->update('hrd_reward', $data);
	}

	function delete_data($kode) {
		$this->db->where('reward_id', $kode);
		$this->db->delete('hrd_reward');		
	}		
}
/* Location: ./application/model/rew-pun/Reward_model.php */