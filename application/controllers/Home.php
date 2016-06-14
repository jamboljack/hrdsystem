<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();		
		$this->load->library('template');		
	}
	
	public function index(){
		$this->template->display('home_view');   		
	}	
}
/* Location: ./application/controller/Home.php */