<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class DBOps extends CI_Model {
	
	 public function __construct()
    {
        parent::__construct();
    }
    
	public function hello(){
		//$query = $this->db->get('user_details');
		$user_name = $this->input->post('email');
		$password = $this->input->post('password');
		$this->db->select("user_name,password");
		$this->db->where("user_name",$user_name);
		$this->db->where("password",$password);
		$this->db->from('user_details');
		$query = $this->db->get();
		if(count($query->result())==1){
			foreach ($query->result() as $row)
			{
				$userData=array("username"=>$row->user_name,"password"=>$row->password);
				$this->session->set_userdata($userData);
			 	return 1;
			}
		}
		return 0;
		
		
	}

}

?>
