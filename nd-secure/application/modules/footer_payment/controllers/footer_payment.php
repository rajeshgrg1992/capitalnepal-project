<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Footer_payment extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();

        $this->load->model('crud_model','crud');

    }

    public  $table = "igc_footer_payment";
    public $field_name = "footer_payment_id";
    public  $redirect = "footer_payment";

    public function index()
    {
        $data['records'] = $this->crud->get_all($this->table);
        $data['title']= "Footer Payment";
        $this->load->view('header', $data);
        $this->load->view('footer_payment_list');
        $this->load->view('footer');
    }

    //code to add/edit

    public function form($id=0)
    {
        if($this->input->post())
        {
            $folder_path = '../uploads/footer_payment/';
            $slider_id = $this->input->post('footer_payment_id');
            $insert['fp_title'] = $this->input->post('fp_title');
            $insert['fp_caption'] = $this->input->post('fp_caption');
            $insert['fp_link'] = $this->input->post('fp_link');
            $insert['publish_status'] = $this->input->post('publish_status');

            $rand = md5(rand());
            $slider_image= $rand. str_replace(" ","",$_FILES['slider_image']['name']);
            $slider_imagetmp=$_FILES['slider_image']['tmp_name'];
            if($slider_id =="")
            {
                if($_FILES['slider_image']['name'] !="")
                {
                    $insert['slider_image']= $slider_image;

                    move_uploaded_file($slider_imagetmp,$folder_path.$slider_image);

                }
                $insert['created'] = date('Y-m-d:H:i:s');
                $result = $this->crud->insert($insert, $this->table);
                if($result)
                {
                    //code to create log
                    $log['module_title']=  $insert['fp_title'];
                    $log['action_id']= "1";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','New Payment has been added.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to add Payment.');
                    redirect($this->redirect);
                }

            }
            else{

                $insert['updated'] = date('Y-m-d:H:i:s');
                if($_FILES['slider_image']['name'] !="")
                {
                    $pre_slider_image = $this->input->post('pre_slider_image');

                    @unlink($folder_path.$pre_slider_image);

                    $insert['slider_image']= $slider_image;

                    move_uploaded_file($slider_imagetmp,$folder_path.$slider_image);

                }

                $result = $this->crud->update($slider_id, $this->field_name, $insert, $this->table);
                if($result)
                {
                    //code to create log
                    $log['module_title']=  $insert['fp_title'];
                    $log['action_id']= "2";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','Payment has been updated.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to update the Payment.');
                    redirect($this->redirect);
                }

            }


        }

        $data['detail'] = $this->crud->get_detail($id, $this->field_name, $this->table);
        $data['scripts'] = array('themes/js/form-validator');
        $data['title']= "Add/Edit Payment";
        $this->load->view('header', $data);
        $this->load->view('footer_payment_form');
        $this->load->view('footer');
    }




    //function to delete

    public function delete($slider_id)
    {
        $slider_detail = $this->crud->get_detail($slider_id,  $this->field_name, $this->table);

        $result = $this->crud->delete($slider_id, $this->field_name, $this->table);
        if($result)
        {
            //code to create log
            $log['module_title']= $slider_detail['fp_title'];
            $log['action_id']= "3";
            $this->create_log($log);

            $path='../uploads/footer_payment/';
            @unlink($path.$slider_detail['slider_image']);
            $this->session->set_flashdata('success','Payment has been deleted.');
            redirect($this->redirect);
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the Payment.');
            redirect($this->redirect);
        }

    }

    //function to create log

    public function create_log($insert)
    {

        $insert['ip_address'] = get_ip();
        $insert['user_id'] = $this->session->userdata('admin_id');
        $insert['date'] = date('Y-m-d:H:i:s');
        $insert['module_name'] =  "Payment";
        $this->db->insert('igc_user_logs', $insert);
    }

}

