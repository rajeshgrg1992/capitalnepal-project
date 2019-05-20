<?php
class Order extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        is_already_logged_in();
        
		$this->load->model('crud_model','crud');
        $this->load->library('pagination');
	}

	public $table="igc_order_products";
	public $redirect="order";
	public $field_name="id";

	public function index()
	{ 
        
        $data['records']=$this->crud->get_cmp_order_products();

		$data['title']="Ordered Items";

        $this->load->view('header', $data);
        $this->load->view('order_list');
        $this->load->view('footer');
	}
    public function sold($enum)
    {
        $data['records']=$this->crud->get_cmp_sold_order_products($enum);
        if($enum == '0')
            {$data['title']="UnSold Ordered Items";}
        else
            {$data['title']="Sold Ordered Items";}

        $this->load->view('header', $data);
        $this->load->view('order_list');
        $this->load->view('footer');
    }
	
    public function delete($id)
    {
        $report=$this->crud->soft_delete($id,"id",$this->table);
        
        redirect($this->redirect);
    }
// to check and uncheck the sold condtion
    public function check_action($id,$enum,$qty)
    {
        $order_products_detail=$this->crud->get_detail($id,"id",$this->table);
        $product_detail=$this->crud->get_detail($order_products_detail['product_id'],"product_id","products");
        if($enum == '0')
        {
            $update_order['sold_status']='1';
            $update_products['counts']=$product_detail['counts'] - $qty;
        }
        else
        {
            $update_order['sold_status']='0';
            $update_products['counts']=$product_detail['counts'] + $qty;
        }
        $this->crud->update($id, "id", $update_order, $this->table);
        $this->crud->update($product_detail['product_id'], "product_id", $update_products, "products");
        redirect($this->redirect);

    }
 // to view all seller oreders products
     public function seller()
    { 
        
        $data['records']=$this->crud->get_seller_order_products();

        $data['title']="Seller Ordered Items";

        $this->load->view('header', $data);
        $this->load->view('seller_order_list');
        $this->load->view('footer');
    }
    public function seller_sold($enum)
    {
        $data['records']=$this->crud->get_sold_seller_order_products($enum);
        if($enum == '0')
            {$data['title']="Seller UnSold Ordered Items";}
        else
            {$data['title']="Seller Sold Ordered Items";}

        $this->load->view('header', $data);
        $this->load->view('seller_order_list');
        $this->load->view('footer');
    } 
    //to delte from admin view
    public function admin_delete($id)
    {
        $report=$this->crud->soft_admin_delete($id,"id",$this->table);
        
        redirect('order/order/seller');
    }  
}
?>