<?php 
header('Access-Control-Allow-Origin: *');

class Login_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  
 function login() {


      // $username = 'ozaclever@gmail.com';
      // $password = '123';
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      
      $this->db->select('*');      
      //$this->db->limit(100);
      $this->db->from('ap_users');
      $this->db->where('s_username', ''.$username.'');
     $query = $this->db->get();

          if ($query->num_rows() > 0 )
          {
            foreach($query->result() as $row)
            {
                  
                  if ($password == $row->s_password) {
                        $rtn = '{"status":"0","username":"'.$row->i_id.'"}';

                        return $rtn;
                  }
                  else{

                        $rtn = '{"status":"2"}';
                        return $rtn;
                            
                  }   
            
            
             } 
     
    }
    else{
      $rtn = '{"status":"1"}';
      return $rtn;
    }
     
  }
  function loginsocial() {


      // $username = 'ozaclever@gmail.com';
      // $password = '123';
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $name = $this->input->post('name');
      
      $this->db->select('*');      
      //$this->db->limit(100);
      $this->db->from('ap_users');
      $this->db->where('s_username', ''.$username.'');
      $query = $this->db->get();

   
          if ($query->num_rows() > 0 )
          {
            
            foreach($query->result() as $row)
            {
                  $id = $row->i_id;
                  if ($password == $row->s_password) {
                        $rtn = '{"status":"0","username":"'.$row->i_id.'"}';

                        return $rtn;
                  }
                  else{
                        if ($row->face_id == '') { //field not null
                              $data['face_id'] = $password; //id facebo0k
                              $this->db->where('i_id',''.$id.'');
                              $this->db->update('ap_users', $data);    
                        }
                        else{
                              if ($row->face_id == $password) { // check id face compare field face_id
                                    $rtn = '{"status":"0","username":"'.$row->i_id.'"}';
                                    return $rtn;
                              }
                        }
                        
                  }   
            
            
             } 
    }
    else{
         $username = $this->input->post('username');
      $password = $this->input->post('password');
      $data['s_username'] = $this->input->post('username');
      $data['face_id'] = $this->input->post('password');
      $data['i_rating'] = '2';
      $this->db->insert('ap_users',$data);      
      //$this->db->limit(100);
      $getid = $this->db->insert_id();
      if ($getid) {
       
                        $rtn = '{"status":"0","username":"'.$getid.'"}';

                        return $rtn;
                  
                         
        }
        else{
            $rtn = '{"status":"1"}';
            return $rtn;
        }
      // $rtn = '{"status":"1"}';
      // return $rtn;
    }
     
  }
  function chackmail() {


      // $username = 'ozaclever@gmail.com';
      // $password = '123';
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      
      $this->db->select('*');      
      //$this->db->limit(100);
      $this->db->from('ap_users');
      $this->db->where('s_username', ''.$username.'');
     $query = $this->db->get();

          if ($query->num_rows() > 0 )
          {
            
                  
                 
                        $rtn = '{"status":"0"}';

                        return $rtn;
                 
                  
     
    }
    else{
      $rtn = '{"status":"1"}';
      return $rtn;
    }
     
  }
   function signup() {


      // $username = 'ozaclever@gmail.com';
      // $password = '123';
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $data['s_username'] = $this->input->post('username');
      $data['s_password'] = $this->input->post('password');
      $data['i_rating'] = '2';
      $this->db->insert('ap_users',$data);      
      //$this->db->limit(100);
      $getid = $this->db->insert_id();
      if ($getid) {
       
                        $rtn = '{"status":"0","username":"'.$getid.'"}';

                        return $rtn;
                  
                         
        }
        else{
            $rtn = '{"status":"1"}';
            return $rtn;
        }
          
    
     
  }


}//end





?>


            	