<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_user extends CI_Controller {
  public function __construct() {
    parent::__construct();
    //$this->load->model('Test_model');
   $this->load->model('checklogin_modal');

 
  }


public function index()
	{
		$data['results'] = $this->Userview_model_dash->join_order_db();
	}
	

  //////////////////////////// End
}
?>