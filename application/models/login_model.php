<?php 
header('Access-Control-Allow-Origin: *');

class Login_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  
 function login() {

	 $type_login = $this->input->post('type');
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
		 $type_login = $this->input->post('type');
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
                  	
                  	if($type_login=='facebook'){
                  		
						 
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
					
					else if($type_login=='google'){
						
                              if ($row->google_id == '') { //field not null
                                    $data['google_id'] = $password; //id facebo0k
                                    $this->db->where('i_id',''.$id.'');
                                    $this->db->update('ap_users', $data);    
                              }
                              else{
                                    
                                    if ($row->google_id == $password) { // check id face compare field face_id
                                    
                                          $rtn = '{"status":"0","username":"'.$row->i_id.'"}';
                                          return $rtn;
                                    }else{
                                                     
                                                }
                              }
				}
					
					else{
						 return $row->google_id." : ".$this->input->post('password');
                                                      exit();
					}
					
					
                  }   
            
            
             } 
    }
    	  else{
           
      $num0 = (rand(10,100));
      $num1 = date("Ymd");
      //$num2 = (rand(100,1000));
      //$num3 = time();
      $randnum = $num0 . $num1 . $num2 . $num3;
    	$current = date('Y-m-d h:i:s a');
         $username = $this->input->post('username');
      $password = $this->input->post('password');
      $url = $this->input->post('img');
      $data['s_username'] = $username;
      $data['s_email'] = $this->input->post('username');
      $data['s_name'] = $this->input->post('name');
      $data['d_last_update'] = $current;
      $data['s_code'] = $randnum;
     
      if($type_login=='facebook'){
	  	$data['face_id'] = $password;
	  }
	  else if($type_login=='google'){
	  	$data['google_id'] = $password;
	  	
//	  	$url = 'https://lh5.googleusercontent.com/-vyLicLrfmMQ/AAAAAAAAAAI/AAAAAAAAAAA/APJypA3dKAKUJl-fM17w7kJV0opAY5WM8A/s96-c/photo.jpg';
		$img = 'pic/'.$password.'.jpg';
		file_put_contents($img, file_get_contents($url));
		$data['s_image'] = $password.'.jpg';
	  }
      $data['i_rating'] = '2';
      $this->db->insert('ap_users',$data);      
      //$this->db->limit(100);
    $getid = $this->db->insert_id();
      if ($getid) {
       
                        $rtn = '{"status":"0","username":"'.$getid.'","password":"'.$password.'","type":"'.$type_login.'"}';

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
      
      $this->db->select('*');      
      //$this->db->limit(100);
      $this->db->from('ap_users');
      $this->db->where('s_username', ''.$username.'');
     $query = $this->db->get();

          if ($query->num_rows() > 0 )
          {
            
                  
                 
                        $rtn = '{"status":"1"}';

                        return $rtn;
                 
                  
     
    }
    else{
      $num0 = (rand(10,100));
      $num1 = date("Ymd");
      //$num2 = (rand(100,1000));
      //$num3 = time();
      $randnum = $num0 . $num1 . $num2 . $num3;
      //echo $randnum;
      
      $data['s_username'] = $this->input->post('username');
      $data['s_password'] = $this->input->post('password');
      $data['i_rating'] = '2';      
      $data['s_code'] = $randnum;      
      //$this->db->limit(100);
      $this->db->insert('ap_users',$data);
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


      // $username = 'ozaclever@gmail.com';
      // $password = '123';
      // $username = $this->input->post('username');
      // $password = $this->input->post('password');
      
      // $num0 = (rand(10,100));
      // $num1 = date("Ymd");
      // //$num2 = (rand(100,1000));
      // //$num3 = time();
      // $randnum = $num0 . $num1 . $num2 . $num3;
      // //echo $randnum;
      
      // $data['s_username'] = $this->input->post('username');
      // $data['s_password'] = $this->input->post('password');
      // $data['i_rating'] = '2';      
      // $data['s_code'] = $randnum;      
      // //$this->db->limit(100);
      // $this->db->insert('ap_users',$data);
      // $getid = $this->db->insert_id();
      // if ($getid) {
       
      //                   $rtn = '{"status":"0","username":"'.$getid.'"}';

      //                   return $rtn;
                  
                         
      //   }
      //   else{
      //       $rtn = '{"status":"1"}';
      //       return $rtn;
      //   }
          
    
     
  }


}//end





?>


            	