<?php
class Products_detail extends CI_Controller
{
	public $hello=array();
	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud_model','crud');
		$this->load->library('cart');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->hello=$this->crud->get_front_categories();
	}
	public $table="products";
	public $field_name="product_slug";
	public $redirect="products_detail";

	
	//to open product details
	public function show($slug)
	{
		$product_detail=$this->crud->get_detail($slug,$this->field_name,$this->table);
		$records['product_ind_detail']=$product_detail;
//product rating
		$records['product_rating']=$this->crud->get_products_rating($product_detail['product_id']);


		$product_category=$this->crud->get_detail($product_detail['product_category_id'],"category_id","product_category");
		$records['product_category']=$product_category;

		//all sub categories
        $records['all_sub_cat']=$this->crud->get_where("product_category",array('delete_status'=>0,'status'=>1,'parent_id'=>$product_category['category_id']));
        $limit=6;
		if($product_detail['product_sub_cat_id'] > 0)
		{
			$product_sub_category=$this->crud->get_detail($product_detail['product_sub_cat_id'],"category_id","product_category");
			$records['product_sub_category']=$product_sub_category;
			
	        $records['product_best_sellers']=$this->crud->get_cat_best_sellers("product_sub_cat_id",$product_sub_category['category_id'],$limit);

	        $records['all_related_products']=$this->crud->get_where_order_by("products",array('delete_status'=>0,'status'=>1,'admin_status'=>'1','product_sub_cat_id'=>$product_sub_category['category_id']),"added_date","DESC");

	        $records['all_related_sell_offers']=$this->crud->get_where_order_by("products",array('delete_status'=>0,'status'=>1,'admin_status'=>'1','product_sub_cat_id'=>$product_sub_category['category_id'],'sell_offer'=>1),"added_date","DESC");
		}
		else
		{

			$records['product_best_sellers']=$this->crud->get_cat_best_sellers("product_sub_cat_id",$product_category['category_id'],$limit);

	        $records['all_related_products']=$this->crud->get_where_order_by("products",array('delete_status'=>0,'status'=>1,'admin_status'=>'1','product_sub_cat_id'=>$product_category['category_id']),"added_date","DESC");

	        $records['all_related_sell_offers']=$this->crud->get_where_order_by("products",array('delete_status'=>0,'status'=>1,'admin_status'=>'1','product_sub_cat_id'=>$product_category['category_id'],'sell_offer'=>1),"added_date","DESC");
		}

//code to count the view
		$insert['ip']=$this->input->ip_address();
		$insert['product_id']=$product_detail['product_id'];
		$insert['created']=date('Y-m-d:H:i:s');
		
		$this->crud->insert($insert,'products_ip_tracking');




		$records['title']="Product Details";
		$records['category_front_lists'] = $this->crud->get_front_categories();

		$this->load->view('header_category',$records);
		$this->load->view('products/product_index');
		$this->load->view('footer');
	}

//To open Brands Category Page
	public function brands($slug)
	{
		

		$brands=$this->crud->get_detail($slug,"slug","igc_brands");

		$records['brands_products']=$this->crud->get_where_order_by($this->table,array('delete_status'=>0,'status'=>1,'admin_status'=>'1','brands_id'=>$brands['brands_id']),"added_date","DESC");
		$records['brands']=$brands;
		$records['title']="Brands"." ".$brands['brands_title'];
		$records['category_front_lists'] = $this->crud->get_front_categories();

		$this->load->view('header_category',$records);
		$this->load->view('products/product_brands');
		$this->load->view('footer');
	}
