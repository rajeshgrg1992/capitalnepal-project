<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Order extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('crud_model','crud');
		$this->load->model('login_model','login');
		// $this->load->model('order_model','order');

        $this->load->library('cart');
        $this->load->library('form_validation');

		$this->load->library('encrypt');
		$this->load->library('mailer');

	}
//code to add products into the cart
	public function add_to_cart($pc)
	{
		$product_detail=$this->crud->get_detail($pc,"product_code","products");
		if(count($product_detail) > 1)
		{
			if($this->input->post())
			{
				$cart_data=array(
									'id'=>$pc,
									'qty'=>$this->input->post('qty'),
									'price'=>$product_detail['product_sell_price'],
									'name'=>$pc,
									'options' => array('size'=>$this->input->post('prod_size'),'color'=>$this->input->post('prod_color'))
				);
				$result=$this->cart->insert($cart_data);
				redirect('order/order/cart');
			}
			else
			{
				$cart_data=array(
									'id'=>$pc,
									'qty'=>1,
									'price'=>$product_detail['product_sell_price'],
									'name'=>$pc,
									'options' => array('size'=>"",'color'=>"")
				);
				$result=$this->cart->insert($cart_data);
				redirect('order/order/cart');
			}
		}
		else
		{
			$sub_category=$this->crud->get_detail($product_detail['product_sub_cat_id'],"category_id","product_category");
			redirect('products/products_detail/sub_category_products/'.$sub_category['category_slug']);
		}
	}
//code to show cart-order items
	public  function cart()
	{
		$data['category_front_lists'] = $this->crud->get_front_categories();
		$data['title']="Shipping Cart";
		$this->load->view('header_category', $data);
        $this->load->view('order/shipping_cart');
        $this->load->view('footer');
	}
//code to remove cart
	public  function remove_cart($rowid)
	{
		$data['title']="Shipping Cart";
		$data['category_front_lists'] = $this->crud->get_front_categories();
		
		$cart_data=array(
			'rowid' => $rowid,
			'qty' => 0
		);
		$this->cart->update($cart_data);
		$this->load->view('header_category', $data);
        $this->load->view('order/shipping_cart');
        $this->load->view('footer');
	}
//code to update the cart

	public function update_cart($rowid)
	{
		$data['title']="Shipping Cart";
		$data['category_front_lists'] = $this->crud->get_front_categories();
		
		$cart_data=array(
							'rowid' => $rowid,
							'qty' => $this->input->post('qty')
		);
		$this->cart->update($cart_data);

		$this->load->view('header_category', $data);
        $this->load->view('order/shipping_cart');
        $this->load->view('footer');
	}
//code to update the cart

	public function update_color_cart($rowid)
	{
		$data['title']="Shipping Cart";
		
		$cart_data=array(
							'rowid' => $rowid,
							'options' =>  array('size'=>$this->input->post('prod_size'),'color'=>$this->input->post('prod_color'))
		);
		$this->cart->update_options($cart_data);  // MY_Cart
		redirect('order/order/cart');
	}
//code to update the cart

	public function update_size_cart($rowid)
	{
		$data['title']="Shipping Cart";
		
		$cart_data=array(
							'rowid' => $rowid,
							'options' =>  array('size'=>$this->input->post('prod_size'),'color'=>$this->input->post('prod_color'))
		);
		$this->cart->update_options($cart_data);
		redirect('order/order/cart');
	}

//code to add wishlist
	public  function add_wish_list($product_slug)
	{
		if($this->session->userdata('wish_list') == FALSE)
		{
			$list=array();
			$list[$product_slug]=array(
				'product_slug' => $product_slug,
				'qty' => 1,
				'created' => date('Y-m-d')
			);
			$this->session->set_userdata('wish_list',$list);
		}
		else
		{
			foreach ($this->session->userdata['wish_list'] as $key => $value) 
			{
				$list[$key]=$value;
			}
				$list[$product_slug]=array(
						'product_slug' => $product_slug,
						'qty' => 1,
						'created' => date('Y-m-d')
					);
			$this->session->set_userdata('wish_list',$list);
		}	
		redirect('order/order/wish_list');
	}
