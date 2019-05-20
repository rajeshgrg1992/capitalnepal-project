<main class="page-main">
    <!-- Breadcrumbs Block -->
    <div class="block breadcrumbs">
        <div class="container">
            <div class="breadcrumb clearfix">
                        <a class="home" href="<?php echo base_url(); ?>" title="Return to Home">Home</a>
                        <span class="navigation-pipe">&nbsp;</span>
                        <a href="<?php echo current_url(); ?>">Blogs</a>
            </div>
        </div>
    </div>
    <!-- //Breadcrumbs Block -->
    <div class="block">
        <h2 class="text-center h-lg h-decor">OUR BLOG</h2>
        <div class="container">
            <div class="blog-isotope">
                <?php
                if(! empty($blogs))
                {
                    foreach($blogs as $rows)
                    {

                        ?>

                        <div class="blog-post">
                            <div class="post-image">
                                <a href="<?php echo site_url('blog/detail/'.$rows['content_url']);?>">

                                    <img src="images/blog/blog-post-img-1.jpg" alt="">
                                    <?php
                                    $path = 'uploads/content/';

                                    if ($rows['featured_img'] !="")
                                    {
                                        ?>
                                        <img  src="<?php echo $path.$rows['featured_img'];?>" class="img-responsive " alt="Images">

                                        <?php
                                    }

                                    ?>
                                </a>
                            </div>
                            <ul class="post-meta">
                                <li class="post-meta-date"><?php echo date_converter($rows['created']);?></li>
                                <li class="post-meta-reviews pull-right"><i class="icon icon-speech-bubble"></i></li>
                            </ul>
                            <h2 class="post-title"><?php echo $rows['content_page_title'] ;?></h2>

                            <div class="post-teaser">
                                <p><?php echo substr($rows['content_body'], 0,160);?></p>
                            </div>
                            <div class="post-read-more"><a href="<?php echo site_url('blog/detail/'.$rows['content_url']);?>" class="btn btn-success">Read More</a></div>
                        </div>

                        <?php
                    }

                }
                ?>


            </div>

        </div>
    </div>
</main>





