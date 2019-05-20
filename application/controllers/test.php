<?php
	class Test extends CI_Controller
	{
        public function time()
        {
            echo date('Y-m-d:H:i:s');
        }
		public function __construct()
		{
			parent::__construct();
			$this->load->model('crud_model','crud');

		}
        public function pdfdemo()
        {
    
        $data = [];
        //load the view and saved it into $html variable
        //$html=$this->load->view('session', $data, true);
 
        //this the the PDF filename that user will get to download
        $pdfFilePath = "hello.pdf";
 
        //load mPDF library
        //$this->load->library('m_pdf');
 
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML("hello");
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");        
    }
        

public function post_action()
	{
		$range=$this->input->post('range');
		$price=explode(",",$range);
		$price_low=$price[0];
		$price_high=$price[1];

		// $records['title']="Product Category Details";

		/* $data['sub_cats']='<?php $all_cats_product_list=$this->crud->get_where_order_by("products",array("delete_status"=>0,"status"=>1,"admin_status"=>"1","product_category_id"=>1,"product_sell_price >"=>'.$price_low.',"product_sell_price <"=>'.$price_high.'),"added_date","DESC"); ?>';*/
        
  //       $data['hello']='hello';

		$all_cats_product_list=$this->crud->get_where_order_by("products",array("delete_status"=>0,"status"=>1,"admin_status"=>"1","product_category_id"=>1),"added_date","DESC"); 
		$folder_path="uploads/product/";
        $sub_cat = " "; 
        foreach($all_cats_product_list as $key => $rows)
        {
        if($rows['sell_offer'] =='1')
        {
        $sub_cat .= '
                        <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="'.base_url().'/products/products_detail/show/'.$rows['product_slug'].'">'.$rows['product_title'].'
                                        <img class="img-responsive" alt="product" 
                                                src="'.$folder_path.$rows['product_code'].'_1_300x366.'.$rows['product_image_1'].'" />
                                    </a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="'.base_url().'/order/order/add_wish_list/'.$rows['product_slug'].'"></a>
                                            <a title="Add to compare" class="compare" href="'.base_url().'/order/order/add_compare_list/'.$rows['product_slug'].'"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="'.base_url().'/order/order/add_to_cart/'.$rows['product_code'].'">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="'.base_url().'/products/products_detail/show/'.$rows['product_slug'].'">'.$rows['product_title'].'</a></h5>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="content_price">
                                        <span class="price product-price">'.$rows['product_price_currency'].' '.$rows['product_sell_price'].'</span>
                                        <span class="price old-price">'.$rows['product_price_currency'].' '.$rows['product_old_sell_price'].'</span>
                                    </div>
                                    <div class="info-other">
                                        <p>Product Code:'.$rows['product_code'].'</p>
                                        <p class="availability">Arival: <span>'.(($rows['new_arrival']=='1')?'New':'Old').'</span></p>
                                         <p class="availability">Availability: 
                                            <span class="label label-'.(($rows['counts'] > 0)?'success':'warning').'">
                                                '.(($rows['counts'] > 0)?'In Stock':'Out Of Stock').'
                                            </span>
                                        </p>
                                        <div class="product-desc">
                                            <?php  ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>';
                       
        }
        else
        {
        $sub_cat .= '<li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="'.base_url().'/products/products_detail/show/'.$rows['product_slug'].'">'.$rows['product_title'].'
                                        <img class="img-responsive" alt="product" 
                                                src="'.$folder_path.$rows['product_code'].'_1_300x366.'.$rows['product_image_1'].'" />
                                    </a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="'.base_url().'/order/order/add_wish_list/'.$rows['product_slug'].'"></a>
                                            <a title="Add to compare" class="compare" href="'.base_url().'/order/order/add_compare_list/'.$rows['product_slug'].'"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="'.base_url().'/order/order/add_to_cart/'.$rows['product_code'].'">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="'.base_url().'/products/products_detail/show/'.$rows['product_slug'].'">'.$rows['product_title'].'</a></h5>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="content_price">
                                        <span class="price product-price">'.$rows['product_price_currency'].' '.$rows['product_sell_price'].'</span>
                                    </div>
                                    <div class="info-other">
                                        <p>Product Code:'.$rows['product_code'].'</p>
                                        <p class="availability">Arival: <span>'.(($rows['new_arrival']=='1')?'New':'Old').'</span></p>
                                         <p class="availability">Availability: 
                                            <span class="label label-'.(($rows['counts'] > 0)?'success':'warning').'">
                                                '.(($rows['counts'] > 0)?'In Stock':'Out Of Stock').'
                                            </span>
                                        </p>
                                        <div class="product-desc">
                                            <?php  ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>';
              
            }
         }

      // $data['sub_cat']='';

		//header('Content-Type: application/json');
        echo json_encode($data); 

	}

    public function jquery()
    {
        $this->load->view('session');
    }
		function index()
		{
			echo date('F j,Y');

		}
		public function session_test($value)
		{
			$this->session->userdata['list'][]=150;
			$this->session->userdata['list'][]=$value;
			$this->load->view('session');
		}
		public function session_unset()
		{
			$this->session->unset_userdata('list');
		}
		public function multiple()
		{
			if($this->input->post())
			{
				for ($i=0; $i < 10; $i++) { 
					echo $this->input->post('name')[$i];
				}
			}
			$this->load->view('session');
		}
		public function query()
		{
			$result=$this->crud->prabin(1);
			echo "<pre>";
			print_r($result);
			echo "</pre>";
		}

	}
?>