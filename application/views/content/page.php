<?php if(isset($error)) {


    ?>
    <div class="alert alert-danger alert_box">
        <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                    class="fa fa-times"></i></a>
        <strong>Error!</strong>  <?php echo $error; ?>.
    </div>
    <?php
}
?>
<?php
if(isset($success)) {
    ?>
    <div class="alert alert-success alert_box">
        <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                    class="fa fa-times"></i></a>
        <strong>Success !</strong> <?php echo $success; ?>
    </div>
    <?php
}
?>
<?php if (isset($error)) {


    ?>
    <div class="alert alert-danger alert_box">
        <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                    class="fa fa-times"></i></a>
        <strong>Error!</strong>  <?php echo isset($error)?$error:"" ; ?>
    </div>
    <?php
}
?>



<?php
    if($content['content_type'] =="About") {
    $content_id= $content['content_id'];
    $tabs = $this->content->get_content_tabs($content_id);
    ?>
    <div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="<?php echo base_url(); ?>" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page"><?php echo $content['content_page_title']; ?></span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
               <!--  <div class="block left-module">
                    <p class="title_block">Infomations</p>
                    <div class="block_content">
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
                                    <li class="active"><span></span><a href="#">About Us</a></li>
                                    <li><span></span><a href="#">Delivery Information</a></li>
                                    <li><span></span><a href="#">Privacy Policy</a></li>
                                    <li><span></span><a href="#">Terms &amp; Conditions</a></li>
                                    <li><span></span><a href="#">Contact Us</a></li>
                                    <li><span></span><a href="#">FAQ</a></li>
                                    <li><span></span><a href="#">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                     </div>
                </div> -->
                <!-- ./block category  -->
                <!-- Banner silebar -->
                <div class="block left-module">
                    <div class="banner-opacity">
        <?php
            $about_ads = $this->crud->get_where_row("igc_advertisement",array('status'=>1,'delete_status'=>0,'ad_for'=>"about"));
            $ads_path="uploads/advertisement/";
        ?>
                        <a href="<?php echo $about_ads['ad_url'];?>" target="_blank"><img src="<?php echo  $ads_path."about_".$about_ads['ad_image'];?>" alt="<?php echo $about_ads['ad_title'];?>"></a>
                    </div>
                </div>
                <!-- ./Banner silebar -->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- page heading-->
                <h2 class="page-heading">
                    <span class="page-heading-title2"><?php echo $content['content_page_title']; ?></span>
                </h2>
                <!-- Content page -->
                <div class="content-text clearfix">
         <?php $path="uploads/content/";
                if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
                {
        ?>
                    <img src="<?php echo $path.$content['featured_img'];?>" class="alignleft" width="310" alt="sadsad">

             <?php
                }
            ?>
                    <?php echo $content['content_body']; ?>
             </div>
                <!-- ./Content page -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
<?php
        }

elseif($content['content_type'] =="Article"){
    $content_id = $content['content_id'];
    $comments = $this->content->get_content_comments($content_id);
    $tags = $this->content->get_content_tags($content_id);
    $total_cmt = sizeof($comments);


    ?>
    <div class="flat-page-title flat-reset parallax prallax2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 title-contain">
                    <h2 class="codec"><?php echo $content['content_page_title'];?></h2>
                    <ul class="breadcrumbs">
                        <li><a class="home" href="#">Home</a></li>
                        <li><a href="#"><?php echo $content['content_page_title'];?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- /.flat-page-title -->

    <div id="content" class="blog-wrap sidebar-left flat-reset">
        <div class="container content-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div id="secondary" class="widget-area">
                        <aside id="search-2" class="widget widget_categories">
                            <h3 class="widget-title">CATEGORIES</h3>
                            <ul class=" flat-picture">
                                <li><a href="#">Consectetuer adipiscing</a></li>
                                <li><a href="#">Aliquam eu felis</a></li>
                                <li><a href="#">Nullam vel erat</a></li>
                                <li><a href="#">Integer interdum sem</a></li>
                                <li><a href="#">Luctus lacus quam sit amet</a></li>
                                <li><a href="#">Auctor mauris a luctus </a></li>
                                <li><a href="#">Interdum sem ac magna</a></li>
                            </ul>
                        </aside> <!-- /.widget_categories -->






                    </div> <!-- /#secondary -->

                    <div id="primary" class="content-area">
                        <main class="post-wrap">
                            <article class="post">
                                <div class="featured-post">
                                    <header class="entry-header">
                                        <h2 class="title-post"><a href="#"><?php echo $content['content_page_title'];?></a></h2>

                                        <div class="blog_info">

                                            <div class="blog_info_block">
                                                <span class="date"><i class="fa fa-calendar  "></i> &nbsp; <?php echo date("F j, Y, g:i a", strtotime($content['created']));?></span>
                                                <span class="comments"><i class="fa fa-comment  "></i> &nbsp; <?php echo $total_cmt;?> comments</span>
                                                <span class="blog_tags">Tags: <?php foreach ($tags as $tag){ ?><a rel="tag" href="#" style="padding-left: 5px;"><?php echo $tag['term_name'];?>,</a><?php }?>

                        </span>
                                            </div>
                                        </div>

                                    </header> <!-- /.entry-header -->

                                    <div class="entry-content">
                                        <?php
                                        $path = 'uploads/content/';
                                        if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
                                        {
                                            ?>
                                            <img src="<?php echo $path.$content['featured_img'];?>" />
                                            <?php
                                        }

                                        ?>
                                        <?php echo $content['content_body'];?>

                                    </div> <!-- /.entry-content -->
                                    <div class="leavecommenAt-blog">
                                        <?php if (validation_errors()) {


                                            ?>
                                            <div class="alert alert-danger alert_box">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                                                            class="fa fa-times"></i></a>
                                                <?php echo validation_errors()?>
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
                                        <h4>Leave a Comment:</h4>
                                        <form role="form" method="post" action="">
                                            <div class="form-group">
                                                <input type="text" name="sender_name" placeholder="Full Name" value="<?php echo set_value('sender_name');?>" data-validation="required length custom" data-validation-length="max100" data-validation-regexp="^([\w\s]+)$" class="form-control" kl_virtual_keyboard_secure_input="on">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="sender_email"  id="email" placeholder="Email Address"  value="<?php echo set_value('sender_email');?>" data-validation="required email" class="form-control">

                                            </div>
                                            <div class="form-group">
                                                <textarea placeholder="Message" name="message"  id="blog_comment" class="form-control" rows="3" data-validation="required length custom" data-validation-length="max1500" data-validation-regexp="^([\w\s,:=.?']+)$"><?php echo set_value('message');?></textarea>
                                                <div id="blog_count"></div>
                                            </div>
                                            <div class="form-group">
                                                <p><b>Please Enter Captcha</b></p>
                                                <span class="content_captcha_img captcha-word"></span>
                                                <span style="cursor: pointer;" id="content_captcha_refresh"><i class="fa fa-refresh" style="font-size: 24px;"></i></span>

                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="captcha_code"  placeholder="Captcha Code Here.." data-validation="required length custom" data-validation-length="max10" data-validation-regexp="^([\w\s]+)$" class="form-control">
                                            </div>
                                            <div class="row form-group"><div class="col-md-3 clear-padding">
                                                    <input type="hidden" name="content_id" value="<?php echo $content['content_id'];?>">
                                                    <input type="hidden" name="content_url" value="<?php echo $content['content_url'];?>">
                                                    <button class="subscribe" type="submit">Submit</button>
                                                </div> </div>
                                        </form>
                                        <hr>
                                        <?php
                                        foreach($comments as $row)
                                        {
                                            ?>
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="themes/images/icons/commenter.jpg" alt="">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><?php echo $row['sender_name'];?>
                                                        <small><?php echo date("F j, Y, g:i a", strtotime($row['comment_date']));?></small>
                                                    </h4>
                                                    <?php echo $row['message'];?>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>


                                    </div>

                                </div> <!-- /.featured-post -->
                            </article> <!-- /.post -->


                        </main> <!-- /.post-wrap -->
                    </div> <!-- /#primary -->
                </div>
            </div>
        </div>
    </div> <!-- /.page-wrap -->


<?php  }

elseif ($content['content_type'] =="Page"){
    ?>






    <!-- Single-Service-Start -->
    <section class="single-service-contents">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-5 col-xs-12">
                    <div class="service-sidebar sidebar-wrapper">

                        <div class="widget">
                            <h2 class="widget-title">OUR SERVICES</h2>
                            <ul class="service-list">
                                <?php

                                $servmenu = $this->db->query("SELECT * FROM igc_content WHERE content_type ='Serve' AND delete_status ='0'");
                                $menuside = $servmenu->result_array();



                                ?>


                                <?php
                                foreach($menuside  as $results ) {

                                    ?>

                                    <li><a href="<?php echo  site_url('content/'.$results['content_url']);?>">&rarrhk; <?php echo $results['content_page_title']; ?></a></li>

                                    <?php

                                }

                                ?>

                            </ul>
                        </div><!-- /.widget -->



                        <div class="widget">
                            <h2 class="widget-title">CONTACT DETAIL</h2>
                            <div class="textwidget">

                                <p><?php
                                    $settings = $this->site_settings_model->get_site_settings();
                                    ?>
                                    <?php echo (isset($settings['contact_details']) && $settings['contact_details'] !="")? $settings['contact_details']:"#";?>
                                </p>
                            </div>
                        </div><!-- /.widget -->
                    </div><!-- /.sidebar-wrapper -->
                </div><!-- /.col -->
                <div class="col-md-9 col-sm-7 col-xs-12">
                    <div class="single-service-content">
                        <?php
                        $path = 'uploads/content/';

                        if ($content['featured_img'] !="")
                        {
                            ?>
                            <img  src="<?php echo $path.$content['featured_img'];?>" class="img-responsive " alt="Images">

                            <?php
                        }

                        ?>

                        <p><?php echo $content['content_body'];?></p>
                    </div><!-- /.single-service-content -->

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Single-Service-End-->




<?php }

elseif ($content['content_type'] =="Contact"){
    ?>



    <main>
        <div class="breadcrumbs">
            <div class="container-fluid">
                <div class="boxed">
                     <div class="breadcrumb clearfix">
                        <a class="home" href="<?php echo base_url(); ?>" title="Return to Home">Home</a>
                        <span class="navigation-pipe">&nbsp;</span>
                        <a href="<?php echo current_url(); ?>"><?php echo $content['content_page_title']; ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="block fullwidth no-pad">
            <div id="content" class="flat-row-fix row-contact" style="margin-top: 3%; margin-bottom:3%;">
                <div class="container content-wrapper">
                    <div class="row">
                        <div class="col-md-12">

                            <?php echo $content['content_body'];?>
                        </div>

                        <div class="col-md-8">
                            <h3>Leave your message</h3>

                            <form  action="<?php echo site_url('home/feedback');?>" method="post" enctype="multipart/form-data" class="flat-contact-form style2 bg-dark height-small">


                                <div class="field clearfix">
                                    <div class="wrap-type-input">
                                        <label>Full Name</label>
                                        <div class="form-group">
                                            <input type="text" value=""  class="form-control" placeholder="Full Name" name="name" id="name" required>
                                        </div>
                                        <label>Email</label>
                                        <div class="form-group">
                                            <input type="email" value=""  class="form-control" placeholder="Email" name="email" id="email" required>
                                        </div>
                                        <label>Phone</label>
                                        <div class="form-group">
                                            <input type="text" value=""  class="form-control" placeholder="Phone" name="phone" id="phone" required>
                                        </div>
                                    </div>
                                    <label>Message</label>
                                    <div class="form-group">
                                        <div class="textarea-wrap">
                                            <textarea tabindex="3" class="form-control" rows="5" id="comment" placeholder="Message" name="message" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <label>&nbsp;</label>
                                <div class="submit-wrap">
                                    <button class="btn btn-primary btn-sm">Send Message</button>
                                </div>


                            </form>
                        </div><!-- /.col-md-8 -->

                        <div class="col-md-4">
                            <div class="contact-side-am">
                                <h3>Contact Address</h3>
                                <?php
                                $settings = $this->site_settings_model->get_site_settings();
                                ?>

                                <?php echo (isset($settings['contact_details']) && $settings['contact_details'] !="")? $settings['contact_details']:"#";?>

                            </div>
                            <div class="map">
                                <?php echo (isset($settings['location_map']) && $settings['location_map'] !="")? $settings['location_map']:"#";?>
                            </div>
                        </div><!-- /.col-md-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->

            </div>
        </div>


    </main>


<?php }
else if ($content['content_type'] =="Services"){
    $content_id= $content['content_id'];
    $tabs = $this->content->get_content_tabs($content_id);
    ?>
    <main >
        <div class="breadcrumbs">
            <div class="container-fluid">
                <div class="boxed">
                    <ul>
                        <li><a href="<?php echo base_url(); ?>">home</a></li>
                        <li><a href="<?php echo current_url(); ?>"><?php echo $content['content_page_title']; ?></a></li>
                    </ul>

                </div>
                </div>
        </div>
        <!-- //Breadcrumbs Block -->
        <!-- services grid -->
        <div class="block">
            <div class="container">
                <h2 class="text-center h-lg h-decor"><?php echo $content['content_page_title'] ?></h2>
                <p class="text-center"><?php echo $content['content_body'];?></p>
                <div class="row services-grid services-mobile-carousel">
                    <?php

                    $query2 = $this->db->query("SELECT * FROM igc_content WHERE content_type ='Serve' AND delete_status ='0'");
                    $result2 = $query2->result_array();



                    ?>

                    <?php
                    $path = 'uploads/content/';
                    foreach($result2 as $results){

                        ?>

                        <div class="col-xs-6 col-sm-6 col-md-4 service-box">
                            <a href="<?php echo  site_url('content/'.$results['content_url']);?>" class="service-box-img">
                                <img src="<?php echo $path.$results['featured_img'];?>" alt="Service">
                            </a>
                            <h3 class="service-box-title">
                            <a href="<?php echo  site_url('content/'.$results['content_url']);?>">
                                <?php echo $results['content_page_title']; ?>
                            </a>
                            </h3>
                            <div class="service-box-text">
                                <?php
                                $ams = mb_substr($results["content_body"] , 0,200 ,'UTF-8');
                                $ams = preg_replace("/<img[^>]+\>/i", "", $ams);
                                echo $ams;
                                ?>
                            </div>
                            <a href="<?php echo  site_url('content/'.$results['content_url']);?>" class="btn btn-primary">READ MORE</a>
                        </div>






                        <?php


                    }

                    ?>









                </div>
            </div>
        </div>
        <!-- /services grid -->
        <!-- banner -->




    </main>



<?php }
else if($content['content_type'] =="Brand"){

    ?>
    <section id="OurProcess" data-kc-fullwidth="row" class="kc-elm kc-css-340207 kc_row our_process_section">
        <div class="kc-row-container  kc-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-840185 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="kc-col-container">
                        <div class="kc-elm kc-css-169530 kc-title-wrap ">


                        </div>

                        <!-- The Team -->
                        <div class="home-doctors  clearfix">

                            <div class="container">
                                <?php
                                $brands = $this->crud_model->get_active_records('igc_clients');

//                                print_r(  $brands);
//                                exit();
                                if(!empty($brands))
                                {
                                    ?>
                                    <div class="row">
                                        <?php
                                        $path  = 'uploads/clients/';
                                        $i=1;
                                        foreach($brands as $rows) {
                                            $actives = (isset($i) && $i == "1") ? "active" : "";
                                            ?>
                                            <!-- entry1 -->
                                            <div class="col-sm-2  text-center doc-item <?php echo $actives;?>">
                                                <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">
                                                    <figure>
                                                        <a href="<?php echo site_url('brands/brands_list/'.$rows['slug']);?> "> <img width="670" height="200" src="<?php echo $path.$rows['clients_image'];?>" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2"></a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <?php
                                            $i++;
                                        }
                                        ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <!-- //The Team -->
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php
}
else if($content['content_type'] =="Team"){
    ?>





    <!-- team-->
    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
<!--                    <h2 class="section-title">Our employees</h2>-->
                    <span class="section-sub"><?php echo $content['content_body'];?></span>
                </div>
            </div>

            <div class="team-members">
                <div class="row">
                    <?php
                    if(!empty($portfolios))
                    {
                        ?>

                        <?php
                        $path  = 'uploads/portfolio/';
                        $i=1;
                        foreach($portfolios as $rows) {

                            $actives = (isset($i) && $i == "1") ? "active" : "";
                            ?>

                            <div class="col-sm-4 col-xs-12 <?php echo $actives;?>">
                                <figure class="team-member">
                                    <div class="member-thumbnail">
                                        <img src="<?php echo $path.$rows['portfolio_image'];?>" alt="Image">
<!--                                        <a class="member-link" href="about-member.html" title=""><i class="fa fa-link"></i></a>-->
                                    </div>

                                    <div class="member-info">
                                        <h3><?php echo $rows['portfolio_title']; ?>
                                            <small><?php echo $rows['portfolio_caption']; ?></small>
                                        </h3>
                                    </div>

                                </figure>
                            </div><!-- /.col-->





                            <?php
                            $i++;
                        }
                        ?>





                        <?php
                    }
                    ?>










                </div><!-- /.row-->
            </div><!-- /.team-members -->

        </div><!-- /.container-->
    </section>
    <!-- /.team-->







<?php
}
else if($content['content_type'] =="FAQ"){

    ?>
    <main class="page-main">
        <!-- Breadcrumbs Block -->
        <div class="block breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Frequently Asked Questions</li>
                </ul>
            </div>
        </div>
        <!-- //Breadcrumbs Block -->
        <div class="block">
            <div class="container">
                <h1 class="text-center h-decor">Frequently Asked Questions</h1>
                <p class="text-center"><?php echo $content['content_body'];?></p>
                <div class="divider"></div>

                <div class="panel-group">

                    <?php
                    $faq = $this->crud_model->get_active_records('igc_services');

                    //                                print_r(  $brands);
                    //                                exit();
                    if(!empty($faq))
                    {
                        ?>

                        <?php

                        $i=1;
                        foreach($faq as $rows) {
                            $actives = (isset($i) && $i == "1") ? "active" : "";
                            ?>
                            <!-- entry1 -->
                            <div class="faq-item">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a role="button" data-toggle="collapse" href="#faq<?php echo $i; ?>" class="collapsed"><?php echo $rows['services_title']; ?><span class="caret-toggle closed">–</span><span class="caret-toggle opened">+</span></a></h4>
                                    </div>
                                    <div id="faq<?php echo $i; ?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><?php echo $rows['services_caption']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <?php
                            $i++;
                        }
                        ?>

                        <?php
                    }
                    ?>






                </div>



            </div>
        </div>
    </main>


<?php
}
else if($content['content_type'] =="ProService"){

    ?>



    <section class="team-intro">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-6">

									    <?php
                                        $path = 'uploads/content/';
                                        if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
                                        {
                                            ?>
                                            <img src="<?php echo $path.$content['featured_img'];?>" class="img-responsive" />
                                            <?php
                                        }

                                        ?>


								</div><!--/.col-->
								<div class="col-sm-6 ">

									<?php echo $content['content_body'];?>

								</div><!--/.col-->
							</div><!--/.row-->
						</div><!-- /.container-->
					</section>




<div class="row noPadding am-footer">
  <div class="col-md-12 noPadding box" >
    <div class="col-md-4 first">
        <div class="textbox">


             <?php

               $mainlandlist= $content['content_url'];


                $mainland = $this->db->query("SELECT * FROM igc_content WHERE content_type ='MainLand' AND freezone_page_type='$mainlandlist' AND delete_status ='0'");
                $mainlands = $mainland->result_array();



                ?>

                <?php
                foreach($mainlands as $mainlandk){
                    ?>

                     <h1><?php echo $mainlandk['content_page_title']; ?></h1>
            <hr>
            <?php echo mb_substr($mainlandk["content_body"] , 0,350 ,'UTF-8'); ?>
            <br />
            <a href="<?php echo  site_url('content/'.$mainlandk['content_url']);?>">Read More</a>




                    <?php
                }


                ?>





        </div>
    </div>
    <div class="col-md-4 second">
        <div class="textbox">



            <h1>Free Zones</h1>
            <hr>

            <?php
               $freezonelist= $content['content_url'];


                $freezone = $this->db->query("SELECT * FROM igc_content WHERE content_type ='FreeZone' AND freezone_page_type='$freezonelist' AND delete_status ='0'");
                $freezones = $freezone->result_array();



                ?>



            <?php
            foreach($freezones as $rows){
                ?>

                <ul>
                    <li><a href="<?php echo  site_url('content/'.$rows['content_url']);?>"><?php echo $rows['content_page_title']; ?></a> </li>

                </ul>


                <?php
            }


            ?>






        </div>
    </div>
    <div class="col-md-4 thrid">
                <div class="textbox">
            <h1><?php echo $content['about_support']; ?></h1>
            <hr>
            <p><?php echo $content['about_support_desc']; ?></p>
            <a href="<?php echo  site_url('content/'.$content['about_support_link']);?>">Read More</a>
        </div>
    </div>

  </div>
</div>

    <?php
}
else if($content['content_type'] =="BizSetup"){
    ?>
    <section >
        <?php
                                        $path = 'uploads/content/';
                                        if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
                                        {
                                            ?>
                                            <img src="<?php echo $path.$content['featured_img'];?>" />

                                            <?php
                                        }

                                        ?>

    </section>
    <section>
        <div class="container" style="margin-top: 3%; margin-bottom: 3%;">
           <div class="row">
               <div class="col-sm-12">
                    <?php echo $content['content_body']; ?>
               </div>
           </div>
       </div>
    </section>

    <section id="business-setup-services" style="background-color:#eee;">


        <div class="areas-wrap">
            <div class="areas-wrap">
                <?php

                $proserv = $this->db->query("SELECT * FROM igc_content WHERE content_type ='ProService' AND delete_status ='0'");
                $proservices = $proserv->result_array();



                ?>

                <?php
                foreach($proservices  as $results ){
                    $path = 'uploads/content/';
                    ?>
                   <div class="box">
                        <a href="<?php echo  site_url('content/'.$results['content_url']);?>">
                        <img width="400" height="150" src="<?php echo $path.$results['featured_img'];?>" class="attachment-medium size-medium wp-post-image" alt="business setup in dubai" srcset="<?php echo $path.$results['featured_img'];?> 300w, <?php echo $path.$results['featured_img'];?> 768w, <?php echo $path.$results['featured_img'];?> 1024w" sizes="(max-width: 300px) 100vw, 300px">
                        </a>


                        <div class="text-service-am">
                            <h3> <?php echo $results['content_page_title'] ?></h3>
                         <?php
                                $am = mb_substr($results["content_body"] , 0,170 ,'UTF-8');
                                $am = preg_replace("/<img[^>]+\>/i", "", $am);
                                echo $am;
                                ?>
                                <div class="clearfix"></div>
                                <a href="<?php echo  site_url('content/'.$results['content_url']);?>" class="btn btn-primary">Read More</a>
                        </div>

                    </div>


                    <?php

                }
                ?>



            </div>
        </div>
        <div class="clearfix"></div>
    </section>


<?php
}
else if($content['content_type'] =="FreeZone"){
?>

 <section >
        <?php
                                        $path = 'uploads/content/';
                                        if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
                                        {
                                            ?>
                                            <img width="100%" src="<?php echo $path.$content['featured_img'];?>" />

                                            <?php
                                        }

                                        ?>

    </section>
    <section>
        <div class="container" style="margin-top: 3%; margin-bottom: 3%;">
           <div class="row">
               <div class="col-sm-12">
                    <?php echo $content['content_body']; ?>
               </div>
           </div>
       </div>
    </section>

    <section id="" style="background-color:#eee; margin-bottom: 3%">


        <div class="bg-overlay" style="background-image: url(<?php
                                        $path = 'uploads/content/';
                                        if (file_exists($path.$content['freezone_img']) && $content['freezone_img'] !="")
                                        {
                                            ?>
                                            <?php echo $path.$content['freezone_img'];?>

                                            <?php
                                        }

                                        ?>);">
	<div class="row">
		<div class="col-sm-7">
		    &nbsp;
		</div>


		<div class="col-sm-5 facilities_benifit" style="background-color: #000000; color: #ffffff; height: 560px; margin-top: -50px; border-left: 3px solid #9e0000;">
		    <h3 class="text-center" style="font-weight: 700; padding-top: 20px;">Facilities and Benifites</h3>
		    <?php
                                $facilityicon = $this->crud_model->get_active_records('igc_gallery');

//                                print_r(  $brands);
//                                exit();
                                if(!empty($facilityicon))
                                {
                                    ?>
                                    <ul>
                                        <?php

                                        $i=1;
                                        foreach($facilityicon as $rows) {
                                            $path = 'uploads/gallery/';
                                            $actives = (isset($i) && $i == "1") ? "active" : "";
                                            ?>

                                            <li><img src="<?php echo $path.$rows['gallery_image'];?>" width="8%" /> <?php echo $rows['gallery_title']; ?></li>







                                            <?php
                                            $i++;
                                        }
                                        ?>
                                    </ul>
                                    <?php
                                }
                                ?>




		    <ul>

        </li></ul>
		</div>

	</div>
</div>
        <div class="clearfix"></div>
    </section>
<div class="row noPadding am-footer">
  <div class="col-md-12 noPadding box" >
    <div class="col-md-6 first">
        <div class="textbox">
            <h1><?php echo $content['about_service']; ?></h1>
            <hr>
            <p><?php echo $content['about_service_desc']; ?></p>
            <!--<a href="<?php echo  site_url('content/'.$content['about_service_link']);?>">Read More</a>-->
        </div>
    </div>
    <div class="col-md-6 second">
        <div class="textbox">
            <h1><?php echo $content['about_choose']; ?></h1>
            <hr>
            <p><?php echo $content['about_choose_desc']; ?></p>
            <!--<a href="<?php echo  site_url('content/'.$content['about_choose_link']);?>">Read More</a>-->
        </div>
    </div>


  </div>
</div>





<?php
}
else if($content['content_type'] =="MainLand"){
?>
<section >
        <?php
                                        $path = 'uploads/content/';
                                        if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
                                        {
                                            ?>
                                            <img width="100%" src="<?php echo $path.$content['featured_img'];?>" />

                                            <?php
                                        }

                                        ?>

    </section>
    <section>
        <div class="container" style="margin-top: 3%; margin-bottom: 3%;">
           <div class="row">
               <div class="col-sm-12">
                    <?php echo $content['content_body']; ?>
               </div>
           </div>
       </div>
    </section>

    <section id="" style="background-color:#eee; margin-bottom: 3%">
<?php

                    $freezonebg = $this->db->query("SELECT * FROM igc_pictures WHERE locate ='2' AND delete_status ='0'");
                    $freeback = $freezonebg->result_array();



                    ?>

        <div class="bg-overlay" style="background-image: url(<?php
                                        $path = 'uploads/content/';
                                        if (file_exists($path.$content['freezone_img']) && $content['freezone_img'] !="")
                                        {
                                            ?>
                                            <?php echo $path.$content['freezone_img'];?>

                                            <?php
                                        }

                                        ?>);">
	<div class="row">
		<div class="col-sm-7">
		    &nbsp;
		</div>


		<div class="col-sm-5 facilities_benifit" style="background-color: #000000; color: #ffffff; height: 560px; margin-top: -50px; border-left: 3px solid #9e0000;">
		    <h3 class="text-center" style="font-weight: 700; padding-top: 20px;">Facilities and Benifites</h3>
		    <?php
                                $facilityicon = $this->crud_model->get_active_records('igc_gallery');

//                                print_r(  $brands);
//                                exit();
                                if(!empty($facilityicon))
                                {
                                    ?>
                                    <ul>
                                        <?php

                                        $i=1;
                                        foreach($facilityicon as $rows) {
                                            $path = 'uploads/gallery/';
                                            $actives = (isset($i) && $i == "1") ? "active" : "";
                                            ?>

                                            <li><img src="<?php echo $path.$rows['gallery_image'];?>" width="8%" /> <?php echo $rows['gallery_title']; ?></li>







                                            <?php
                                            $i++;
                                        }
                                        ?>
                                    </ul>
                                    <?php
                                }
                                ?>




		    <ul>

        </li></ul>
		</div>

	</div>
</div>
        <div class="clearfix"></div>
    </section>
<div class="row noPadding am-footer">
  <div class="col-md-12 noPadding box" >
    <div class="col-md-6 first">
        <div class="textbox">
            <h1><?php echo $content['about_service']; ?></h1>
            <hr>
            <p><?php echo $content['about_service_desc']; ?></p>
            <!--<a href="<?php echo  site_url('content/'.$content['about_service_link']);?>">Read More</a>-->
        </div>
    </div>
    <div class="col-md-6 second">
        <div class="textbox">
            <h1><?php echo $content['about_choose']; ?></h1>
            <hr>
            <p><?php echo $content['about_choose_desc']; ?></p>
            <!--<a href="<?php echo  site_url('content/'.$content['about_choose_link']);?>">Read More</a>-->
        </div>
    </div>


  </div>
</div>

<?php
}
else if($content['content_type'] =="Message"){
    ?>


    <!-- Single-Service-Start -->
    <section class="single-service-contents">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="single-service-content">
<?php
                                $path = 'uploads/content/';
                                if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
                                {
                                    ?>
                            <a href="<?php echo $path.$content['featured_img'];?>" class="img-link">
                                    <img class="img-responsive" src="<?php echo $path.$content['featured_img'];?>" />
                            </a>
                                    <?php
                                }

                                ?>


                        <p><?php echo $content['content_body'];?></p>
                    </div><!-- /.single-service-content -->

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Single-Service-End-->







    <?php
}
else {
    ?>
    <main>
        <div class="breadcrumbs">
            <div class="container-fluid">
                <div class="boxed">
                    <ul>
                        <li><a href="<?php echo base_url();?>">home</a></li>
                        <li><a href="<?php echo base_url(); ?>content/our-services">Our Services</a></li>
                        <li><a href="<?php echo current_url(); ?>"><?php echo $content['content_page_title'] ?></a></li>
                    </ul>

                </div>
            </div>
        </div>


        <div class="block">

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9 aside">
                        <h3><?php echo $content['content_page_title'] ?></h3>

                        <p><?php echo $content['content_body'];?></p>


                    </div>
                    <div class="col-md-4 col-lg-3 aside">
                        <div class="blog-sidebar">
                            <H2 class="head-text-type2">Product Categories</H2>
                            <ul class="tt-list2">
                                <?php

                                $servmenu = $this->db->query("SELECT * FROM igc_content WHERE content_type ='Serve' AND delete_status ='0'");
                                $menuside = $servmenu->result_array();



                                ?>
                                <?php
                                foreach($menuside  as $results ) {

                                ?>

                                <li><a href="<?php echo  site_url('content/'.$results['content_url']);?>"> <?php echo $results['content_page_title']; ?></a></li>

                                <?php

                                }

                                ?>


                            </ul>
                            <H2 class="head-text-type2">Contact</H2>
                            <div class="tt-tags">
                                <?php $settings = $this->site_settings_model->get_site_settings(); ?>
                                <?php echo $settings['contact_details']; ?>

                            </div>


                        </div>

                        <ul class="services-list">
                            <li class="active"> <a href="#"> OUR SERVICES</a></li>







                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
}


?>




<style>

    .thumbnail {
        min-height: 327px;
    position:relative;
    overflow:hidden;
}
 .caption h4 { font-weight: bold; }
.caption {
    position:absolute;
    top:-100%;
    right:0;
    background:#d42f38;
    width:100%;
    height:100%;
    padding:2%;
    text-align:center;
    color:#fff !important;
    z-index:2;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}
.thumbnail:hover .caption {
    top:0%;
}
</style>




<script>
    $.validate();
</script>

<script>
    $.ajax({
        type: "POST",
        url: '<?php echo base_url() ?>index.php/content/captcha',
        dataType: "html",

        //data: postData, // appears as $_GET['id'] @ your backend side
        success: function(data) {

            $('.content_captcha_img').html(data);

        }

    });

    $('#content_captcha_refresh').click(function(){
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>index.php/content/captcha',
            dataType: "html",

            //data: postData, // appears as $_GET['id'] @ your backend side
            success: function(data) {

                $('.content_captcha_img').html(data);

            }

        });
    });
</script>