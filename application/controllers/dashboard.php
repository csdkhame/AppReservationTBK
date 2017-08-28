<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
  public function __construct() {
    parent::__construct();
    //$this->load->model('Test_model');
   $this->load->model('Userview_model_dash');
	$this->load->model('Getuser_model');
 
  }


public function index()
	{
		/*$this->load->view('header_dash');
		$this->load->view('index_dash');
		$this->load->view('footer_dash');*/
		
		$this->load->view('header');
		$this->load->view('index_dash');
		$this->load->view('footer');
	}
	
public function view_user()
	{	

		 $num_record =  $this->input->get('num',TRUE);
		 $start =  $this->input->get('start',TRUE);
		if($num_record=="" and $start==""){
			$num = 5;
			header('Location: view_user?num='.$num.'&start=0&page=1');
		}
	
		if($_COOKIE['login']) {
			$id = $_COOKIE['login'];
			$user_level = $this->Getuser_model->getuser_pass_id($id);
//			echo json_encode($user_level);
			$this->session->set_userdata(array('i_id' => $user_level[0]->i_id,'i_rating'=> $user_level[0]->i_rating,'s_code'=>$user_level[0]->s_code,'s_code_ref'=>$user_level[0]->s_code_ref)); 
//			$user_level = $this->session->userdata('i_rating');  
			$user_level = $user_level[0]->i_rating; 
			if($user_level==1){
				$data = $this->Userview_model_dash->query_user($num_record,$start);
			}else if($user_level==2){
				$data = $this->Userview_model_dash->customerRef_list_cus($num_record,$start);
				
			}
//			echo json_encode($data);
    		$this->load->view('header_dash2');
			$this->load->view('userview_dash',$data);
			$this->load->view('footer_dash2');
//						echo $num_record." ".$start;
		}
		else{
			
			redirect('https://dotdotdottrip.com/Register', 'refresh');
//			header("Location: http://www.yourwebsite.com/user.php");
//		echo 55555555;

		}

	}
public function query_transfer()
	{
		//echo  $this->input->post('head_id');
		$id_head = $this->input->post('head_id');
  		$code = $this->input->post('code');
  		if($code!=""){
		$data = $this->Userview_model_dash->customerRef_list($id_head,$code);
		echo json_encode($data);
		}
		
	}
public function get_user(){
			$id = $_COOKIE['login'];
			$user_level = $this->Getuser_model->getuser_pass_id($id);
			echo json_encode($user_level);
}

public function update_profile(){
	
		$id = $_COOKIE['login'];
		$data = $this->Getuser_model->getuser_pass_id($id);
		
	$target_dir = "pic/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	

	    if (copy($_FILES["file"]["tmp_name"], $target_file)) {
	    	$file_name = $_FILES["file"]["name"];
//	        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
	    } else {
//	        echo "Sorry, there was an error uploading your file.";
			$file_name = $this->input->post('txt_avatar');
	    }	
			$result = $this->Userview_model_dash->update_profile($data,$file_name);
			echo $result;
	
}
	/********** ************/
public function update_password(){
	$new_pass = $this->input->post('new_pass');
	$old_pass = $this->input->post('old_pass');
	
	$id = $_COOKIE['login'];
	$data = $this->Getuser_model->getuser_pass_id($id);
	if($old_pass == $data[0]->s_password){
		$result = $this->Userview_model_dash->update_pass($data,$new_pass);
	}else{
		$result = 2; //old password invalid
	}
	
	echo $result;
	
	
//	echo $new_pass." : ".$data[0]->s_password;
	
}	
	
public function account_settings(){
		
		$this->load->view('header_dash2');
		$this->load->view('setting_acc_dash');
		$this->load->view('footer_dash2');
		
}

public function payment(){
		
		$this->load->view('header_dash2');
		/*$this->load->view('setting_acc_dash');*/
		echo "<h2 style='    margin: 79px;'>Coming Soon</h2>";
		$this->load->view('footer_dash2');
		
}	

public function query_transfer_byuser(){
	
  		$id = $this->input->get('order_id');
  		$lng = $this->input->get('lng');
  		/*$cookie = array(
        'name'   => 'lng',
        'value'  => ''.$lng.'',
        'expire' => time()+86500,
        'domain' => '.localhost',
        'path'   => '/',
        'prefix' => 'arjun_',
        );*/
 
  		if($lng!=""){
			$data['lng'] = $lng;
		}
  		$check = $this->input->post('check');
			
		$data['results'] = $this->Userview_model_dash->order_detail($id);
			
			if($check != ""){
				$data['check'] = $check;
			}else{
				$data['check'] = "";
			}

		$this->load->view('voucher',$data);

	
	
}


	
	}
?>