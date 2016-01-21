<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class App extends CI_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * http://example.com/index.php/welcome
	 * - or -
	 * http://example.com/index.php/welcome/index
	 * - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 *
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		if ($this->isLoggedIn ()) {
			redirect ( base_url () . "app/dashboard", "refresh" );
		} else {
			redirect ( base_url () . "app/login", "refresh" );
		}
	}
	public function dashboard() {
		if ($this->isLoggedIn ()) {
			$data ["template"] = "dashboard";
			$data ["content"] = "";
			$this->load->view ( "index", $data );
		} else {
			$this->login ();
		}
	}
	/**
	 * *************************Login***************************
	 */
	public function login() {
		$data ["message"] = "";
		$this->load->view ( "login", $data );
	}
	public function doLogin() {
		if ($this->isLoggedIn ()) {
			$this->dashboard ();
		} else {
			$this->load->model ( "DBOps" );
			if ($this->DBOps->validateCredential () != 0) {
				$userdata = $this->DBOps->validateCredential ();
				$this->session->set_userdata ( $userdata );
				$this->dashboard ();
			} else {
				$data ["message"] = '<div class="alert alert-danger"alert-dismissible" role="alert" aria-label="Close"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Warning!</strong> Invalid Username or Password</div>';
				$this->load->view ( "login", $data );
			}
		}
	}
	public function logout() {
		$this->session->sess_destroy ();
		$this->load->view ( "logout" );
	}
	
	/**
	 * *************************End Login***************************
	 */
	
	/**
	 * *************************Sales***************************
	 */
	public function addClient() {
		if ($this->isLoggedIn ()) {
			$data ["template"] = "addClient";
			$data ["content"] = "";
			$this->load->view ( "index", $data );
		} else {
			$this->login ();
		}
	}
	public function saveClient() {
		if ($this->isLoggedIn ()) {
			$this->load->model ( "DBOps" );
			$this->DBOps->insertClient ();
			$this->viewClients();
		}
	}
	public function viewClients() {
		if ($this->isLoggedIn ()) {
			$this->load->model ( "DBOps" );
			$data ["template"] = "viewClients";
			$data ["content"] = $this->DBOps->getClients ();
			$this->load->view ( "index", $data );
		}
	}
	
	/**
	 * *************************End Sales***************************
	 */
	
	/**
	 * *************************Purchase***************************
	 */
	public function addSupplier() {
		if ($this->isLoggedIn ()) {
			$data ["template"] = "addSupplier";
			$data ["content"] = "";
			$this->load->view ( "index", $data );
		} else {
			$this->login ();
		}
	}
	public function saveSupplier() {
		if ($this->isLoggedIn ()) {
			$this->load->model ( "DBOps" );
			$this->DBOps->insertClient ();
			$this->viewSuppliers();
		}
	}
	public function viewSuppliers() {
		if ($this->isLoggedIn ()) {
			$this->load->model ( "DBOps" );
			$data ["template"] = "viewSuppliers";
			$data ["content"] = $this->DBOps->getSuppliers ();
			$this->load->view ( "index", $data );
		}
	}
	
	/**
	 * *************************End Sales***************************
	 */
	
	/**
	 * *************************Common Functions***************************
	 */
	public function isLoggedIn() {
		if ($this->session->userdata ( 'username' ) != "" && $this->session->userdata ( 'password' ) != "") {
			return true;
		}
		return false;
	}
/**
 * *************************End Common Functions***************************
 */
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */