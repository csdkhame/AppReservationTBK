<?php

class Register_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  
	 public function save_byfacebook(){
 		 $name = $this->input->post('name');
	 		 $email = $this->input->post('email');
//	 		 $data['name'] = $this->input->post('name');
			

			$this->db->select('*');
			$this->db->where('s_email',$email);
			$query = $this->db->from('ap_users')->get();
		    if($query->num_rows() > 0) {
		     	return 0;
		    }else{
		    	$data['s_name'] = $name;
		    	$data['s_email'] = $email;
		    	$data['i_rating'] = 2;
				$result = $this->db->insert('ap_users',$data );
				return $result;
			}
	 	    //$book_insert = $this->db->insert($tbl_book, $data_book);
	 }
	 public function save_member(){
	 		$email = $this->input->post('email');
			$this->db->select('*');
			$this->db->where('s_email',$email);
			$query = $this->db->from('ap_users')->get();
		    if($query->num_rows() > 0) {
		     	return 0;
		    }else{
		    $data['s_name'] = $this->input->post('name');
	 		$data['s_email'] = $this->input->post('email');
	 		$data['s_username'] = $this->input->post('username');
	 		$data['s_password'] = $this->input->post('password');
	 		$data['i_rating'] = 2;
				$result = $this->db->insert('ap_users',$data );
				return $result;
			}
	 	    //$book_insert = $this->db->insert($tbl_book, $data_book);
	 
	 }
 
}

?>