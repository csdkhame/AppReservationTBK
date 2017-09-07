<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
//echo "sssss";
class Login_control extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('Login_model');
	  }
	
	public function index()
	{
		//$data['resault'] = $this->Place_model->getplace();
		$this->load->view('home/register');
	}
	function process(){
      $data = $this->Login_model->login();
	  //$array = array($age);
	  print_r($data);

	}
	function processsocial(){
      $data = $this->Login_model->loginsocial();
	  //$array = array($age);
	  echo $data;
//echo "FUCKKK";
	}
	function checkmail(){
      $data = $this->Login_model->chackmail();
	  //$array = array($age);
	  print_r($data);

	}
	function signup(){
      $data = $this->Login_model->signup();
	  //$array = array($age);
	  print_r($data);

	}
	
	
	
}
?>
