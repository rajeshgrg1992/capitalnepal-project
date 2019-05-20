<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends CI_Controller {

	public function __Construct()
    {
        parent::__Construct();
        $this->load->model('package_model','package');
        $this->load->model('crud_model', 'crud');
        $this->load->model('content_model','content');
        $this->load->model('site_settings_model', 'site_settings');
        $this->load->library('cart');
    }

	public function print_pdf($page = 'home'){

		$filename =  somefile;
		$content = 'My Content';
		$basepath = getcwd;
		// Create PDF From FPDF
		$this->fpdf->fpdf('P','mm','A4');
		$this->fpdf->AddPage();
		$this->fpdf->SetFont('Arial','B',16);
		$this->fpdf->Cell(40, 10, $content);
		$this->fpdf->Output($basepath.'/pdf/'.$filename.'.pdf');
		$this->fpdf->Output($filename.'.pdf', 'D');

	}

	public function about(){

		$data['menu'] = "about";
		$data['counter_lists'] = $this->crud->get_where("igc_content",array("content_type" => "Counters"));
		$value['about_us'] = $this->crud->get_detail(1, "content_id", "igc_content");
		$value['mission_data'] = $this->crud->get_detail(21, "content_id", "igc_content");
		$value['history_data'] = $this->crud->get_detail(22, "content_id", "igc_content");
        $this->load->view('header', $data);
        $this->load->view('page/about_view',$value);
        $this->load->view('footer');

	}

	public function services(){

		$data['menu'] = "services";
		$value['services_detail'] = $this->crud->get_detail(2, "content_id", "igc_content");
        $value['service_lists'] = $this->crud->get_where("igc_content",array("content_type" => "Services"));
        $data['best_in_town_detail'] = $this->crud->get_detail("ProService", "content_type", "igc_content");
        $this->load->view('header', $data);
        $this->load->view('page/services_view',$value);
        $this->load->view('footer');

	}

	public function products(){

		$data['menu'] = "products";
		$value['product_detail'] = $this->crud->get_detail(14, "content_id", "igc_content");
		$data['services_detail'] = $this->crud->get_detail(2, "content_id", "igc_content");
        $data['service_lists'] = $this->crud->get_where("igc_content",array("content_type" => "Services"));
        //$value['product_lists'] = $this->crud->get_where("igc_content",array("content_type" => "Products","publish_status" => "1","delete_status" => "0"));
        $data['category_lists'] = $this->crud->get_where("product_category",array("parent_id" => "0", "delete_status" => "0","status" => "1"));
        $data['product_lists'] = $this->crud->get_where("products",array("delete_status" => "0","status" => "1"));
        $this->load->view('header', $data);
        $this->load->view('page/product_view',$value);
        $this->load->view('footer');

	}

	public function contact(){

		$data['menu'] = "contact";
		$value['contact_detail'] = $this->crud->get_detail(19, "content_id", "igc_content");
		$value['settings'] = $this->site_settings_model->get_site_settings();
        $this->load->view('header', $data);
        $this->load->view('page/contact_view',$value);
        $this->load->view('footer');

	}

	public function inquiry(){

		$data['menu'] = "inquiry";
		$value['inquiry_detail'] = $this->crud->get_detail(20, "content_id", "igc_content");
		$data['newsletter_signup'] = $this->crud->get_detail(8, "content_id", "igc_content");
		$value['settings'] = $this->site_settings_model->get_site_settings();
        $this->load->view('header', $data);
        $this->load->view('page/inquiry_view',$value);
        $this->load->view('footer');

	}

	public function serach_form(){
		$this->load->view('page/search_form');
	}



}

?>