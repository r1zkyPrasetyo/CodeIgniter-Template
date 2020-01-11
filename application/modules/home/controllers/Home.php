<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
        parent::__construct();	
    }



    function index(){
    	$data["title"]="Home";
    	$data["content"]="v_home";
		$this->load->view("v_template",$data);
	}

    
	

	
	

	
}