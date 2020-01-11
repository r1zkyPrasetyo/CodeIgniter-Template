<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function __construct() {
        parent::__construct();	
    }



    function buttons(){
    	$data["title"]="Buttons";
    	$data["content"]="v_buttons";
		$this->load->view("v_template",$data);
	}



    function modals(){
    	$data["title"]="Modals & Allerts";
    	$data["content"]="v_modals";
		$this->load->view("v_template",$data);
	}


    function chartjs(){
        $data["title"]="ChartJS";
        $data["content"]="v_chartjs";
        $this->load->view("v_template",$data);
    }



    function forms(){
    	$data["title"]="Forms";
    	$data["content"]="v_forms";
		$this->load->view("v_template",$data);
	}

    function forms_advanced(){
    	$data["title"]="Forms Advanded";
    	$data["content"]="v_forms_advanced";
		$this->load->view("v_template",$data);
	}

    

    function forms_editors(){
    	$data["title"]="Forms Editors";
    	$data["content"]="v_forms_editors";
		$this->load->view("v_template",$data);
	}

    
	

    function datatables(){
    	$data["title"]="Datatables";
    	$data["content"]="v_datatables";
		$this->load->view("v_template",$data);
	}


    function tables(){
    	$data["title"]="Tables";
    	$data["content"]="v_tables";
		$this->load->view("v_template",$data);
	}

    
	

	
	

	
}