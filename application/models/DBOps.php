<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 public class DBOps extends CI_Model {
	
	 public function __construct()
    {
        parent::__construct();
    }
    
	public function hello(){
		echo "DBOps loaded";
	}

}

?>