//code to view_wishlist
	public  function wish_list()
	{
		$data['new_product_lists'] = array_slice($this->crud->get_where_order_by("products",array("delete_status" => "0","new_arrival" => "1","status" => "1",'admin_status'=>'1'),"added_date","DESC"),0,3);
		$data['sell_offer'] = array_slice($this->crud->get_where_order_by("products",array("delete_status" => "0","status" => "1",'admin_status'=>'1',"sell_offer"=>'1'),"added_date","DESC"),0,5);
		$data['title']="Wish List";
		$data['category_front_lists'] = $this->crud->get_front_categories();

		$this->load->view('header_category', $data);
        $this->load->view('order/wish_list');
        $this->load->view('footer');
	}
//code to remove wishlist
	public  function remove_wish_list($key)
	{
		foreach ($this->session->userdata['wish_list'] as $keys => $value) 
		{
			if($keys != $key)
			{
				$list[$keys]=$value;
			}
		}
		if(isset($list) && !empty($list))
		{
			$this->session->set_userdata('wish_list',$list);
		}
		else
		{
			$this->session->unset_userdata('wish_list');
		}
		
		redirect('order/order/wish_list');	

	}
//code to update wishlist
	public  function update_wish_list($key)
	{
		$qty=$this->input->post('qty');
		foreach ($this->session->userdata['wish_list'] as $keys => $value) 
		{
			if($keys != $key)
			{
				$list[$keys]=$value;
			}
			else
			{
				$list[$key]=array(
					'product_slug' => $product_slug,
						'qty' => $qty,
						'created' =>date('Y-m-d')
				);
			}
		}
		$this->session->set_userdata('wish_list',$list);
		
		redirect('order/order/wish_list');	

	}
//code to add compare
	public  function add_compare_list($product_slug)
	{
		

		if($this->session->userdata('compare_list') == FALSE)
		{
			$list=array();
			$list[0]=$product_slug;
			$this->session->set_userdata('compare_list',$list);
		}
		else
		{
			foreach ($this->session->userdata['compare_list'] as $key => $value) 
			{
				$list[$key]=$value;
			}
				$list[]=$product_slug;
			$this->session->set_userdata('compare_list',$list);

			 
			// foreach ($this->session->userdata['wish_list'] as $key => $value) 
			// {
			// 	$last_key=$key;
			// }
			// $entry_key = $last_key + 1;
			
			// $this->session->userdata['wish_list'][]=$product_slug;
			
			
		}	
		redirect('order/order/compare_list');
	}
//code to view_wishlist
	public  function compare_list()
	{
		$data['title']="compare List";
		$data['category_front_lists'] = $this->crud->get_front_categories();
		
		$this->load->view('header_category', $data);
        $this->load->view('order/compare');
        $this->load->view('footer');
	}
//code to remove wishlist
	public  function remove_compare_list($key)
	{
		foreach ($this->session->userdata['compare_list'] as $keys => $value) 
		{
			if($keys != $key)
			{
				$list[$keys]=$value;
			}
		}
		if(isset($list) && !empty($list))
		{
			$this->session->set_userdata('compare_list',$list);
		}
		else
		{
			$this->session->unset_userdata('compare_list');
		}
		
		redirect('order/order/compare_list');	

	}
