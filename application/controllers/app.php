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
			if($this->session->userdata('username')!="" || $this->session->userdata('password')!=null )
			{
				redirect(base_url()."app/dashboard","refresh");
			}
			else{
				redirect(base_url()."app/login","refresh");
			}
		
	}

	public function dashboard(){
		if($this->session->userdata('username')!="" || $this->session->userdata('password')!=null ){
			$data["template"]="dashboard";
			$this->load->view("index",$data);		
		}
	}

	public function login(){
		$data["message"]="";
		$this->load->view("login",$data);
	}

	public function doLogin(){
		$this->load->model("DBOps");
        if($this->DBOps->hello()==1){
        	$this->dashboard();
        }
        else{
        	$data["message"]='<div class="alert alert-danger"alert-dismissible" role="alert" aria-label="Close"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Warning!</strong> Invalid Username or Password</div>';
	       	$this->load->view("login",$data);	
        }
	}

	
	public function logout(){
		$this->session->unset_userdata("username");
		$this->session->unset_userdata("password");
		$this->load->view("logout");
	}
			



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */