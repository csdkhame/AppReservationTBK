<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class My_place_often extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('Often_model');
//   $this->load->model('My_place_often_model');
  }

public function index(){
	echo "test";
}
  
  
public function save()
	{	
		$id = $_COOKIE['login'];
		if($id==""){
			echo "nologin";
		}else{
			 $data = $this->Often_model->save_often($id);
			 echo json_encode($data);
		}
	}
	
public function update()
	{	
		$id = $_COOKIE['login'];
		if($id==""){
			echo "nologin";
		}else{
			 $data = $this->Often_model->update_often($id);
			 echo json_encode($data);
		}
	}
	
public function place_often(){

      $data = $this->Often_model->get_place_often();
	  //$array = array($age);
	  echo json_encode($data);

	}	


}?>