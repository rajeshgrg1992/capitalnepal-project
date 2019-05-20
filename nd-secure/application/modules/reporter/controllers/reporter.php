<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reporter extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();

        $this->load->model('crud_model','crud');

    }

    public  $table = "igc_reporter";
    public $field_name = "reporter_id";
    public  $redirect = "reporter";

    public function index()
    {
        $data['records'] = $this->crud->get_all($this->table);
        $data['title']= "Reporter";
        $this->load->view('header', $data);
        $this->load->view('reporter_list');
        $this->load->view('footer');
    }

    //code to add/edit

    public function form($id=0)
    {
        if($this->input->post())
        {
            $folder_path = '../uploads/reporter/';
            $reporter_id = $this->input->post('reporter_id');
            $insert['reporter_title'] = $this->input->post('reporter_title');
            $insert['reporter_caption'] = $this->input->post('reporter_caption');
            $insert['reporter_description'] = $this->input->post('reporter_description');
            $insert['publish_status'] = $this->input->post('publish_status');

            $rand = md5(rand());
            $reporter_image= $rand. str_replace(" ","",$_FILES['reporter_image']['name']);
            $reporter_imagetmp=$_FILES['reporter_image']['tmp_name'];
            if($reporter_id =="")
            {
                if($_FILES['reporter_image']['name'] !="")
                {
                    $insert['reporter_image']= $reporter_image;

                    move_uploaded_file($reporter_imagetmp,$folder_path.$reporter_image);

                }
                $insert['created'] = date('Y-m-d:H:i:s');
                $result = $this->crud->insert($insert, $this->table);
                if($result)
                {
                    //code to create log
                    $log['module_title']=  $insert['reporter_title'];
                    $log['action_id']= "1";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','New reporter has been added.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to add reporter.');
                    redirect($this->redirect);
                }

            }
            else{

                $insert['updated'] = date('Y-m-d:H:i:s');
                if($_FILES['reporter_image']['name'] !="")
                {
                    $pre_reporter_image = $this->input->post('pre_reporter_image');

                    @unlink($folder_path.$pre_reporter_image);

                    $insert['reporter_image']= $reporter_image;

                    move_uploaded_file($reporter_imagetmp,$folder_path.$reporter_image);

                }

                $result = $this->crud->update($reporter_id, $this->field_name, $insert, $this->table);
                if($result)
                {
                    //code to create log
                    $log['module_title']=  $insert['reporter_title'];
                    $log['action_id']= "2";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','reporter has been updated.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to update the reporter.');
                    redirect($this->redirect);
                }

            }


        }

        $data['detail'] = $this->crud->get_detail($id, $this->field_name, $this->table);
        $data['scripts'] = array('themes/js/form-validator');
        $data['title']= "Add/Edit Reporter";
        $this->load->view('header', $data);
        $this->load->view('reporter_form');
        $this->load->view('footer');
    }




    //function to delete

    public function delete($reporter_id)
    {
        $reporter_detail = $this->crud->get_detail($reporter_id,  $this->field_name, $this->table);

        $result = $this->crud->delete($reporter_id, $this->field_name, $this->table);
        if($result)
        {
            //code to create log
            $log['module_title']= $reporter_detail['reporter_title'];
            $log['action_id']= "3";
            $this->create_log($log);

            $path='../uploads/reporter/';
            @unlink($path.$reporter_detail['reporter_image']);
            $this->session->set_flashdata('success','Reporter has been deleted.');
            redirect($this->redirect);
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the Reporter.');
            redirect($this->redirect);
        }

    }


    //function to create log

    public function create_log($insert)
    {

        $insert['ip_address'] = get_ip();
        $insert['user_id'] = $this->session->userdata('admin_id');
        $insert['date'] = date('Y-m-d:H:i:s');
        $insert['module_name'] =  "Reporter";
        $this->db->insert('igc_user_logs', $insert);
    }

}

