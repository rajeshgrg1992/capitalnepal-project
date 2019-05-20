<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model
{



    public function get_parent_category_menu()
    {
        $this->db->select('category_id');
        $this->db->select('category_url');
        $this->db->select('category_name');
        $this->db->where('delete_status','0')->where('publish_status','1')->where('group_id','1')->where('parent_id','0')->where('category_code','HM');
        $this->db->order_by('position','ASC');
        $result =  $this->db->get('igc_package_category')->result_array();
        return $result;

    }
    public function get_parent_category_sub_menu($parent_id)
    {
        $this->db->select('category_id');
        $this->db->select('category_name');
        $this->db->select('category_url');
        $this->db->where('delete_status','0')->where('publish_status','1')->where('group_id','1')->where('parent_id',$parent_id)->where('category_code','HM');
        $this->db->order_by('position','ASC');
        $result =  $this->db->get('igc_package_category')->result_array();
        return $result;

    }




    public function get_article_list($id, $start_point = 0, $per_page = 0){


        $query2 = $this->db->query("SELECT * FROM `igc_content` WHERE `category_id` = $id AND `publish_status` = '1' AND `delete_status` ='0' ORDER by content_id DESC limit
		{$start_point},{$per_page}");
        $result2 = $query2->result_array();

        return $result2;



    }



    public function get_article_list_am($id, $start_point = 0, $per_page = 0){


        $query2 = $this->db->query("SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where
category_id = $id AND publish_status = 1 ORDER BY created DESC limit
		{$start_point},{$per_page}");
        $result2 = $query2->result_array();

        return $result2;



    }


    public function order_products_join($code)
    {
        $sql=$this->db->query("
                SELECT a.`product_id`,b.*,a.`quantity` FROM `igc_order_products` a
                JOIN `products` b ON a.`product_id`=b.`product_id` 
                WHERE b.`status`='1' AND b.`delete_status`='0' AND a.`customer_code`='$code'
            ");
        $result=$sql->result_array();
        return $result;
    }
    public function get_best_sellers()
    {
        $sql=$this->db->query("
                SELECT `id`,`product_id`,COUNT(`product_id`) AS total_sold FROM `igc_order_products` 
                WHERE `sold_status`='1'
                GROUP BY `product_id` 
                ORDER BY `total_sold` DESC
            ");
        $result=$sql->result_array();
        return $result;
    }
    public function get_most_view($id,$limit)
    {
        $sql=$this->db->query("
                SELECT a.*,COUNT(a.`product_id`) AS total_view FROM `products_ip_tracking` a
                JOIN `products` b on a.product_id=b.product_id
                WHERE b.product_category_id='$id'
                GROUP BY `product_id` 
                ORDER BY `total_view` DESC
                LIMIT $limit
            ");
        $result=$sql->result_array();
        return $result;
    }
    public function get_cat_best_sellers($field_name,$cat_id,$limit)
    {
        $sql=$this->db->query("
                SELECT a.`id`,a.`product_id`,COUNT(a.`product_id`) AS Total FROM `igc_order_products` a 
                WHERE a.`sold_status`='1' and a.`product_id` IN (SELECT b.`product_id` FROM `products` b WHERE b.`admin_status`='1' and b.`$field_name`='$cat_id')
                GROUP BY a.`product_id` 
                ORDER BY Total DESC
                LIMIT $limit
            ");
        $result=$sql->result_array();
        return $result;
    }

    public function get_front_categories()
    {

        $result=$this->get_where("product_category",array("parent_id" => "0", "delete_status" => "0","status" => "1","show_front"=>"1"));

        return $result;
    }

    public function get_all($table)
    {
        $result = $this->db->get($table)->result_array();
        return $result;
    }

    public function get_not_deleted($table)
    {
        $this->db->where('delete_status', "0");
        $result = $this->db->get($table)->result_array();
        return $result;
    }
    function get_last_ten_entries()
    {
        return $this->db->get('igc_job');  //Perform query (you'll need to update to select what you actually want from you database)
    }
    //get popup data
    public function get_popup(){

        $this->db->where('publish_status', '1');
        $this->db->where('delete_status', '0');
        $result = $this->db->get('igc_popup')->row_array();
        return $result;
    }


    public function get_results_english($search_term='default')
    {
        // Use the Active Record class for safer queries.
        $this->db->select('*');
        $this->db->from('products');
        $this->db->like('product_title',$search_term);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
    }


    public function get_active_not_delete_all($field_name,$table)
    {
        $this->db->where('publish_status','1');
        $this->db->where('delete_status','0');
        $this->db->order_by($field_name,'Desc');
        $result = $this->db->get($table)->result_array();
        return $result;
    }

    //function for the autocomplete
     public function Getdestination($keyword) {

        $this->db->like("destination", $keyword);
        return $this->db->get('igc_destination')->result_array();
    }

    //function for the autocomplete trek
     public function Getregion($keyword) {

        $this->db->like("region_name", $keyword);
        return $this->db->get('igc_regions')->result_array();
    }





    //function to  get  detail

    public function get_detail($id, $field_name, $table)
    {
        $this->db->where($field_name, $id);
        $result = $this->db->get($table)->row_array();
        return $result;
    }

    //function to  get  detail

    public function get_active_not_deleted_detail($id, $field_name, $table)
    {
        $this->db->where('publish_status', '1');
        $this->db->where('delete_status', '0');
        $this->db->where($field_name, $id);
        $result = $this->db->get($table)->row_array();
        return $result;
    }


    public function get_active_not_deleted_reporter_detail($id, $field_name, $table)
    {
        $this->db->where('publish_status', '1');
        $this->db->where('delete_status', '0');
        $this->db->where($field_name, $id);
        $result = $this->db->get($table)->result_array();
        return $result;
    }


    // public function get_reporter_name_by_id($slug){
    //     $query = $this->get_where('igc_reporter', array("reporter_id" => $slug)
    //     );
    //     $data = $query->row_array();
    //     if($data['reporter_name']){
    //         return $data['reporter_name'];
    //     }else{
    //         return "NONE";
    //     }

    // }




//get detail for the status
//    public function get_active_not_deleted_details($id, $field_name, $table)
//    {
//        $this->db->where('status', '1');
//        $this->db->where('delete_status', '0');
//        $this->db->where($field_name, $id);
//        $result = $this->db->get($table)->row_array();
//        return $result;
//    }




    public function get_active_not_delete_records($id, $field_name, $table)
    {
        $this->db->where('publish_status', '1');
        $this->db->where('delete_status', '0');
        $this->db->where($field_name, $id);
        $result = $this->db->get($table)->result_array();
        return $result;
    }


    public function get_not_deleted_detail($id, $field_name, $table)
    {
        $this->db->where($field_name, $id);
        $this->db->where('delete_status', "0");
        $result = $this->db->get($table)->row_array();
        return $result;
    }


    //function to count

    public function count_active_not_deleted_records($id, $field_name, $table)
    {
        $this->db->where($field_name, $id);
        $this->db->where('publish_status', "1");
        $this->db->where('delete_status', "0");
        $result = $this->db->get($table)->num_rows();
        return $result;
    }


    public function get_not_deleted_row($id, $field_name, $table)
    {
        $this->db->where($field_name, $id);
        $this->db->where('delete_status', "0");
        $result = $this->db->get($table)->row_array();
        return $result;
    }


    public function not_deleted_total($table)
    {
        $this->db->where('delete_status', "0");
        $result = $this->db->get($table)->num_rows();
        return $result;
    }

//Search CV
public function get_results($search_term='default')
    {
        // Use the Active Record class for safer queries.
        $this->db->select('*');
        $this->db->from('igc_job');
        $this->db->like('firstname',$search_term);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
    }



    //Search Jobs
public function get_job_result($search_term='default')
    {
        // Use the Active Record class for safer queries.
        $this->db->select('*');
        $this->db->from('igc_news');
        $this->db->like('news_title',$search_term);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
    }

//function to insert

    public function insert($insert, $table)
    {
        $result = $this->db->insert($table, $insert);
        if ($result) {
            return $result;
        } else {
            return false;

        }
    }

    //function to insert and return id

    public function insert_return_id($insert, $table)
    {
        $this->db->insert($table, $insert);
        $result = $this->db->insert_id();
        if ($result) {
            return $result;
        } else {
            return false;

        }
    }


    //function to update

    public function update($id, $field_name, $update, $table)
    {
        $this->db->where($field_name, $id);
        $result = $this->db->update($table, $update);
        if ($result) {
            return $result;
        } else {
            return false;

        }
    }


    public function soft_delete($id, $field_name, $table)
    {
        $update['updated'] = date('Y-m-d:H:i:s');
        $update['delete_status'] = "1";
        $this->db->where($field_name, $id);
        $result = $this->db->update($table, $update);
        if ($result) {
            return $result;
        } else {
            return false;
        }

    }

    public function delete($id, $field_name, $table)
    {

        $this->db->where($field_name, $id);
        $result = $this->db->delete($table);
        if ($result) {
            return $result;
        } else {
            return false;
        }

    }


    public function get_detail_rows($id, $field_name, $table)
    {
        $this->db->where($field_name, $id);
        $result = $this->db->get($table)->result_array();
        return $result;
    }


    public function get_detail_records($id, $field_name, $table)
    {
        $this->db->where($field_name, $id);
        $this->db->where('delete_status', '0');
        $result = $this->db->get($table)->result_array();
        return $result;
    }


    //get active and not deleted

    public function get_active_not_deleted($id, $field_name, $table)
    {
        $this->db->where($field_name, $id);
        $this->db->where('publish_status', '1');
        $this->db->where('delete_status', '0');
        $result = $this->db->get($table)->result_array();
        return $result;
    }

    //function mail server settings

    public function get_mail_info()
    {
        $this->db->where('delete_status', '0');
        $this->db->where('active_status', '1');
        $result = $this->db->get('igc_mail_server_setting')->row_array();
        return $result;


    }


//function to get forex rate

public function get_forex($date, $start_point=0, $per_page=0)
{
   $query = $this->db->query("select * from igc_forex_detail where publish_status = '1' and forex_id in (select forex_id from igc_forex_index where forex_date='$date' and delete_status='0') limit {$start_point},{$per_page}");
   $result =  $query->result_array();
   return $result;
}





    public function get_mainCategory_records($table)
    {
        $this->db->where('status', "1")->where('delete_status', "0");
        $result = $this->db->get($table)->result_array();
        return $result;
    }


    public function get_active_records($table)
    {
        $this->db->where('publish_status', "1");
        $result = $this->db->get($table)->result_array();
        return $result;
    }

    public function get_active_records_desc($table)
    {
        $this->db->where('publish_status', "1");
        $result = $this->db->get($table)->result_array();
        return $result;
    }



    public function get_home_work($table)
    {
        $this->db->where('publish_status', "1")->limit(15);

        $result = $this->db->get($table)->result_array();
        return $result;
    }




    public function get_active_services($table)
    {
        $this->db->where('publish_status', "1")->limit(4);

        $result = $this->db->get($table)->result_array();
        return $result;
    }

    public function get_active_review($table)
    {
        $this->db->where('publish_status', "1");
        $this->db->where('delete_status', "0");
        $result = $this->db->get($table)->result_array();
        return $result;
    }


    // public function get_topbar_menu($table)
    // {
    //     $this->db->where('publish_status', "1")->where('group_id','1')->where('parent_id','0');
    //     $this->db->where('show_on_menu','T');
    //     $this->db->where('delete_status','0');
    //     $this->db->order_by('position','ASC');
    //     $result = $this->db->get($table)->result_array();
    //     return $result;
    // }






//function get parent menu
// public function get_parent_oursolutions_menu()
//     {
//         $this->db->select('content_id');
//         $this->db->select('content_url');
//         $this->db->select('content_page_title');
//         $this->db->where('delete_status','0')->where('publish_status','1')->where('group_id','1')->where('parent_id','0')->where('show_on_menu','T');
//         $this->db->order_by('position','ASC');
//         $result =  $this->db->get('igc_content')->result_array();
//         return $result;
//         print_r($result);

//     }


// Start of functions to fetch header and footer menu
    public function get_parent_top_menu()
    {
        $this->db->select('content_id');
        $this->db->select('content_url');
        $this->db->select('content_page_title');
        $this->db->where('delete_status','0')->where('publish_status','1')->where('group_id','1')->where('parent_id','0');
        $this->db->group_start();
            $this->db->or_where('show_on_menu','T');
            $this->db->or_where('show_on_menu','B');
        $this->db->group_end();
        $this->db->order_by('position','ASC');
        $result =  $this->db->get('igc_content')->result_array();
        return $result;
    }

    public function get_parent_footer_menu()
    {
        $this->db->select('content_id');
        $this->db->select('content_url');
        $this->db->select('content_page_title');
        $this->db->where('delete_status','0')->where('publish_status','1')->where('group_id','1')->where('parent_id','0');
         $this->db->group_start();
            $this->db->or_where('show_on_menu','Y');
            $this->db->or_where('show_on_menu','B');
        $this->db->group_end();
        $this->db->order_by('position','ASC');
        $result =  $this->db->get('igc_content')->result_array();
        return $result;

    }
    public function get_parent_top_sub_menu($parent_id)
    {
        $this->db->select('content_id');
        $this->db->select('content_page_title');
        $this->db->select('content_url');
        $this->db->where('delete_status','0')->where('publish_status','1')->where('group_id','1')->where('parent_id',$parent_id);
         $this->db->group_start();
            $this->db->or_where('show_on_menu','T');
            $this->db->or_where('show_on_menu','B');
        $this->db->group_end();
        $this->db->order_by('position','ASC');
        $result =  $this->db->get('igc_content')->result_array();
        return $result;
    }
    public function get_parent_footer_sub_menu($parent_id)
    {
        $this->db->select('content_id');
        $this->db->select('content_page_title');
        $this->db->select('content_url');
        $this->db->where('delete_status','0')->where('publish_status','1')->where('group_id','1')->where('parent_id',$parent_id);
         $this->db->group_start();
            $this->db->or_where('show_on_menu','Y');
            $this->db->or_where('show_on_menu','B');
        $this->db->group_end();
        $this->db->order_by('position','ASC');
        $result =  $this->db->get('igc_content')->result_array();
        return $result;

    }

// end of functions to fetch data in top and footer menu with adjacency list//
//
//

    public function get_parent_header_menu($code)
    {
        $this->db->select('category_name');
        $this->db->select('category_url');
        $this->db->where('delete_status','0')->where('publish_status','1')->where('category_code', $code)->where('group_id','1')->where('parent_id','0');
        $this->db->order_by('position','ASC');
        $result =  $this->db->get(' igc_package_category')->result_array();
        return $result;

    }

    /** IH */

    public function get_accommodation()
    {
        $this->db->where('status','1');
        $result =  $this->db->get('igc_accommodation_setting')->result_array();
        return $result;

    }


    //function get atos setting

    public function get_atos_setting()
    {
        $this->db->where('delete_status','0');
        $this->db->where('active_status','1');
        $result =  $this->db->get('igc_atos_setting')->row_array();
        return $result;
    }


    //function get paypal setting

    public function get_paypal_setting()
    {
        $this->db->where('delete_status','0');
        $this->db->where('publish_status','1');
        $result =  $this->db->get('igc_paypal_setting')->row_array();
        return $result;
    }

    public function get_where_row($table,$array){
        if(count($array) > 0){
            foreach($array as $key => $value){
                $this->db->where("$key","$value");
            }
        }
        $this->db->order_by("created",'DESC');
        $result = $this->db->get($table)->row_array();
        return $result;
    }
    public function get_where($table,$array){
        if(count($array) > 0){
            foreach($array as $key => $value){
                $this->db->where("$key","$value");
            }
        }
        $result = $this->db->get($table)->result_array();
        return $result;
    }
     public function get_and_or_where($table,$and_array,$or_array){
        if(count($and_array) > 0){
            foreach($and_array as $key => $value){
                $this->db->where("$key","$value");
            }
        }
        $this->db->group_start();
        if(count($or_array) > 0){
            foreach($or_array as $key => $value){
                $this->db->or_where("$key","$value");
            }
        }
        $this->db->group_end();
        $result = $this->db->get($table)->result_array();
        return $result;
    }
    public function get_and_or_where_order($table,$and_array,$or_array){
        if(count($and_array) > 0){
            foreach($and_array as $key => $value){
                $this->db->where("$key","$value");
            }
        }
        $this->db->group_start();
        if(count($or_array) > 0){
            foreach($or_array as $key => $value){
                $this->db->or_where("$key","$value");
            }
        }
        $this->db->group_end();
        $result = $this->db->order_by("added_date",'DESC')->get($table)->result_array();
        return $result;
    }


    public function get_where_order_by($table,$array,$orderBy,$order){
        if(count($array) > 0){
            foreach($array as $key => $value){
                $this->db->where("$key","$value");
            }
        }
        $this->db->order_by($orderBy,$order);
        $result = $this->db->get($table)->result_array();
        return $result;
    }

    public function get_where_order_by_limit($table,$array,$orderBy,$order,$limit){
        if(count($array) > 0){
            foreach($array as $key => $value){
                $this->db->where("$key","$value");
            }
        }
        $this->db->order_by($orderBy,$order);
        $this->db->limit($limit);
        $result = $this->db->get($table)->result_array();
        return $result;
    }
    public function get_where_order_pagination($table,$array,$orderBy,$order,$start_point,$limit){
        if(count($array) > 0){
            foreach($array as $key => $value){
                $this->db->where("$key","$value");
            }
        }
        $this->db->order_by($orderBy,$order);
        $this->db->limit($limit,$start_point);
        $result = $this->db->get($table)->result_array();
        return $result;
    }

    public function get_site_language(){
        return ($this->session->userdata('this_site_language')) ? $this->session->userdata('this_site_language') : "en";
    }

    public function get_switch_language_value($label){

        $label = trim($label);
        $site_language = $this->get_site_language();
        $label_value = ($site_language == "ar") ? $label."_".$site_language : $label;
        return $label;

    }

    public function getLanguageBySlug($slug){

        $language = $this->get_site_language();

        if(empty($language) || $language == "" || strlen($language) <= 0){ $language = 'en'; }
        else{ $language = $language; }
        if(strlen(trim($slug)) <= 0){ $slug = "language"; }
        else{ $slug = trim($slug); }

        $languageLabel = "language_".$language;

        $this->db->where("slug",$slug);
        $result = $this->db->get("tbl_language")->row_array();
        if(count($result) > 0){
            return ucwords($result[$languageLabel]);
        }else{
            return "";
        }
    }

    public function get_products_rating($product_id)
    {
        $sql=$this->db->query("
                SELECT product_id,COUNT(*) AS total,SUM(`product_rating`) AS sum,AVG(`product_rating`) as average 
                FROM `products_rating` 
                WHERE `product_id`='$product_id' AND `delete_status`='0'
            ");
        $result=$sql->row_array();
        return $result;
    }
    public function get_star_rating($avg)
    {
        $star='';
        if ($avg==0.00):
                                        $star .= '<i class="fa fa-star-o"></i>';
        elseif ($avg < 0.50):
                                        $star .='<i class="fa fa-star-half-o"></i>';
        elseif ($avg > 0.50):
                                         $star .='<i class="fa fa-star"></i>';
        endif;

        if ($avg <= 1.00):
                                        $star .='<i class="fa fa-star-o"></i>';
        elseif ($avg <= 1.50):
                                        $star .='<i class="fa fa-star-half-o"></i>';
        elseif ($avg > 1.50):
                                         $star .='<i class="fa fa-star"></i>';
        endif;
        if ($avg <= 2.00):
                                        $star .='<i class="fa fa-star-o"></i>';
        elseif ($avg <= 2.50):
                                        $star .='<i class="fa fa-star-half-o"></i>';
        elseif ($avg > 2.50):
                                         $star .='<i class="fa fa-star"></i>';
        endif;
        if ($avg <= 3.00):
                                        $star .='<i class="fa fa-star-o"></i>';
        elseif ($avg <= 3.50):
                                        $star .='<i class="fa fa-star-half-o"></i>';
        elseif ($avg > 3.50):
                                         $star .='<i class="fa fa-star"></i>';
        endif;
        if ($avg <= 4.00):
                                        $star .='<i class="fa fa-star-o"></i>';
        elseif ($avg <= 4.50):
                                        $star .='<i class="fa fa-star-half-o"></i>';
        elseif ($avg > 4.50):
                                        $star .='<i class="fa fa-star"></i>';
       endif;
       return $star;
    }

    public function currency_conversion($currency,$money)
    {
        $settings = $this->site_settings_model->get_site_settings();
        $npr=$settings['npr'];
        if($currency == "NPR")
        {
            $conv_money= $money;
        }
        elseif($currency == "$")
        {
            $conv_money= ($money/$settings['dollar'])*$npr;
        }
        elseif($currency == "AED")
        {
            $conv_money= ($money/$settings['aed'])*$npr;
        }
        elseif($currency == "€")
        {
            $conv_money= ($money/$settings['euro'])*$npr;
        }
        elseif($currency == "£")
        {
            $conv_money= ($money/$settings['pound'])*npr;
        }
        elseif($currency == "INR")
        {
            $conv_money= ($money/$settings['inr'])*npr;
        }
        $f_conv_money=round($conv_money,3);
        return $f_conv_money;
    }

}