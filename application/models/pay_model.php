<?php

class Pay_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  
  

  public function pays() { 
    //return $data;
    $pro = $this->input->post('invoice');
      $this->db->select('*');      
      $this->db->where('invoice',$pro);
      $query = $this->db->get('ap_order');
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