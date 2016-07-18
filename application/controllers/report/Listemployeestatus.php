<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listemployeestatus extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in_hrd')) redirect(base_url());
		$this->load->library('template');
		$this->load->model('home_model');		
		$this->load->model('report/listemployeestatus_model');	
	}
	
	public function index(){
		if($this->session->userdata('logged_in_hrd')) {
			$data['daftardepartment']	= $this->listemployeestatus_model->select_department()->result();
			$data['daftarstatus']		= $this->listemployeestatus_model->select_status()->result();
			$this->template->display('report/listemployeestatus_view', $data);
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		} 
	}	
	
	public function preview($lstDept = '', $lstStatus = '') {  
		$lstDept  	= trim($this->input->post('lstDept'));
		$lstStatus 	= trim($this->input->post('lstStatus'));		

		if ($lstDept == 'all' && $lstStatus == 'all') { // Jika All Data
			$data = array(
				'Dept' 		=> trim($this->input->post('lstDept')),
				'Status' 	=> trim($this->input->post('lstStatus'))			
			);
			$data['Report'] 		  = $data;
			$data['daftardepartment'] = $this->listemployeestatus_model->select_department()->result();
			$this->template->display('report/employee/listemployeestatus_all_view', $data);
		} elseif ($lstDept == 'all' && $lstStatus <> 'all')	{ // Jika All Dept. dan By Status
			$data = array(
				'Dept' 		=> trim($this->input->post('lstDept')),
				'Status' 	=> trim($this->input->post('lstStatus'))			
			);
			$data['daftardepartment'] = $this->listemployeestatus_model->select_department()->result();
			$data['Report'] 		  = $data;
			$this->template->display('report/employee/listemployeestatus_1_view', $data);
		} elseif ($lstDept <> 'all' && $lstStatus == 'all') { // Jika Dept. By dan Status All
			$department_id 	= trim($this->input->post('lstDept'));
			$data = array(
				'Dept' 		=> trim($this->input->post('lstDept')),
				'Status' 	=> trim($this->input->post('lstStatus'))			
			);
			$data['detail'] 	= $this->listemployeestatus_model->select_dept_by_id($department_id)->row();
			$data['daftarlist'] = $this->listemployeestatus_model->select_all_employee($department_id)->result();
			$data['Report'] 	= $data;
			$this->template->display('report/employee/listemployeestatus_2_view', $data);	
		} elseif ($lstDept <> 'all' && $lstStatus <> 'all') { // Jika Dept. By dan Status By.
			$department_id = trim($this->input->post('lstDept'));			
			$data = array(
				'Dept' 		=> trim($this->input->post('lstDept')),
				'Status' 	=> trim($this->input->post('lstStatus'))			
			);
			$data['detail'] 	= $this->listemployeestatus_model->select_dept_by_id($department_id)->row();
			$data['daftarlist'] = $this->listemployeestatus_model->select_all_employee($department_id)->result();
			$data['Report'] 	= $data;
			$this->template->display('report/employee/listemployeestatus_3_view', $data);	
		}	
	}
	
	public function print_report($lstDept = '', $lstStatus = '') {		
		$lstDept 	= trim($this->uri->segment(4));
		$lstStatus	= trim($this->uri->segment(5));		
		
		if ($lstDept == 'all' && $lstStatus == 'all') { // All Data
			$data['daftardepartment'] = $this->listemployeestatus_model->select_department()->result();
			$this->load->view('report/employee/listemployeestatus_all_report', $data);
		} elseif ($lstDept == 'all' && $lstStatus <> 'all') { // All Dept. By Status
			$data['daftardepartment'] = $this->listemployeestatus_model->select_department()->result();
			$this->load->view('report/employee/listemployeestatus_1_report', $data);
		} elseif ($lstDept <> 'all' && $lstStatus == 'all') { // By Dept. All Status
			$department_id 		= trim($this->uri->segment(4));
			$data['detail'] 	= $this->listemployeestatus_model->select_dept_by_id($department_id)->row();
			$data['daftarlist'] = $this->listemployeestatus_model->select_all_employee_dept($department_id)->result();
			$this->load->view('report/employee/listemployeestatus_2_report', $data);
		} elseif ($lstDept <> 'all' && $lstStatus <> 'all') { // By Dept. By Status			
			$department_id 	= trim($this->uri->segment(4));
			$data['detail'] = $this->listemployeestatus_model->select_dept_by_id($department_id)->row();
			$data['daftarlist'] = $this->listemployeestatus_model->select_all_employee_dept_status($department_id)->result();		
			$this->load->view('report/employee/listemployeestatus_3_report', $data);	
		}
	}

	public function print_report_pdf($lstDept = '', $lstStatus = '') {
		$lstDept 	= trim($this->uri->segment(4));
		$lstStatus	= trim($this->uri->segment(5));	

		$time = time();
		$filename = 'Report_Employee_Status_PDF_'.$lstDept.'_'.$time;
		$pdfFilePath = FCPATH."download/$filename.pdf";
			
		if (file_exists($pdfFilePath) == FALSE){
			ini_set('memory_limit','50M');

			if ($lstDept == 'all' && $lstStatus == 'all') { // All Data
			    $data['daftardepartment'] = $this->listemployeestatus_model->select_department()->result();
			    $html = $this->load->view('report/employee/listemployeestatus_all_report_pdf', $data, true);
			} elseif ($lstDept == 'all' && $lstStatus <> 'all') { // All Dept. By Status
				$data['daftardepartment'] = $this->listemployeestatus_model->select_department()->result();
			    $html = $this->load->view('report/employee/listemployeestatus_1_report_pdf', $data, true);
			} elseif ($lstDept <> 'all' && $lstStatus == 'all') { // By Dept. All Status
				$department_id 		= trim($this->uri->segment(4));
				$data['detail'] 	= $this->listemployeestatus_model->select_dept_by_id($department_id)->row();
				$data['daftarlist'] = $this->listemployeestatus_model->select_all_employee_dept($department_id)->result();
				$html = $this->load->view('report/employee/listemployeestatus_2_report_pdf', $data, true);
			} elseif ($lstDept <> 'all' && $lstStatus <> 'all') { // By Dept. By Status
				$department_id 	= trim($this->uri->segment(4));
				$data['detail'] = $this->listemployeestatus_model->select_dept_by_id($department_id)->row();
				$data['daftarlist'] = $this->listemployeestatus_model->select_all_employee_dept_status($department_id)->result();
				$html = $this->load->view('report/employee/listemployeestatus_3_report_pdf', $data, true);
			}

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
/* Location: ./application/controllers/report/Listemployeestatus.php */