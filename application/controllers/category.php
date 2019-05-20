<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends CI_Controller{
    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('site_settings_model', 'settings');
        $this->load->model('package_model','package');
        $this->load->model('crud_model','crud');
    }

    public  $table = "igc_package_category";
    public $field_name = "category_id";
    public  $redirect = "product";





    public function index($slug, $page=0)
    {


        $detail = $this->crud->get_active_not_deleted_detail($slug, 'category_url', 'igc_package_category');

//        echo $detail;
//        exit;
//        echo $detail['category_id'];
//        echo "<pre>";
//        print_r($detail);
//        echo"</pre>";
//
//        exit();

        if(empty($detail)) {
            redirect('home');
        }
        if($page < 1) {
            $page = 1;
        }
        $per_page = 15;
        $startpoint = ($page * $per_page) - $per_page;

        //$data['packages'] =  $this->package->get_rel_packagess($detail['category_id'],$startpoint, $per_page);


        $data['articles']= $this->crud->get_article_list_am($detail['category_id'],$startpoint, $per_page);
// echo "<pre>";
// print_r( $data['packages']);
// echo "</pre>";
// exit();

      //  $data['package_total'] = $this->package->total_related_packages($slug);
        $data['category_url'] = $slug;
        $data['per_page'] = $per_page;
//        $data['base_url'] = site_url('brands/rel/'.$slug);
        $data['current_page'] = $page;
        $data['sub_title'] =  $detail['category_name']." ";
        $data['menu']="";
//        $data['meta_title'] =  $detail['meta_title'];
//        $data['meta_description'] =  $detail['meta_description'];
//        $data['meta_keywords'] =  $detail['meta_keywords'];
//        $data['description'] =  $detail['description'];
        $data['scripts'] = array('themes/js/form-validator/jquery.form-validator');
        $this->load->view('header', $data);

        $this->load->view('news/news_list');
        $this->load->view('footer');
    }


    public function author($slug, $page=0)
    {


        $detail = $this->crud->get_active_not_deleted_author($slug, 'username', 'igc_users');
//print_r($detail);
//exit();
//        echo $detail;
//        exit;
//        echo $detail['category_id'];
//        echo "<pre>";
//        print_r($detail);
//        echo"</pre>";
//
//        exit();

        if(empty($detail)) {
            redirect('home');
        }
        if($page < 1) {
            $page = 1;
        }
        $per_page = 15;
        $startpoint = ($page * $per_page) - $per_page;

        //$data['packages'] =  $this->package->get_rel_packagess($detail['category_id'],$startpoint, $per_page);


        $data['articles']= $this->crud->get_article_author($detail['user_id'],$startpoint, $per_page);
// echo "<pre>";
// print_r( $data['packages']);
// echo "</pre>";
// exit();

        $data['package_total'] = $this->package->total_related_packages($slug);
        $data['category_url'] = $slug;
        $data['per_page'] = $per_page;
//        $data['base_url'] = site_url('brands/rel/'.$slug);
        $data['current_page'] = $page;
        $data['sub_title'] =  $detail['full_name']." ";
        $data['menu']="";
//        $data['meta_title'] =  $detail['meta_title'];
//        $data['meta_description'] =  $detail['meta_description'];
//        $data['meta_keywords'] =  $detail['meta_keywords'];
//        $data['description'] =  $detail['description'];
        $data['scripts'] = array('themes/js/form-validator/jquery.form-validator');
        $this->load->view('header', $data);
        $this->load->view('list_header');
        $this->load->view('news/author_news_list');
        $this->load->view('footer');
    }










}