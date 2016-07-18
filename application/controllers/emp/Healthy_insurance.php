<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Healthy_insurance extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');
		$this->load->model('home_model');
		$this->load->model('emp/healthy_insurance_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_hrd')) 
		{
			// Menampilkan Karyawan yang punya BPJS Kesehatan
			$data['daftarlist'] = $this->healthy_insurance_model->select_all()->result();
			$this->template->display('emp/healthy_insurance_view', $data);			
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}

	public function detaildata($emp_id) {		
		$data['detail'] = $this->healthy_insurance_model->select_by_id($emp_id)->row();
		$this->template->display('emp/healthy_insurance_detail_view', $data);
	}
}
/* Location: ./application/controller/emp/Healthy_insurance.php */