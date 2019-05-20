<div class="container cat_container">
    <h2 class="title_bar"><?php echo $sub_title; ?></h2>
    <p class="breadcump"><a href="<?php echo base_url(); ?>">होमपेज &nbsp; <i class="fas fa-angle-right"></i></a> <?php echo $sub_title; ?></p>
    <div class="row sambandhit">
        <ul>
            <?php
            if(!empty($articles))
            {
                ?>

                    <?php
                $path = 'uploads/news/';

                    $i=1;
                    foreach($articles as $rows) {



                        $articles_path  = 'uploads/content/';
                        $actives = (isset($i) && $i == "1") ? "active" : "";
                        ?>
                        <li>
                            <div class="col l4  cat_list">
                                <a href="<?php echo site_url('news/'.$rows['content_id']);?>">
                                    <?php
                                    if(!empty($rows['image'])){
                                        ?>
                                        <img src="<?php echo base_url().$path.$rows['image'] ?>" title="<?php echo $rows['title'] ?>" class="responsive-img">

                                        <?php
                                    }else if(!empty($rows['server_image'])){
                                        ?>
                                        <img src="<?php echo $rows['server_image'] ?>" title="<?php echo $rows['title'] ?>" class="responsive-img">

                                        <?php
                                    }else{
                                        ?>

                                        <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $rows['title'] ?>" class="responsive-img">

                                        <?php
                                    }


                                    ?>


                                </a>
                                <h4><a href="<?php echo site_url('news/'.$rows['content_id']);?>"><?php echo $rows['title']; ?></a></h4>

                            </div>
                        </li>








                        <?php
                        $i++;
                    }
                    ?>



                <?php
            } else{
                ?>

                <div class="col-sm-9">
                    <style>
                        .error-template {padding: 40px 15px;text-align: center;}
                        .error-actions {margin-top:15px;margin-bottom:15px;}
                        .error-actions .btn { margin-right:10px; }
                    </style>
                    <div class="error-template">
                        <h1>
                            माफ गर्नुहोस्  !</h1>
                        <h2>
                            तपाईले खोज्नु भएको समाचार भेटिएन </h2>
                        <div class="error-details">
                            पुनः प्रयास गर्नु होला धन्यवाद !!!
                        </div>
                        <div class="error-actions">
                            <a href="<?php echo base_url(); ?>" class="btn btn-danger"><span class="fa fa-home"></span>
                                गृह पृष्ठमा जानुहोस  </a><a href="<?php echo base_url('content/contact');?>" class="btn btn-default"><span class="fa fa-envelope"></span> सम्पर्क गर्नुहोस्  </a>
                        </div>
                    </div>
                </div>



                <?php


            }
            ?>


        </ul>
    </div>
    <ul class="pagination" style="float:right;"><li class="active"><a>1</a></li><li><a href="rajneeti/index/12.html" data-ci-pagination-page="2">2</a></li><li><a href="rajneeti/index/12.html" data-ci-pagination-page="2" rel="next">&raquo</a></li></ul>        <br>
    <br>
</div><!-- container  -->




