<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News_model extends CI_Model
{


   


    public function get_news_detail($id)
    {
        $sql = "SELECT * FROM igc_content  where content_id = '$id' AND publish_status = 1";
        $query = $this->db->query($sql);
        return $query->row_array();

    }

    public function get_breaking_layouts()
    {
        $this->db->where('status', "1");
        $this->db->where('delete_status', "0");
        $result = $this->db->get('igc_breaking')->row_array();
        return $result;
    }

    public function get_news($start_point = 0, $per_page = 0)
    {
        $query = $this->db->query("select * from igc_news
    where publish_status='1' and delete_status='0' order by created desc limit 
		{$start_point},{$per_page}");
        $result = $query->result_array();
        return $result;
    }

    public function count_news()
    {
        $this->db->where('publish_status', '1');
        $this->db->where('delete_status', '0');
        $result = $this->db->get('igc_news')->num_rows(); 
        return $result;
    }

    public function get_mukhya_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 3 AND publish_status = 1 ORDER BY created DESC limit 1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
public function get_mukhya_three_offset_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 3 AND publish_status = 1 ORDER BY created DESC limit 1,3";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_mukhya_two()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 3 AND publish_status = 1 ORDER BY created DESC limit 2";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_mukhya_offset_two()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 3 AND publish_status = 1 ORDER BY created DESC limit 2,4";
        $query = $this->db->query($sql);
        return $query->result_array();

    }

    public function get_artha_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 4 AND publish_status = 1 ORDER BY created DESC limit 0,1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }


    public function get_artha_six_left()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 4 AND publish_status = 1 ORDER BY created DESC limit 1, 6";
        $query = $this->db->query($sql);
        return $query->result_array();

    }


    public function get_artha_six_right()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 4 AND publish_status = 1 ORDER BY created DESC limit 7, 6";
        $query = $this->db->query($sql);
        return $query->result_array();

    }




    public function get_banking_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 5 AND publish_status = 1 ORDER BY created DESC limit 0, 1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }

    public function get_banking_offset_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 5 AND publish_status = 1 ORDER BY created DESC limit 1,4";
        $query = $this->db->query($sql);
        return $query->result_array();

    }

    public function get_share_five()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 6 AND publish_status = 1 ORDER BY created DESC limit 5";
        $query = $this->db->query($sql);
        return $query->result_array();

    }

    public function get_video_four()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 7 AND publish_status = 1 ORDER BY created DESC limit 4";
        $query = $this->db->query($sql);
        return $query->result_array();

    }

    public function get_purbadhar_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 8 AND publish_status = 1 ORDER BY created DESC limit 0,1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }

    public function get_purbadhar_two_offset_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 8 AND publish_status = 1 ORDER BY created DESC limit 1,2";
        $query = $this->db->query($sql);
        return $query->result_array();

    }

    public function get_purbadhar_two_offset_two()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 8 AND publish_status = 1 ORDER BY created DESC limit 2,2";
        $query = $this->db->query($sql);
        return $query->result_array();

    }

    public function get_paryatan_two()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 9 AND publish_status = 1 ORDER BY created DESC limit 2";
        $query = $this->db->query($sql);
        return $query->result_array();

    }

    public function get_paryatan_three_offset_two()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 9 AND publish_status = 1 ORDER BY created DESC limit 3,2";
        $query = $this->db->query($sql);
        return $query->result_array();

    }

    public function get_suchana_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 10 AND publish_status = 1 ORDER BY created DESC limit 1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }

    public function get_suchana_four_offset_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 10 AND publish_status = 1 ORDER BY created DESC limit 4,1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_provinceone_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 14 AND publish_status = 1 ORDER BY created DESC limit 1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_provinceone_four_offset_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 14 AND publish_status = 1 ORDER BY created DESC limit 4,1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_provincetwo_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 15 AND publish_status = 1 ORDER BY created DESC limit 1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_provincetwo_four_offset_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 15 AND publish_status = 1 ORDER BY created DESC limit 4,1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_provincethree_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 16 AND publish_status = 1 ORDER BY created DESC limit 1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_provincethree_four_offset_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 16 AND publish_status = 1 ORDER BY created DESC limit 4,1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_provincefour_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 17 AND publish_status = 1 ORDER BY created DESC limit 1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_provincefour_four_offset_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 17 AND publish_status = 1 ORDER BY created DESC limit 4,1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_provincefive_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 18 AND publish_status = 1 ORDER BY created DESC limit 1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_provincefive_four_offset_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 18 AND publish_status = 1 ORDER BY created DESC limit 4,1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_provincesix_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 20 AND publish_status = 1 ORDER BY created DESC limit 1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_provincesix_four_offset_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 20 AND publish_status = 1 ORDER BY created DESC limit 4,1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_provinceseven_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 19 AND publish_status = 1 ORDER BY created DESC limit 1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_provinceseven_four_offset_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 19 AND publish_status = 1 ORDER BY created DESC limit 1,4";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_opinion_four()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 11 AND publish_status = 1 ORDER BY created DESC limit 4";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_market_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 13 AND publish_status = 1 ORDER BY created DESC limit 1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    
    
    public function get_market_two_offset_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 13 AND publish_status = 1 ORDER BY created DESC limit 1,2";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    
        public function get_market_two_offset_three()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 13 AND publish_status = 1 ORDER BY created DESC limit 3,2";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    
    
    
    
    
    
    
    public function get_politics_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 2 AND publish_status = 1 ORDER BY created DESC limit 1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_politics_nine_offset_one()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 2 AND publish_status = 1 ORDER BY created DESC limit 9,1";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
    public function get_sifarish_four()
    {
        $sql = "SELECT * FROM igc_content INNER JOIN news_category ON news_category.news_id=igc_content.content_id where 
category_id = 21 AND publish_status = 1 ORDER BY created DESC limit 4";
        $query = $this->db->query($sql);
        return $query->result_array();

    }
}
