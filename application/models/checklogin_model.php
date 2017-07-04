<?php

class Checklogin_model extends CI_Model {

  public function __construct() {
    parent::__construct();

  }

  
  public function check() { 
     		    
      	$name = $this->input->post('username');
      	$pass = $this->input->post('password');
	
		$this->db->select('count(i_id) as num,i_id,s_username,i_rating,s_code');
		
		$this->db->where('s_username',$name);
		$this->db->where('s_password',$pass);
		$this->db->group_by("i_id"); 
		$query = $this->db->from('ap_users')->get();
			if($query->num_rows > 0) {
				return $query->row();
			}else{
				return 0;
			}
		
//		  return $pass;
  }


 

  
  

}

?>