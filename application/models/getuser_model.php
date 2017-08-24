<?php

class Getuser_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  
  public function getuser() { 
     
      $id = $this->input->post('id');
     
      
      $this->db->select('*');      
      //$this->db->limit(100);
      $this->db->from('ap_users');
      $this->db->where('i_id',''.$id.'');
      $query = $this->db->get();
    if($query->num_rows() > 0) {
      foreach($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return FALSE;
  }

  public function getuser_pass_id($id) { 
     
      $this->db->select('*');      
      $this->db->from('ap_users');
      $this->db->where('i_id',''.$id.'');
      $query = $this->db->get();
    if($query->num_rows() > 0) {
      foreach($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return FALSE;
  }
  
  public function changepass(){

    $user = $this->input->post('user');
    $pass = $this->input->post('pass');
    $data['s_password'] = $pass;
    
    $this->db->where('s_email', $user);      
    $this->db->update('ap_users', $data);
  
    if ($this->db->affected_rows() > 0) {
      return true;
    }
    else{
      return FALSE;
    }
  //
}
  


}

?>