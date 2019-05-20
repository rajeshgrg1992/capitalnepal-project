<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sellers extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();

        $this->load->model('crud_model','crud');
        $this -> load -> library('form_validation');
        $this->form_validation->CI =& $this;   
        $this -> load -> helper('security');

    }

    public  $table = "igc_sellers";
    public  $field_name = "seller_id";
    public  $redirect = "sellers";

    public function index()
    {
        $data['records'] = $this->crud->get_where("igc_sellers",array("delete_status"=>"0","activated"=>"Y"));
        $data['title']= "Sellers";
        $this->load->view('header', $data);
        $this->load->view('sellers_list');
        $this->load->view('footer');
    }


    public function form($id=0)
    {
        if($this->input->post())
        {
            $folder_path = '../uploads/sellers/';

            $this->form_validation->set_rules('s_username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
            if(empty($this->input->post('seller_id')))
            {
                $this->form_validation->set_rules('s_password', 'Password', 'required|matches[s_cpassword]|min_length[6]|callback_password_check');
                $this->form_validation->set_rules('s_cpassword', 'Re Type Password', 'required'); 
            }

            if ($this->form_validation->run()) 
            {
                    $insert['s_username'] = $this->input->post('s_username');
                    $password =  md5($this->input->post('s_password'));
                    $insert['s_password'] =$password;


            $seller_id = $this->input->post('seller_id');
            $insert['last_name'] = $this->input->post('last_name');
            $insert['first_name'] = $this->input->post('first_name');
            $insert['middle_name'] = $this->input->post('middle_name');
            $insert['address'] = $this->input->post('address');
            $insert['city'] = $this->input->post('city');
            $insert['state'] = $this->input->post('state');
            $insert['zip_code'] = $this->input->post('zip_code');
            $insert['phone'] = $this->input->post('phone');
            $insert['country'] = $this->input->post('country');
            $insert['email'] = $this->input->post('email');

            $insert['company_name'] = $this->input->post('company_name');
            $insert['business_type'] = $this->input->post('business_type');
            $insert['company_website'] = $this->input->post('company_website');
            $insert['company_offer'] = $this->input->post('company_offer');
        
            $insert['active_status'] = $this->input->post('active_status');
            $insert['description'] = $this->input->post('description');

            $insert['activated'] = 'Y';


            $activation_code = md5(rand());
            $check_activation_code = $this->crud->get_detail($activation_code,"activation_code","igc_sellers");
            while(count($check_activation_code) > 0)
            {
                 $activation_code =  md5(rand());
                 $check_activation_code = $this->crud->get_detail($activation_code,"activation_code","igc_sellers");
            }
            $insert['activation_code'] = $activation_code; 

            $code = strtoupper(substr(md5(uniqid(rand(1234,9876).time().rand(1111,9999), true)), 3,7));
            $check_code = $this->crud->get_detail($code,"seller_code","igc_sellers");
            while(count($check_code) > 0)
            {
                $code = strtoupper(substr(md5(uniqid(rand(1234,9876).time().rand(1111,9999), true)), 3,7));
                $check_code = $this->crud->get_detail($code,"seller_code","igc_sellers");
            }

            $insert['seller_code']=$code;

            
//             $num1 = "RF";
// //                $num2 = rand(1111111111,9999999999);
//             $random_unique_int = mt_rand(1200,999999999);
//             $reference_nos = $num1.$random_unique_int;
//             $insert['reference_no'] = $reference_nos;


            $rand = md5(rand());
            $seller_image= $rand. str_replace(" ","",$_FILES['seller_image']['name']);
            $seller_imagetmp=$_FILES['seller_image']['tmp_name'];
            if($seller_id =="")
            {
                if($_FILES['seller_image']['name'] !="")
                {
                    $insert['seller_image']= $seller_image;

                    move_uploaded_file($seller_imagetmp,$folder_path.$seller_image);

                }
                $insert['created'] = date('Y-m-d:H:i:s');
                $result = $this->crud->insert($insert, $this->table);
                if($result)
                {
                    //code to create log
                    $log['module_title']=  $insert['first_name'];
                    $log['action_id']= "1";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','New Sellers has been added.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to add Sellers.');
                    redirect($this->redirect);
                }

            }
            else{
                $insert['updated'] = date('Y-m-d:H:i:s');
                if($_FILES['seller_image']['name'] !="")
                {
                    $pre_seller_image = $this->input->post('pre_seller_image');

                    @unlink($folder_path.$pre_seller_image); //deleting the file

                    $insert['seller_image']= $seller_image;

                    move_uploaded_file($seller_imagetmp,$folder_path.$seller_image);

                }

                $result = $this->crud->update($seller_id, $this->field_name, $insert, $this->table);
                if($result)
                {
                    //code to create log
                    $log['module_title']=  $insert['first_name'];
                    $log['action_id']= "2";
                    $this->create_log($log);

                    $this->session->set_flashdata('success','Seller has been updated.');
                    redirect($this->redirect);
                }
                else{
                    $this->session->set_flashdata('error','Unable to update the Seller.');
                    redirect($this->redirect);
                }

            }
         }


        }

        $data['detail'] = $this->crud->get_detail($id, $this->field_name, $this->table);
        $data['business_type'] = $this->crud->get_where('all_business_type',array('type'=>"business",'status'=>1));
        $data['countries'] = $this->crud->get_where('all_values',array('type'=>"country",'status'=>1));
        $data['scripts'] = array('themes/js/form-validator');
        $data['title']= "Add/Edit Sellers";

        $this->load->view('header', $data);
        $this->load->view('sellers_form');
        $this->load->view('footer');
    }




    //function to delete

    public function delete($seller_id)
    {
        $seller_detail = $this->crud->get_detail($seller_id,  $this->field_name, $this->table);

        $result = $this->crud->delete($seller_id, $this->field_name, $this->table);
        if($result)
        {
            //code to create log
            $log['module_title']= $seller_detail['first_name'];
            $log['action_id']= "3";
            $this->create_log($log);

            $path='../uploads/sellers/';
            @unlink($path.$seller_detail['seller_image']);
            $this->session->set_flashdata('success','Seller has been deleted.');
            redirect($this->redirect);
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the Seller.');
            redirect($this->redirect);
        }

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


    public function password_check($str)
    {
        // echo $str;
        // exit();
        if (preg_match('#[0-9]#', $str) && preg_match('#[a-zA-Z]#', $str)) {
            return TRUE;
        }
        return FALSE;
    }

}

