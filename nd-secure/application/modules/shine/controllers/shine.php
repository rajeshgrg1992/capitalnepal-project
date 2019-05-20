<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shine extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();

        $this->load->model('crud_model','crud');

    }

    public  $table = "igc_shine";
    public $field_name = "shine_id";
    public  $redirect = "shine";

    public function index()
    {
        $data['records'] = $this->crud->get_all($this->table);
        $data['title']= "Shine";
        $this->load->view('header', $data);
        $this->load->view('shine_list');
        $this->load->view('footer');
    }

    //code to add/edit

    public function form($id=0)
    {
        if($this->input->post())
        {
            $folder_path = '../uploads/shine/';
            $shine_id = $this->input->post('shine_id');
            $insert['shine_title'] = $this->input->post('shine_title');
            $insert['shine_caption'] = $this->input->post('shine_caption');

            $insert['publish_status'] = $this->input->post('publish_status');

            $rand = md5(rand());
            $shine_image= $rand. str_replace(" ","",$_FILES['shine_image']['name']);
            $shine_imagetmp=$_FILES['shine_image']['tmp_name'];
            if($shine_id =="")
            {
                if($_FILES['shine_image']['name'] !="")
                {
                    $insert['shine_image']= $shine_image;

                    move_uploaded_file($shine_imagetmp,$folder_path.$shine_image);

                }
                $insert['created'] = date('Y-m-d:H:i:s');
                $result = $this->crud->insert($insert, $this->table);
                if($result)
                {
                    //code to create log
                    $log['module_title']=  $insert['shine_title'];
                    $log['action_id']= "1";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','New shine has been added.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to add shine.');
                    redirect($this->redirect);
                }

            }
            else{

                $insert['updated'] = date('Y-m-d:H:i:s');
                if($_FILES['shine_image']['name'] !="")
                {
                    $pre_shine_image = $this->input->post('pre_shine_image');

                    @unlink($folder_path.$pre_shine_image);

                    $insert['shine_image']= $shine_image;

                    move_uploaded_file($shine_imagetmp,$folder_path.$shine_image);

                }

                $result = $this->crud->update($shine_id, $this->field_name, $insert, $this->table);
                if($result)
                {
                    //code to create log
                    $log['module_title']=  $insert['shine_title'];
                    $log['action_id']= "2";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','shine has been updated.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to update the shine.');
                    redirect($this->redirect);
                }

            }


        }

        $data['detail'] = $this->crud->get_detail($id, $this->field_name, $this->table);
        $data['scripts'] = array('themes/js/form-validator');
        $data['title']= "Add/Edit Shine";
        $this->load->view('header', $data);
        $this->load->view('shine_form');
        $this->load->view('footer');
    }




    //function to delete

    public function delete($shine_id)
    {
        $shine_detail = $this->crud->get_detail($shine_id,  $this->field_name, $this->table);

        $result = $this->crud->delete($shine_id, $this->field_name, $this->table);
        if($result)
        {
            //code to create log
            $log['module_title']= $shine_detail['shine_title'];
            $log['action_id']= "3";
            $this->create_log($log);

            $path='../uploads/shine/';
            @unlink($path.$shine_detail['shine_image']);
            $this->session->set_flashdata('success','Shine has been deleted.');
            redirect($this->redirect);
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the Shine.');
            redirect($this->redirect);
        }

    }


    //function to create log

    public function create_log($insert)
    {

        $insert['ip_address'] = get_ip();
        $insert['user_id'] = $this->session->userdata('admin_id');
        $insert['date'] = date('Y-m-d:H:i:s');
        $insert['module_name'] =  "Shine";
        $this->db->insert('igc_user_logs', $insert);
    }

}

