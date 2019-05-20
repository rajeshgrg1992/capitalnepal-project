<style>
    .testi-spino { text-align: center; border-radius: 50%;}

</style>
<!-- Start Testimonials -->
<section class="testimonials">

    <!-- Start Video Background -->
    <div id="video_testimonials" data-vide-bg="video/ocean" data-vide-options="position: 0% 50%"></div>
    <div class="video_gradient"></div>
    <!-- End Video Background -->

    <div class="container">
        <div class="row">

            <!-- Start Preamble -->
            <div class="preamble">
                <h3>Testimonials</h3>
                <img src="img/divisor2.png" alt="" class="divisor">
            </div>
            <!-- End Preamble -->


                <?php
                if(!empty($review))
                {
                    ?>
                    <div id="owl-testimonials" class="owl-carousel owl-theme">
                        <?php
                        $review_path  = 'uploads/slider/';
                        $i=1;
                        foreach($review as $reviews) {

                            $actives = (isset($i) && $i == "1") ? "active" : "";
                            ?>


                                                               <!-- Start Item -->
                            <div class="item <?php echo $actives;?>">
                                <div class="testi-spino">
                                <img src="<?php echo $review_path.$reviews['slider_image'];?>" />
                                </div>
                                <blockquote class="quote">
                                    <cite><?php echo $reviews['review_by']; ?><span class="job"><?php echo $reviews['review_title']; ?></span></cite>

                                    <?php echo $reviews['review_text']; ?>                                </blockquote>
                            </div>
                            <!-- End Item -->
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
</section>
<!-- End Testimonials -->