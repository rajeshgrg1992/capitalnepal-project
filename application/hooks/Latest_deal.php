<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Latest_deal extends CI_Hooks
{
	private $CI;
	public function __construct()
	{
		parent::__construct();
		$this->CI = &get_instance();

	}
	public function present_offers()
	{

		 $latest_deal=$this->CI->crud_model->get_where("products",array('delete_status'=>0,'status'=>1,'product_offer_deal'=>1));
        foreach ($latest_deal as $key => $value) {
            $present_date= date('Y-m-d h:i:s');
            if($value['product_offer_start_date'] <= $present_date and $present_date <=$value['product_offer_end_date'])
            {
                $update['product_sell_price']=$value['product_offer_price'];
                $update['sell_offer_percentage']=$value['product_offer_percentage'];
                $this->CI->crud_model->update($value['product_id'], "product_id", $update, "products");
            }
            elseif($present_date <= $value['product_offer_start_date'])
            {
                $update1['product_sell_price']=$value['product_buffer_sell_price'];
                $update1['sell_offer_percentage']=$value['product_buffer_sell_percentage'];
                $update1['product_offer_deal']="1";
                $this->CI->crud_model->update($value['product_id'], "product_id", $update1, "products");
            }
             elseif($value['product_offer_end_date'] <= $present_date )
            {
                $update2['product_sell_price']=$value['product_buffer_sell_price'];
                 $update2['sell_offer_percentage']=$value['product_buffer_sell_percentage'];
                $update2['product_offer_deal']="0";
                $this->CI->crud_model->update($value['product_id'], "product_id", $update2, "products");
            }
        }
	}
}

?>