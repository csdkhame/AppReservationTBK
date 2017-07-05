<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Realtime_control extends CI_Controller {
  public function __construct() {
    parent::__construct();
    //$this->load->model('Test_model');

 
  }

public function index()
	{
		
	
		$this->load->view('realtime_view');
	
	}
public function test()
	{
		
	
		$this->load->view('realtime_view2');
	
	}
	
public function point()
	{
		
	
		$this->load->view('realtime_view3');
	
	}
public function point2()
	{

		$this->load->view('realtime_view4');
	
	}
	
}

?>