//code to check_out the orders or carts
	public function check_out()
	{
		if($this->input->post())
		{
			$insert['first_name']=$this->input->post('first_name');
			$insert['last_name']=$this->input->post('last_name');
			$insert['company_name']=$this->input->post('company_name');
			$insert['email_address']=$this->input->post('email_address');
			$insert['address']=$this->input->post('address');
			$insert['city']=$this->input->post('city');
			$insert['state']=$this->input->post('state');
			$insert['postal_code']=$this->input->post('postal_code');
			$insert['country']=$this->input->post('country');
			$insert['telephone']=$this->input->post('telephone');
			$insert['fax']=$this->input->post('fax');
			
			$insert['grand_total_tax']=$this->input->post('grand_total_tax');

			$insert['diff_bill_ship']=$this->input->post('diff_bill_ship');

			if($this->input->post('diff_bill_ship') == '1' )
			{
				$insert['first_name_1']=$this->input->post('first_name_1');
				$insert['last_name_1']=$this->input->post('last_name_1');
				$insert['company_name_1']=$this->input->post('company_name_1');
				$insert['email_address_1']=$this->input->post('email_address_1');
				$insert['address_1']=$this->input->post('address_1');
				$insert['city_1']=$this->input->post('city_1');
				$insert['state_1']=$this->input->post('state_1');
				$insert['postal_code_1']=$this->input->post('postal_code_1');
				$insert['country_1']=$this->input->post('country_1');
				$insert['telephone_1']=$this->input->post('telephone_1');
				$insert['fax_1']=$this->input->post('fax_1');
			}

			$insert['shipping_method']=$this->input->post('shipping_method');
			$insert['payment_information']=$this->input->post('payment_information');

			$code = strtoupper(substr(md5(uniqid(rand(1234,9876).time().rand(1111,9999), true)), 3,7));
			$check_code = $this->crud->get_detail($code,"customer_code","igc_guest_order");
			while(count($check_code) > 0)
			{
				$code = strtoupper(substr(md5(uniqid(rand(1234,9876).time().rand(1111,9999), true)), 3,7));
				$check_code = $this->crud->get_detail($code,"customer_code","igc_guest_order");
			}

			$insert['customer_code']=$code;

			$insert['created']=date('Y-m-d:H:i:s');

			$result_insert=$this->crud->insert($insert,"igc_guest_order");

			$test=true;

			foreach ($this->cart->contents() as $key => $value) 
			{
				$this_product=$this->crud->get_detail($value['id'],"product_code","products");

				$order['product_id']=$this_product['product_id'];
				$order['quantity']=$value['qty'];

				if(isset($value['options']['size']) && $value['options']['size'] !="")
				{
							$order['size']=$value['options']['size'];
				}
				
				if(isset($value['options']['color']) && $value['options']['color'] !="")
				{
							$order['color']=$value['options']['color'];
				}			

				$order['customer_code']=$code;
				$order['customer_type']='0';
				$order['created']=date('Y-m-d:H:i:s');

				$order['checked_status']='0';
				$order['delete_status']='0';
				$order['sold_status']='0';

				$test = $test && $this->crud->insert($order,"igc_order_products");

			}

			if($result_insert && $test)
			{
// to send email to customer
				if(!empty($this->session->userdata('email')) && empty(!$this->session->userdata('customer_id')))
	        	{
	        		$user_email=$this->session->userdata('email');
	        		$site_users=$this->crud->get_detail($this->session->userdata('customer_id'),"customer_id","igc_site_users");
	        		$name_c=$site_users['first_name'];
	        		$result_email_customer=$this->mail_customer($user_email,$name_c,$code);
	        	}
	        	else
	        	{
	        		$name_c=$insert['first_name']." ".$insert['last_name'];
					$email=$insert['email_address'];
					$result_email_customer=$this->mail_customer($email,$name_c,$code);
	        	}
//to send email to Super Admin 
	        	$this->mail_super_admin($code,$name_c);
//to send email to the sellers
	        	$this->seller_mail_process($code,$name_c);
	        	$this->session->set_flashdata('success',"Successfully placed Order");
	        	redirect('home');
			}
			else
			{
				$this->session->set_flashdata('eroor',"Error! Unable to place Order");
			}
		}

		$data['title']="Check Out";
		$record['register']="";
		$record['countries']=$this->crud->get_where('all_values',array('status'=>1,'type'=>"country"));
		$data['category_front_lists'] = $this->crud->get_front_categories();

        $this->load->view('header_category', $data);
        $this->load->view('order/checkout',$record);
        $this->load->view('footer');
	}
//controller process to send mail to the specific sellers
	public function seller_mail_process($code,$name_c)
	{
		$order_products=$this->crud->order_products_join($code);
		$admin_products=array();
		$seller_products=array();
		foreach($order_products as $rows)
		{
				if($rows['admin_ref'] > 0)
				{
					$admin_products[]=$rows;
				}
				elseif ($rows['seller_ref'] > 0) 
				{
					$seller_products[$rows['seller_ref']][]=$rows;
				}
				elseif($rows['seller_user_ref'] > 0)
				{
					$users=$this->crud->get_detail($rows['seller_user_ref'],"user_id","igc_sellers_users");
					$seller_products[$users['seller_id']][]=$rows;
				}
		}
		if(count($admin_products) > 0)
		{
			$result=$this->mail_seller("",$name_c,$code,$admin_products);
		}
		if (count($seller_products) > 0) 
		{
			foreach ($seller_products as $key => $value) 
			{
				$seller_info=$this->crud->get_detail($key,"seller_id","igc_sellers");
				$name=$seller_info['first_name']." ".$seller_info['middle_name']." ".$seller_info['last_name'];
				$result=$this->mail_seller($seller_info['email'],$name_c,$code,$value);
			}
		}
	}
