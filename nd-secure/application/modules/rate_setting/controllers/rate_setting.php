<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rate_setting extends MX_Controller{
     public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();
        $this->load->model('crud_model','crud');
         $this->load->model('site_settings_model','setting');
    }

    public function index()
    {

        $data['setting'] = $this->setting->get_site_settings();

        $data['title']= "Rate Settings";
        $this->load->view('header', $data);
        $this->load->view('rate_setting_form');

        $this->load->view('footer');
    }

    public function form()
    {
        if($this->input->post())
        {

             $id=$this->input->post('id');
             $insert['tax']=$this->input->post('tax');
             $insert['dollar']=$this->input->post('dollar');
             $insert['npr']=$this->input->post('npr');
             $insert['euro']=$this->input->post('euro');
             $insert['pound']=$this->input->post('pound');
             $insert['inr']=$this->input->post('inr');
             $insert['aed']=$this->input->post('aed');

            $result = $this->crud->update($id, "id", $insert, "igc_site_settings");
            redirect('dashboard');

        }
    }




}

