<?php

class Getprovince_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  
    public function getprovince() {
        $lng =  $user = $this->input->post('lng');
        if($lng == 'en'){
            $getlang = 'name';
        } 
        else if($lng == 'th'){
            $getlang = 'name_th';
        } 
        else if($lng == 'cn'){
            $getlang = 'name_cn';
        }
        else{
            $getlang = 'name';
        }

      $this->db->select('id,name,name_cn,name_th');      
      //$this->db->limit(100);
      $this->db->where('transfer >', '0');
      $this->db->order_by($getlang,"asc");
      $query = $this->db->get('ap_province');
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