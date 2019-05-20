<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seller_registration extends CI_Controller{
    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('crud_model','crud');
        $this->load->model('login_model','login');
        $this -> load -> library('form_validation');
        //$this->form_validation->CI =& $this;   
        $this -> load -> helper('security');
        $this->load->library('cart');
    }

    public  $table = "igc_sellers";
    public  $field_name = "seller_id";
    public  $redirect = "seller_registration/form";

    public function form()
    {
        if($this->input->post())
        {
            $folder_path = 'uploads/sellers/';

            $this->form_validation->set_rules('s_username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
            $this->form_validation->set_rules('s_password', 'Password', 'required|matches[s_cpassword]|min_length[6]|callback_password_check');
            $this->form_validation->set_rules('s_cpassword', 'Re Type Password', 'required'); 
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_check_seller_already_exist');


            if ($this->form_validation->run()) 
            {
                    $insert['s_username'] = $this->input->post('s_username');
                    $password =  md5($this->input->post('s_password'));
                    $insert['s_password'] =$password;
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
                
                    $insert['active_status'] = "1";
                    $insert['permission'] = "0";
                    $insert['description'] = $this->input->post('description');

                    $activation_code = md5(rand());
                    $check_activation_code = $this->crud->get_detail($activation_code,"activation_code","igc_sellers");
                    while(count($check_activation_code) > 0)
                    {
                         $activation_code =  md5(rand());
                         $check_activation_code = $this->crud->get_detail($activation_code,"activation_code","igc_sellers");
                    }

                    $insert['activated'] = 'N';
                    $insert['activation_code'] = $activation_code; 

                    $code = strtoupper(substr(md5(uniqid(rand(1234,9876).time().rand(1111,9999), true)), 3,7));
                    $check_code = $this->crud->get_detail($code,"seller_code","igc_sellers");
                    while(count($check_code) > 0)
                    {
                        $code = strtoupper(substr(md5(uniqid(rand(1234,9876).time().rand(1111,9999), true)), 3,7));
                        $check_code = $this->crud->get_detail($code,"seller_code","igc_sellers");
                    }

                    $insert['seller_code']=$code;

                    $rand = md5(rand());
                    $seller_image= $rand. str_replace(" ","",$_FILES['seller_image']['name']);
                    $seller_imagetmp=$_FILES['seller_image']['tmp_name'];
                    if($_FILES['seller_image']['name'] !="")
                    {
                        $insert['seller_image']= $seller_image;

                        move_uploaded_file($seller_imagetmp,$folder_path.$seller_image);

                    }
                    $insert['created'] = date('Y-m-d:H:i:s');
                    $insert['last_login'] = date('Y-m-d:H:i:s');

                    if($this->send_account_activation_mail( $insert['email'],  $insert['activation_code']) == "TRUE")
                    {
                        $result = $this->crud->insert($insert, $this->table);

                        if ($result) {
                            $this->session->set_flashdata('success', "Registration Successful.Please check your mail to activate your account.");
                            redirect('seller_registration/form');
                        } else {
                            $this->session->set_flashdata('error', "Internal Server Error.Please try again Later.");
                            redirect('seller_registration/form');
                        }
                    }
                    else{

                        $data['error'] = "Error in sending email .Please try again Later.";


                    }
             }


        }

        $data['category_front_lists'] = $this->crud->get_front_categories();

        $data['business_type'] = $this->crud->get_where('all_business_type',array('type'=>"business",'status'=>1));
        $data['countries'] = $this->crud->get_where('all_values',array('type'=>"country",'status'=>1));
        $data['scripts'] = array('themes/js/form-validator');
        $data['title']= "Vendor Registration";

        $this->load->view('header_category', $data);
        $this->load->view('seller_registration');
        $this->load->view('footer');
    }

    public function check_seller_already_exist($str)
    {

        $user = $this->login->check_email_exist_seller($str);

        if(empty($user))
        {
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_seller_already_exist', 'You are already register in our system.');
            return FALSE;
        }

    }

     public function send_account_activation_mail($email, $md5)
    {
        $this->load->library('encrypt');

        $site_settings = $this->site_settings_model->get_site_settings();
        $server = $this->crud->get_mail_info();


         $logo = $this->db->query("SELECT * FROM igc_pictures WHERE locate ='1' AND delete_status ='0'");
         $logors = $logo->result_array();
         foreach($logors  as $logos )
         {
             $path = 'uploads/pictures/';
             if (file_exists($path.$logos['pictures_image']) && $logos['pictures_image'] !="")
             {
                $image=$path.$logos['pictures_image'];
             }
         }

        $password = $this->encrypt->decode($server['password']);

        $server_url = base_url().'seller_registration/account_activation/'.$md5;

        $this->load->library('mailer');

        $mail  = new PHPMailer();

        $body = '<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>'. $site_settings['site_name']. ' Account Activation</title>
</head>

<body>
<div style="width:580px;margin:0 auto;font:12px Arial,Helvetica,sans-serif;background:#fff">
  <div style="margin:0 0 10px"> <img alt="Image" src="'.base_url().$image.'"> </div>


    <table width="100%" cellspacing="0" cellpadding="5" border="0">

        <tbody>

         <tr>
           <p>
          In order to activate your account. please click the  Link. '.'<a href="'.$server_url.'">'.$server_url.'</a>'.'</p>
        </tr>

        <tr>
            <td colspan="2" style="background:#EEE; text-align:left;">Thanks and Regards,<br />
                Eshopping Nepal<br />
                <a href="<?php echo site_url(); ?>" target="_blank" style="color:#46216F; text-decoration:underline;">'.$site_settings['site_url'].'</a></td>
        </tr>
        


        </tbody>
    </table>
</div>
</body>
</html>' ;




        if($server['smtp_connect'] == "true")
        {
            $mail->IsSMTP(); // telling the class to use SMTP
        }
        // $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

        $mail->SMTPAuth   = true;                  // enable SMTP authentication

        $mail->SMTPSecure = $server['server_prefix'];                 // sets the prefix to the servier

        $mail->Host       =  $server['host'];      // sets GMAIL as the SMTP server

        $mail->Port       = $server['port'];                  // set the SMTP port for the GMAIL server

        $mail->Username   = $server['username'];  // GMAIL username

        $mail->Password   = $password;          // GMAIL password

        $mail->SetFrom($server['send_from_email'], $server['send_from_name']);

        $mail->AddReplyTo($server['reply_to_email'],$server['reply_to_name']);

        $mail->Subject    = $site_settings['site_name']." Vendor Account Activation";


        $mail->MsgHTML($body);



        $mail->AddAddress($email, $server['send_from_name']);



      if(! $mail->Send())
       {
           return FALSE;

      }
        else
        {

            return TRUE;

        }

    }


    //function to activate account

    public function account_activation($code)
    {
        $detail =  $this->login->get_activation_detail_sellers($code);
        if(!empty($detail))
        {
         $update['activated'] =  "Y";
            $update['updated']= date('Y-m-d:H:i:s');
           $result =  $this->crud->update($code,'activation_code', $update, 'igc_sellers');
            if($result)
            {
                $this->session->set_flashdata('success','Your account has been activated successfully.');
                redirect(base_url().'seller/login');
            }
            else{
                $this->session->set_flashdata('error','Unable to activate your account.');
                redirect(base_url().'seller/login');
            }
        }
        else{
            redirect('home');
        }
    }

    public function create_log($insert)
    {

        $insert['ip_address'] = get_ip();
        $insert['user_id'] = $this->session->userdata('admin_id');
        $insert['date'] = date('Y-m-d:H:i:s');
        $insert['module_name'] =  "Seller Registration From Website";
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

