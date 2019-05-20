<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {

	public function __Construct(){
        parent::__Construct();
        $this->load->model('crud_model', 'crud');
    }
    
    public function index(){

    }

    public function switcher($value){

    	//Choose and set language
    	if ($value == null || empty($value) || strlen($value) < 0) {
    		$switchValue = "en";
    	}else{
    		if($value == 'en'){
    			$switchValue = "en";
    		}
    		else if($value == 'ar'){
    			$switchValue = "ar";
    		}
    		else{
    			$switchValue = trim($value);
    		}
    	}
    	
    	//Update Language Choose Session
    	$this->session->set_userdata('this_site_language', $switchValue);
    	redirect('home');

    }

}
