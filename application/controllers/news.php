<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News extends CI_Controller{
    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('site_settings_model', 'settings');
        $this->load->model('news_model','news');
        $this->load->model('crud_model','crud');
        $this->load->library('nepali_calendar');
    }


    public function index($id)
    {
        $news_detail = $this->news->get_news_detail($id);

//print_r($news_detail);
//exit();
        $current_date=$news_detail['created'];
        $year=date('Y',strtotime($current_date));
        $month=date('m',strtotime($current_date));
        $date=date('j',strtotime($current_date));
        $hour=$this->nepali_calendar->convert_into_nepali_date(date('h',strtotime($current_date)));
        $min=$this->nepali_calendar->convert_into_nepali_date(date('i',strtotime($current_date)));
        $am_pm=date('a',strtotime($current_date));
        $nepalidate=$this->nepali_calendar->AD_to_BS($year,$month,$date);
        $nepaliTime=$this->nepali_calendar->get_time($current_date);
        $news_detail['created']=$nepaliTime;

        $data['og_url']= 'detail/'.$news_detail['content_id'];
        $data['og_title']= $news_detail['title'];

        $data['meta_description']= $news_detail['meta_description'];
        $data['meta_keywords']= $news_detail['meta_keywords'];
        $data['news_detail'] = $news_detail;

        $this->load->view('header', $data);
        $this->load->view('news/news_detail' , $data);
        $this->load->view('footer');
    }

    public function detail($slug)
    {


//
//        $data['scripts']= array('form_validator');
//        $detail= $this->crud->get_detail($slug, 'news_url', 'igc_news');
//        $data['detail']= $detail;
//        $data['menu'] = '';
//
//        $data['sub_title'] = $detail['news_title']." "."-"." ";
//        $data['meta_title'] = $detail['meta_title'];
//        $data['meta_description'] = $detail['meta_description'];
//        $data['meta_keywords'] = $detail['meta_keywords'];
//        //setting for fb share
//        $data['og_url']= 'news/detail/'.$detail['news_url'];
//        $data['og_title']= $detail['news_title'];
//        $data['og_description']= substr($detail['news_content'],0,200);
//        $data['og_image']= 'uploads/news/'.$detail['featured_img'];
//        $this->load->view('header', $data);
//        $this->load->view('news/news_detail');
//        $this->load->view('footer');
    }


}