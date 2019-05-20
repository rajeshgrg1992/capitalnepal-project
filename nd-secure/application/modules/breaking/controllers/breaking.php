<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Breaking extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();
        $this->load->model('crud_model','crud');
        $this->load->library('image_lib');
        $this->load->library('pagination'); 
     }

    var $table="igc_breaking";
    var $title="breaking";
    var $field_name = "id";
    var $redirect="breaking";


    public function index($page=0)
    {
        $limit=5;
        $config=array(
            'base_url' => base_url()."index.php/breaking/index",
            'total_rows' => count($this->crud->get_not_deleted($this->table)),
            'per_page' => $limit
        );
        $this->pagination->initialize($config);

        $data['breaking'] = $this->crud->get_where_pagination($this->table,array('delete_status'=>0),$page,$limit);
        $data['title']= $this->title;
        $this->load->view('header', $data);
        $this->load->view('breaking_list');
        $this->load->view('footer');
    }

    //code to add/edit user

    public function form($id=0)
    {
               
     if($this->input->post())
        {

             $folder_path="../uploads/breaking/";
             $id = $this->input->post('id');
             $insert['breaking_layout']=$this->input->post('breaking_layout');
             $insert['status']=$this->input->post('status');

             $insert['delete_status']="0";

            if($id =="")
            {
                $insert['created'] = date('Y-m-d:H:i:s');
                $table = $this->table;
                $result = $this->crud->insert($insert,$table);
                if($result)
                {

                    $this->session->set_flashdata('success','New breaking has been added.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to add new breaking.');
                    redirect($this->redirect);
                }
            }
            else{
                   
                    $insert['updated'] = date('Y-m-d:H:i:s');
                    $table = $this->table;
                    $field_name =$this->field_name;


                    $result = $this->crud->update($id, $field_name, $insert, $table);
                    if($result)
                    {

                        $this->session->set_flashdata('success','breaking has been updated.');
                        redirect($this->redirect);
                    }
                    else{
                        $this->session->set_flashdata('error','Unable to update the breaking.');
                        redirect($this->redirect);
                    }
                }
        }


        $table = $this->table;
        $field_name = $this->field_name;
        $data['breaking'] = $this->crud->get_detail($id, $field_name, $table);

        $data['scripts'] = array('themes/js/form-validator');
        $data['title']= "Add/Edit ".$this->title;
        $this->load->view('header', $data);
        $this->load->view('breaking_form');
        $this->load->view('footer');
    }

    public function ad_placement_ajax()
    {
        $ad_for = $this->input->post('value');
        if($ad_for == "categories" )
        {
             $data['data1']="
                <option value=\"\">----- Advertise Placement: -----</option>
                <option value=\"top\">TOP Home Page</option>
                <option value=\"side\">Side Home Page</option>
                <option value=\"banner\">Categories Page</option>
                ";

              $categories="<option value=\"\">----- Advertise Sub For: -----</option>";  

            $parent_cat= $this->crud->get_where("product_category",array("parent_id" => 0,'delete_status'=>0,'status'=>1));
            foreach($parent_cat as $key=> $rows)
            {
                $categories .= "<option value=\"".$rows['category_id']."\">".$rows['category_title']."</option>";
            }

            $data['data2']=$categories;
            header('Content-Type: application/json');
            echo json_encode($data);   
        }
         else if($ad_for == "sub_categories" )
        {
             $data['data1']="
                <option value=\"\">----- Advertise Placement: -----</option>
                <option value=\"banner\">Categories Page</option>
                ";

              $categories="<option value=\"\">----- Advertise Sub For: -----</option>";  

            $sub_cat= $this->crud->get_where("product_category",array("parent_id >" => 0,'delete_status'=>0,'status'=>1));
            foreach($sub_cat as $key=> $rows)
            {
                $categories .= "<option value=\"".$rows['category_id']."\">".$rows['category_title']."</option>";
            }

            $data['data2']=$categories;
            header('Content-Type: application/json');
            echo json_encode($data);   
        }
        elseif($ad_for == "bottom")
        {
             $data['data1']="
                <option value=\"\">----- Advertise Placement: -----</option>
                <option value=\"first\">First</option>
                <option value=\"second\">Second</option>
                ";
            header('Content-Type: application/json');
            echo json_encode($data);   
        }
         elseif($ad_for == "top")
        {
             $data="
                <option value=\"\">----- Advertise Sub Placement: -----</option>
                <option value=\"first\">First</option>
                <option value=\"second\">Second</option>
                ";
            header('Content-Type: application/json');
            echo json_encode($data);   
        }
        elseif($ad_for == "detail_page" or $ad_for == "wishlist")
        {
             $data['data1']="
                <option value=\"\">----- Advertise Placement: -----</option>
                <option value=\"banner1\">Banner</option>
                ";
            header('Content-Type: application/json');
            echo json_encode($data); 
        }
        elseif($ad_for == "banner")
        {
    ?>
             <option value="">----- Advertise Sub Placement: -----</option>
            <option value="top_banner">Top Banner</option>
            <option value="side_banner">Side Banner</option>
    <?php
        }
        elseif($ad_for == "banner1")
        {
    ?>
             <option value="">----- Advertise Sub Placement: -----</option>
            <option value="side_banner">Side Banner</option>
    <?php
        }
    }


    //function to delete user

    public function delete($id)
    {
        $table = $this->table;
        $field_name = $this->field_name;
        $result = $this->crud->soft_delete($id, $field_name, $table);
        if($result)
        {
            $this->session->set_flashdata('success','breaking has been deleted.');
            redirect($this->redirect);
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the breaking.');
            redirect($this->redirect);
        }

    }





}

