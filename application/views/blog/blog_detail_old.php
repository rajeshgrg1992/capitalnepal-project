<main class="page-main">
    <!-- Breadcrumbs Block -->
    <div class="block breadcrumbs">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index-2.html">Home</a></li>
                <li><a href="blog-posts.html">Blog</a></li>
                <li><?php echo $content['content_page_title']; ?></li>
            </ul>
        </div>
    </div>
    <!-- //Breadcrumbs Block -->
    <div class="block">
        <h2 class="text-center h-lg h-decor"><?php echo $content['content_page_title']; ?></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-9 aside">
                    <div class="blog-post single">
                        <div class="post-image">
                            <a href="<?php echo $content['content_url']; ?>">


                                <?php
                                $path = 'uploads/content/';
                                if ($content['featured_img'] !="")
                                {
                                    ?>
                                    <img src="<?php echo $path.$content['featured_img'];?>" class="img-responsive" >

                                    <?php
                                }

                                ?>

                            </a>
                        </div>
                        <ul class="post-meta">
                            <li class="post-meta-date"><?php echo date_converter($content['created']);?></li>

                        </ul>
                        <h2 class="post-title"><?php echo $content['content_page_title']; ?></h2>

                        <div class="post-content">
                            <p><?php echo $content['content_body'];?></p>
                            <h4>Leave your Comment</h4>
                            <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-width="100%" data-numposts="5"></div>

                        </div>
                    </div>

                    <div class="divider-lg"></div>

                </div>
                <div class="col-md-3 aside">

                    <div class="side-block" style="background-color: #fbfbfb; padding: 10px; border-radius: 5px;">
                        <h3>LATEST POST</h3>
                        <ul class="category-list">
                            <?php
                            if(! empty($latest))
                            {
                                foreach($latest as $rows)
                                {
                                    $path = 'uploads/content/';
                                    ?>
                                    <li><a href="<?php echo site_url('blog/detail/'.$rows['content_url']);?>"><?php echo $rows['content_page_title'] ;?> </a></li>




                                    <?php
                                }

                            }
                            ?>


                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>
</main>
