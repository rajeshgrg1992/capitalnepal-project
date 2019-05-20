<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Guest extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();

        $this->load->model('crud_model','crud');

    }

    public  $table = "igc_guest";
    public $field_name = "guest_id";
    public  $redirect = "guest";

    public function index()
    {
        $data['records'] = $this->crud->get_all($this->table);
        $data['title']= "Guest";
        $this->load->view('header', $data);
        $this->load->view('guest_list');
        $this->load->view('footer');
    }

    //code to add/edit

    public function form($id=0)
    {
        if($this->input->post())
        {
            $folder_path = '../uploads/guest/';
            $guest_id = $this->input->post('guest_id');
            $insert['guest_title'] = $this->input->post('guest_title');
            $insert['guest_caption'] = $this->input->post('guest_caption');
            $insert['guest_description'] = $this->input->post('guest_description');
            $insert['publish_status'] = $this->input->post('publish_status');

            $rand = md5(rand());
            $guest_image= $rand. str_replace(" ","",$_FILES['guest_image']['name']);
            $guest_imagetmp=$_FILES['guest_image']['tmp_name'];
            if($guest_id =="")
            {
                if($_FILES['guest_image']['name'] !="")
                {
                    $insert['guest_image']= $guest_image;

                    move_uploaded_file($guest_imagetmp,$folder_path.$guest_image);

                }
                $insert['created'] = date('Y-m-d:H:i:s');
                $result = $this->crud->insert($insert, $this->table);
                if($result)
                {
                    //code to create log
                    $log['module_title']=  $insert['guest_title'];
                    $log['action_id']= "1";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','New guest has been added.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to add guest.');
                    redirect($this->redirect);
                }

            }
            else{

                $insert['updated'] = date('Y-m-d:H:i:s');
                if($_FILES['guest_image']['name'] !="")
                {
                    $pre_guest_image = $this->input->post('pre_guest_image');

                    @unlink($folder_path.$pre_guest_image);

                    $insert['guest_image']= $guest_image;

                    move_uploaded_file($guest_imagetmp,$folder_path.$guest_image);

                }

                $result = $this->crud->update($guest_id, $this->field_name, $insert, $this->table);
                if($result)
                {
                    //code to create log
                    $log['module_title']=  $insert['guest_title'];
                    $log['action_id']= "2";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','guest has been updated.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to update the guest.');
                    redirect($this->redirect);
                }

            }


        }

        $data['detail'] = $this->crud->get_detail($id, $this->field_name, $this->table);
        $data['scripts'] = array('themes/js/form-validator');
        $data['title']= "Add/Edit Guest";
        $this->load->view('header', $data);
        $this->load->view('guest_form');
        $this->load->view('footer');
    }




    //function to delete

    public function delete($guest_id)
    {
        $guest_detail = $this->crud->get_detail($guest_id,  $this->field_name, $this->table);

        $result = $this->crud->delete($guest_id, $this->field_name, $this->table);
        if($result)
        {
            //code to create log
            $log['module_title']= $guest_detail['guest_title'];
            $log['action_id']= "3";
            $this->create_log($log);

            $path='../uploads/guest/';
            @unlink($path.$guest_detail['guest_image']);
            $this->session->set_flashdata('success','Guest has been deleted.');
            redirect($this->redirect);
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the Guest.');
            redirect($this->redirect);
        }

    }


    //function to create log

    public function create_log($insert)
    {

        $insert['ip_address'] = get_ip();
        $insert['user_id'] = $this->session->userdata('admin_id');
        $insert['date'] = date('Y-m-d:H:i:s');
        $insert['module_name'] =  "Guest";
        $this->db->insert('igc_user_logs', $insert);
    }

}

