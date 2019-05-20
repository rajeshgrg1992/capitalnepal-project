<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();
        $this->load->model('crud_model','crud');
        $this->load->library('image_lib');
    }

    public $table = "products";
    public $field_name = "product_id";
    public $redirect = "product";

    public function index()
    {
        $data['records'] = $this->crud->get_where_desc($this->table,array('delete_status'=> "0" ,'admin_ref'=>$this->session->userdata('admin_id')));
        $data['title']= "Your Product List";
        $this->load->view('header', $data);
        $this->load->view('product_list');
        $this->load->view('footer');

    }

    public function company_list()
    {
         $data['records']=$this->crud->get_where_desc("products",array('delete_status'=>"0","admin_ref >"=>0));
         $data['title']= " Company Product List";
         $this->load->view('header', $data);
         $this->load->view('company_product_list');
         $this->load->view('footer');

    }
    public function specific_company_list()
    {
        if($this->session->userdata('permission')==0)
        {
            $data['records']=$this->crud->get_where_desc("products",array('delete_status'=>"0","admin_ref >"=>0));
        }
        else
        {
            redirect('dashboard');
        }
        $data['title']= "Specific Product List";
        $this->load->view('header', $data);
        $this->load->view('specific_company_product_list');
        $this->load->view('footer');

    }

    public function all_product_list()
    {
        $data['records'] = $this->crud->get_and_or_where($this->table,array('delete_status' => 0,'admin_delete_status' =>'0'),array('seller_ref >' => 0 ,'seller_user_ref >' => 0 ));

        $data['title']= "All Product List";
        $this->load->view('header', $data);
        $this->load->view('seller_product_list');
        $this->load->view('footer');

    }

    public function all_product_admin_delete($id)
    {
         $report=$this->crud->soft_admin_delete($id,"product_id",$this->table);
        
         redirect('product/all_product_list');
    }

    public function check_list($check)
    {
         if($check=='1')
         {
         $data['title']= " Permitted Product List";
         $data['records']=$this->crud->get_and_or_where($this->table,array('delete_status' => 0,'admin_status'=>1),array('seller_ref >' => 0 ,'seller_user_ref >' => 0 ));
         }
         else
         {
         $data['title']= " Not Permitted Product List";
         $data['records']=$this->crud->get_and_or_where($this->table,array('delete_status' => 0,'admin_status'=>0),array('seller_ref >' => 0 ,'seller_user_ref >' => 0 ));
         }
         $this->load->view('header', $data);
         $this->load->view('check_product_list');
         $this->load->view('footer');

    }

    
    public function category($id = null){
        $data['records'] = $this->crud->get_where("product_category",array("delete_status" => 0));
        $data['title']= "Add Category";
        $this->load->view('header', $data);
        $this->load->view('category_list');
        $this->load->view('footer');
    }

    public function add_category($id = 0){

        if($this->input->post()){

            $folder_path = '../uploads/product_category/';

            $make_slug = $this->crud->makeSlug($this->input->post('category_title'),"-");
            if(strlen($make_slug) <= 0){ $make_slug = "category-".time(); }
            $checkSlug = $this->crud->get_detail($make_slug, "category_slug", "product_category");
            if(count($checkSlug) > 0){ $make_slug.= "-".time(); }
            
            $insert['category_slug'] = $make_slug;

            $insert['parent_id'] = $this->input->post('parent_id');
            $insert['category_title'] = $this->input->post('category_title');
            $insert['category_detail'] = $this->input->post('category_detail');
            $insert['fa_icon'] = $this->input->post('fa_icon');
            $insert['status'] = $this->input->post('status');
            $insert['hot_status'] = $this->input->post('hot_status');

            $insert['category_title_ar'] = $this->input->post('category_title_ar');
            $insert['category_detail_ar'] = $this->input->post('category_detail_ar');

            $rand = md5(rand());
            $featuredimg= $rand.str_replace(" ","",$_FILES['featured_img']['name']);
            $featuredimgtmp=$_FILES['featured_img']['tmp_name'];

            $featuredimg_small= $rand.str_replace(" ","",$_FILES['featured_img_small']['name']);
            $featuredimgtmp_small=$_FILES['featured_img_small']['tmp_name'];

            if($id == ""){
                //Insert Cateogry
                if($_FILES['featured_img']['name'] !="")
                {
                    $insert['featured_img']= $featuredimg;

                    move_uploaded_file($featuredimgtmp,$folder_path.$featuredimg);

                }
                if($_FILES['featured_img_small']['name'] !="")
                {
                    $insert['featured_img_small']= $featuredimg_small;

                    move_uploaded_file($featuredimgtmp_small,$folder_path.$featuredimg_small);

                }
                $insert = $this->crud->insert($insert, "product_category");


            }else{
                //Update Category
                if($_FILES['featured_img']['name'] !="")
                {
                    $pre_featured_img = $this->input->post('pre_featuredimg');

                    @unlink($folder_path.$pre_featured_img);

                    $insert['featured_img']= $featuredimg;

                    move_uploaded_file($featuredimgtmp,$folder_path.$featuredimg);

                }
                if($_FILES['featured_img_small']['name'] !="")
                {
                    $pre_featured_img_small = $this->input->post('pre_featuredimg_small');

                    @unlink($folder_path.$pre_featured_img_small);

                    $insert['featured_img_small']= $featuredimg_small;

                    move_uploaded_file($featuredimgtmp_small,$folder_path.$featuredimg_small);

                }
                $insert = $this->crud->update($id, "category_id", $insert, "product_category");

            }

            if($insert){
                $this->session->set_flashdata('success','Success.');
                redirect("product/category");
            }else{
                $this->session->set_flashdata('error','Fail.');
                $mainId = ($id > 0) ? "/".$id : "";
                redirect("product/add_category".$mainId);
            }

        }

        $data['title']= "Category List";
        $value['paretn_category'] = $this->crud->get_where("product_category",array("parent_id" => 0));
        $value['parent_detail'] = ($id > 0) ? $this->crud->get_detail($id, "category_id", "product_category") : array();
        $this->load->view('header', $data);
        $this->load->view('form_category',$value);
        $this->load->view('footer');
    }
    
    public function add_product($id = 0){
        
        
        if($this->input->post())
        {
            $error = "";
            $code = strtoupper(substr(md5(uniqid(rand(1234,9876).time().rand(1111,9999), true)), 3,7));
            //Create Post Slug
            $make_slug = $this->crud->makeSlug($this->input->post('product_title'),"-");
            if(strlen($make_slug) <= 0){ $make_slug = "product-".time(); }
            $checkSlug = $this->crud->get_detail($make_slug, "product_slug", $this->table);
            if(count($checkSlug) > 0){ $make_slug.= "-".time(); }
            $insert['product_slug'] = $make_slug;

            $insert['product_category_id'] = $this->input->post('product_category_id');
            $insert['brands_id'] = $this->input->post('brands_id');
            $insert['product_sub_cat_id'] = $this->input->post('product_sub_cat_id');
            $insert['product_country'] = $this->input->post('product_country');
            $insert['fa_icon'] = $this->input->post('fa_icon');
            $insert['product_title'] = $this->input->post('product_title');
            $insert['product_for'] = $this->input->post('product_for');
            $insert['counts'] = $this->input->post('counts');
            $insert['product_weight'] = $this->input->post('product_weight');
            $insert['product_unit'] = $this->input->post('product_unit');

            $insert['product_size'] = $this->input->post('product_size');
            $insert['product_color'] = $this->input->post('product_color');

            $insert['product_price_currency'] = $this->input->post('product_price_currency');
            $insert['product_old_sell_price'] = $this->input->post('product_old_sell_price');
            $insert['product_features'] = $this->input->post('product_features');
             $insert['product_short_detail'] = $this->input->post('product_short_detail');
            $insert['product_full_detail'] = $this->input->post('product_full_detail');
            $insert['product_return_policy'] = $this->input->post('product_return_policy');

            $insert['sp_product_status'] = $this->input->post('sp_product_status');

            
            if($this->input->post('sell_offer') == "0")
            {   
                $insert['sell_offer'] = $this->input->post('sell_offer');
                $insert['sell_offer_percentage'] = 0;
                $insert['product_sell_price'] =   $insert['product_old_sell_price'];
            }
            else
            {
                $insert['sell_offer'] = $this->input->post('sell_offer');
                $insert['sell_offer_percentage'] = $this->input->post('sell_offer_percentage');

                $percentage=$this->input->post('sell_offer_percentage');
                
                $insert['product_sell_price'] = ((100-$percentage)/100) * $insert['product_old_sell_price'];
            }
            
            if($this->input->post('product_offer_deal') == "0")
            {   
                $insert['product_offer_deal'] = $this->input->post('product_offer_deal');
                $insert['product_buffer_sell_price'] =  $insert['product_sell_price'];
                $insert['product_buffer_sell_percentage'] =  $insert['sell_offer_percentage'];
            }
            else
            {
                $insert['product_offer_deal'] = $this->input->post('product_offer_deal');
                $insert['product_buffer_sell_price'] =  $insert['product_sell_price'];
                $insert['product_buffer_sell_percentage'] =  $insert['sell_offer_percentage'];

                $insert['product_offer_price'] =  $this->input->post('product_offer_price');
                $insert['product_offer_percentage'] =  $this->input->post('product_offer_percentage');
                $insert['product_offer_start_date'] = $this->input->post('product_offer_start_date');
                $insert['product_offer_end_date'] =  $this->input->post('product_offer_end_date');
            }


            $insert['status'] = $this->input->post('status');
            $insert['admin_status'] = $this->input->post('status');
            $check_edit=$this->input->post('p_c');
            if($check_edit !="")
            {
                    $insert['admin_ref'] =  $this->input->post('admin_ref');
            }
            else
            {
                    $insert['admin_ref'] = $this->session->userdata('admin_id');
                    $insert['seller_ref'] ="";
                    $insert['seller_user_ref'] ="";
                    $admin="admin";
            }
            
            
            $uploadLocation =  "../uploads/product/";
            $fileSize = 5242880;
            $fileType = array('jpg','png','gif','jpeg');
            $mainId = ($id > 0) ? "/".$id : "";
            
            //For First (MAIN) Image
            if(strlen($_FILES['product_image_1']['name']) > 0)
            {
                $extension_1 = pathinfo($_FILES['product_image_1']['name'],PATHINFO_EXTENSION);
                if($_FILES['product_image_1']['size'] > $fileSize)
                    { 
                        $error .= "Main Photo Less Than 5 MB.<br/>"; 
                    }
                else if(!in_array($extension_1,$fileType))
                    {
                        $error .= "Main File Type Must Be 'JPG' OR 'PNG'<br/>"; 
                    }
                else
                    { 
                        $insert['product_image_1'] = $extension_1; 
                    }
                if(!empty($error))
                {
                    $this->session->set_flashdata('error',$error);
                    redirect("product/add_product".$mainId);
                }
            }
            else
                { 
                    if($id > 0)
                        { $insert['product_image_1'] = $this->input->post('product_image_1_img'); } 
                }
            
            //For Second Image
            if(strlen($_FILES['product_image_2']['name']) > 0){
                $extension_2 = pathinfo($_FILES['product_image_2']['name'],PATHINFO_EXTENSION);
                if($_FILES['product_image_2']['size'] > $fileSize){ $error .= "Main Photo Less Than 5 MB.<br/>"; }
                else if(!in_array($extension_2,$fileType)){ $error .= "Main File Type Must Be 'JPG' OR 'PNG'<br/>"; }
                else{ $insert['product_image_2'] = $extension_2; }
                if(!empty($error)){
                    $this->session->set_flashdata('error',$error);
                    redirect("product/add_product".$mainId);
                }
            }else{ if($id > 0){ $insert['product_image_2'] = $this->input->post('product_image_2_img'); } }
            
            //For Third Image
            if(strlen($_FILES['product_image_3']['name']) > 0){
                $extension_3 = pathinfo($_FILES['product_image_3']['name'],PATHINFO_EXTENSION);
                if($_FILES['product_image_3']['size'] > $fileSize){ $error .= "Main Photo Less Than 5 MB.<br/>"; }
                else if(!in_array($extension_3,$fileType)){ $error .= "Main File Type Must Be 'JPG' OR 'PNG'<br/>"; }
                else{ $insert['product_image_3'] = $extension_3; }
                if(!empty($error)){
                    $this->session->set_flashdata('error',$error);
                    redirect("product/add_product".$mainId);
                }
            }else{ if($id > 0){ $insert['product_image_3'] = $this->input->post('product_image_3_img'); } }
            
            //For Fourth Image
            if(strlen($_FILES['product_image_4']['name']) > 0){
                $extension_4 = pathinfo($_FILES['product_image_4']['name'],PATHINFO_EXTENSION);
                if($_FILES['product_image_4']['size'] > $fileSize){ $error .= "Main Photo Less Than 5 MB.<br/>"; }
                else if(!in_array($extension_4,$fileType)){ $error .= "Main File Type Must Be 'JPG' OR 'PNG'<br/>"; }
                else{ $insert['product_image_4'] = $extension_4; }
                if(!empty($error)){
                    $this->session->set_flashdata('error',$error);
                    redirect("product/add_product".$mainId);
                }
            }else{ if($id > 0){ $insert['product_image_4'] = $this->input->post('product_image_4_img'); } }
            
            
            if($id == null)
            {
                //Insert Product
                $insert['product_code'] = $code;
                $report = $this->crud->insert($insert, $this->table);
                $productCode = $code;
            }
            else
            {
                //Update Product
                $insert['edit_date'] = date('Y-m-d');
                $insert['edit_by'] = "admin";
                $report = $this->crud->update($id, "product_id", $insert, $this->table);
                $productCode = $this->input->post('p_c');
            }
            
            //For Upload Image
           if(strlen($_FILES['product_image_1']['name']) > 0){
                $file_1 = $uploadLocation.$productCode."_1.".$extension_1;
                move_uploaded_file($_FILES['product_image_1']['tmp_name'],$file_1);
                
                for($i=0;$i<4;$i++)
                {
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $uploadLocation.$productCode."_1.".$extension_1;
                    $config['maintain_ratio'] = false;
                    $config['quality'] = "100%";
                    if($i==0)
                    {
                       $config['new_image'] = $uploadLocation.$productCode."_1_420x512.".$extension_1; 
                       $config['width']         = 420;
                       $config['height']       = 512;  
                    }
                    elseif($i==1)
                    {
                       $config['new_image'] = $uploadLocation.$productCode."_1_850x1036.".$extension_1; 
                       $config['width']         = 850;
                       $config['height']       = 1036;  
                    }
                    elseif($i==2)
                    {
                       $config['new_image'] = $uploadLocation.$productCode."_1_300x366.".$extension_1; 
                       $config['width']         = 300;
                       $config['height']       = 366;  
                    }
                    else
                    {
                       $config['new_image'] = $uploadLocation.$productCode."_1_100x122.".$extension_1; 
                       $config['width']         = 100;
                       $config['height']       = 122;  
                    }
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    $this->image_lib->clear();
                }
            }

            if(strlen($_FILES['product_image_2']['name']) > 0){
                $file_2 = $uploadLocation.$productCode."_2.".$extension_2;
                move_uploaded_file($_FILES['product_image_2']['tmp_name'],$file_2);
                for($i=0;$i<4;$i++)
                {
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $uploadLocation.$productCode."_2.".$extension_2;
                    $config['maintain_ratio'] = false;
                    $config['quality'] = "100%";
                    if($i==0)
                    {
                       $config['new_image'] = $uploadLocation.$productCode."_2_420x512.".$extension_2; 
                       $config['width']         = 420;
                       $config['height']       = 512;  
                    }
                    elseif($i==1)
                    {
                       $config['new_image'] = $uploadLocation.$productCode."_2_850x1036.".$extension_2; 
                       $config['width']         = 850;
                       $config['height']       = 1036;  
                    }
                    elseif($i==2)
                    {
                       $config['new_image'] = $uploadLocation.$productCode."_2_300x366.".$extension_2; 
                       $config['width']         = 300;
                       $config['height']       = 366;  
                    }
                    else
                    {
                       $config['new_image'] = $uploadLocation.$productCode."_2_100x122.".$extension_2; 
                       $config['width']         = 100;
                       $config['height']       = 122;  
                    }
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    $this->image_lib->clear();
                }
            }

            if(strlen($_FILES['product_image_3']['name']) > 0){
                $file_3 = $uploadLocation.$productCode."_3.".$extension_3;
                move_uploaded_file($_FILES['product_image_3']['tmp_name'],$file_3);

                 for($i=0;$i<4;$i++)
                {
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $uploadLocation.$productCode."_3.".$extension_3;
                    $config['maintain_ratio'] = false;
                    $config['quality'] = "100%";
                    if($i==0)
                    {
                       $config['new_image'] = $uploadLocation.$productCode."_3_420x512.".$extension_3; 
                       $config['width']         = 420;
                       $config['height']       = 512;  
                    }
                    elseif($i==1)
                    {
                       $config['new_image'] = $uploadLocation.$productCode."_3_850x1036.".$extension_3; 
                       $config['width']         = 850;
                       $config['height']       = 1036;  
                    }
                    elseif($i==2)
                    {
                       $config['new_image'] = $uploadLocation.$productCode."_3_300x366.".$extension_3; 
                       $config['width']         = 300;
                       $config['height']       = 366;  
                    }
                    else
                    {
                       $config['new_image'] = $uploadLocation.$productCode."_3_100x122.".$extension_3; 
                       $config['width']         = 100;
                       $config['height']       = 122;  
                    }
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    $this->image_lib->clear();
                }
            }

            if(strlen($_FILES['product_image_4']['name']) > 0){
                $file_4 = $uploadLocation.$productCode."_4.".$extension_4;
                move_uploaded_file($_FILES['product_image_4']['tmp_name'],$file_4);
                $config['maintain_ratio'] = false;
                $config['quality'] = "100%";
                for($i=0;$i<4;$i++)
                {
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $uploadLocation.$productCode."_4.".$extension_4;
                    if($i==0)
                    {
                       $config['new_image'] = $uploadLocation.$productCode."_4_420x512.".$extension_4; 
                       $config['width']         = 420;
                       $config['height']       = 512;  
                    }
                    elseif($i==1)
                    {
                       $config['new_image'] = $uploadLocation.$productCode."_4_850x1036.".$extension_4; 
                       $config['width']         = 850;
                       $config['height']       = 1036;  
                    }
                    elseif($i==2)
                    {
                       $config['new_image'] = $uploadLocation.$productCode."_4_300x366.".$extension_4; 
                       $config['width']         = 300;
                       $config['height']       = 366;  
                    }
                    else
                    {
                       $config['new_image'] = $uploadLocation.$productCode."_4_100x122.".$extension_4; 
                       $config['width']         = 100;
                       $config['height']       = 122;  
                    }
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    $this->image_lib->clear();
                }
            }
            
            if($report)
            {
                $this->session->set_flashdata('success','Success.');
                redirect("product");
            }
            else
            {
                $this->session->set_flashdata('error','Fail.');
                $mainId = ($id > 0) ? "/".$id : "";
                redirect("product/add_product".$mainId);
            }
            
        }
        
        $data['title']= "Add Product";
        $value['brands'] = $this->crud->get_active_brands('igc_brands');
        $value['paretn_category'] = $this->crud->get_where("product_category",array("parent_id" => 0));
       
        $value['country_list'] = $this->crud->get_where("all_values",array("type" => "country", "status" => 1));
        $value['product_detail'] = ($id > 0) ? $this->crud->get_detail($id, "product_id", $this->table) : array();
        $this->load->view('header', $data);
        $this->load->view('form_product',$value);
        $this->load->view('footer');
    }

   public function product_sub_cat_ajax()
    {
        $parent_id = $this->input->post('id');
        $parent_sub_cat= $this->crud->get_where("product_category",array("parent_id" => $parent_id,'delete_status'=>0,'status'=>1));
        foreach($parent_sub_cat as $key=> $rows)
        {

     ?>
        <option value="<?php echo $rows['category_id']; ?>"><?php echo $rows['category_title']; ?></option>
    <?php

        }

    }

    public function delete($product_id){
        if(strlen($product_id) <= 0){ redirect('product'); }
        $product_id = $product_id;
        $checkProduct = $this->crud->get_detail($product_id, "product_id", "products");
        if(count($checkProduct) > 0){
            $update['deleted_date'] = date('Y-m-d h:i:s');
            $update['delete_status'] = 1;
            $update['status'] = 0;
            $update['deleted_by'] = "admin";
            $this->crud->move_to_trash($product_id,"product_id", $update, "products");
            $this->session->set_flashdata('success','Success.');
            redirect('product');
        }else{
            $this->session->set_flashdata('error','Error!');
            redirect('product');
        }
    }



    public function delete_cat($id){
        if(strlen($id) <= 0){ redirect('product/category'); }
        $category_id = $id;
        $checkCat = $this->crud->get_detail($category_id, "category_id", "product_category");
        if(count($checkCat) > 0){
            $update['deleted_date'] = date('Y-m-d h:i:s');
            $update['delete_status'] = "1";
            $update['status'] = "0";
            $update['deleted_by'] = "admin";
            $this->crud->move_to_trash($category_id,"category_id", $update, "product_category");
            $this->session->set_flashdata('success','Success.');
            redirect('product/category');
        }else{
            $this->session->set_flashdata('error','Error!');
            redirect('product/category');
        }
    }


    public function yesshow($id){
        if(strlen($id) <= 0){ redirect('product/category'); }
        $category_id = $id;
        $checkCat = $this->crud->get_detail($category_id, "category_id", "product_category");
        if(count($checkCat) > 0){
            $update['edit_date'] = date('Y-m-d h:i:s');
            $update['show_front'] = "1";
            $update['edit_by'] = "admin";
            $this->crud->move_to_trash($category_id,"category_id", $update, "product_category");
            $this->session->set_flashdata('success','Success.');
            redirect('product/category');
        }else{
            $this->session->set_flashdata('error','Error!');
            redirect('product/category');
        }
    }

    public function noshow($id){
        if(strlen($id) <= 0){ redirect('product/category'); }
        $category_id = $id;
        $checkCat = $this->crud->get_detail($category_id, "category_id", "product_category");
        if(count($checkCat) > 0){
            $update['edit_date'] = date('Y-m-d h:i:s');
            $update['show_front'] = "0";
            $update['edit_by'] = "admin";
            $this->crud->move_to_trash($category_id,"category_id", $update, "product_category");
            $this->session->set_flashdata('success','Success.');
            redirect('product/category');
        }else{
            $this->session->set_flashdata('error','Error!');
            redirect('product/category');
        }
    }

