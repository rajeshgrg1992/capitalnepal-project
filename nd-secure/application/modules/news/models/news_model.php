<?php
class News_model extends CI_Model
{
    public function __construct()
    {
//parent::CI_Model();
    }
    
    
        public function category_name_by_id($id)
    {
        $query = $this->db->get_where('igc_package_category', array("category_id" => $id));
        $data  = $query->row_array();
        if ($data['category_name']) {
            return $data['category_name'];
        } else {
            return "NONE";
        }
    }
    
    
            public function guest_name_by_id($id)
    {
        $query = $this->db->get_where('igc_guest', array("guest_id" => $id));
        $data  = $query->row_array();
        if ($data['guest_title']) {
            return $data['guest_title'];
        } else {
            return "NONE";
        }
    }
    
    
                public function reporter_name_by_id($id)
    {
        $query = $this->db->get_where('igc_reporter', array("reporter_id" => $id));
        $data  = $query->row_array();
        if ($data['reporter_title']) {
            return $data['reporter_title'];
        } else {
            return "NONE";
        }
    }
    
    
    
    public function delete($id)
    {

        $this->db->where('content_id',$id);
        $result = $this->db->delete('igc_content');
        if ($result) {
            return $result;
        } else {
            return false;
        }

    }
    

    public function blogs_list()
    {
        $sql   = "SELECT * FROM tbl_news  " . $orderby . " " . $limit;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function blogs_list_home()
    {
        $sql   = "SELECT * FROM tbl_news WHERE status='1'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function change_status($status, $id)
    {
        if ($status === '1') {
            $status = '0';
        } else {
            if ($status === '0') {
                $status = '1';
            }
        }
        $data = array(
            'status' => $status,
        );
        $this->db->where('content_id', $id);
        $this->db->update('igc_content', $data);
    }
    public function get_news_info($id)
    {
        $options = array('content_id' => $id);
        $query   = $this->db->get_where('igc_content', $options, 1);
        return $query->row_array();
    }
    public function get_blogs_by_category($id)
    {
        $options = array('category_id' => $id);
        $query   = $this->db->get_where('tbl_news', $options);
        return $query->result_array();
    }

    public function current_category($id)
    {
        $q     = "SELECT category_id from news_category where news_id= $id";
        $query = $this->db->query($q);
        return $query->result_array();
    }

    public function get_active_category()
    {
        $q     = "SELECT * from igc_package_category where publish_status = 1";
        $query = $this->db->query($q);
        return $query->result_array();
    }

    public function get_active_reporter()
    {
        $q     = "SELECT * from igc_reporter where publish_status = 1";
        $query = $this->db->query($q);
        return $query->result_array();
    }

    public function get_active_guest()
    {
        $q     = "SELECT * from igc_guest where publish_status = 1";
        $query = $this->db->query($q);
        return $query->result_array();
    }

    public function add_news($file_name)
    {
        $data = array(
            'user_id'            => $this->input->post('user_id'),
            'title'            => $this->input->post('title'),
            'view_count'       => $this->input->post('view_count'),
            'slug'             => $this->input->post('slug'),
            'tag_line'         => $this->input->post('tag_line'),
            'second_heading'   => $this->input->post('second_heading'),
            'show_reporter'    => $this->input->post('show_reporter'),
            'by_line'          => $this->input->post('by_line'),
            'reporter_id'      => $this->input->post('reporter_id'),
            'guest_id'      => $this->input->post('guest_id'),
            'video'            => $this->input->post('video'),
            'short_content'    => $this->input->post('short_content'),
            'content'          => $this->input->post('content'),
            'show_content'     => $this->input->post('show_content'),
            // 'image'            => $file_name,
            'server_image'     => $this->input->post('server_image'),
            'show_image'       => $this->input->post('show_image'),
            'image_caption'    => $this->input->post('image_caption'),
            'is_flash'         => $this->input->post('is_flash'),
            'is_special'       => $this->input->post('is_special'),
            'is_video'         => $this->input->post('is_video'),
            'status'           => $this->input->post('status'),
            'created_by'       => $this->input->post('created_by'),
            'modified_by'      => $this->input->post('modified_by'),
            'meta_title'       => $this->input->post('meta_title'),
            'meta_keywords'    => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description'),
            'publish_status'   => $this->input->post('publish_status'),
            'delete_status'    => "0",
            'created'          => date('Y-m-d:H:i:s'),
            'publish_time'          => $this->input->post('publish_time'),
            'updated'          => $this->input->post('updated'),
        );
        $this->db->insert('igc_content', $data);
    }
    public function update_news($server_image = '')
    {
        $data = array(
            'title'            => $this->input->post('title'),
            'view_count'       => $this->input->post('view_count'),
            'slug'             => $this->input->post('slug'),
            'tag_line'         => $this->input->post('tag_line'),
            'second_heading'   => $this->input->post('second_heading'),
            'show_reporter'    => $this->input->post('show_reporter'),
            'by_line'          => $this->input->post('by_line'),
            'reporter_id'      => $this->input->post('reporter_id'),
            'guest_id'      => $this->input->post('guest_id'), 
            'video'            => $this->input->post('video'),
            'short_content'    => $this->input->post('short_content'),
            'content'          => $this->input->post('content'),
            'show_content'     => $this->input->post('show_content'),
            // 'image'            => $file_name,
             'server_image'     => $server_image,

            'show_image'       => $this->input->post('show_image'),
            'image_caption'    => $this->input->post('image_caption'),
            'is_flash'         => $this->input->post('is_flash'),
            'is_special'       => $this->input->post('is_special'),
            'is_video'         => $this->input->post('is_video'),
            'status'           => $this->input->post('status'),
            'created_by'       => $this->input->post('created_by'),
            'modified_by'      => $this->input->post('modified_by'),
            'meta_title'       => $this->input->post('meta_title'),
            'meta_keywords'    => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description'),
            'publish_status'   => $this->input->post('publish_status'),
             'delete_status'    => "0",
            'publish_time'          => $this->input->post('publish_time'),
            'updated'          =>date('Y-m-d:H:i:s'),
        );
        $this->db->where('content_id', $this->input->post('content_id'));

        $this->db->update('igc_content', $data);
        //  echo $this->db->last_query(); exit();
    }
    public function delete_blogs($id)
    {
        $sql = "delete from tbl_news where id='$id'";
        $this->db->query($sql);
    }
    public function articles_list($limit, $offset)
    {
//getting user id from session
        //$user_id = $this->session->userdata('user_id');
        //fetch data form articles
        $query = $this->db
            ->limit($limit, $offset)
            ->get('articles');
        //echo '<pre>'; print_r($query->result()); exit;
        return $query->result();
    }
    public function all_articles_list($limit, $offset)
    {
        $query = $this->db
            ->limit($limit, $offset)
            ->get('articles');
        return $query->result();
    }
    public function search_results($query, $limit, $offset)
    {
        $query = $this->db
            ->like('title', $query)
            ->limit($limit, $offset)
            ->get('articles');
        return $query->result();
    }
    public function count_search_results($query)
    {
        $query = $this->db
            ->like('title', $query)
            ->get('articles');
        return $query->num_rows();
    }
    public function num_rows_all()
    {
        $query = $this->db->get('articles');
        return $query->num_rows();
    }
    public function num_rows()
    {
        $query = $this->db->get('articles');
        return $query->num_rows();
    }
    public function search($search)
    {
        $query = $this->db
            ->like('title', $search)
            ->get('articles');
        return $query->result();
    }
    public function add_article($array)
    {
        return $this->db->insert('articles', $array);
    }
    public function find_article($article_id)
    {
        $query = $this->db
            ->where('id', $article_id)
            ->get('articles');
        return $query->row();
    }
    public function update_article($article_id, array $article)
    {
        return $this->db
            ->where('id', $article_id)
            ->update('articles', $article);
    }
    public function delete_article($article_id)
    {
        return $this->db->delete('articles', ['id' => $article_id]);
    }
}
/* End of file Blog_model.php */
/* Location: ./system/application/models/Blog_model.php */
