<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//echo "sssss";
class Savebook_control extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('Savebook_model');
	  }
	
	public function index()
	{
		//$data['resault'] = $this->Place_model->getplace();
		$this->load->view('book/index');
	}
	function process(){
      $data = $this->Savebook_model->savebook();
	  //$array = array($age);
	  echo json_encode($data);

	}
	
	
	
}
?>
