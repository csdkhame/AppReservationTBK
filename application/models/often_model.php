<?php

class Often_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

   public function test(){
   	
   }

  
  	public function save_often($id){
	$lat = $this->input->post('lat');
	$lng = $this->input->post('lng');
	$place_id = $this->input->post('place_id');
	$current = date('Y-m-d h:i:s a');
	
	$data['i_id_user'] = $id;
	$data['i_lat'] = $lat;
	$data['i_lng'] = $lng;
	$data['i_place_id'] = $place_id;
	$data['s_type'] = $this->input->post('type_place');
	$data['d_last_update'] = $current;
	 
	$result = $this->db->insert('ap_location_often', $data);
	
	$array['status']= $result;
//	$array['status']= 'true';
	$array['data']=$data;
	
	return $array;

	}
  	public function get_place_often() { 
     
     $id = $this->input->post('id');
     
      $this->db->select('*');      
//      $this->db->select('count(s_type) as count');      
      $this->db->from('ap_location_often');
      $this->db->where('i_id_user',''.$id.'');
      $this->db->where('i_deleted','0');
     /* $this->db->group_by("s_type");*/
      $query = $this->db->get();
    if($query->num_rows() > 0) {
	      foreach($query->result() as $row) {
	        $data[] = $row;
	      }
      return $data;
    }
    else{
    	  return FALSE;
	}
    
  }
}
?>