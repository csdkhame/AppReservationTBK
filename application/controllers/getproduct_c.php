<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//echo "sssss";
class getproduct_c extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('Getproduct_m');
	  }
	
	function getproduct(){
	 	 $data = $this->Getproduct_m->product();
	  //$array = array($age);
	  echo json_encode($data);
// 		$this->load->view('header');
// 		$this->load->view('home/index');
// //		$this->load->view('realtime_view');
// 		$this->load->view('footer');
	}
	
	
	
}
?>
