<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/
$hook['post_controller']= array(
        'class'    => 'Latest_deal',
        'function' => 'present_offers',
        'filename' => 'Latest_deal.php',
        'filepath' => 'hooks',
        'params' => ''
);
$hook['post_controller_constructor']= array(
        'class'    => 'Cart_products',
        'function' => 'cart_total',
        'filename' => 'Cart_products.php',
        'filepath' => 'hooks',
        'params' => ''
);

/* End of file hooks.php */
/* Location: ./application/config/hooks.php */