<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Banner_feature extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();

        $this->load->model('crud_model','crud');

    }

    public  $table = "igc_banner_feature";
    public  $field_name = "banner_feature_id";
    public  $redirect = "banner_feature";

    public function index()
    {
        $data['records'] = $this->crud->get_detail("1", $this->field_name, $this->table);;
        $data['title']= "Banners";
        $this->load->view('header', $data);
        $this->load->view('banner_feature_list');
        $this->load->view('footer');
    }


    public function form()
    {
        if($this->input->post())
        {
            $folder_path = '../uploads/banner_feature/';

            $insert['bf_title_1'] = $this->input->post('bf_title_1');
            $insert['bf_url_1'] = $this->input->post('bf_url_1');
            $insert['bf_des_1'] = $this->input->post('bf_des_1');

            $insert['bf_title_2'] = $this->input->post('bf_title_2');
            $insert['bf_url_2'] = $this->input->post('bf_url_2');
            $insert['bf_des_2'] = $this->input->post('bf_des_2');

            $insert['bf_title_3'] = $this->input->post('bf_title_3');
            $insert['bf_url_3'] = $this->input->post('bf_url_3');
            $insert['bf_des_3'] = $this->input->post('bf_des_3');

            $insert['bf_title_4'] = $this->input->post('bf_title_4');
            $insert['bf_url_4'] = $this->input->post('bf_url_4');
            $insert['bf_des_4'] = $this->input->post('bf_des_4');

            $insert['updated'] = date('Y-m-d:H:i:s');

            $rand = md5(rand());
            $bf_img_1= $rand. str_replace(" ","",$_FILES['bf_img_1']['name']);
            $bf_img_1_tmp=$_FILES['bf_img_1']['tmp_name'];

                if($_FILES['bf_img_1']['name'] !="")
                {
                    $pre_bf_img_1 = $this->input->post('pre_bf_img_1');

                    @unlink($folder_path.$pre_bf_img_1); //deleting the file

                    $insert['bf_img_1']= $bf_img_1;

                    move_uploaded_file($bf_img_1_tmp,$folder_path.$bf_img_1);
                }
            $rand = md5(rand());
            $bf_img_2= $rand. str_replace(" ","",$_FILES['bf_img_2']['name']);
            $bf_img_2_tmp=$_FILES['bf_img_2']['tmp_name'];

                if($_FILES['bf_img_2']['name'] !="")
                {
                    $pre_bf_img_2 = $this->input->post('pre_bf_img_2');

                    @unlink($folder_path.$pre_bf_img_2); //deleting the file

                    $insert['bf_img_2']= $bf_img_2;

                    move_uploaded_file($bf_img_2_tmp,$folder_path.$bf_img_2);
                }
            $rand = md5(rand());
            $bf_img_3= $rand. str_replace(" ","",$_FILES['bf_img_3']['name']);
            $bf_img_3_tmp=$_FILES['bf_img_3']['tmp_name'];

                if($_FILES['bf_img_3']['name'] !="")
                {
                    $pre_bf_img_3 = $this->input->post('pre_bf_img_3');

                    @unlink($folder_path.$pre_bf_img_3); //deleting the file

                    $insert['bf_img_3']= $bf_img_3;

                    move_uploaded_file($bf_img_3_tmp,$folder_path.$bf_img_3);
                }
            $rand = md5(rand());
            $bf_img_4= $rand. str_replace(" ","",$_FILES['bf_img_4']['name']);
            $bf_img_4_tmp=$_FILES['bf_img_4']['tmp_name'];

                if($_FILES['bf_img_4']['name'] !="")
                {
                    $pre_bf_img_4 = $this->input->post('pre_bf_img_4');

                    @unlink($folder_path.$pre_bf_img_4); //deleting the file

                    $insert['bf_img_4']= $bf_img_4;

                    move_uploaded_file($bf_img_4_tmp,$folder_path.$bf_img_4);
                }


                $result = $this->crud->update("1", $this->field_name, $insert, $this->table);
                if($result)
                {
                    $log['module_title']=  "banner_feature";
                    $log['action_id']= "2";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','Banner Feature has been updated.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to update the Banner Feature.');
                    redirect($this->redirect);
                }
             }

        $data['detail'] = $this->crud->get_detail("1", $this->field_name, $this->table);
        $data['title']= "Edit Banners features";

        $this->load->view('header', $data);
        $this->load->view('banner_feature_form');
        $this->load->view('footer');
    }

    //function to create log

    public function create_log($insert)
    {

        $insert['ip_address'] = get_ip();
        $insert['user_id'] = $this->session->userdata('admin_id');
        $insert['date'] = date('Y-m-d:H:i:s');
        $insert['module_name'] =  "Admin To Seller";
        $this->db->insert('igc_user_logs', $insert);
    }

}

