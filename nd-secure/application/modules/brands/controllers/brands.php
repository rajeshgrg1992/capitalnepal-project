<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Brands extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();

        $this->load->model('crud_model','crud');
        $this->load->library('image_lib');

    }

    public  $table = "igc_brands";
    public $field_name = "brands_id";
    public  $redirect = "brands";

    public function index()
    {
        $data['records'] = $this->crud->get_all($this->table);
        $data['title']= "brands";
        $this->load->view('header', $data);
        $this->load->view('brands_list');
        $this->load->view('footer');
    }

    //code to add/edit

    public function form($id=0)
    {
        if($this->input->post())
        {
            $folder_path = '../uploads/brands/';
            $brands_id = $this->input->post('brands_id');
            $insert['brands_title'] = $this->input->post('brands_title');
            $url= strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $insert['brands_title'])) ;
            $insert['brands_caption'] = $this->input->post('brands_caption');
            $insert['publish_status'] = $this->input->post('publish_status');


            $check_url =  $this->crud->check_url($brands_id, 'category_id', $url, 'slug','igc_brands');
            if(!empty($check_url))
            {
                $insert['slug']= $url."-".rand(1, 50);
            }
            else
            {
                $insert['slug'] = $url;
            }

            $rand = md5(rand());
            $brands_image= $rand. str_replace(" ","",$_FILES['brands_image']['name']);
            $brands_imagetmp=$_FILES['brands_image']['tmp_name'];
            if($brands_id =="")
            {
                if($_FILES['brands_image']['name'] !="")
                {
                    $insert['brands_image']= $brands_image;

                    move_uploaded_file($brands_imagetmp,$folder_path.$brands_image);

                   for($i=0;$i<2;$i++)
                    {
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = $folder_path.$brands_image;
                        $config['maintain_ratio'] = false;
                        $config['quality'] = "100%";
                        if($i==0)
                        {
                           $config['new_image'] = $folder_path."146x49_".$brands_image; 
                           $config['width']         = 146;
                           $config['height']       = 49;  
                        }
                        elseif($i==1)
                        {
                           $config['new_image'] = $folder_path."150x71_".$brands_image; 
                           $config['width']         = 150;
                           $config['height']       = 71;  
                        }
                        $this->image_lib->initialize($config);
                        $this->image_lib->resize();
                        $this->image_lib->clear();
                    }




                }
                $insert['created'] = date('Y-m-d:H:i:s');
                $result = $this->crud->insert($insert, $this->table);
                if($result)
                {
                    //code to create log
                    $log['module_title']=  $insert['brands_title'];
                    $log['action_id']= "1";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','New brands has been added.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to add brands.');
                    redirect($this->redirect);
                }

            }
            else{

                $insert['updated'] = date('Y-m-d:H:i:s');
                if($_FILES['brands_image']['name'] !="")
                {
                    $pre_brands_image = $this->input->post('pre_brands_image');

                    @unlink($folder_path.$pre_brands_image);

                    $insert['brands_image']= $brands_image;

                    move_uploaded_file($brands_imagetmp,$folder_path.$brands_image);

                    for($i=0;$i<2;$i++)
                    {
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = $folder_path.$brands_image;
                        $config['maintain_ratio'] = false;
                        $config['quality'] = "100%";
                        if($i==0)
                        {
                           $config['new_image'] = $folder_path."146x49_".$brands_image; 
                           $config['width']         = 146;
                           $config['height']       = 49;  
                        }
                        elseif($i==1)
                        {
                           $config['new_image'] = $folder_path."150x71_".$brands_image; 
                           $config['width']         = 150;
                           $config['height']       = 71;  
                        }
                        $this->image_lib->initialize($config);
                        $this->image_lib->resize();
                        $this->image_lib->clear();
                    }

                }

                $result = $this->crud->update($brands_id, $this->field_name, $insert, $this->table);
                if($result)
                {
                    //code to create log
                    $log['module_title']=  $insert['brands_title'];
                    $log['action_id']= "2";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','brands has been updated.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to update the brands.');
                    redirect($this->redirect);
                }

            }


        }

        $data['detail'] = $this->crud->get_detail($id, $this->field_name, $this->table);
        $data['scripts'] = array('themes/js/form-validator');
        $data['title']= "Add/Edit brands";
        $this->load->view('header', $data);
        $this->load->view('brands_form');
        $this->load->view('footer');
    }




    //function to delete

    public function delete($brands_id)
    {
        $brands_detail = $this->crud->get_detail($brands_id,  $this->field_name, $this->table);

        $result = $this->crud->delete($brands_id, $this->field_name, $this->table);
        if($result)
        {
            //code to create log
            $log['module_title']= $brands_detail['brands_title'];
            $log['action_id']= "3";
            $this->create_log($log);

            $path='../uploads/brands/';
            @unlink($path.$brands_detail['brands_image']);
            $this->session->set_flashdata('success','brands has been deleted.');
            redirect($this->redirect);
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the brands.');
            redirect($this->redirect);
        }

    }


    //function to create log

    public function create_log($insert)
    {

        $insert['ip_address'] = get_ip();
        $insert['user_id'] = $this->session->userdata('admin_id');
        $insert['date'] = date('Y-m-d:H:i:s');
        $insert['module_name'] =  "brands";
        $this->db->insert('igc_user_logs', $insert);
    }

}

