<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller { 
	function __construct(){ 
		parent::__construct();
		$this->load->library('template');
	} 
		
	public function index() { 
		$this->output->set_status_header('404');		
		$this->template->display('404_view');
	} 
} 
/* Location: ./application/controllers/Error.php */
?>