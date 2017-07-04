<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_user extends CI_Controller {
  public function __construct() {
    parent::__construct();
    //$this->load->model('Test_model');
   $this->load->model('Checklogin_model');

 
  }


public function index()
	{
		//$data['results'] = $this->Userview_model_dash->join_order_db();
		$this->load->view('login');
	}
	
	
public function check_user()
	{	
		$data = $this->Checklogin_model->check();
		if($data){
			$this->session->set_userdata(array('i_id' => $data->i_id,'s_username' => $data->s_username,'i_rating'=> $data->i_rating,'s_code'=>$data->s_code)); 
			echo $data->num;
		}else{
			echo 0;
		}
		
		//echo $data;
	}
	
	
public function logout()
	{
		$this->session->unset_userdata(array('i_id','s_username','i_rating','s_code'));
		$this->session->sess_destroy();
        $this->clear_cache();
		redirect('/login_user/index', 'refresh');
	}
	
	
public function check_session()
	{
		$id = $this->session->userdata('i_id');
		echo $id;
		
	}

	function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }


  //////////////////////////// End
}
?>