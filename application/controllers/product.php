<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends CI_Controller{
    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('site_settings_model', 'settings');
        $this->load->model('package_model','package');
        $this->load->model('crud_model','crud');
        $this->load->library('cart');
    }


    public $table = "products";
    public $field_name = "product_id";
    public $redirect = "product";

    public function index($slug)
    {
        $data['menu'] = "products";
		$value['product_detail'] = $this->crud->get_detail(14, "content_id", "igc_content");
        $value['product_lists'] = $this->crud->get_where($this->table,array("status" => "1","delete_status" => "0"));
        $this->load->view('header', $data);
        $this->load->view('page/product_view',$value);
        $this->load->view('footer');

    }

    public function detail($slug){

        $data['menu'] = "products";
        $productDetail = $this->crud->get_detail($slug, "product_slug", $this->table);
        if(count($productDetail) > 0){
            $value['product_detail'] = $productDetail;
            $value['related_product'] = $this->crud->get_where($this->table,array("product_category_id" => $productDetail['product_category_id'], "status" => "1","delete_status" => "0"));
            $value['category_detail'] = $this->crud->get_detail($productDetail['product_category_id'], "category_id", "product_category");
        }
        else{ redirect('pages/products'); }

        $this->load->view('header', $data);
        $this->load->view('product/single_product',$value);
        $this->load->view('footer');

    }

    public function cart(){

        $data['menu'] = "products";
        $this->load->view('header', $data);
        $this->load->view('product/cart');
        $this->load->view('footer');

    }

    public function checkout(){

        $data['menu'] = "products";
        $this->load->view('header', $data);
        $this->load->view('product/checkout');
        $this->load->view('footer');

    }

    public function category($id){
        if ($id <= 0) { redirect('pages/products'); }

        $data['menu'] = "category";
        $value['category_detail'] = $this->crud->get_detail($id, "category_id", "product_category");
        $data['category_lists'] = $this->crud->get_where("product_category",array("parent_id" => "0", "delete_status" => "0","status" => "1"));
        $value['product_lists'] = $this->crud->get_where($this->table,array("product_category_id" => $id, "status" => "1","delete_status" => "0"));
        $this->load->view('header', $data);
        $this->load->view('product/category',$value);
        $this->load->view('footer');

    }

    public function all_category(){

        $data['menu'] = "category";
        $data['product_lists'] = $this->crud->get_where("products",array("delete_status" => "0","status" => "1"));
        $data['category_lists'] = $this->crud->get_where("product_category",array("delete_status" => "0","status" => "1"));
        $this->load->view('header', $data);
        $this->load->view('product/all_category');
        $this->load->view('footer');

    }

    public function add_to_my_cart($id){
        if (strlen($id) <= 1) {
            redirect('pages/products');
        }
        else{
            $checkProduct = $this->crud->get_detail(trim($id), "product_code", $this->table);
            if(count($checkProduct) > 1){
                if($this->input->post()){
                    //Create Product Cart Session Data
                    $cartData = array(
                        "id" => $checkProduct['product_code'],
                        "qty" => $this->input->post('quantity'),
                        "price" => $checkProduct['product_sell_price'],
                        "name" => $checkProduct['product_title']
                    );
                    $this->cart->insert($cartData);
                    redirect('product/cart');
                }else{
                    redirect('product/detail/'.$checkProduct['product_slug']);
                }

            }else{
                    redirect('pages/products');
            }
        }

    }//function

    public function remove_item($id){
        if(strlen($id) <= 1){ redirect('product/cart'); }
        else{
             $data = array(
                'rowid'   => $id,
                'qty'     => 0
            );
            $this->cart->update($data);
            redirect('product/cart');

        }
    }

    public function cash_on_delivery(){
        $this->session->set_userdata('return_to_url', 'product/cash_on_delivery');
        if(strlen($this->session->userdata('email')) <= 0){ redirect('login'); exit; }
        $userId = $this->session->userdata('customer_id');
        $data['user_detail'] = $this->crud->get_detail($userId, "customer_id", "igc_site_users");

        $data['menu'] = "product";
        $this->load->view('header', $data);
        $this->load->view('product/cash_on_delivery');
        $this->load->view('footer');

    }

    public function paid_on_counter(){
        $this->session->set_userdata('return_to_url', 'product/paid_on_counter');
        if(strlen($this->session->userdata('email')) <= 0){ redirect('login'); exit; }
        $userId = $this->session->userdata('customer_id');
        $data['user_detail'] = $this->crud->get_detail($userId, "customer_id", "igc_site_users");

        $data['menu'] = "product";
        $this->load->view('header', $data);
        $this->load->view('product/paid_on_counter');
        $this->load->view('footer');

    }

    public function complete_order(){

        if(strlen($this->session->userdata('email')) <= 0){ redirect('login'); exit; }

        if($this->input->post()){

            $userId = $this->session->userdata('customer_id');

            $error = "";
            $order['payment_option'] = $this->input->post('payment_option');

            $order['full_name'] = $this->input->post('fullName');
            $error .= (strlen($order['full_name']) <= 5) ? "Full Name Required<br/>" : "";

            $order['email'] = $this->input->post('email');
            $error .= (strlen($order['email']) <= 5) ? "E-Mail Required<br/>" : "";

            $order['phone'] = $this->input->post('phone');
            $error .= (strlen($order['phone']) < 9) ? "Contact Number Required<br/>" : "";

            $order['address'] = $this->input->post('address');
            $error .= ($order['payment_option'] == 'delivery' && strlen($order['address']) <= 10) ? "Delivery Address Required<br/>" : "";

            $order['message'] = $this->input->post('message');

            if (empty($error)) {

                if($order['payment_option'] == 'delivery' || $order['payment_option'] == 'counter'){

                    if(count($this->cart->contents()) > 0){
                        $totalCartAmount = array_sum(array_column($this->cart->contents(), 'subtotal'));
                        $totalQuantity = array_sum(array_column($this->cart->contents(), 'qty'));
                        $vatValue = 5;
                        $vatAmount = $totalCartAmount*($vatValue/100);
                        $gradnTotalAmount = ($totalCartAmount+$vatAmount);
                        $orderCode = rand(111222333,999888777);
                        $transitionId = time();

                        //Insert Order Data
                        $insert['ordering_code'] = $orderCode;
                        $insert['transition_id'] = $transitionId;
                        $insert['user_id'] = $userId;
                        $insert['order_full_name'] = $order['full_name'];
                        $insert['order_email'] = $order['email'];
                        $insert['order_phone'] = $order['phone'];
                        $insert['order_address'] = $order['address'];
                        $insert['order_message'] = $order['message'];
                        $insert['order_quantity'] = $totalQuantity;
                        $insert['order_currency'] = "AED";
                        $insert['order_cart_total'] = number_format($totalCartAmount,2);
                        $insert['order_vat_amount'] = number_format($vatAmount,2);
                        $insert['order_offer_amount'] = 0.00;
                        $insert['order_coupon_amount'] = 0.00;
                        $insert['order_amount'] = number_format($gradnTotalAmount,2);
                        $insert['order_ip'] = $this->input->ip_address();
                        $insert['order_lat'] = "";
                        $insert['order_long'] = "";
                        $insert['order_date'] = date('Y-m-d');
                        $insert['order_time'] = date('h:i:s');
                        $insert['order_status'] = "Complete";
                        $insert['delivery_status'] = "Pending";
                        $insertOrder = $this->crud->insert($insert, "order_shipping");

                        //Insert Product Data
                        foreach($this->cart->contents() as $items):
                            $product['order_code'] = $orderCode;
                            $product['transition_id'] = $transitionId;
                            $product['product_code'] = $items['id'];
                            $product['product_name'] = $items['name'];
                            $product['quantity'] = $items['qty'];
                            $product['currency'] = "AED";
                            $product['amount'] = number_format($items['subtotal'],2);
                            $insertProduct = $this->crud->insert($product, "order_product");
                        endforeach;

                        //Detail Value For Email
                        $email['payment_option'] = ($order['payment_option'] == 'delivery') ? "Cash On Delivery" : "Paid On Counter";
                        $email['full_name'] = $order['full_name'];
                        $email['email'] = $order['email'];
                        $email['phone'] = $order['phone'];
                        $email['address'] = $order['address'];
                        $email['message'] = $order['message'];
                        $email['order_id'] = $orderCode;
                        $email['transition_id'] = $transitionId;
                        $email['order_cart'] = $this->cart->contents();

                        //Send Email To user and admin and then Redirect to Success Page
                        $this->sendCustomerEmail($email);
                        $this->sendAdminEmail($email);

                        $this->cart->destroy();

                        redirect('product/success_order');

                    }else{
                        redirect('product/cart');
                    }

                }else{
                    redirect('product/checkout');
                }
            }
            else{
                $this->session->set_flashdata('error', $error);
                redirect('product/checkout');
            }

        }else{
            redirect('product/checkout');
        }
    }

    public function success_order(){
        $data['menu'] = "product";
        $data['success_title'] = "Product Order Successful.";
        $data['success_detail'] = "Thank you for ordering product from Us. We will immidiatly follow your order and inform you.<br/> Thank You.";
        $data['success_footer'] = "Al Ruk Al Shami Team";
        $this->load->view('header', $data);
        $this->load->view('product/success_order');
        $this->load->view('footer');
    }

    public function sendCustomerEmail($email){

        $this->load->library('encrypt');
        $site_settings = $this->site_settings_model->get_site_settings();
        $server = $this->site_settings_model->get_mail_info();
        $password = $this->encrypt->decode($server['password']);

        $customerEmail = (strlen($email['email']) > 1) ? $email['email'] : 'test@almawadahit.ae';
        $customerName = (strlen($email['full_name']) > 1) ? $email['full_name'] : 'User';

        $this->load->library('mailer');
        $mail  = new PHPMailer();

        $order_cart = $email['order_cart'];
        $totalCartAmount = array_sum(array_column($order_cart, 'subtotal'));
        $vatValue = 5;
        $vatAmount = $totalCartAmount*($vatValue/100);

        $producListDetail = '<table width="100%" cellspacing="0" cellpadding="5" border="0">';
        $producListDetail .= '<thead><tr><th>Product Name</th><th>Amount</th><th>Qty.</th><th>Total</th></tr></thead><tbody>';
        foreach($order_cart as $items):
            $producListDetail .= '<tr><td>'.$items['name'].'</td><td>AED '.number_format($items['price'],2).'</td><td>'.$items['qty'].'</td><td>AED '.number_format($items['subtotal'],2).'</td></tr>';
        endforeach;
        $producListDetail .= '<tr><td align="right" colspan="3">Sub Total</td><td>AED '.number_format($totalCartAmount,2).'</td></tr>';
        $producListDetail .= '<tr><td align="right" colspan="3">VAT Amount</td><td>AED '.number_format($vatAmount,2).'</td></tr>';
        $producListDetail .= '<tr><td align="right" colspan="3">Grand Amount</td><td><strong>AED '.number_format($totalCartAmount+$vatAmount,2).'</strong></td></tr>';
        $producListDetail .= '</tbody></table>';

        $body = '<!DOCTYPE HTML>
        <html>
        <head>
        <meta charset="utf-8">
        <title>Product Ordered Successfully.</title>
        </head>
        <body>
        <div style="width:580px;margin:0 auto;font:12px Arial,Helvetica,sans-serif;background:#fff">
            <div style="margin:0 0 10px"> 
            <img alt="Al Rukn Al Shami" src="'.base_url().'/manage/theme/dist/img/image-logo.png" width="" height="100"> </div>
            <p align="center"><strong>Product Ordered Successfully.</strong></p>
            <h3 align="center">Your Order Details</h3>
            <table width="100%" cellspacing="0" cellpadding="5" border="0">
        <tbody>
        <tr>
            <td>
            Hi, '.$customerName.', <br/>
            Your product order submitted Successfully,<br/>
            please find detail below:
            </td>
        </tr>
        <tr>
            <td style="background:#eee" colspan="2">Ordered Person Details</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid #eee">Ordered Person Name</td>
            <td style="border-bottom:1px solid #eee">'.$email['full_name'] .'</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid #eee">E-mail</td>
            <td style="border-bottom:1px solid #eee">'.$email['email'] .'</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid #eee">Contact Number</td>
            <td style="border-bottom:1px solid #eee">'.$email['phone'] .'</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid #eee">Address</td>
            <td style="border-bottom:1px solid #eee">'.$email['address'] .'</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid #eee">Message</td>
            <td style="border-bottom:1px solid #eee">'.$email['message'] .'</td>
        </tr>
        <tr>
            <th style="background:#eee" colspan="2">Order Detail</th>
        </tr>
        <tr>
            <td style="border-bottom:1px solid #eee">Order ID</td>
            <td style="border-bottom:1px solid #eee"> '.$email['order_id'].'</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid #eee">Payment Option</td>
            <td style="border-bottom:1px solid #eee">'.$email['payment_option'].'</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid #eee">Order Date</td>
            <td style="border-bottom:1px solid #eee">'.date('Y-m-d').'</td>
        </tr>
        <tr>
            <th style="background:#eee" colspan="2">Product Detail</th>
        </tr>
        '.$producListDetail.'
        <tr>
            <th style="background:#eee" colspan="2">Note</th>
        </tr>
        <tr>
            <td>
            Thank You For Your Order<br/>
            We will process your order ASAP and contact you soon.<br/>
            Keep Update In Al Rukh Al Shami.
            <br/>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="background:#EEE; text-align:left;">Thanks and Regards,<br />
                Al Rukh Al Shami Team<br />
                <a href="'.base_url().'" target="_blank" style="color:#46216F; text-decoration:underline;">Al Rukh Al Shami L.L.C.</a></td>
        </tr>
        </tbody>
        </table>
        </div>
        </body>
        </html>';


        if($server['smtp_connect'] == "true"){ $mail->IsSMTP(); }
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = $server['server_prefix'];
        $mail->Host       = $server['host'];
        $mail->Port       = $server['port'];
        $mail->Username   = $server['username'];
        $mail->Password   = $password;
        $mail->SetFrom($server['send_from_email'], $server['send_from_name']);
        $mail->AddReplyTo($server['reply_to_email'],$server['reply_to_name']);
        $mail->Subject    = "Thank You For Your Order ".$email['full_name'];
        $mail->MsgHTML($body);
        $mail->AddAddress($customerEmail, $customerName);
        $mail->AddAddress("hisubedisushil@gmail.com", "Sushil Subedi");
        if($mail->Send()) { return TRUE; }
        else{ return FALSE;}

    }

    public function sendAdminEmail($email){

        $this->load->library('encrypt');
        $site_settings = $this->site_settings_model->get_site_settings();
        $server = $this->site_settings_model->get_mail_info();
        $password = $this->encrypt->decode($server['password']);

        $this->load->library('mailer');
        $mail  = new PHPMailer();

        $order_cart = $email['order_cart'];
        $totalCartAmount = array_sum(array_column($order_cart, 'subtotal'));
        $vatValue = 5;
        $vatAmount = $totalCartAmount*($vatValue/100);

        $producListDetail = '<table width="100%" cellspacing="0" cellpadding="5" border="0">';
        $producListDetail .= '<thead><tr><th>Product Name</th><th>Amount</th><th>Qty.</th><th>Total</th></tr></thead><tbody>';
        foreach($order_cart as $items):
            $producListDetail .= '<tr><td>'.$items['name'].'</td><td>AED '.number_format($items['price'],2).'</td><td>'.$items['qty'].'</td><td>AED '.number_format($items['subtotal'],2).'</td></tr>';
        endforeach;
        $producListDetail .= '<tr><td align="right" colspan="3">Sub Total</td><td>AED '.number_format($totalCartAmount,2).'</td></tr>';
        $producListDetail .= '<tr><td align="right" colspan="3">VAT Amount</td><td>AED '.number_format($vatAmount,2).'</td></tr>';
        $producListDetail .= '<tr><td align="right" colspan="3">Grand Amount</td><td><strong>AED '.number_format($totalCartAmount+$vatAmount,2).'</strong></td></tr>';
        $producListDetail .= '</tbody></table>';

        $body = '<!DOCTYPE HTML>
        <html>
        <head>
        <meta charset="utf-8">
        <title>Order Request Added Successfully</title>
        </head>
        <body>
        <div style="width:580px;margin:0 auto;font:12px Arial,Helvetica,sans-serif;background:#fff">
            <div style="margin:0 0 10px"> 
            <img alt="Al Rukn Al Shami" src="'.base_url().'/manage/theme/dist/img/image-logo.png" width="" height="100"> </div>
            <p align="center"><strong>New Order Request Added</strong></p>
            <h3 align="center">Request Details</h3>
            <table width="100%" cellspacing="0" cellpadding="5" border="0">
        <tbody>
        <tr>
            <td>
            Hi Admin, <br/>
            New Order Request Has Been Added,<br/>
            please find detail below:
            </td>
        </tr>
        <tr>
            <td style="background:#eee" colspan="2">Request Peson Details</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid #eee">Ordered Person Name</td>
            <td style="border-bottom:1px solid #eee">'.$email['full_name'] .'</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid #eee">E-mail</td>
            <td style="border-bottom:1px solid #eee">'.$email['email'] .'</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid #eee">Contact Number</td>
            <td style="border-bottom:1px solid #eee">'.$email['phone'] .'</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid #eee">Address</td>
            <td style="border-bottom:1px solid #eee">'.$email['address'] .'</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid #eee">Message</td>
            <td style="border-bottom:1px solid #eee">'.$email['message'] .'</td>
        </tr>
        <tr>
            <th style="background:#eee" colspan="2">Order Detail</th>
        </tr>
        <tr>
            <td style="border-bottom:1px solid #eee">Order ID</td>
            <td style="border-bottom:1px solid #eee"> '.$email['order_id'].'</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid #eee">Payment Option</td>
            <td style="border-bottom:1px solid #eee">'.$email['payment_option'].'</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid #eee">Order Date</td>
            <td style="border-bottom:1px solid #eee">'.date('Y-m-d').'</td>
        </tr>
        <tr>
            <th style="background:#eee" colspan="2">Product Detail</th>
        </tr>
        '.$producListDetail.'
        <tr>
            <th style="background:#eee" colspan="2">Note</th>
        </tr>
        <tr>
            <td>
            All other request details are showed in Admin Panel.<br/>
            Please logged in to your Admin Panel Dashboard and check for full detail.
            </td>
        </tr>
        <tr>
            <td colspan="2" style="background:#EEE; text-align:left;">Thanks and Regards,<br />
                Al Rukn Al Shami Team<br />
                <a href="'.base_url().'" target="_blank" style="color:#46216F; text-decoration:underline;">Al Rukn Al Shami</a><br/>
                <a href="'.base_url().'manage" target="_blank" style="color:#46216F; text-decoration:underline;">Al Rukn Al Shami Admin Dashboard</a></td>
        </tr>
        </tbody>
        </table>
        </div>
        </body>
        </html>';

        if($server['smtp_connect'] == "true"){ $mail->IsSMTP(); }
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = $server['server_prefix'];
        $mail->Host       =  $server['host'];
        $mail->Port       = $server['port'];
        $mail->Username   = $server['username'];
        $mail->Password   = $password;
        $mail->SetFrom($server['send_from_email'], $server['send_from_name']);
        $mail->AddReplyTo($server['reply_to_email'],$server['reply_to_name']);
        $mail->Subject    = "New Order by ".$email['full_name'] . " is Added.";
        $mail->MsgHTML($body);
        $mail->AddAddress("hisubedisushil@gmail.com", $server['send_from_name']);
        //$mail->AddAddress($server['username'], $server['send_from_name']);
        if($mail->Send()) { return TRUE; }
        else{ return FALSE;}

    }


}