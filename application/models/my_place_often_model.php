<?php
// header('Access-Control-Allow-Origin: *');
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_place_often_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }


  	public function save($id){
	$lat = $this->input->post('lat');
	$lag = $this->input->post('lng');
	$place_id = $this->input->post('place_id');
	$current = date('Y-m-d h:i:s a');
	
	$data['i_id_user'] = $id;
	$data['i_lat'] = $lat;
	$data['i_lng'] = $lng;
	$data['i_place_id'] = $place_id;
	$data['s_type'] = $this->input->post('type_place');
	$data['d_last_update'] = $current;
	 
	$result = $this->db->insert('ap_location_often', $data);
	
	return $result;

	}
	
  
}
?>