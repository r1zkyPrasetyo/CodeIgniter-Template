<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Starter extends CI_Controller {
	public function __construct() {
        parent::__construct();	
    }



    function index(){
    	$data["title"]="Starter page";
    	$data["content"]="v_starter";
		$this->load->view("v_template",$data);
	}

    
	

	
	

	
}