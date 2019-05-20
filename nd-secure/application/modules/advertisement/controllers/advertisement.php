<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Advertisement extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();
        $this->load->model('crud_model','crud');
        $this->load->library('image_lib');
        $this->load->library('pagination'); 
     }

    var $table="igc_advertisement";
    var $title="Advertisement";
    var $field_name = "ad_id";
    var $redirect="advertisement";


    public function index($page=0)
    {
        $limit=5;
        $config=array(
            'base_url' => base_url()."index.php/advertisement/index",
            'total_rows' => count($this->crud->get_not_deleted($this->table)),
            'per_page' => $limit
        );
        $this->pagination->initialize($config);

        $data['ads'] = $this->crud->get_where_pagination($this->table,array('delete_status'=>0),$page,$limit);
        $data['title']= $this->title;
        $this->load->view('header', $data);
        $this->load->view('advertisement_list');
        $this->load->view('footer');
    }

    //code to add/edit user

    public function form($id=0)
    {
               
     if($this->input->post())
        {

             $folder_path="../uploads/advertisement/";
             $ad_id = $this->input->post('ad_id');
             $insert['ad_title']=$this->input->post('ad_title');
             $insert['ad_url']=$this->input->post('ad_url');
             $insert['status']=$this->input->post('status');

             $insert['ad_for']=$this->input->post('ad_for');
             $insert['ad_sub_for']=$this->input->post('ad_sub_for');
             $insert['ad_placement']=$this->input->post('ad_placement');
             $insert['ad_sub_placement']=$this->input->post('ad_sub_placement');

             $insert['description']=$this->input->post('description');
             $insert['delete_status']="0";
                     

             $rand = md5(rand());
             $image_name= $rand. str_replace(" ","",$_FILES['ad_image']['name']);
             $image_tmp=$_FILES['ad_image']['tmp_name'];

            if($ad_id =="")
            {
                if($_FILES['ad_image']['name'] !="")
                {
                    $insert['ad_image']= $image_name;

                    move_uploaded_file($image_tmp,$folder_path.$image_name);

                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $folder_path.$image_name;
                    $config['maintain_ratio'] = false;
                    $config['quality'] = "100%";

                    if( $insert['ad_for'] == "slider")
                    {
                       $config['new_image'] = $folder_path."slider_".$image_name;
                       $config['width']         = 234;
                       $config['height']       = 450;  
                    }
                    elseif( $insert['ad_for'] == "about" || $insert['ad_for'] == "blog_list" || $insert['ad_for'] == "blog_detail")
                    {
                        $config['new_image'] = $folder_path.$insert['ad_for']."_".$image_name;
                        $config['width']         = 271;
                        $config['height']       = 346;   
                    }
                    elseif($insert['ad_for'] =="categories" or $insert['ad_for'] =="sub_categories")
                    {
                        if($insert['ad_placement'] == "top")
                        {
                               $config['new_image'] = $folder_path."top_".$image_name;
                               $config['width']         = 585;
                               $config['height']       = 65; 
                        }
                        elseif ($insert['ad_placement'] == "side") {
                             $config['new_image'] = $folder_path."side_".$image_name;
                               $config['width']         = 234;
                               $config['height']       = 350; # code...
                        }
                        elseif ($insert['ad_placement'] == "banner") {
                            if($insert['ad_sub_placement'] == "top_banner")
                            {
                                $config['new_image'] = $folder_path."ban_top_".$image_name; 
                               $config['width']         = 871;
                               $config['height']       = 288;  # code...
                            }
                            elseif($insert['ad_sub_placement'] == "side_banner")
                            {
                                $config['new_image'] = $folder_path."ban_side_".$image_name; 
                               $config['width']         = 271;
                               $config['height']       = 346;  # code...
                            }
                        }
                    }
                    elseif($insert['ad_for'] =="bottom")
                    {
                       $config['new_image'] = $folder_path."bottom_".$image_name; 
                       $config['width']         = 570;
                       $config['height']       = 120;  
                    }
                    elseif($insert['ad_for'] == "detail_page" or $insert['ad_for'] == "wishlist")
                                {
                                    if($insert['ad_sub_placement'] == "side_banner")
                                        {
                                            $config['new_image'] = $folder_path."ban_side_".$image_name; 
                                           $config['width']         = 271;
                                           $config['height']       = 346;  # code...
                                        }   
                                }
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    $this->image_lib->clear();
                }

                $insert['created'] = date('Y-m-d:H:i:s');
                $table = $this->table;
                $result = $this->crud->insert($insert,$table);
                if($result)
                {

                    $this->session->set_flashdata('success','New Advertisement has been added.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to add new Advertisement.');
                    redirect($this->redirect);
                }
            }
            else{

                    if($_FILES['ad_image']['name'] !="")
                    {
                            $pre_ad_image = $this->input->post('pre_ad_image');

                            @unlink($folder_path.$pre_ad_image); //deleting the file

                            $insert['ad_image']= $image_name;

                            move_uploaded_file($image_tmp,$folder_path.$image_name);
                             $config['image_library'] = 'gd2';
                                $config['source_image'] = $folder_path.$image_name;
                                $config['maintain_ratio'] = false;
                                $config['quality'] = "100%";

                                if( $insert['ad_for'] == "slider")
                                {
                                   $config['new_image'] = $folder_path."slider_".$image_name;
                                   $config['width']         = 234;
                                   $config['height']       = 450;  
                                }
                                elseif( $insert['ad_for'] == "about" || $insert['ad_for'] == "blog_list" || $insert['ad_for'] == "blog_detail")
                                {
                                   $config['new_image'] = $folder_path.$insert['ad_for']."_".$image_name;
                                    $config['width']         = 271;
                                    $config['height']       = 346;   
                                }
                                elseif($insert['ad_for'] =="categories" or $insert['ad_for'] =="sub_categories")
                                {
                                    if($insert['ad_placement'] == "top")
                                    {
                                           $config['new_image'] = $folder_path."top_".$image_name;
                                           $config['width']         = 585;
                                           $config['height']       = 65; 
                                    }
                                    elseif ($insert['ad_placement'] == "side") {
                                         $config['new_image'] = $folder_path."side_".$image_name;
                                           $config['width']         = 234;
                                           $config['height']       = 350; # code...
                                    }
                                    elseif ($insert['ad_placement'] == "banner") {
                                        if($insert['ad_sub_placement'] == "top_banner")
                                        {
                                            $config['new_image'] = $folder_path."ban_top_".$image_name; 
                                           $config['width']         = 871;
                                           $config['height']       = 288;  # code...
                                        }
                                        elseif($insert['ad_sub_placement'] == "side_banner")
                                        {
                                            $config['new_image'] = $folder_path."ban_side_".$image_name; 
                                           $config['width']         = 271;
                                           $config['height']       = 346;  # code...
                                        }
                                    }
                                }
                                elseif($insert['ad_for'] =="bottom")
                                {
                                   $config['new_image'] = $folder_path."bottom_".$image_name; 
                                   $config['width']         = 570;
                                   $config['height']       = 120;  
                                }
                                elseif($insert['ad_for'] == "detail_page" or $insert['ad_for'] == "wishlist")
                                {
                                    if($insert['ad_sub_placement'] == "side_banner")
                                        {
                                            $config['new_image'] = $folder_path."ban_side_".$image_name; 
                                           $config['width']         = 271;
                                           $config['height']       = 346;  # code...
                                        }   
                                }
                                        
                                $this->image_lib->initialize($config);
                                $this->image_lib->resize();
                                $this->image_lib->clear();
                            }
                   
                    $insert['updated'] = date('Y-m-d:H:i:s');
                    $table = $this->table;
                    $field_name =$this->field_name;


                    $result = $this->crud->update($ad_id, $field_name, $insert, $table);
                    if($result)
                    {

                        $this->session->set_flashdata('success','Advertisement has been updated.');
                        redirect($this->redirect);
                    }
                    else{
                        $this->session->set_flashdata('error','Unable to update the Advertisement.');
                        redirect($this->redirect);
                    }
                }
        }


        $table = $this->table;
        $field_name = $this->field_name;
        $data['ads'] = $this->crud->get_detail($id, $field_name, $table);

        $data['scripts'] = array('themes/js/form-validator');
        $data['title']= "Add/Edit ".$this->title;
        $this->load->view('header', $data);
        $this->load->view('advertisement_form');
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
            $this->session->set_flashdata('success','Advertisement has been deleted.');
            redirect($this->redirect);
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the Advertisement.');
            redirect($this->redirect);
        }

    }





}