//For hot categories
     public function yes_hot($id){
        if(strlen($id) <= 0){ redirect('product/category'); }
        $category_id = $id;
        $checkCat = $this->crud->get_detail($category_id, "category_id", "product_category");
        if(count($checkCat) > 0){
            $update['edit_date'] = date('Y-m-d h:i:s');
            $update['hot_status'] = "1";
            $update['edit_by'] = "admin";
            $this->crud->move_to_trash($category_id,"category_id", $update, "product_category");
            $this->session->set_flashdata('success','Success.');
            redirect('product/category');
        }else{
            $this->session->set_flashdata('error','Error!');
            redirect('product/category');
        }
    }

    public function no_hot($id){
        if(strlen($id) <= 0){ redirect('product/category'); }
        $category_id = $id;
        $checkCat = $this->crud->get_detail($category_id, "category_id", "product_category");
        if(count($checkCat) > 0){
            $update['edit_date'] = date('Y-m-d h:i:s');
            $update['hot_status'] = "0";
            $update['edit_by'] = "admin";
            $this->crud->move_to_trash($category_id,"category_id", $update, "product_category");
            $this->session->set_flashdata('success','Success.');
            redirect('product/category');
        }else{
            $this->session->set_flashdata('error','Error!');
            redirect('product/category');
        }
    }





    public function newarrival($product_id){
        if(strlen($product_id) <= 0){ redirect('product'); }
        $product_id = $product_id;
        $checkProduct = $this->crud->get_detail($product_id, "product_id", "products");
        if(count($checkProduct) > 0){
            $update['edit_date'] = date('Y-m-d h:i:s');
            $update['new_arrival'] = "1";
            $update['edit_by'] = "admin";
            $this->crud->move_to_trash($product_id,"product_id", $update, "products");
            $this->session->set_flashdata('success','Success.');
            redirect('product');
        }else{
            $this->session->set_flashdata('error','Error!');
            redirect('product');
        }
    }

    public function notnewarrival($product_id){
        if(strlen($product_id) <= 0){ redirect('product'); }
        $product_id = $product_id;
        $checkProduct = $this->crud->get_detail($product_id, "product_id", "products");
        if(count($checkProduct) > 0){
            $update['edit_date'] = date('Y-m-d h:i:s');
            $update['new_arrival'] = "0";
            $update['edit_by'] = "admin";
            $this->crud->move_to_trash($product_id,"product_id", $update, "products");
            $this->session->set_flashdata('success','Success.');
            redirect('product');
        }else{
            $this->session->set_flashdata('error','Error!');
            redirect('product');
        }
    }

    public function activate($product_id){
        if(strlen($product_id) <= 0){ redirect('product'); }
        $product_id = $product_id;
        $checkProduct = $this->crud->get_detail($product_id, "product_id", "products");
        if(count($checkProduct) > 0){
            $update['edit_date'] = date('Y-m-d h:i:s');
            $update['status'] = "1";
            $update['edit_by'] = "admin";
            $this->crud->move_to_trash($product_id,"product_id", $update, "products");
            $this->session->set_flashdata('success','Success.');
            redirect('product');
        }else{
            $this->session->set_flashdata('error','Error!');
            redirect('product');
        }
    }

    public function inactive($product_id){
        if(strlen($product_id) <= 0){ redirect('product'); }
        $product_id = $product_id;
        $checkProduct = $this->crud->get_detail($product_id, "product_id", "products");
        if(count($checkProduct) > 0){
            $update['edit_date'] = date('Y-m-d h:i:s');
            $update['status'] = "0";
            $update['edit_by'] = "admin";
            $this->crud->move_to_trash($product_id,"product_id", $update, "products");
            $this->session->set_flashdata('success','Success.');
            redirect('product');
        }else{
            $this->session->set_flashdata('error','Error!');
            redirect('product');
        }
    }





    //function to create log
    public function create_log($insert)
    {

        $insert['ip_address'] = get_ip();
        $insert['user_id'] = $this->session->userdata('admin_id');
        $insert['date'] = date('Y-m-d:H:i:s');
        $insert['module_name'] =  "Products";
        $this->db->insert('igc_user_logs', $insert);
    }
