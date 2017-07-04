<?php

class Place_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  
  public function getplace() { 
      $this->db->select('id,aum,pro,topic');      
      //$this->db->limit(100);
      $query = $this->db->get('web_transferplace_new');
    if($query->num_rows() > 0) {
      foreach($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return FALSE;
  }

  public function getplaces() { 
    //return $data;
      $this->db->select('id,aum,pro,topic');      
      $this->db->where('pro',$_POST[pro_from]);
      $query = $this->db->get('web_transferplace_new');
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