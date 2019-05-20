<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
        $this->load->model('content_model','content');
        $this->load->model('crud_model','crud');
        $this->load->model('site_settings_model','site_settings');
        $this->load->model('mail_setting/mail_setting_model','server');

        $this->load->library('encrypt');

    }

    public function index()
    {
        $data['records'] = $this->content->get_content_list();

        $data['title']= "News List";
        $this->load->view('header', $data);
        $this->load->view('content_list');
        $this->load->view('footer');
    }

    public function form($id=0)
    {

        $data['title']= "Add/Edit News ";
        $this->load->view('header', $data);
        $this->load->view('add');
        $this->load->view('footer');
    }

    public function check_name_exist($str, $content_id)
    {
        $string = str_replace(" ","-",$str);
        $name = $this->content->check_name_exist($string, $content_id);
        
        if(empty($name))
        {
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_name_exist', 'Content page title already exist.');
            return FALSE;
        }

    }



    public function comment($id)
    {
        $detail= $this->crud->get_detail($id, 'content_id', 'igc_content');
        if($detail['content_type']=="Page")
        {
            redirect('content');
        }
        $data['page_title'] = $detail['content_page_title'];
        $data['records'] = $this->crud->get_detail_rows($id, 'content_id', 'igc_content_comments');
        $data['title']= "Publish/UnPublish Comment";
        $this->load->view('header', $data);
        $this->load->view('comment_list');
        $this->load->view('footer');
    }

    public function comment_active()
    {
        if($this->input->post())
        {
            $id = $this->input->post('id');
            $update['approved_status']="1";
            $this->crud->update($id, 'comment_id', $update, 'igc_content_comments');
            //code to create log
            $log['module_title']= "Content Comment Id"."(".$id.")";
            $log['action_id']= "2";
            $this->create_log($log);
            echo "success";
        }
    }

    public function comment_inactive()
    {
        if($this->input->post())
        {
            $id = $this->input->post('id');
            $update['approved_status']="0";
            $this->crud->update($id, 'comment_id', $update, 'igc_content_comments');
            //code to create log
            $log['module_title']= "Content Comment Id"."(".$id.")";
            $log['action_id']= "2";
            $this->create_log($log);
            echo "success";
        }
    }

    //comment delete

    public function comment_delete($id)
    {
        $result = $this->crud->delete($id,'comment_id','igc_content_comments');
        if($result)
        {
            //code to create log
            $log['module_title']= "Content Comment Id"."(".$id.")";
            $log['action_id']= "3";
            $this->create_log($log);

            $this->session->set_flashdata('success','Comment has been deleted.');
            redirect('content');
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the Comment.');
            redirect('content');
        }
    }




    //code to soft delete the content

    public function delete($content_id)
    {
        $content_detail = $this->crud->get_detail($content_id, 'content_id', 'igc_content');
        $result = $this->content->delete_content($content_id);
        if($result)
        {
            //code to create log
            $log['module_title']= $content_detail['content_page_title'];
            $log['action_id']= "3";
            $this->create_log($log);

            $path='../uploads/content/';
            @unlink($path.$content_detail['featured_img']);
            $this->session->set_flashdata('success','Content has been deleted.');
            redirect('content');
        }
        else{
            $this->session->set_flashdata('error','Unable to delete the content.');
            redirect('content');
        }
    }



//code to add new tags in content

    public function add_tags($content_id, $tags)
    {
        if ($tags != '') {
            $tagIn = trim(preg_replace('/\s+/', ',', $tags));
            $tags = explode(',', $tagIn);

            $this->content->insert_tags($tags, $content_id);
        }

    }

    public function rmv_content_tag()
    {
        if($this->input->post())
        {
            $term_id = $this->input->post('term_id');
            $content_id = $this->input->post('content_id');

            $this->db->where('content_id', $content_id);
            $this->db->where('term_id', $term_id);
            $this->db->delete('igc_content_tags');

            echo "success";


        }
    }


    public function send($content_id)
    {
        $content_detail = $this->crud->get_detail($content_id, 'content_id', 'igc_content');
        $subscribes = $this->content->get_subscribers();
        if(! empty($content_detail) && $content_detail['content_type'] == 'Article' && ! empty($subscribes))
        {
            $site_settings = $this->site_settings->get_site_settings();
            $server_url = $site_settings['site_url'].'/index.php/blog/detail/'.$content_detail['content_url'];
            $server = $this->server->active_mail_server();

            $password = $this->encrypt->decode($server['password']);



            $this->load->library('mailer');

            $mail  = new PHPMailer();


            $body = '<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>'.$site_settings['site_name'].' Article</title>
</head>

<body>
<div style="width:580px;margin:0 auto;font:12px Arial,Helvetica,sans-serif;background:#fff">
    <div style="margin:0 0 10px"> <img alt="SansuiTrek" src="http://sansuitrek.com/templates/gk_music/images/logo.png"> </div>
    <p>Dear Subscribers</p>

    <table width="100%" cellspacing="0" cellpadding="5" border="0">

        <tbody>
        <tr>
           <p> Our new article has been published.
          In order to read the article please click the article Link. '.'<a href="'.$server_url.'">'.$server_url.'</a>'.'</p>
        </tr>


        <tr>
            <td colspan="2" style="background:#EEE; text-align:left;">Thanks and Regards,<br />
                SunsuiTrek<br />
                Tel:<strong>+977-1-4414739 / 4005043/44</strong><br />
                <a href="http://sansuitrek.com/" target="_blank" style="color:#46216F; text-decoration:underline;">www.sansuitrek.com</a></td>
        </tr>
        <tr>
            <td colspan="2" style="background:#EEE; text-align:left;"><br />
                IGC Technology<br />
                Tel:<strong>+977-01-4005043/4005044</strong><br />
                <a href="http://igctech.com.np/" target="_blank" style="color:#46216F; text-decoration:underline;">www.igctech.com.np</a></td>
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

            $mail->SMTPAuth   = true;                  // enable SMTP authentication

            $mail->SMTPSecure = $server['server_prefix'];                 // sets the prefix to the servier

            $mail->Host       =  $server['host'];      // sets GMAIL as the SMTP server

            $mail->Port       = $server['port'];                  // set the SMTP port for the GMAIL server

            $mail->Username   = $server['username'];  // GMAIL username

            $mail->Password   = $password;          // GMAIL password

            $mail->SetFrom($server['send_from_email'], $server['send_from_name']);

            $mail->AddReplyTo($server['reply_to_email'],$server['reply_to_name']);

            $mail->Subject    = $site_settings['site_name']." Newsletter";


            $mail->MsgHTML($body);

            foreach($subscribes as $rows)
            {
                $mail->AddAddress($rows['email'], $site_settings['site_name']);
            }



            if(!$mail->Send())
            {
                $this->session->set_flashdata('error', 'Unable to Send the Email.Please Check Your Internet Connection.');
                redirect('content');

            }
            else{
                $this->session->set_flashdata('success', 'NewsLetter has been Send.');
                redirect('content');
            }

        }
        else{
            $this->session->set_flashdata('error', 'Unable to Send the Newsletter');
            redirect('content');
        }

    }

    //function to create log

    public function create_log($insert)
    {

        $insert['ip_address'] = get_ip();
        $insert['user_id'] = $this->session->userdata('admin_id');
        $insert['date'] = date('Y-m-d:H:i:s');
        $insert['module_name'] =  "Content";
        $this->db->insert('igc_user_logs', $insert);
    }


}