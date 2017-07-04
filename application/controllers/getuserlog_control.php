<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//echo "sssss";
class Getuserlog_control extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('Getuserlog_model');
	  }
	
	public function index()
	{
		//$data['resault'] = $this->Place_model->getplace();
		$this->load->view('home/register');
	}
	function process(){
      $data = $this->Getuserlog_model->getuserlog();
	  //$array = array($age);
	  echo json_encode($data);

	}
	
	
	
}
?>
