<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('site_settings_model', 'settings');
        $this->load->model('package_model','package');
        $this->load->model('crud_model','crud');
        $this->load->library('cart');
    }
    
    public $table = "products";
    public $field_name = "product_id";
    public $redirect = "product";
    
    public function index(){
        redirect('home');
    }
    
    public function login(){
        
        $this->load->view('header');
        $this->load->view('user/login');
        $this->load->view('footer');
        
    }
    
    
    
}