<?php $settings = $this->site_settings_model->get_site_settings(); ?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>templates/asset/sites/css/materialize.min.css"  media="screen,projection"/>
    <link href="<?php echo base_url(); ?>templates/asset/sites/css/app.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>templates/asset/sites/css/owl.theme.default.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>templates/asset/sites/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>templates/asset/sites/img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="top-links">
    <div class="container"> 
        <div class="row">

            <div class="col l12 add-full am-ab-top">
                <div style="width: 80%; margin: 0 auto;"><!-- DEMO CONTAINER -->



                    <div class="alert info">
                        <input type="checkbox" id="alert3"/>
                        <label class="close" title="close" for="alert3">
                            <i class="far fa-times-circle"></i>
                        </label>
                        <?php
                        $top_ad = $this->db->query("SELECT * FROM igc_advertisement WHERE status ='1' AND delete_status ='0' AND ad_placement = 'above-menu' ORDER BY created DESC limit 1");
                        $top_ads = $top_ad->result_array();
                        ?>
                        <?php foreach($top_ads  as $row ){ ?>

                        <img src="<?php echo base_url('/uploads/advertisement/'.$row['ad_image']); ?>">

                        <?php } ?>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container logo">

</div>

<nav class="top-nav">
    <div class="am-side-logo">
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
                    <img class="responsive-img" src="<?php echo $path.$logos['pictures_image'];?>"  alt="<?php echo $logos['pictures_title']; ?>">
                    <?php
                }

                ?>
                <?php
            }
            ?>


        </a>
    </div>
    <div class="container">
        <div class="nav-wrapper">
            <a href="<?php echo base_url(); ?>" class="brand-logo hide-on-large-only"></a>
            <a href="javascript:void(0)" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <a href="javascript:void(0)" title="ताजा अपडेट" class="trend_up brand-logo hide-on-large-only right" style="padding-right:2.8rem;"><i class="material-icons">access_time</i></a>
            <a href="javascript:void(0)" title="ट्रेन्डिङ न्युज" class="taja_up brand-logo hide-on-large-only right"><i class="material-icons">trending_up</i></a>

            <ul class="hide-on-med-and-down">
                <li class="active"><a href="<?php echo base_url(); ?>"><i class="fas fa-bars"></i></a></li>
                <?php
                $parents =  $this->crud_model->get_parent_category_menu();
                if(!empty($parents))
                {
                    $i= 1;


                    foreach ($parents as $parent)
                    {
                        //$md= ($i=="5")?"3":"2";
                        ?>

                        <li class="business dropdown">

                            <a href="<?php echo  site_url('category/'.$parent['category_url']);?>" ><?php echo $parent['category_name']; ?></a>

                            <?php
                            $child_menu =  $this->crud_model->get_parent_category_sub_menu($parent['category_id']);
                            if(! empty($child_menu))
                            {
                                ?>

                                <ul class="dropdown-menu">
                                    <?php
                                    foreach ($child_menu as $child) {

                                        $active = (isset($menu) && $menu == $child['category_url']) ? "active" : "";

                                        ?>

                                        <?php
                                        if ($child['category_name'] == "Home") {
                                            ?>
                                            <li>
                                                <a href="<?php echo site_url('home'); ?>">
                                                    <?php echo $child['category_name']; ?>
                                                </a>
                                            </li>
                                            <?php
                                        } else {
                                            ?>
                                            <li>
                                                <a href="<?php echo site_url('category/' . $child['category_url']); ?>">
                                                    <?php echo $child['category_name']; ?>
                                                </a>
                                            </li>

                                            <?php
                                        }
                                    }
                                    ?>

                                </ul>

                                <?php


                            }
                            ?>

                        </li>

                        <?php
                        $i++;
                    }
                }
                ?>
                <li class=""><a href="tv.html" title="क्यापिटल नेपाल टिभी"><i class="far fa-play-circle"></i></a></li>
                <li><a href="javascript:void(0)" title="ताजा अपडेट" class="trend_up"><i class="far fa-clock"></i></a></li>
                <li><a href="javascript:void(0)" title="ताजा अपडेट" class="trend_up"><i class="fas fa-search"></i></a></li>
                <li class="active"><a href="javascript:void(0)" title="ट्रेन्डिङ न्युज" class="taja_up"><i class="fas fa-chart-line"></i></a> </li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <?php
                $parents =  $this->crud_model->get_parent_category_menu();
                if(!empty($parents))
                {
                    $i= 1;


                    foreach ($parents as $parent)
                    {
                        //$md= ($i=="5")?"3":"2";
                        ?>

                        <li class="business dropdown">

                            <a href="<?php echo  site_url('category/'.$parent['category_url']);?>" ><?php echo $parent['category_name']; ?></a>

                            <?php
                            $child_menu =  $this->crud_model->get_parent_category_sub_menu($parent['category_id']);
                            if(! empty($child_menu))
                            {
                                ?>

                                <ul class="dropdown-menu">
                                    <?php
                                    foreach ($child_menu as $child) {

                                        $active = (isset($menu) && $menu == $child['category_url']) ? "active" : "";

                                        ?>

                                        <?php
                                        if ($child['category_name'] == "Home") {
                                            ?>
                                            <li>
                                                <a href="<?php echo site_url('home'); ?>">
                                                    <?php echo $child['category_name']; ?>
                                                </a>
                                            </li>
                                            <?php
                                        } else {
                                            ?>
                                            <li>
                                                <a href="<?php echo site_url('category/' . $child['category_url']); ?>">
                                                    <?php echo $child['category_name']; ?>
                                                </a>
                                            </li>

                                            <?php
                                        }
                                    }
                                    ?>

                                </ul>

                                <?php


                            }
                            ?>

                        </li>

                        <?php
                        $i++;
                    }
                }
                ?>
                <li class=""><a href="tv.html" title="क्यापिटल नेपाल टिभी"><i class="material-icons">live_tv</i></a></li>
            </ul>
        </div>
    </div>

    <div class="trending_update">
        <div class="container">
            <h1 class="title_update">ताजा अपडेट <a href="javascript:void(0)" class="close right"><i class="material-icons">close</i></a></h1>
            <div class="row taja">
                <?php
                        $get_recent = $this->db->query("SELECT * FROM igc_content where publish_status='1' AND delete_status='0' ORDER BY created DESC limit 3");
                        $get_recents = $get_recent->result_array();
                        ?>
                <?php foreach($get_recents  as $row ){ ?>
                <div class="col l4 s12 taja_news">
                    <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                        <img src="<?php echo $row['server_image']; ?>" class="responsive-img">
                        <h4><?php echo $row['title']; ?></h4>
                    </a>
                </div>
                <?php } ?>
                <!-- <div class="col l4 s12 taja_news">
                    <a href="kalasahitya/11120.html">
                        <img src="templates/images/article_img/thumb/nepalgatha_thumb.jpg" class="responsive-img">
                        <h4>चाैरजहारी महाेत्सवमा महानायक देखि जन गायकसम्मकाे प्रस्तुत रहने </h4>
                    </a>
                    <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span>
                </div>
                <div class="col l4 s12 taja_news">
                    <a href="samaj/11119.html">
                        <img src="templates/images/article_img/thumb/nepalgatha_thumb.jpg" class="responsive-img">
                        <h4>सिम्तामा एक शिक्षकको मृत्यु</h4>
                    </a>
                    <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span>
                </div> -->

            </div>

            <div class="row taja">
                <?php
                        $get_recentss = $this->db->query("SELECT * FROM igc_content where publish_status='1' AND delete_status='0' ORDER BY created DESC limit 3,3");
                        $get_recent_offset_three = $get_recentss->result_array();
                        ?>
                <?php foreach($get_recent_offset_three  as $row ){ ?>
                <div class="col l4 s12 taja_news">
                    <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                        <img src="<?php echo $row['server_image']; ?>" class="responsive-img">
                        <h4><?php echo $row['title']; ?></h4>
                    </a>
                </div>
                <?php } ?>
                <!-- <div class="col l4 s12 taja_news">
                    <a href="patrapatrika/11117.html">
                        <img src="templates/images/article_img/thumb/nepalgatha_thumb.jpg" class="responsive-img">
                        <h4>नीतिगत भ्रष्टाचारमा प्रधानमन्त्रीदेखि मुख्यसचिवसम्म</h4>
                    </a>
                    <span><i class="far fa-clock"></i> ४ घण्टा अगाडि</span>
                </div>
                <div class="col l4 s12 taja_news">
                    <a href="samaj/11116.html">
                        <img src="templates/images/article_img/thumb/9748739cc94ae8c2ae9c4d4405635933.jpg" class="responsive-img">
                        <h4>जागिर जोगाइदिन अस्थायी शिक्षकको पूर्वराजालाई बिन्तिपत्र</h4>
                    </a>
                    <span><i class="far fa-clock"></i> ११ घण्टा अगाडि</span>
                </div> -->
            </div>

           
        </div>
    </div>
    <div class="trending_taja">
        <div class="container">
            <h1 class="title_update">ट्रेन्डिङ न्युज <a href="javascript:void(0)" class="close right"><i class="material-icons">close</i></a></h1>
            <div class="row taja">
                <div class="col l4 s12 taja_news">
                    <a href="artha/11121.html">
                        <img src="templates/images/article_img/thumb/3c55431fdf16825488d6eac91bf387f3.jpg" class="responsive-img">
                        <h4>सरकारले बढायो तेलको मूल्य</h4>
                    </a>
                    <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span>
                </div>
                <div class="col l4 s12 taja_news">
                    <a href="kalasahitya/11120.html">
                        <img src="templates/images/article_img/thumb/nepalgatha_thumb.jpg" class="responsive-img">
                        <h4>चाैरजहारी महाेत्सवमा महानायक देखि जन गायकसम्मकाे प्रस्तुत रहने </h4>
                    </a>
                    <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span>
                </div>
                <div class="col l4 s12 taja_news">
                    <a href="samaj/11119.html">
                        <img src="templates/images/article_img/thumb/nepalgatha_thumb.jpg" class="responsive-img">
                        <h4>सिम्तामा एक शिक्षकको मृत्यु</h4>
                    </a>
                    <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span>
                </div>

            </div>

            <div class="row taja">
                <div class="col l4 s12 taja_news">
                    <a href="samaj/11111.html">
                        <img src="templates/images/article_img/thumb/cfef68507cc2dcf8a18ed23ff027cd32.jpg" class="responsive-img">
                        <h4>काठमाडौं उपत्यकासहित देशका अधिकांश स्थानमा बर्षा</h4>
                    </a>
                    <span><i class="far fa-clock"></i> २ हप्ता अगाडि</span>
                </div>
                <div class="col l4 s12 taja_news">
                    <a href="rajneeti/11113.html">
                        <img src="templates/images/article_img/thumb/3de6e127c77421a75666977456133d51.jpg" class="responsive-img">
                        <h4>फागुन ८ देखि १५ सम्म पञ्चपुरीमा महोत्सव हुने</h4>
                    </a>
                    <span><i class="far fa-clock"></i> २३ घण्टा अगाडि</span>
                </div>
                <div class="col l4 s12 taja_news">
                    <a href="samaj/11119.html">
                        <img src="templates/images/article_img/thumb/nepalgatha_thumb.jpg" class="responsive-img">
                        <h4>सिम्तामा एक शिक्षकको मृत्यु</h4>
                    </a>
                    <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span>
                </div>
            </div>


        </div>
    </div>
</nav>


