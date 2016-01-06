<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blogs extends CI_Controller {
	 function __construct()
    {
        parent::__construct();
    }

    public function blog()
    {
    	echo "Loaded Model" ;
    }
}

?>