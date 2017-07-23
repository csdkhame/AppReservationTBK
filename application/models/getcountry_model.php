<?php

class Getcountry_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  
  public function getcountry() { 
      $this->db->select('*');      
      //$this->db->limit(100);
       $this->db->where('phonecode !=', '');
      $query = $this->db->get('ap_country');
    if($query->num_rows() > 0) {
      foreach($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return FALSE;
  }


}

?>