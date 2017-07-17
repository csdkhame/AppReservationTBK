<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//echo "sssss";
class Getuser_control extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('Getuser_model');
	  }
	
	function index()
	{
		//$data['resault'] = $this->Place_model->getplace();
		//$this->load->view('home/index');
	}
	function mains()
	{
		//$data['resault'] = $this->Place_model->getplace();
		//$this->load->view('home/index');
	}
	function process(){
		//$this->index();
      $data = $this->Getuser_model->getuser();
	  //$array = array($age);
	  echo json_encode($data);

	}
	function mainpage(){
		//$this->mains();
		
      $data = $this->Getuser_model->getuser();
	  //$array = array($age);
	  echo json_encode($data);

	}	
	function place_often(){

      $data = $this->Getuser_model->get_place_often();
	  //$array = array($age);
	  echo json_encode($data);

	}
	function getlaglng(){
	 	 $data = $this->Getuser_model->getlaglng();
	  //$array = array($age);
	  echo json_encode($data);
// 		$this->load->view('header');
// 		$this->load->view('home/index');
// //		$this->load->view('realtime_view');
// 		$this->load->view('footer');
	}
	
	
	
}
?>
