<?php
class News extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        is_already_logged_in();
        $this->load->library('form_validation');
        $this->form_validation->CI = &$this;
        
        $this->load->helper('date');
        
        $this->load->model('news_model');
        $this->load->model('content_model', 'content');
        $this->load->model('crud_model', 'crud');
        $this->load->model('site_settings_model', 'site_settings');
        $this->load->model('mail_setting/mail_setting_model', 'server'); 
        $this->load->library('encrypt');
    }
    public function index()
    {
        $data['records'] = $this->content->get_content_list();

        $data['categories'] = $this->news_model->get_active_category();
        $data['get_active_reporter'] = $this->news_model->get_active_reporter();
        $data['get_active_guest']    = $this->news_model->get_active_guest(); 


        $data['title']   = "News List";
        $this->load->view('header', $data); 
        $this->load->view('content_list');
        $this->load->view('footer');
    }
    public function view()
    {
        $data['breadcum']['Home'] = site_url(ADMIN_PATH);
        $data['breadcum']['News'] = site_url(ADMIN_PATH . '/view');
        $data['main']             = 'admin/news/view';

        $data['categories'] = $this->news_model->get_active_category();
        $data['get_active_reporter'] = $this->news_model->get_active_reporter();
        $data['get_active_guest']    = $this->news_model->get_active_guest();

        $data['news_list']        = $this->news_model->news_list();
        $this->load->view('admin/admin', $data);
    }
    public function add_news()
    {

        $data['breadcum']['Home']    = site_url();
        $data['breadcum']['News']    = site_url('/news');
        $data['breadcum']['Add']     = '';
        $data['get_active_category'] = $this->news_model->get_active_category();
        $data['get_active_reporter'] = $this->news_model->get_active_reporter();
        $data['get_active_guest']    = $this->news_model->get_active_guest();

        $this->form_validation->set_rules('title', 'Title', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Add News ";
            $this->load->view('header', $data);
            $this->load->view('news/add', $data); 
            $this->load->view('footer');
        } else {
            $uploaded_details = $this->upload_image('image');
            $this->news_model->add_news($uploaded_details['file_name']);
            $news_id = $this->db->insert_id();
            if (!empty($_POST['category_id'])) {
                foreach ($_POST['category_id'] as $key => $cat_id) {
                    $post_category = array(
                        'news_id'     => $news_id,
                        'category_id' => $cat_id,
                    );
                    $this->db->insert('news_category', $post_category);
                }
            }
            $this->session->set_flashdata('message', 'News Added');
            redirect('/news', 'refresh');
        }
    }
    public function edit_news($id)
    {
        $data['categories'] = $this->news_model->get_active_category();

        $data['current_category']    = $this->news_model->current_category($id);
        $data['get_active_reporter'] = $this->news_model->get_active_reporter();
        $data['get_active_guest']    = $this->news_model->get_active_guest();

        $data['info'] = $info = $this->news_model->get_news_info($id);
        $this->form_validation->set_rules('title', 'Title', 'required');
        if ($this->form_validation->run() == false) {

            $data['title'] = "Edit News ";
            $this->load->view('header', $data);
            $this->load->view('news/edit', $data);
            $this->load->view('footer');
        } else {
                $same_img     = $this->input->post('server_image_prev');
                $new_img     = $this->input->post('server_image_new');
                if(!empty($new_img)){
                    $server_image     = $new_img;
                }
                else{
                    $server_image     = $same_img;
                }

            // if ($_FILES['image']['name'] != '') {
            //     $uploaded_details = $this->upload_image('image');
            //     if ($uploaded_details['file_name'] != '') {
            //         $image = $uploaded_details['file_name'];
            //         if (file_exists("../uploads/news/" . $info['image'])) {
            //             @unlink("../uploads/news/" . $info['image']);
            //         }
            //     } else {
            //         $image = $info['image'];
            //     }
            // } else {
            //     $image = $info['image'];
            // }
            
            $this->news_model->update_news($server_image);
            $news_id = $id;
            if (!empty($_POST['category_id'])) {
                $this->db->where('news_id', $news_id);
                $this->db->where_not_in('category_id', $_POST['category_id']);
                $this->db->delete('news_category');
                foreach ($_POST['category_id'] as $key => $cat_id) {
                    if ($this->db->where(array('news_id' => $news_id, 'category_id' => $cat_id))->get('news_category', 1)->num_rows() < 1) {
                        $post_category = array(
                            'news_id'     => $news_id,
                            'category_id' => $cat_id,
                        );
                        $this->db->insert('news_category', $post_category);
                    }
                }
            }
            $this->session->set_flashdata('message', 'Edited');
            redirect('/news', 'refresh');
        }
    }

    public function check_slug_add()
    {
        if ($this->Slug_model->check_slug_add()) {
            $this->form_validation->set_message('check_slug_add', 'This Slug is Already Registered,Please Choose Another One.');
            return false;
        }
        return true;
    }
    public function check_slug_edit()
    {
        if ($this->Slug_model->check_slug_edit()) {
            $this->form_validation->set_message('check_slug_edit', 'This Slug is Already Registered,Please Choose Another One.');
            return false;
        }
        return true;
    }

    public function delete_news($id)
    {
        $this->news_model->delete($id);
        $info = $this->news_model->get_news_info($id);
        if (file_exists("./user_upload/images/" . $info['image'])) {
            @unlink("./user_upload/images/" . $info['image']);
        }
        $this->session->set_flashdata('message', 'Deleted');
        redirect('news');
    }
    public function upload_image($file)
    {
        $config['upload_path']   = '../uploads/news/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = '1000000000';
        $config['max_width']     = '1000000000';
        $config['max_height']    = '1000000000';
        $config['remove_spaces'] = 'true';
        $this->load->library('upload', $config);
        $this->upload->do_upload($file);
        if ($this->upload->display_errors()) {
            $this->error = $this->upload->display_errors();
            return false;
        } else {
            $data = $this->upload->data();
            return $data;
        }
    }
    public function upload_feature_image($file)
    {
        $config['upload_path']   = './uploads/news/';
        $config['allowed_types'] = 'gif|jpeg|jpg|png';
        $config['max_size']      = '10000000';
        $config['max_width']     = '100000';
        $config['max_height']    = '10000';
        $config['remove_spaces'] = 'true';
        $this->load->library('upload', $config);
        $this->upload->do_upload($file);
        if ($this->upload->display_errors()) {
            $this->error = $this->upload->display_errors();
            return true;
        } else {
            $data = $this->upload->data();
            return $data;
        }
    }
}
/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
