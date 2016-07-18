<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listemployeedetail extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');
		$this->load->model('home_model');		
		$this->load->model('report/listemployeedetail_model');	
	}
	
	public function index(){
		if($this->session->userdata('logged_in_hrd')) {
			$data['daftarlist']	= $this->listemployeedetail_model->select_all()->result();
			$this->template->display('report/listemployeedetail_view', $data);
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}	
	
	public function preview($emp_id = '') {  
		$emp_id 	= trim($this->uri->segment(4));
		// Detail Karyawan
		$data['detail'] 	= $this->listemployeedetail_model->select_detail_employee($emp_id)->row();
		// School
		$data['schoollist'] = $this->listemployeedetail_model->select_school($emp_id)->result();
		// Work
		$data['worklist'] 	= $this->listemployeedetail_model->select_work($emp_id)->result();
		// Family
		$data['familylist'] = $this->listemployeedetail_model->select_family($emp_id)->result();
		// Reward
		$data['rewardlist'] = $this->listemployeedetail_model->select_reward($emp_id)->result();
		// Punishment
		$data['punishmentlist'] = $this->listemployeedetail_model->select_punishment($emp_id)->result();
		// Record
		$data['recordlist'] = $this->listemployeedetail_model->select_record($emp_id)->result();

		$this->template->display('report/employee/listdetailemployeepreview_view', $data);
	}
	
	public function print_report($emp_id = '') {		
		$emp_id 	= trim($this->uri->segment(4));		
		// Detail Karyawan
		$data['detail'] 	= $this->listemployeedetail_model->select_detail_employee($emp_id)->row();
		// School
		$data['schoollist'] = $this->listemployeedetail_model->select_school($emp_id)->result();
		// Work
		$data['worklist'] 	= $this->listemployeedetail_model->select_work($emp_id)->result();
		// Family
		$data['familylist'] = $this->listemployeedetail_model->select_family($emp_id)->result();
		// Reward
		$data['rewardlist'] = $this->listemployeedetail_model->select_reward($emp_id)->result();
		// Punishment
		$data['punishmentlist'] = $this->listemployeedetail_model->select_punishment($emp_id)->result();
		// Record
		$data['recordlist'] = $this->listemployeedetail_model->select_record($emp_id)->result();

		$this->load->view('report/employee/listdetailemployeepreview_report', $data);
	}

	public function print_report_pdf($emp_id = '') {
		$emp_id 	= trim($this->uri->segment(4));
		
		$time = time();
		$filename = 'Report_Employee_Detail_PDF_'.$lstDept.'_'.$time;
		$pdfFilePath = FCPATH."download/$filename.pdf";
			
		if (file_exists($pdfFilePath) == FALSE){
			ini_set('memory_limit','50M');
						
			// Detail Karyawan
			$data['detail'] 	= $this->listemployeedetail_model->select_detail_employee($emp_id)->row();
			// School
			$data['schoollist'] = $this->listemployeedetail_model->select_school($emp_id)->result();
			// Work
			$data['worklist'] 	= $this->listemployeedetail_model->select_work($emp_id)->result();
			// Family
			$data['familylist'] = $this->listemployeedetail_model->select_family($emp_id)->result();
			// Reward
			$data['rewardlist'] = $this->listemployeedetail_model->select_reward($emp_id)->result();
			// Punishment
			$data['punishmentlist'] = $this->listemployeedetail_model->select_punishment($emp_id)->result();
			// Record
			$data['recordlist'] = $this->listemployeedetail_model->select_record($emp_id)->result();
			$html = $this->load->view('report/employee/listdetailemployeepreview_report_pdf', $data, true);

			$this->load->library('pdf');
			$param = '"en-GB-x","A4-L","","",10,10,10,10,6,3';			
			$pdf = $this->pdf->load($param);
			$pdf->SetHeader(''); 
			$pdf->SetFooter('');
			$pdf->WriteHTML($html); // write the HTML into the PDF
			$pdf->Output($pdfFilePath, 'F'); // save to file because we can
		}
		redirect("download/$filename.pdf");			
	}	
}
/* Location: ./application/controllers/report/Listemployeedetail.php */