<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function __construct() {
    	parent::__construct();
    	//$this->load->model('Home_model');
  	}
	
	public function index()
	{
		$to['to'] = $this->input->get('to');
		
		//$this->load->view('header');
		$this->load->view('home/register',$to);
		//$this->load->view('footer');
	}
	 
	
	
	
}