//to make product permitted
    public function checked_product_list($product_id){
        if(strlen($product_id) <= 0){ redirect('product'); }
        $product_id = $product_id;
        $checkProduct = $this->crud->get_detail($product_id, "product_id", "products");
        if(count($checkProduct) > 0){
            $update['edit_date'] = date('Y-m-d h:i:s');
            $update['admin_status'] = "1";
            $update['edit_by'] = "admin";
            $this->crud->move_to_trash($product_id,"product_id", $update, "products");
            $this->session->set_flashdata('success','Success.');
            redirect('product/check_list/0');
        }else{
            $this->session->set_flashdata('error','Error!');
            redirect('product/check_list/0');
        }
    }
//to make product non permitted
    public function unchecked_product_list($product_id){
        if(strlen($product_id) <= 0){ redirect('product'); }
        $product_id = $product_id;
        $checkProduct = $this->crud->get_detail($product_id, "product_id", "products");
        if(count($checkProduct) > 0){
            $update['edit_date'] = date('Y-m-d h:i:s');
            $update['admin_status'] = "0";
            $update['edit_by'] = "admin";
            $this->crud->move_to_trash($product_id,"product_id", $update, "products");
            $this->session->set_flashdata('success','Success.');
            redirect('product/check_list/1');
        }else{
            $this->session->set_flashdata('error','Error!');
            redirect('product/check_list/1');
        }
    }
    //to redirect to the non permitted products,only which is selected in the header
    public function unchecked_list($id){
        $data['records']=$this->crud->get_where($this->table,array('product_id'=>$id));
        $data['title']="Not Permitted List";
        $this->load->view('header', $data);
        $this->load->view('check_product_list');
        $this->load->view('footer');
    }

}

