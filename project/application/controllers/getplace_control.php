<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getplace_control extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('Place_model');
	  }
	
	public function index()
	{
		//$data['resault'] = $this->Place_model->getplace();
		$this->load->view('home/index');
	}
	function process(){
      $data = $this->Place_model->getplace();
	  //$array = array($age);
	  echo json_encode($data);

	}
	function process_placeto(){
		$data = $this->Place_model->getplaces();
	  //$array = array($age);
	  echo json_encode($data);
	}
	
	
}
?>

