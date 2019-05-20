<?php
class News extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        is_already_logged_in();
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
        $this->load->model('News_model');
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

    public function view()
    {
        $data['breadcum']['Home'] = site_url(ADMIN_PATH);
        $data['breadcum']['News'] = site_url(ADMIN_PATH . '/view');
        $data['main']             = 'admin/news/view';
        $data['news_list']        = $this->News_model->news_list();
        $this->load->view('admin/admin', $data);
    }

    public function add_news()
    {

        $data['breadcum']['Home']    = site_url();
        $data['breadcum']['News']    = site_url('/news');
        $data['breadcum']['Add']     = '';
        $data['get_active_category'] = $this->News_model->get_active_category();
        //$data['get_active_tag'] = $this->News_model->get_active_tag();
       // print_r($data['get_active_category']);
        $this->form_validation->set_rules('title', 'Title', 'required');
      //  $this->form_validation->set_rules('category_id', 'Category', 'required');
        if ($this->form_validation->run() == false) {
            $data['title']= "Add News ";
            $this->load->view('header', $data);
            $this->load->view('news/add', $data);
            $this->load->view('footer');


        } else {

            $this->News_model->add_news();
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
            redirect( '/news', 'refresh');
        }
    }

    public function edit_news($id)
    {
        // $p_id=$_POST['id'];
        // $id = $this->input->post('id');
        $data['categories'] = $this->Category_model->get_active_category();
        // print_r($data['categories']);exit ();
        $data['current_category'] = $this->News_model->current_category($id);
        //print_r($data['current_category']);exit ();
        $data['breadcum']['Home'] = site_url(ADMIN_PATH);
        $data['breadcum']['News'] = site_url(ADMIN_PATH . '/news');
        $data['breadcum']['Edit'] = '';
        $data['info']             = $info             = $this->News_model->get_news_info($id);
        $this->form_validation->set_rules('title', 'Title', 'required');
        if ($this->form_validation->run() == false) {
            $data['main'] = 'admin/news/edit';
            $this->load->view('admin/admin', $data);
        } else {

            $this->News_model->update_news();
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
            redirect(ADMIN_PATH . '/news', 'refresh');
        }
        // $news_i= 1;

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
        $this->News_model->delete_news($id);
        $info = $this->News_model->get_news_info($id);
        if (file_exists("./user_upload/images/" . $info['image'])) {
            @unlink("./user_upload/images/" . $info['image']);
        }
        $this->session->set_flashdata('message', 'Deleted');
        redirect(ADMIN_PATH . '/news', 'refresh');
    }
    public function upload_image($file)
    {
        $config['upload_path']   = './user_upload/images/';
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
    public function upload_feature_image($feature_image)
    {
        $config['upload_path']   = './user_upload/images/';
        $config['allowed_types'] = 'gif|jpeg|jpg|png';
        $config['max_size']      = '10000000';
        $config['max_width']     = '100000';
        $config['max_height']    = '10000';
        $config['remove_spaces'] = 'true';
        $this->load->library('upload', $config);
        $this->upload->do_upload($feature_image);
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
