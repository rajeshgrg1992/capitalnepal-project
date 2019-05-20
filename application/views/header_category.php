<?php $settings = $this->site_settings_model->get_site_settings(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="<?php echo strip_tags((isset($meta_title) && $meta_title !="")? $meta_title: $settings['meta_title']) ;?>">
    <meta name="description" content="<?php echo strip_tags((isset($meta_description) && $meta_description !="")? $meta_description:$settings['meta_description'] );?>">
    <meta name="keywords" content="<?php echo strip_tags((isset($meta_keywords) && $meta_keywords !="")? $meta_keywords:$settings['meta_keywords']) ;?>">
    <title><?php echo strip_tags((isset($meta_title) && $meta_title !="")? $meta_title:$settings['meta_title']);?></title>
    <meta property="og:url"           content="<?php echo base_url();?><?php echo (isset($og_url) && $og_url !="") ? $og_url:"" ;?>"/>
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="<?php echo strip_tags((isset($og_title) && $og_title !="") ? $og_title:"") ;?>" />
    <meta property="og:description"   content="<?php echo strip_tags((isset($og_description) && $og_description !="") ? $og_description:"") ;?>" />
    <meta property="og:image"         content="<?php echo base_url();?><?php echo (isset($og_image) && $og_image !="") ? $og_image:"" ;?>" />
    <!-- PAGE TITLE -->
    <title><?php echo strip_tags((isset($meta_title) && $meta_title !="")? $meta_title:$settings['meta_title']);?></title>
    <base href="<?php echo base_url(); ?>" />
    <link rel="stylesheet" type="text/css" href="eshopping/assets/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="eshopping/assets/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="eshopping/assets/lib/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="eshopping/assets/lib/jquery.bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="eshopping/assets/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="eshopping/assets/lib/fancyBox/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="eshopping/assets/lib/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="eshopping/assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="eshopping/assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="eshopping/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="eshopping/assets/css/responsive.css" />
    
    <script type="text/javascript" src="themes/plugins/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="eshopping/assets/lib/jquery/jquery-1.11.2.min.js"></script>

</head>
<body class="category-page">
<!-- TOP BANNER -->
<!--<div id="top-banner" class="top-banner">
    <div class="bg-overlay"></div>
    <div class="container">
        <h1>Special Offer!</h1>
        <h2>Additional 40% OFF For Men & Women Clothings</h2>
        <span>This offer is for online only 7PM to middnight ends in 30th July 2015</span>
        <span class="btn-close"></span>
    </div>
</div>-->
<!-- HEADER -->
  <div class="row">
        <?php 
             if(validation_errors())
                                {
                                    ?>
                                    <div class="alert  alert-danger alert_box">
                                        <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                                    class="fa fa-times"></i></a>
                                        <?php echo validation_errors();?>
                                    </div>

                                    <?php
                                }
                                ?>

                                <?php if (isset($error)) {
                                    ?>
                                    <div class="alert alert-danger alert_box">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                                                    class="fa fa-times"></i></a>
                                        <strong>Error!</strong>  <?php echo isset($error)?$error:"" ; ?>.
                                    </div>
                                    <?php
                                }
                                ?>
                                <?php
                                if ($this->session->flashdata('success') != "") {
                                    ?>
                                    <div class="alert alert-success alert_box">
                                        <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                                    class="fa fa-times"></i></a>
                                        <strong>Success !</strong> <?php echo $this->session->flashdata('success'); ?>.
                                    </div>
                                    <?php
                                }
                                ?>
                                <?php
                                if ($this->session->flashdata('error') != "") {
                                    ?>
                                    <div class="alert alert-danger alert_box">
                                        <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                                    class="fa fa-times"></i></a>
                                        <strong>Success !</strong> <?php echo $this->session->flashdata('error'); ?>.
                                    </div>
                                    <?php
                                }
        ?>
    </div>
<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><i class="fa fa-mobile"></i> <?php echo $settings['contact_number']; ?></a>
                <a href="#"><i class="fa fa-envelope"></i> <?php echo $settings['feedback_email']; ?></a>
            </div>
            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span></a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                     <?php 
                if (!empty($this->session->userdata('email')) && !empty($this->session->userdata('customer_id'))) 
                {
            ?>
                    <li><a href="<?php echo site_url('login/logout'); ?>">Logout</a></li>
            <?php
                }
                else
                {
            ?>
                    <li><a href="<?php echo site_url('login'); ?>">Login</a></li>
            <?php
                }
            ?>
                        <li><a href="<?php echo site_url('order/order/compare_list'); ?>">Compare</a></li>
                        <li><a href="<?php echo site_url('order/order/wish_list'); ?>">Wishlists</a></li>
                        <li><a href="<?php echo site_url('seller_registration/form') ?>" target="_blank">Vendor Registration</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="<?php echo base_url(); ?>">
                    <?php
                    $logo = $this->db->query("SELECT * FROM igc_pictures WHERE locate ='1' AND delete_status ='0'");
                    $logors = $logo->result_array();
                    ?>
                    <?php
                    foreach($logors  as $logos ){

                        ?>
                        <?php
                        $path = 'uploads/pictures/';
                        if (file_exists($path.$logos['pictures_image']) && $logos['pictures_image'] !="")
                        {
                            ?>
                            <img src="<?php echo $path.$logos['pictures_image'];?>" class="logo" width="80%" alt="<?php echo $logos['pictures_title']; ?>">

                            <?php
                        }

                        ?>
                        <?php
                    }
                    ?>


                </a>
            </div>
            <div class="col-xs-7 col-sm-7 header-search-box">
                <form class="form-inline" method="post" action="#">
                    <div class="form-group form-category">
                        <?php
                        $mainCategory = $this->crud_model->get_mainCategory_records('product_category');

                        ?>


                        <select class="select-category" name="category_id">
                            <option>All Categories</option>
                            <?php
                            foreach ($mainCategory as $cats) {
                                ?>
                                <option value="<?php echo $cats['category_id']; ?>"><?php echo $cats['category_title']; ?></option>

                            <?php
                            }
                            ?>


                        </select>
                    </div>
                    <div class="form-group input-serach">
                        <input type="text" name="product_name"  placeholder="Keyword here...">
                    </div>
                    <button type="submit" class="pull-right btn-search"></button>
                </form>
            </div>
            <div id="cart-block" class="col-xs-5 col-sm-2 shopping-cart-box">
                <a class="cart-link" href="<?php  echo site_url('order/order/cart');?>">
                    <span class="title">Shopping cart</span>
                    <span class="total">
                        <?php 
                            if(count($this->cart->contents()) > 0)
                            {
                                $grand_total_h=$this->session->userdata('cart_total');
                                echo count($this->cart->contents())."- "."NPR ".round((($settings['tax']+100)/100)*$grand_total_h,3);
                            }
                        ?>
                    </span>
                    <span class="notify notify-left"><?php echo count($this->cart->contents()); ?></span>
                </a>
                <?php
                    if(count($this->cart->contents()) > 0)
                    {
                ?>

                    <div class="cart-block">
                        <div class="cart-block-content">
                            <h5 class="cart-title"><?php echo  count($this->cart->contents()); ?> Items in my cart</h5>
                            <div class="cart-block-list">
                                <ul>
                                    <?php 
                                    $folder_path="uploads/product/";
                                        foreach($this->cart->contents() as $key => $rows)
                                        { 
                                            $product_detail_header=$this->crud->get_detail($rows['id'],"product_code","products");
                                    ?>
                                            <li class="product-info">
                                                <div class="p-left">
                                                    <a href="<?php echo site_url('order/order/remove_cart/'.$rows['rowid']); ?>" class="remove_link"></a>
                                                    <a href="<?php echo $folder_path.$product_detail_header['product_code']."_1.".$product_detail_header['product_image_1']; ?>">
                                                        <img class="img-responsive" src="<?php echo $folder_path.$product_detail_header['product_code']."_1.".$product_detail_header['product_image_1']; ?>" alt="p10">
                                                    </a>
                                                </div>
                                                <div class="p-right">
                                                    <p class="p-name"><?php echo $rows['name']; ?></p>
                                                    <p class="p-rice"><?php  echo $product_detail_header['product_price_currency']." ".$rows['price']; ?></p>
                                                    <p>Qty: <?php echo $rows['qty']; ?></p>
                                                </div>
                                            </li>
                                    <?php  
                                        }
                                    ?>
                                    
                                </ul>
                            </div>
                            <div class="toal-cart">
                                <span>Total</span>
                                 <?php $grand_total_h=$this->session->userdata('cart_total'); ?>
                                <span class="toal-price pull-right"><?php echo "NPR ".round((($settings['tax']+100)/100)*$grand_total_h,3); ?></span>
                            </div>
                            <div class="cart-buttons">
                                <a href="<?= site_url('order/order/check_out'); ?>" class="btn-check-out">Checkout</a>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- END MANIN HEADER -->
    <div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-3" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                        <h4 class="title">
                            <span class="title-menu">Categories</span>
                            <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>
                        </h4>
                        <div class="vertical-menu-content is-home">
                            <ul class="vertical-menu-list">
                            <?php 
                                $i=0;
                                $cat_folder="uploads/product_category/";
                                foreach ($category_front_lists as $catfronts)  //for categories
                                {
                                    $sub_cat=$this->crud->get_where("product_category",array("parent_id"=>$catfronts['category_id'],"status"=>"1","delete_status"=>"0"));
                            ?>
                                    <li class=" <?php echo ($i > 11)?"cat-link-orther":""; ?>">
                                        <a class="<?php echo (count($sub_cat) > 0)?"parent":""; ?>"  href="<?php echo site_url('products/products_detail/category_products/'.$catfronts['category_slug']); ?>">
                                            <img class="icon-menu" alt="categories" src="<?php echo $cat_folder.$catfronts['featured_img_small'];?>"><?php echo $catfronts['category_title']; ?>
                                        </a>
                                    <?php if (count($sub_cat) > 0): ?>
                                         <div class="vertical-dropdown-menu">
                                        <div class="vertical-groups col-sm-12">
                                            
                                    <?php  
                                        foreach ($sub_cat as $key => $rows):     //for sub categories
                                        $sub_cat_products=$this->crud->get_where_order_by_limit("products",array("delete_status"=>"0","status"=>"1","admin_status"=>"1","product_sub_cat_id"=>$rows['category_id']),"added_date","DESC",5)
                                    ?>
                                                <div class="mega-group col-sm-4">
                                                <h4 class="mega-group-header">
                                                    <span>
                                                    <a href="<?php echo site_url('products/products_detail/sub_category_products/'.$rows['category_slug']); ?>">
                                                        <?php echo $rows['category_title']; ?>
                                                    </a>
                                                    </span>
                                                </h4>
                                                <ul class="group-link-default">
                                                    <?php foreach ($sub_cat_products as $key => $value): //for products?> 
                                                        <li>
                                                            <a href="<?php echo site_url('products/products_detail/show/'.$value['product_slug']); ?>">
                                                                <?php echo $value['product_title']; ?>
                                                            </a>
                                                        </li>
                                                    <?php endforeach ?>
                                                </ul>
                                            </div>
                                    <?php endforeach ?>
                                        </div>
                                    </div>
                                    <?php endif ?>
                                    </li>
                            <?php
                                    $i++;
                                }
                            ?>

                            </ul>
                            <div class="all-category"><span class="open-cate">All Categories</span></div>
                        </div>
                    </div>
                </div>
                <div id="main-menu" class="col-sm-9 main-menu">
                   <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url(); ?>">Home</a>
                                    </li>
                     <?php
                    $parents =  $this->crud_model->get_parent_top_menu();
                    if(!empty($parents))
                    {
                        foreach ($parents as $parent)
                        {
                    ?>
                                     <li class="dropdown">
                                        <a href="<?php echo  site_url('content/'.$parent['content_url']);?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $parent['content_page_title'] ?></a>
                            <?php
                                    $child_menu =  $this->crud_model->get_parent_top_sub_menu($parent['content_id']);
                                    if(! empty($child_menu))
                                    {
                            ?>
                                            <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 830px;">
                            <?php
                                        foreach ($child_menu as $child) 
                                        {
                                    ?>
                                               <li>
                                                <?php
                                                if ($child['content_page_title'] == "Home") {
                                                    ?>
                                                    <a href="<?php echo site_url('home'); ?>">
                                                        <?php echo $child['content_page_title']; ?>
                                                    </a>
                                                    <?php
                                                } 
                                                else 
                                                {
                                                    ?>
                                                    <a href="<?php echo site_url('content/' . $child['content_url']); ?>">
                                                        <?php echo $child['content_page_title']; ?>
                                                    </a>
                                                    <?php
                                                }
                                                ?>

                                                 </li>
                                    <?php 
                                            }
                                    ?>
                                             </ul>   
                    <?php 
                                     }
                             }
                    ?>
                                    </li>
                    <?php
                        }
                    ?>             
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo site_url('blog'); ?>">Blogs</a>
                                    </li> 
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
           <div id="shopping-cart-box-ontop">
                <a href="<?php  echo site_url('order/order/cart');?>"><i class="fa fa-shopping-cart"></i></a>
                <div class="shopping-cart-box-ontop-content">
                    <span class="cart_count_another">
                    <?php echo count($this->cart->contents());?>
                        
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->