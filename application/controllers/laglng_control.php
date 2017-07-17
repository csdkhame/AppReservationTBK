<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//echo "sssss";
class Laglng_control extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('Getlaglng_model');
	  }
	
	function getlaglng(){
	 	 $data = $this->Getlaglng_model->laglng();
	  //$array = array($age);
	  echo json_encode($data);
// 		$this->load->view('header');
// 		$this->load->view('home/index');
// //		$this->load->view('realtime_view');
// 		$this->load->view('footer');
	}
	
	
	
}
?>
