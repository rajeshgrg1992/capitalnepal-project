<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Footer extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();

        $this->load->model('crud_model','crud');

    }

    public  $table = "igc_footer";
    public $field_name = "footer_id";
    public  $redirect = "footer";

    public function index()
    {
        $data['records'] = $this->crud->get_all($this->table);
        $data['title']= "Footer";
        $this->load->view('header', $data);
        $this->load->view('footer_list');
        $this->load->view('footer');
    }

    //code to add/edit

    public function form($id=0)
    {
        if($this->input->post())
        {
            $footer_id = $this->input->post('footer_id');
            $insert['footer_title'] = $this->input->post('footer_title');
            $insert['footer_description'] = $this->input->post('footer_description');
            $insert['footer_link'] = $this->input->post('footer_link');
            $insert['publish_status'] = $this->input->post('publish_status');

            if($footer_id =="")
            {
                $insert['created'] = date('Y-m-d:H:i:s');
                $result = $this->crud->insert($insert, $this->table);
                if($result)
                {
                    //code to create log
                    $log['module_title']=  $insert['footer_title'];
                    $log['action_id']= "1";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','New Footer has been added.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to add Footer.');
                    redirect($this->redirect);
                }

            }
            else{

                $insert['updated'] = date('Y-m-d:H:i:s');

                $result = $this->crud->update($footer_id, $this->field_name, $insert, $this->table);
                if($result)
                {
                    //code to create log
                    $log['module_title']=  $insert['footer_title'];
                    $log['action_id']= "2";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','Footer has been updated.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to update the Footer.');
                    redirect($this->redirect);
                }

            }


        }

        $data['detail'] = $this->crud->get_detail($id, $this->field_name, $this->table);
        $data['scripts'] = array('themes/js/form-validator');
        $data['title']= "Add/Edit Footer";
        $this->load->view('header', $data);
        $this->load->view('footer_form');
        $this->load->view('footer');
    }




    //function to delete

    public function delete($footer_id)
    {
        $slider_detail = $this->crud->get_detail($footer_id,  $this->field_name, $this->table);
        $result = $this->crud->delete($footer_id, $this->field_name, $this->table);
        if($result)
        {
            //code to create log
            $log['module_title']= $slider_detail['footer_title'];
            $log['action_id']= "3";
            $this->create_log($log);

            $this->session->set_flashdata('success','footer has been deleted.');
            redirect($this->redirect);
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the footer.');
            redirect($this->redirect);
        }

    }

    //function to create log

    public function create_log($insert)
    {

        $insert['ip_address'] = get_ip();
        $insert['user_id'] = $this->session->userdata('admin_id');
        $insert['date'] = date('Y-m-d:H:i:s');
        $insert['module_name'] =  "Footer";
        $this->db->insert('igc_user_logs', $insert);
    }

}