//to send mail to customer after order booking	
	public function mail_seller($email,$name,$code,$array)
	{

        $site_settings = $this->site_settings_model->get_site_settings();
        $server = $this->crud->get_mail_info();
        $password = $this->encrypt->decode($server['password']);
        $logo = $this->db->query("SELECT * FROM igc_pictures WHERE locate ='1' AND delete_status ='0'");
         $logors = $logo->result_array();

        if($email =="")
		{
			$email=$server['username'];
		}
		 foreach($logors  as $logos )
         {
             $path = 'uploads/pictures/';
             if (file_exists($path.$logos['pictures_image']) && $logos['pictures_image'] !="")
             {
                $image=$path.$logos['pictures_image'];
             }
         }

        $mail  = new PHPMailer();

        $body1 = ' <!DOCTYPE html>
			<html lang="en">
			<head>
			  <title'. $site_settings['site_name']. ' Product Invoice</title>
			  <meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
			</head>
			<body>

			<div class="container-fluid">
				<div class="container wrapper" style="width: 800px;margin: 0px auto;">
					<div class="header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<center><img  style="margin-top: 2%;" src="'.base_url().$image.'"/></center>
								<canter><h3 style="color: #222;#D11616;margin-top: 2%;text-transform: uppercase;">Invoice</h3></center>
							</div>
						</div><!--End of row-->

						<div class="row invoice-row" style="	margin-top: 5%;">
							<div class="col-md-6 col-sm-12">
								<div class="invoice-to">
									<h6 class="invoice-to-h" style="font-size: 14px;">Client Name:
										<span class="customer-name"  style="font-weight: bolder;margin-left: 2%;text-align: justify;color: #222;">'.$name.'
										</span>
									</h6>
									<h6 class="invoice-to-h" style="font-size: 14px;">Issued Date:<span class="issued-date" style="font-weight: bolder;margin-left: 2%;text-align: justify;color: #222;">'.date('F j,Y').'</span></h6>
									<h6 class="invoice-to-h" style="font-size: 14px;">Invoice No:<span class="invoice-no" style="font-weight: bolder;margin-left: 2%;text-align: justify;color: #222;">'.$code.'</span></h6>

								</div>
							</div>
						</div><!--End of row-->
					
					</div><!--End of header-->
					<div class="billing" style="margin-top: 5%;">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<table  class="bill-table" width="100%" style="padding: 20px;">
								<tr class="heading-bill">
									<th style="color:#A5A2A3;text-align: center;">S.N</th>
									<th style="color:#A5A2A3;text-align: center;">Description</th>
									<th style="color:#A5A2A3;text-align: center;">Quantity</th>
									<th style="color:#A5A2A3;text-align: center;">Rate</th>
									<th style="color:#A5A2A3;text-align: center;">Total</th>
									<th style="color:#A5A2A3;text-align: center;">Total in Dollar</th>
								</tr>';
		$body2='';
		$sn=1;
		$grand_total=0;
		foreach ($array as $key => $value) 
		{
			$this_product = $this->crud->get_detail($value['product_id'],"product_id","products");
			$ind_total=$this_product['product_sell_price']*$value['quantity'];
			$conv_ind_total=$this->currency_conversion($this_product['product_price_currency'],$ind_total);
			$body2 = $body2.'
					<tr>
						<td style="font-weight: bold;text-align: center;">'.$sn.'</td>
						<td style="font-weight: bold;text-align: center;">'.$this_product['product_title'].'</td>
						<td style="font-weight: bold;text-align: center;">'.$value['quantity'].'</td>
						<td style="font-weight: bold;text-align: center;">'.$this_product['product_price_currency'].' '.$this_product['product_sell_price'].'</td>
						<td style="color: #D65540;font-weight: bold;text-align: center;" class="total">'.$this_product['product_price_currency'].' '.$ind_total.'</td>
						<td style="color: #D65540;font-weight: bold;text-align: center;" class="total">$ '.$conv_ind_total.'</td>
					</tr> ';
			$sn++;
			$grand_total += $conv_ind_total;
		}
				      

				$body3 =   '	<tr>
									<td colspan="5" align="right" class="total-bill" style="text-align: right;">Total:</td>
									<td style="color: #D65540;font-weight: bold;text-align: center;" class="total">$ '.$grand_total.'</td>
								</tr>

							</table>
						</div>
					</div><!--End of row-->
				</div><!--billing-->
				

				<div class="row footer-" style="styletext-align: center;margin-top: 3%;">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<center><h6>Thank you for shopping with us. Hope to see you soon !</h6></center> 
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<center><h4>Thanks and Regards,<br />Eshopping Team</h4></center>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<center><a href="<?php echo site_url(); ?>" target="_blank" style="color:#46216F; text-decoration:underline;">'.$site_settings['site_url'].'</a> </center>
						</div>
					</div>
				</div><!--End of row-->
			</div><!--End of container--> 
		</div><!--End of container-fluid-->
	</body>
	</html>' ;

		$body=$body1.$body2.$body3;


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

        $mail->Subject    = $site_settings['site_name']." Products Invoice-Sellers";
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
//to send mail to customer after order booking	
	public function mail_customer($email,$name,$code)
	{

        $site_settings = $this->site_settings_model->get_site_settings();
        $server = $this->crud->get_mail_info();
		$password = $this->encrypt->decode($server['password']);

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

        $mail  = new PHPMailer();
 $body1 = ' <!DOCTYPE html>
			<html lang="en">
			<head>
			  <title'. $site_settings['site_name']. 'Product Customer Invoice</title>
			  <meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
			</head>
			<body>
			<div class="container-fluid">
				<div class="container wrapper" style="width: 800px;margin: 0px auto;">
					<div class="header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<center><img  style="margin-top: 2%;" class="img-responsive company-logo" src="'.base_url().$image.'" width="30%"></center>
								<canter><h3 style="color: #222;#D11616;margin-top: 2%;text-transform: uppercase;">Invoice</h3></center>
							</div>
						</div><!--End of row-->

						<div class="row invoice-row" style="	margin-top: 5%;">
							<div class="col-md-6 col-sm-12">
								<div class="invoice-to">
									<h6 class="invoice-to-h" style="font-size: 14px;">Client Name:
										<span class="customer-name"  style="font-weight: bolder;margin-left: 2%;text-align: justify;color: #222;">'.$name.'
										</span>
									</h6>
									<h6 class="invoice-to-h" style="font-size: 14px;">Issued Date:<span class="(issued-date" style="font-weight: bolder;margin-left: 2%;text-align: justify;color: #222;">'.date('F j,Y').'</span></h6>
									<h6 class="invoice-to-h" style="font-size: 14px;">Invoice No:<span class="invoice-no" style="font-weight: bolder;margin-left: 2%;text-align: justify;color: #222;">'.$code.'</span></h6>

								</div>
							</div>
						</div><!--End of row-->
					
					</div><!--End of header-->
					<div class="billing" style="margin-top: 5%;">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<table  class="bill-table" width="100%" style="padding: 20px;">
								<tr class="heading-bill">
									<th style="color:#A5A2A3;text-align: center;">S.N</th>
									<th style="color:#A5A2A3;text-align: center;">Description</th>
									<th style="color:#A5A2A3;text-align: center;">Quantity</th>
									<th style="color:#A5A2A3;text-align: center;">Rate</th>
									<th style="color:#A5A2A3;text-align: center;">Total</th>
									<th style="color:#A5A2A3;text-align: center;">Total in Dollar</th>
								</tr>';
								$body2='';
		$sn=1;
		$grand_total=0;
		foreach ($this->cart->contents() as $key => $value) 
		{
			$this_product=$this->crud->get_detail($value['id'],"product_code","products");
			$ind_total=$this_product['product_sell_price']*$value['qty'];
			$conv_ind_total=$this->currency_conversion($this_product['product_price_currency'],$ind_total);
			$body2 = $body2.'
					<tr>
						<td style="font-weight: bold;text-align: center;">'.$sn.'</td>
						<td style="font-weight: bold;text-align: center;">'.$this_product['product_title'].'</td>
						<td style="font-weight: bold;text-align: center;">'.$value['qty'].'</td>
						<td style="font-weight: bold;text-align: center;">'.$this_product['product_price_currency'].' '.$this_product['product_sell_price'].'</td>
						<td style="color: #D65540;font-weight: bold;text-align: center;" >'.$this_product['product_price_currency'].' '.$ind_total.'</td>
						<td style="color: #D65540;font-weight: bold;text-align: center;" >$ '.$conv_ind_total.'</td>
					</tr> ';
			$sn++;
			$grand_total += $conv_ind_total;
		}
			$tax_grand_total= ((100+$site_settings['tax'])/100)*$grand_total;
				      

				$body3 =   '	<tr>
									<td colspan="5" align="right" class="total-bill" style="text-align: right;">Total:</td>
									<td style="color: #D65540;font-weight: bold;text-align: center;" class="total">$ '.$tax_grand_total.'</td>
								</tr>

							</table>
						</div>
					</div><!--End of row-->
				</div><!--billing-->

				<div class="row footer-" style="styletext-align: center;margin-top: 3%;">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<center><h4>Thank you for shopping with us. Hope to see you soon !</h4></center> 
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<center><h4>Thanks and Regards,<br />Eshopping Team</h4></center>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<center><a href="<?php echo site_url(); ?>" target="_blank" style="color:#46216F; text-decoration:underline;">'.$site_settings['site_url'].'</a> </center>
						</div>
					</div>
				</div><!--End of row-->
			</div><!--End of container--> 
		</div><!--End of container-fluid-->
	</body>
	</html>' ;


		$body=$body1.$body2.$body3;


        if($server['smtp_connect'] == "true")
        {
            $mail->IsSMTP(); // telling the class to use SMTP
        }
        // $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->isHTML(true);

        $mail->SMTPSecure = $server['server_prefix'];                 // sets the prefix to the servier

        $mail->Host       =  $server['host'];      // sets GMAIL as the SMTP server

        $mail->Port       = $server['port'];                  // set the SMTP port for the GMAIL server

        $mail->Username   = $server['username'];  // GMAIL username

        $mail->Password   = $password;          // GMAIL password

        $mail->SetFrom($server['send_from_email'], $server['send_from_name']);

        $mail->AddReplyTo($server['reply_to_email'],$server['reply_to_name']);

        $mail->Subject    = $site_settings['site_name']." Ordered Products-Customer";


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
 // to mail super admin to mail about cusotmer bought products
	public function mail_super_admin($code,$name)
	{

        $site_settings = $this->site_settings_model->get_site_settings();
        $server = $this->crud->get_mail_info();
		$password = $this->encrypt->decode($server['password']);

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

        $mail  = new PHPMailer();
 $body1 = ' <!DOCTYPE html>
			<html lang="en">
			<head>
			  <title'. $site_settings['site_name']. 'Product Customer Invoice</title>
			  <meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
			</head>
			<body>
			<div class="container-fluid">
				<div class="container wrapper" style="width: 800px;margin: 0px auto;">
					<div class="header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<center><img  style="margin-top: 2%;" class="img-responsive company-logo" src="'.base_url().$image.'" width="30%"></center>
								<canter><h3 style="color: #222;#D11616;margin-top: 2%;text-transform: uppercase;">Invoice</h3></center>
							</div>
						</div><!--End of row-->

						<div class="row invoice-row" style="	margin-top: 5%;">
							<div class="col-md-6 col-sm-12">
								<div class="invoice-to">
									<h6 class="invoice-to-h" style="font-size: 14px;">Client Name:
										<span class="customer-name"  style="font-weight: bolder;margin-left: 2%;text-align: justify;color: #222;">'.$name.'
										</span>
									</h6>
									<h6 class="invoice-to-h" style="font-size: 14px;">Issued Date:<span class="(issued-date" style="font-weight: bolder;margin-left: 2%;text-align: justify;color: #222;">'.date('F j,Y').'</span></h6>
									<h6 class="invoice-to-h" style="font-size: 14px;">Invoice No:<span class="invoice-no" style="font-weight: bolder;margin-left: 2%;text-align: justify;color: #222;">'.$code.'</span></h6>

								</div>
							</div>
						</div><!--End of row-->
					
					</div><!--End of header-->
					<div class="billing" style="margin-top: 5%;">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<table  class="bill-table" width="100%" style="padding: 20px;">
								<tr class="heading-bill">
									<th style="color:#A5A2A3;text-align: center;">S.N</th>
									<th style="color:#A5A2A3;text-align: center;">Description</th>
									<th style="color:#A5A2A3;text-align: center;">Quantity</th>
									<th style="color:#A5A2A3;text-align: center;">Rate</th>
									<th style="color:#A5A2A3;text-align: center;">Total</th>
									<th style="color:#A5A2A3;text-align: center;">Total in Dollar</th>
								</tr>';
								$body2='';
		$sn=1;
		$grand_total=0;
		foreach ($this->cart->contents() as $key => $value) 
		{
			$this_product=$this->crud->get_detail($value['id'],"product_code","products");
			$ind_total=$this_product['product_sell_price']*$value['qty'];
			$conv_ind_total=$this->currency_conversion($this_product['product_price_currency'],$ind_total);
			$body2 = $body2.'
					<tr>
						<td style="font-weight: bold;text-align: center;">'.$sn.'</td>
						<td style="font-weight: bold;text-align: center;">'.$this_product['product_title'].'</td>
						<td style="font-weight: bold;text-align: center;">'.$value['qty'].'</td>
						<td style="font-weight: bold;text-align: center;">'.$this_product['product_price_currency'].' '.$this_product['product_sell_price'].'</td>
						<td style="color: #D65540;font-weight: bold;text-align: center;" >'.$this_product['product_price_currency'].' '.$ind_total.'</td>
						<td style="color: #D65540;font-weight: bold;text-align: center;" >$ '.$conv_ind_total.'</td>
					</tr> ';
			$sn++;
			$grand_total += $conv_ind_total;
		}
			$tax_grand_total= ((100+$site_settings['tax'])/100)*$grand_total;
				      

				$body3 =   '	<tr>
									<td colspan="5" align="right" class="total-bill" style="text-align: right;">Total:</td>
									<td style="color: #D65540;font-weight: bold;text-align: center;" class="total">$ '.$tax_grand_total.'</td>
								</tr>

							</table>
						</div>
					</div><!--End of row-->
				</div><!--billing-->

				<div class="row footer-" style="styletext-align: center;margin-top: 3%;">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<center><h4>Eshopping Team</h4></center>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<center><a href="<?php echo site_url(); ?>" target="_blank" style="color:#46216F; text-decoration:underline;">'.$site_settings['site_url'].'</a> </center>
						</div>
					</div>
				</div><!--End of row-->
			</div><!--End of container--> 
		</div><!--End of container-fluid-->
	</body>
	</html>' ;


		$body=$body1.$body2.$body3;


        if($server['smtp_connect'] == "true")
        {
            $mail->IsSMTP(); // telling the class to use SMTP
        }
        // $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->isHTML(true);

        $mail->SMTPSecure = $server['server_prefix'];                 // sets the prefix to the servier

        $mail->Host       =  $server['host'];      // sets GMAIL as the SMTP server

        $mail->Port       = $server['port'];                  // set the SMTP port for the GMAIL server

        $mail->Username   = $server['username'];  // GMAIL username

        $mail->Password   = $password;          // GMAIL password

        $mail->SetFrom($server['send_from_email'], $server['send_from_name']);

        $mail->AddReplyTo($server['reply_to_email'],$server['reply_to_name']);

        $mail->Subject    = $site_settings['site_name']." Ordered Products-Super Admin";


        $mail->MsgHTML($body);



        $mail->AddAddress($server['send_from_email'], $server['send_from_name']);



      if(! $mail->Send())
       {
           return FALSE;

      }
        else
        {

            return TRUE;

        }

    }


//code to login
	public function login()
    {
        if($this->input->post())
        {
            
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_user_exist['.$this->input->post('password').']');

            if ($this->form_validation->run()) 
            {
                $email = $this->input->post('email');
                $password = md5($this->input->post('password'));
                $customer = $this->login->check_user($email, $password);
		                if ($customer)
		                 {
		                        $this->session->set_userdata('email', $email);
		                        $this->session->set_userdata('customer_id', $customer['customer_id']);
		                            if(strlen($this->session->userdata('return_to_url')) > 1)
		                            { 
		                                $url = $this->session->userdata('return_to_url');
		                                redirect("$url"); 
		                            }
		                            else
		                            { 
		                                redirect('order/order/check_out'); 
		                            }
                        } 
                        else 
                        {
                            $this->session->set_flashdata('error', 'Unable to maintain session .Please try again Later.');
                            redirect('order/order/check_out'); 
                        }
                    }
        }
        $data['title']="Check Out";
        $record['register']="";
        $data['category_front_lists'] = $this->crud->get_front_categories();

        $this->load->view('header_category', $data);
        $this->load->view('order/checkout',$record);
        $this->load->view('footer');

    }
//code to register the new user
    public function register()
    {
        if($this->input->post()) 
        {

            $this->form_validation->set_rules('full_name', 'Full Name', 'trim|required');
            $this->form_validation->set_rules('contact_number', 'Contact Number', 'trim|required');
            $this->form_validation->set_rules('email', 'Contact Number', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'required|matches[confirm_password]|min_length[6]');
            $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_check_user_already_exist');

            if ($this->form_validation->run()) {

                $insert['first_name'] = $this->input->post('full_name');
                $insert['email'] = $this->input->post('email');
                $insert['contact_no'] = $this->input->post('contact_number');
                $insert['activation_code'] = md5(rand());
                $insert['password'] = md5($this->input->post('password'));
                $insert['created'] = date('Y-m-d:H:i:s');
                $insert['customer_type'] = 'register';
                $insert['active_status']='N';

                if($this->send_account_activation_mail( $insert['email'],  $insert['activation_code']) == "TRUE")
                {
                    $result = $this->crud->insert($insert,'igc_site_users');

                    if ($result) 
                    {
                        $this->session->set_flashdata('success', "Registration Successful.Please check your mail to activate your account.");
                        $data['title']="Check Out";
                        $record['register']="active";
				        $this->load->view('header_category', $data);
				        $this->load->view('order/checkout',$record);
				        $this->load->view('footer');
                    } 
                    else 
                    {
                        $this->session->set_flashdata('error', "Internal Server Error.Please try again Later.");
                        $data['title']="Check Out";
                        $record['register']="active";
				        $this->load->view('header_category', $data);
				        $this->load->view('order/checkout',$record);
				        $this->load->view('footer');
                    }
                }
                else
                {
					$data['error'] = "Error in sending email .Please try again Later.";
				}

			}
		}
        //code to load extra script in header

        $data['scripts'] = array('themes/js/form-validator/jquery.form-validator');
        $data['sub_title'] =  "Register"." ";
        $record['register'] ="active";
        $data['category_front_lists'] = $this->crud->get_front_categories();

        $this->load->view('header_category', $data);
        $this->load->view('order/checkout',$record);
        $this->load->view('footer');
    }
//code to check if email is already use from the form set rules call back
    public function check_user_already_exist($str)
    {

        $user = $this->login->check_email_exist($str);

        if(empty($user))
        {
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_user_already_exist', 'You are already register in our system.');
            return FALSE;
        }

    }


//function to send account activation email

    public function send_account_activation_mail($email, $md5)
    {
        $site_settings = $this->site_settings_model->get_site_settings();
        $server = $this->crud->get_mail_info();

        $password = $this->encrypt->decode($server['password']);

        $server_url = base_url().'index.php/login/account_activation/'.$md5;

        $mail  = new PHPMailer();

        $body = '<!DOCTYPE HTML>
				<html>
				<head>
				    <meta charset="utf-8">
				    <title>'. $site_settings['site_name']. 'Account Activation</title>
				</head>

				<body>
				<div style="width:580px;margin:0 auto;font:12px Arial,Helvetica,sans-serif;background:#fff">
				  <div style="margin:0 0 10px"> <img alt="Image" src="'.base_url().'/themes/images/logos/navbar-logo.png"> </div>


				    <table width="100%" cellspacing="0" cellpadding="5" border="0">

				        <tbody>

				         <tr>
				           <p>
				          In order to activate your account. please click the  Link. '.'<a href="'.$server_url.'">'.$server_url.'</a>'.'</p>
				        </tr>

				        <tr>
				            <td colspan="2" style="background:#EEE; text-align:left;">Thanks and Regards,<br />
				                Al Rukn Al Shami Team<br />
				                <a href="<?php echo site_url(); ?>" target="_blank" style="color:#46216F; text-decoration:underline;">www.alrunkalshami.com</a></td>
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

        $mail->Subject    = $site_settings['site_name']." Account Activation";


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


    public function currency_conversion($currency,$money)
	{
		$settings = $this->site_settings_model->get_site_settings(); 
        
        if($currency == "$")
        {
            $conv_money= $money;
        }
        elseif($currency == "NPR")
        {
            $conv_money= $money/$settings['npr'];
        }
        elseif($currency == "AED")
        {
            $conv_money= $money/$settings['aed'];
        }
        elseif($currency == "€")
        {
            $conv_money= $money/$settings['euro'];
        }
        elseif($currency == "£")
        {
            $conv_money= $money/$settings['pound'];
        }
        elseif($currency == "INR")
        {
            $conv_money= $money/$settings['inr'];
        }

        $f_conv_money=round($conv_money,3);
        return $f_conv_money;
    }
}




