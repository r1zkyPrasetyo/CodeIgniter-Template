<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {
	public function __construct() {
        parent::__construct();	
    }



    function index(){
    	$data["title"]="Page not found";
    	$data["content"]="v_error404";
		$this->load->view("v_template",$data);
	}

}	