//To open Latest DEal Category Page
	public function big_offers()
	{
		
		//$brands=$this->crud->get_detail($slug,"product_slug","products");
		$present_date=date('Y-m-d:H:i:s');
		$records['latest_deal'] = $this->crud->get_where_order_by("products",array("delete_status" => "0","status"=>"1",'admin_status'=>'1',"product_offer_deal" => "1","product_offer_start_date <=" => $present_date),"product_offer_end_date","ASC");

		$records['category_front_lists'] = $this->crud->get_front_categories();

		$this->load->view('header_category',$records);
		$this->load->view('products/product_offers');
		$this->load->view('footer');
	}
	//To open Category Page
	public function category_products($cat_slug)
	{
		$records['title']="Product Category Details";

		$product_category=$this->crud->get_detail($cat_slug,"category_slug","product_category");
		$records['product_category']=$product_category;
		
		$records['all_sub_cat']=$this->crud->get_where("product_category",array('delete_status'=>0,'status'=>1,'parent_id'=>$product_category['category_id']));

		$records['all_cat_product_list']=$this->crud->get_where_order_by($this->table,array('delete_status'=>0,'status'=>1,'admin_status'=>'1','product_category_id'=>$product_category['category_id']),"added_date","DESC");
		$records['category_front_lists'] = $this->crud->get_front_categories();

		$this->load->view('header_category',$records);
		$this->load->view('products/product_category');
		$this->load->view('footer');
	}
	//To open Sub Category Page
	public function sub_category_products($sub_cat_slug,$start_point='')
	{
		
        $records['category_front_lists'] = $this->crud->get_front_categories();

		$records['title']="Product Sub Category Details";

		$product_sub_category=$this->crud->get_detail($sub_cat_slug,"category_slug","product_category");
		$records['product_sub_category']=$product_sub_category;

		$records['product_category']=$this->crud->get_detail($product_sub_category['parent_id'],"category_id","product_category");
		
		$records['all_sub_cat']=$this->crud->get_where("product_category",array('delete_status'=>0,'status'=>1,'parent_id'=>$product_sub_category['parent_id']));

		$sub_cat_product_list=$this->crud->get_where_order_by($this->table,array('delete_status'=>0,'status'=>1,'admin_status'=>'1','product_sub_cat_id'=>$product_sub_category['category_id']),"added_date","DESC");

		$per_page = 2;
		$start_point = ($start_point!='')? $start_point : 0;
      
        $records['total_counts'] = count($sub_cat_product_list);
        $records['per_page'] = $per_page;
        $records['base_url'] = site_url('products/products_detail/sub_category_products/'.$sub_cat_slug);
        $records['next_row'] = $start_point+1;
        $records['current_page'] = ceil($start_point/$per_page);

                $config['base_url'] = site_url('products/products_detail/sub_category_products/'.$sub_cat_slug);
                $config['total_rows'] = $records['total_counts'];
                $config['per_page'] = $per_page;
              
                $config['full_tag_open'] = '<ul class="pagination">';
                $config['full_tag_close'] = '</ul>';

                $config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';

                $config['prev_tag_open'] = '<li>';
                $config['prev_tag_close'] = '</li>';

                $config['cur_tag_open'] = '<li class="active"><a>';
                $config['cur_tag_close'] = '</a></li>';

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

		$records['sub_cat_product_list']=$this->crud->get_where_order_pagination($this->table,array('delete_status'=>0,'status'=>1,'admin_status'=>'1','product_sub_cat_id'=>$product_sub_category['category_id']),"added_date","DESC",$start_point,$per_page);

		$this->load->view('header_category',$records);
		$this->load->view('products/product_sub_category');
		$this->load->view('footer');
	}
	//To open open the review page
	public function product_review($slug)
	{

		if($this->input->post())
		{
			$insert['product_id']=$this->input->post('product_id');
			$product=$this->crud->get_detail($insert['product_id'],"product_id","products");
			$insert['product_review']=$this->input->post('product_review');
			$insert['product_rating']=$this->input->post('product_rating');
			$insert['created']=date('Y-m-d:H:i:s');
			$insert['delete_status']="0";

			$this->crud->insert($insert,"products_rating");
			redirect('products/products_detail/show/'.$product['product_slug']);


		}

		$product_detail=$this->crud->get_detail($slug,"product_slug","products");
		$records['product_detail']=$product_detail;
		$records['title']="Review Page";
		$records['category_front_lists'] = $this->hello;

		$this->load->view('header_category',$records);
		$this->load->view('products/product_review');
		$this->load->view('footer');
	}
}
?>