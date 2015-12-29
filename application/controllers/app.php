<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {

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
			if($this->session->userdata('username')!="" || $this->session->userdata('username')!=null )
			{
				redirect(base_url()."app/dashboard","refresh");
			}
			else{
				$userData=array("username"=>"Prashant","password"=>"abcd");
				$this->session->set_userdata($userData);
				redirect(base_url()."app/login","refresh");
			}
		
	}

	public function dashboard(){
		$this->load->view("index");		
	}

	public function login(){
		$this->load->view("login");
	}

	public function doLogin(){
		$this->load->view("index");		
	}

	
	public function logout(){
		$this->session->unset_userdata("username");
		$this->session->unset_userdata("password");
		$this->load->view("logout");
	}
			



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */