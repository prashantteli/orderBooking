<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class DBOps extends CI_Model {
	public function __construct() {
		parent::__construct ();
	}
	
	/**
	 * *************************Login***************************
	 */
	public function validateCredential() {
		// $query = $this->db->get('user_details');
		$user_name = $this->input->post ( 'email' );
		$password = $this->input->post ( 'password' );
		$this->db->select ( "user_name,password" );
		$this->db->where ( "user_name", $user_name );
		$this->db->where ( "password", $password );
		$this->db->from ( 'user_details' );
		$query = $this->db->get ();
		if ($user_name != "" & $password != "") {
			if (count ( $query->result () ) == 1) {
				foreach ( $query->result () as $row ) {
					$userData = array (
							"username" => $row->user_name,
							"password" => $row->password,
							"num_of_row" => 1 
					);
					/* $this->session->set_userdata($userData); */
					return $userData;
				}
			}
		}
		return 0;
	}
	
	/**
	 * *************************End Login***************************
	 */
	
	/**
	 * *************************Sales***************************
	 */
	public function insertClient() {
		$address_details = Array (
				"addr1" => $this->input->post ( 'addr_1' ),
				"addr2" => $this->input->post ( 'addr_2' ),
				"addr3" => $this->input->post ( 'addr_3' ),
				"city" => $this->input->post ( 'city' ),
				"state" => $this->input->post ( 'state' ),
				"country" => $this->input->post ( 'country' ),
				"pincode" => $this->input->post ( 'pin' ),
				"landmark" => $this->input->post ( 'landmark' ),
				"addr_type" => "client_addr" 
		);
		
		$this->db->insert ( "address_details", $address_details );
		$this->db->select_max ( "id" );
		$this->db->from ( "address_details" );
		$addr_rec = $this->db->get ();
		foreach ( $addr_rec->result () as $row ) {
			$addr_id = $row->id;
		}
		$company_details = Array (
				"company_name" => $this->input->post ( 'company_name' ),
				"contact_person" => $this->input->post ( 'contact_person' ),
				"contact_number_1" => $this->input->post ( 'contact_number_1' ),
				"contact_number_2" => $this->input->post ( 'contact_number_2' ),
				"company_email" => $this->input->post ( 'email' ),
				"address_id" => $addr_id 
		);
		
	}

}

?>
