<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Reports_model extends CI_Model
{

    public function get_sales_report_lsit($action = '', $count = 0, $from = '', $to = ''){
        $getDateTime = $this->get_curretn_date_time();
        $toDay = $getDateTime['todate'];
        $lessDay = date('Y-m-d', strtotime("-$count days", strtotime($toDay)));
        if(empty($action)){ return false; exit;}
        if ($action == 'days') {
            if(empty($count)){ return false; exit;}
            $sql = "SELECT * FROM `order_shipping` WHERE `order_date` >= '$lessDay'";
        }
        else if($action == 'all'){
            $sql = "SELECT * FROM `order_shipping`";
        }
        else if($action == 'custom'){
            $from_day = $from;
            $to_day = date('Y-m-d', strtotime("+1 days", strtotime($to)));
            $sql = "SELECT * FROM `order_shipping` WHERE `order_date` BETWEEN '$from' AND '$to_day'";
        }
        else{
            $sql = "SELECT * FROM `order_shipping`";
        }
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }
    
    public function get_curretn_date_time(){
        $now = new DateTime();
        $now->setTimezone(new DateTimezone('Asia/Kathmandu'));
        $date = $now->format('Y-m-d');
        $time = $now->format('H:i:s');
        return array("todate" => $date, "totime" => $time);
    }

}