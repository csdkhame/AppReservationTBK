<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//echo "sssss";
class Getprovince_control extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('Getprovince_model');
	  }
	
	// public function index()
	// {
	// 	//$data['resault'] = $this->Place_model->getplace();
	// 	$this->load->view('book/index');
	// }
	function process(){
      $data = $this->Getprovince_model->getprovince();
	  //$array = array($age);
	  echo json_encode($data);

	}
	
	
	
}
?>
