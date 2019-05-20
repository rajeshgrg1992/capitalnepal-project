<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller{
    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('crud_model', 'crud');
        $this->load->model('content_model','content');
        $this->load->library('cart');
        $this->load->library('pagination');
        $this->load->library('form_validation');


    }
// to add counts in the database
    public function emoji()
    {
        $emoji=$this->input->post('emoji');
        $id=$this->input->post('id');
        $id_check=$this->crud->get_detail($id,"content_id","igc_content_emoji");
        if($id_check > 0)
        {
            $update[$emoji] = $id_check[$emoji]+1;
            $result=$this->crud->update($id, "content_id", $update, "igc_content_emoji");
        }
        else
        {
            $insert['created']=date('Y-m-d:H:i:s');
            $insert['delete_status']="0";
            $insert['content_id']=$id;
            $insert[$emoji]=1;
            $result=$this->crud->insert($insert,"igc_content_emoji");
        }
        $emoji_id=$this->crud->get_detail($id,"content_id","igc_content_emoji");

        $happy=$emoji_id['happy'];
        $sad=$emoji_id['sad'];
        $excited=$emoji_id['excited'];
        $amazed=$emoji_id['amazed'];
        $angry=$emoji_id['angry'];

        $emoji_total=$happy+$sad+$excited+$angry+$amazed;
        if($emoji_total > 0)
        {
            $data['happy_p']=round(($happy*100)/$emoji_total,1)." %";
            $data['sad_p']=round(($sad*100)/$emoji_total,1)." %";
            $data['excited_p']=round(($excited*100)/$emoji_total,1)." %";
            $data['amazed_p']=round(($amazed*100)/$emoji_total,1)." %";
            $data['angry_p']=round(($angry*100)/$emoji_total,1)." %";
            $data['total_emoji']=$emoji_total." Votes";
        }
        else
        {
            $data['happy_p']="0 %";
            $data['sad_p']="0 %";
            $data['excited_p']="0 %";
            $data['amazed_p']="0 %";
            $data['angry_p']="0 %";
            $data['total_emoji']=$emoji_total." Votes";
        }
        header('Content-Type: application/json');
        echo json_encode($data);


    }


    public function index($row=0)
    {
        
        $per_page = 5;
      
        $data['total_counts'] = $this->content->count_blogs();
        $data['per_page'] = $per_page;
        $data['base_url'] = site_url('blog/index');
        $data['next_row'] = $row+1;
        $data['current_page'] = ceil($row/$per_page);
        $data['menu'] = '';
        $data['category_front_lists'] = $this->crud->get_front_categories();
        $data['blogs']= $this->content->get_blogs($row, $per_page);

                $config['base_url'] = site_url('blog/index/');
                $config['total_rows'] = $this->content->count_blogs();
                $config['per_page'] = $per_page;
              

                $config['full_tag_open'] = '<ul class="pagination">';
                $config['full_tag_close'] = '</ul>';

                $config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';

                $config['cur_tag_open'] = '<li class="active"><a>';
                $config['cur_tag_close'] = '</a></li>';

                $config['prev_tag_open'] = '<li>';
                $config['prev_tag_close'] = '</li>';

                $config['first_tag_open'] = '<li>';
                $config['first_tag_close'] = '</li>';

                $config['last_tag_open'] = '<li>';
                $config['last_tag_close'] = '</li>';

                $config['next_link'] = 'Next';
                $config['next_tag_open'] = '<li><span aria-hidden="true">';
                $config['next_tag_close'] = ' &raquo;</span></li>';

                $config['prev_link'] = 'Previous';
                $config['prev_tag_open'] = '<li><span aria-hidden="true">&laquo; ';
                $config['prev_tag_close'] = '</span></li>';

                $this->pagination->initialize($config); 


        $data['popular_blogs']=array_slice($this->content->get_popular_post(),0,3);

        $this->load->view('header_category', $data);
        $this->load->view('blog/blog_list');
        $this->load->view('footer');
    }

    public function detail($slug)
    {

        $detail= $this->content->get_page_detail($slug);
        $data['latest'] = $this->content->get_active_latest('igc_content');
        $data['content'] = $detail;
        $data['menu'] = '';
        $data['sub_title'] = $detail['content_page_title']." "."-"." ";
        $data['meta_title'] = $detail['meta_description'];
        $data['meta_description'] = $detail['meta_description'];
        $data['meta_keywords'] = $detail['meta_keywords'];
        //setting for fb share
        $data['og_url']= 'blog/detail/'.$detail['content_url'];
        $data['og_title']= $detail['content_page_title'];
        $data['og_description']= substr($detail['content_body'],0,200);
        $data['og_image']= 'uploads/content/'.$detail['featured_img'];
        $data['sub_title']= $detail['content_page_title']; 
        $data['category_front_lists'] = $this->crud->get_front_categories();

        $data['popular_blogs']=array_slice($this->content->get_popular_post(),0,3);

        $emoji_id=$this->crud->get_detail($detail['content_id'],"content_id","igc_content_emoji");

        $happy=$emoji_id['happy'];
        $sad=$emoji_id['sad'];
        $excited=$emoji_id['excited'];
        $amazed=$emoji_id['amazed'];
        $angry=$emoji_id['angry'];

        $emoji_total=$happy+$sad+$excited+$angry+$amazed;
        if($emoji_total > 0)
        {
            $data['happy_p']=round(($happy*100)/$emoji_total,1);
            $data['sad_p']=round(($sad*100)/$emoji_total,1);
            $data['excited_p']=round(($excited*100)/$emoji_total,1);
            $data['amazed_p']=round(($amazed*100)/$emoji_total,1);
            $data['angry_p']=round(($angry*100)/$emoji_total,1);
            $data['total_emoji']=$emoji_total;
        }
        else
        {
            $data['happy_p']="0";
            $data['sad_p']="0";
            $data['excited_p']="0";
            $data['amazed_p']="0";
            $data['angry_p']="0";
            $data['total_emoji']=$emoji_total;
        }

        $this->load->view('header_category', $data);
        $this->load->view('blog/blog_detail');
        $this->load->view('footer');
    }

}