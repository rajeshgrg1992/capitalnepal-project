<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reports extends MX_Controller{
    public function __Construct()
    {
        parent::__Construct();
        is_already_logged_in();
        $this->load->model('crud_model','crud');
        $this->load->model('reports_model','report');
        $permission = $this->session->userdata('permission');

        if($permission == "1"){ redirect('dashboard'); }
    }

    public function index(){
        $data['title']= "All Reports";
        $data['date_time'] = $this->report->get_curretn_date_time();
        $data['all_lists'] = array("sales" => "Sales Report (تقرير المبيعات)","order" => "Product Order Report (تقرير طلب المنتج)","inquiry" => "Inquiry Report (تقرير التحقيق)");
        $this->load->view('header', $data);
        $this->load->view('list');
        $this->load->view('footer');
    }
    
    /**************************** PRODUCT SALES REPORTS ****************************/
    public function sales($id = 0){
        
        if (!isset($_GET['action'])) { redirect('dashboard'); }
        if($_GET['action'] == 'days'){
            $data['sub_title'] = "Last ". $_GET['count']." Days reports of Sales";
        }else if($_GET['action'] == 'all'){
            $data['sub_title'] = "Full reports of Sales";
        }else if($_GET['action'] == 'custom'){
            $data['sub_title'] = "Reports of all Sales between '".$_GET['from']."' - '".$_GET['to']."'";
        }else{
            $data['sub_title'] = "Full reports of Sales";
        }

        $count = (!isset($_GET['count'])) ? "" : $_GET['count'];
        $from_day = (!isset($_GET['from'])) ? "" : $_GET['from'];
        $to_day = (!isset($_GET['to'])) ? "" : $_GET['to'];
        
        $data['date_time'] = $this->report->get_curretn_date_time();
        $data['title']= "Sales Report";
        $data['records'] = $this->report->get_sales_report_lsit($_GET['action'], $count, $from_day, $to_day);
        $this->load->view('header', $data);
        $this->load->view('reports/report_sales');
        $this->load->view('footer');
        
    }
    
    public function sales_detail($id){
        
        if(strlen($id <= 0)){ redirect('reports/sales/?action=all'); }
        $order_code = $id;
        
        $data['records'] = $this->crud->get_detail($order_code, "ordering_code", "order_shipping");
        $data['user_detail'] = $this->crud->get_detail($data['records']['user_id'], "customer_id", "igc_site_users");
        $data['product_list'] = $this->crud->get_where("order_product",array("order_code" => $order_code));
        $data['title']= "Detai of Order '" . $data['records']['ordering_code'] . "'";
        $this->load->view('header', $data);
        $this->load->view('reports/sales_detail');
        $this->load->view('footer');
        
    }

    

}

