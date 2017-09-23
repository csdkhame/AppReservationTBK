<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
    	parent::__construct();
    	//$this->load->model('Home_model');
  	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function index()
	{
		$to['by'] = $this->input->get('by');
		$to['data'] = $this->input->get('data');
		$to['from'] = $this->input->get('from');
		$to['to'] = $this->input->get('to');
		
		//$this->load->view('header');
		$this->load->view('home/register',$to);
		//$this->load->view('footer');
	}
	 
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */