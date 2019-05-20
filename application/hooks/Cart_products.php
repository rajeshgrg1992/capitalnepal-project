<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_products extends CI_Hooks
{
	private $CI;
	public function __construct()
	{
		parent::__construct();
       
		$this->CI = &get_instance();
        $this->CI->load->library('cart');

	}
	public function cart_total()
	{
        if(!empty($this->CI->cart->contents()))
        {
            $settings =  $this->CI->site_settings_model->get_site_settings();
            $grand_total=0;
            $npr_sub_total=0;
            foreach($this->CI->cart->contents() as $rows)
            {
                $product=$this->CI->crud_model->get_detail($rows['id'],"product_code","products");
                if($product['counts'] > 0)
                {
                   $npr_sub_total = $this->CI->crud_model->currency_conversion($product['product_price_currency'],$product['product_sell_price']);
                   $grand_total +=   $npr_sub_total;
                }

            }
            $grand_total = round($grand_total,3);
            $this->CI->session->set_userdata('cart_total', $grand_total);
        }

	}
}

?>