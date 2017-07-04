<?php

class Getuserlog_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  
  public function getuserlog() { 
      $this->db->select('*');      
      //$this->db->limit(100);
      $query = $this->db->get('ap_users');
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