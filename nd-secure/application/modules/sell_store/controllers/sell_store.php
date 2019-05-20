<?php
class Sell_store extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        is_already_logged_in();
        
		$this->load->model('crud_model','crud');
	}

	public $table="igc_sell_store";
	public $redirect="sell_store";
	public $field_name="sell_store_id";

	public function index()
	{
        $data['records'] = $this->crud->get_where("products",array('delete_status'=>0,'admin_ref >'=>0));
		$data['title']="Your Sold Items";

        $this->load->view('header', $data);
        $this->load->view('sell_store_list');
        $this->load->view('footer');
	}
	public function form()
	{
        
        
        if($this->input->post())
        {
            $insert['customer_name'] = $this->input->post('customer_name');
            $insert['address'] = $this->input->post('address');
            $insert['phone'] = $this->input->post('phone');
            $insert['sold_price'] = $this->input->post('sold_price');
            $insert['payment_type'] = $this->input->post('payment_type');
            $insert['remaining_payment'] = $this->input->post('remaining_payment');
            $insert['products'] = $this->input->post('products');
            $insert['email'] = $this->input->post('email');
            $insert['counts'] = $this->input->post('counts');
            $insert['description'] = $this->input->post('description');

            $insert['admin_ref'] = $this->session->userdata('admin_id');
            $insert['seller_ref'] ="";
            $insert['seller_user_ref'] ="";

            $insert['total_amount'] = $this->input->post('counts')*$insert['sold_price'] = $this->input->post('sold_price');

            $product_detail=$this->crud->get_detail($insert['products'],'product_id',"products");
            $update['counts']=$product_detail['counts']- $insert['counts'] ;
            $report=$this->crud->update($insert['products'],'product_id',$update,"products");
            $insert['created']=date('Y-m-d:H:i:s');
            $stat=$this->crud->insert($insert,$this->table);
            if($stat)
            {
                $log['module_title']=$insert['customer_name'];
                $log['action_id']=1;
                $this->create_log($log);
            	$this->session->set_flashdata('success',"Product has been Sold");
            	redirect($this->redirect);
            }   
            else
            {
            	$this->session->set_flashdata('error',"Unable To Sell Products. Please Try Again!");
            	redirect($this->redirect);
            }      
        }
        $data['products']=$this->crud->get_where("products",array('delete_status'=>"0","admin_ref >"=>0,"counts >"=>0));
        $data['title']= "Sell Products";
        $this->load->view('header', $data);
        $this->load->view('sell_store_form');
        $this->load->view('footer');
    }

    public function create_log($insert)
    {

        $insert['ip_address'] = get_ip();
        $insert['user_id'] = $this->session->userdata('admin_id');
        $insert['date'] = date('Y-m-d:H:i:s');
        $insert['module_name'] =  "Sell-Store Admin";
        $this->db->insert('igc_user_logs', $insert);
    }

    public function edit($id)
    {
        if($this->input->post())
        {
            $insert['payment_type'] = $this->input->post('payment_type');
            $insert['remaining_payment'] = $this->input->post('remaining_payment');
            $insert['updated']=date('Y-m-d:H:i:s');
            $report=$this->crud->update($id,$this->field_name,$insert,$this->table);
            if($report)
            {
                $log['module_title']=$insert['customer_name'];
                $log['action_id']=2;
                $this->create_log($log);
                $this->session->set_flashdata('success',"Product has been updated");
                redirect($this->redirect);
            }   
            else
            {
                $this->session->set_flashdata('error',"Unable To Update Products. Please Try Again!");
                redirect($this->redirect);
            }      
        
        }

        $data['title']= "Edit Products";
        $data['detail']=$this->crud->get_detail($id,$this->field_name,$this->table);
        $this->load->view('header', $data);
        $this->load->view('sell_store_edit');
        $this->load->view('footer');
    }

    public function delete($id)
    {
        $report=$this->crud->soft_delete($id,$this->field_name,$this->table);
        if($report)
        {
            $log['module_title']="Delete";
            $log['action_id']="3";
            $this->create_log($log);
            $this->session->set_flashdata('success',"Successfully Deleted");
            redirect($this->redirect);
        }
        else
        {

            $this->session->set_flashdata('error',"Unable To Delete");
            redirect($this->redirect);
        }

    }
}
?>