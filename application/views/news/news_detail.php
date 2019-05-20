<?php
$path = 'uploads/news/';
?>


<section>
    <div class="container">
        <div class="row">
            <div class="col s9">

                <div class="single-title">
                    <h1><?php echo $news_detail['title']; ?></h1>
                    <p><?php echo $news_detail['second_heading']; ?></p>
                </div>
                <div class="addthis_inline_share_toolbox_43dg"></div>

<div class="divider"></div>
                <div class="row ">
                    <div class="col s3">
                       <div class="publisher">
                           <h6 class="publish0date">प्रकाशित: <?php  echo $news_detail['created'];?></h6>
                           <img src="<?php echo base_url(); ?>share/am.png" class="img-circle" />
                           <h5><a href="#">सुजन ओली </a> </h5>
                       </div>
                    </div>
                    <div class="col s9">

                        <?php
                        if(!empty($news_detail['video'])){
                            ?>
                            <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?php echo $news_detail['video']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <?php

                        }else if(!empty($news_detail['image'])){
                            ?>
                            <img width="100%" src="<?php echo base_url().$path.$news_detail['image']; ?>" class="img-responsive" alt="<?php echo $news_detail['title']; ?>">

                            <?php

                        }else if(!empty($news_detail['server_image'])){
                            ?>
                            <img width="100%" src="<?php echo $news_detail['server_image']; ?>" class="img-responsive" alt="<?php echo $news_detail['title']; ?>">


                            <?php
                        }else{
                            ?>
                            <img width="100%" src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $news_detail['title'] ?>" class="responsive-img">
                            <?php
                        }

                        ?>
                        
                        
                        <?php echo $news_detail['content']; ?>
                        <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="700" data-numposts="5"></div>




                    </div>
                </div>



            </div>
            <div class="col l3">
                <div class="main-khabar">
                    <h5> मुख्य खबर </h5>
                    <div class="khbr">
                        <p class="khbr-number">१ </p>
                        <a href=""> डा. केसीविरुद्ध उत्रेका विजय थापाको पनि अनसन तोडियो</a>
                    </div>
                    <div class="date-side">
                        <p>२७ भदौ २०७५</p>
                    </div>
                    <div class="khbr">
                        <p class="khbr-number">१ </p>
                        <a href=""> डा. केसीविरुद्ध उत्रेका विजय थापाको पनि अनसन तोडियो</a>
                    </div>
                    <div class="date-side">
                        <p>२७ भदौ २०७५</p>
                    </div>
                    <div class="khbr">
                        <p class="khbr-number">१ </p>
                        <a href=""> डा. केसीविरुद्ध उत्रेका विजय थापाको पनि अनसन तोडियो</a>
                    </div>
                    <div class="date-side">
                        <p>२७ भदौ २०७५</p>
                    </div>
                    <div class="khbr">
                        <p class="khbr-number">१ </p>
                        <a href=""> डा. केसीविरुद्ध उत्रेका विजय थापाको पनि अनसन तोडियो</a>
                    </div>
                    <div class="date-side">
                        <p>२७ भदौ २०७५</p>
                    </div>
                    <div class="khbr">
                        <p class="khbr-number">१ </p>
                        <a href=""> डा. केसीविरुद्ध उत्रेका विजय थापाको पनि अनसन तोडियो</a>
                    </div>
                    <div class="date-side">
                        <p>२७ भदौ २०७५</p>
                    </div>

                </div>
            </div>

            <div class="col s12">
                <h2 class="title_bar">संबन्धित समाचार </h2>
                <div class="row sambandhit">
                    <div class="col l3  cat_list">

                        <a href="http://127.0.0.1:8000/news/5163"><img src="http://127.0.0.1:8000/users_upload/1554540701.nepalgatha.jpg" alt="चीनविरोधी गतिविधि हुन नदिने गृहमन्त्रीको प्रतिबद्धता" class="img-responsive"></a>


                        <h4><a href="http://127.0.0.1:8000/news/5163"> चीनविरोधी गतिविधि हुन नदिने गृहमन्त्रीको प्रतिबद्धता</a></h4>




                    </div>


                    <div class="col l3  cat_list">

                        <a href="http://127.0.0.1:8000/news/5163"><img src="http://127.0.0.1:8000/users_upload/1554540701.nepalgatha.jpg" alt="चीनविरोधी गतिविधि हुन नदिने गृहमन्त्रीको प्रतिबद्धता" class="img-responsive"></a>


                        <h4><a href="http://127.0.0.1:8000/news/5163"> चीनविरोधी गतिविधि हुन नदिने गृहमन्त्रीको प्रतिबद्धता</a></h4>




                    </div>

                    <div class="col l3  cat_list">

                        <a href="http://127.0.0.1:8000/news/5163"><img src="http://127.0.0.1:8000/users_upload/1554540701.nepalgatha.jpg" alt="चीनविरोधी गतिविधि हुन नदिने गृहमन्त्रीको प्रतिबद्धता" class="img-responsive"></a>


                        <h4><a href="http://127.0.0.1:8000/news/5163"> चीनविरोधी गतिविधि हुन नदिने गृहमन्त्रीको प्रतिबद्धता</a></h4>




                    </div>

                    <div class="col l3  cat_list">

                        <a href="http://127.0.0.1:8000/news/5163"><img src="http://127.0.0.1:8000/users_upload/1554540701.nepalgatha.jpg" alt="चीनविरोधी गतिविधि हुन नदिने गृहमन्त्रीको प्रतिबद्धता" class="img-responsive"></a>


                        <h4><a href="http://127.0.0.1:8000/news/5163"> चीनविरोधी गतिविधि हुन नदिने गृहमन्त्रीको प्रतिबद्धता</a></h4>




                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b6c1ce2c5afb7a3"></script>