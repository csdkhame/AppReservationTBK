<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class My_place_often extends CI_Controller {
  public function __construct() {
    parent::__construct();
    //$this->load->model('Test_model');
   $this->load->model('Place_often_model');
  }
public function save()
	{	
		$id = $_COOKIE['login'];
		if($id==""){
			$id = 2;
		}
		 $data = $this->Place_often_model->save($id);
		 echo $data;
	}
}?>