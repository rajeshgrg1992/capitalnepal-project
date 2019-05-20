
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="<?php echo base_url(); ?>" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Blog</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- Blog category -->
                <div class="block left-module">
                   <!--  <p class="title_block">Blog Categories</p>
                    <div class="block_content">
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
                                    <li><span></span><a href="#">News</a></li>
                                    <li><span></span><a href="#">About Beauty</a></li>
                                    <li><span></span><a href="#">Baby &amp; Mom</a></li>
                                    <li><span></span><a href="#">Diet &amp; Fitness</a></li>
                                    <li><span></span><a href="#">Promotions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- ./blog category  -->
                <!-- Popular Posts -->
                <div class="block left-module">
                    <p class="title_block">Popular Posts</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered">
                            <div class="layered-content">
                                <ul class="blog-list-sidebar clearfix">
                    <?php 
                            $path="uploads/content/";
                            foreach ($popular_blogs as $key => $values): 
                            $rows=$this->crud->get_detail($values['content_id'],"content_id","igc_content");
                    ?>
                                    <li>
                                        <div class="post-thumb">
                                            <a href="<?php echo site_url('blog/detail/'.$rows['content_url']);?>">
                                                <img src="<?php echo $path.$rows['featured_img'];?>" alt="Blog">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <h5 class="entry_title">
                                                <a href="<?php echo site_url('blog/detail/'.$rows['content_url']);?>">
                                                    <?php echo $rows['content_page_title'] ;?>
                                                </a>
                                            </h5>
                                            <div class="post-meta">
                                                <span class="date"><i class="fa fa-calendar"></i> <?php echo date_convert($rows['created']);?></span><br>
                                                <span class="comment-count">
                                                    <i class="fa fa-comment-o"></i> <?php echo $values['total']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./Popular Posts -->
                <!-- Banner -->
                <div class="block left-module">
                    <div class="banner-opacity">
        <?php 
            $blog_list_ads = $this->crud->get_where_row("igc_advertisement",array('status'=>1,'delete_status'=>0,'ad_for'=>"blog_list"));
            $ads_path="uploads/advertisement/";
        ?>
                        <a href="<?php echo $blog_list_ads['ad_url'];?>" target="_blank"><img src="<?php echo  $ads_path."blog_list_".$blog_list_ads['ad_image'];?>" alt="<?php echo $blog_list_ads['ad_title'];?>"></a>

                    </div>
                </div>
                <!-- ./Banner -->
                <!-- Recent Comments -->
                <div class="block left-module">
                   
                </div>
                <!-- ./Recent Comments -->
                <!-- tags -->
                <div class="block left-module">
                    <p class="title_block">TAGS</p>
                    <div class="block_content">
                        <div class="tags">
                            <a href="#"><span class="level1">actual</span></a>
                            <a href="#"><span class="level2">adorable</span></a>
                            <a href="#"><span class="level3">change</span></a>
                            <a href="#"><span class="level4">consider</span></a>
                            <a href="#"><span class="level3">phenomenon</span></a>
                            <a href="#"><span class="level4">span</span></a>
                            <a href="#"><span class="level1">spanegs</span></a>
                            <a href="#"><span class="level5">spanegs</span></a>
                            <a href="#"><span class="level1">actual</span></a>
                            <a href="#"><span class="level2">adorable</span></a>
                            <a href="#"><span class="level3">change</span></a>
                            <a href="#"><span class="level4">consider</span></a>
                            <a href="#"><span class="level2">gives</span></a>
                            <a href="#"><span class="level3">change</span></a>
                            <a href="#"><span class="level2">gives</span></a>
                            <a href="#"><span class="level1">good</span></a>
                            <a href="#"><span class="level3">phenomenon</span></a>
                            <a href="#"><span class="level4">span</span></a>
                            <a href="#"><span class="level1">spanegs</span></a>
                            <a href="#"><span class="level5">spanegs</span></a>
                        </div>
                    </div>
                </div>
                <!-- ./tags -->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <h2 class="page-heading">
                    <span class="page-heading-title2">Blog post</span>
                </h2>
                <div class="sortPagiBar clearfix">
                    <span class="page-noite">Showing <?php echo $next_row; ?> to <?php echo ($next_row+$per_page-1); ?> of <?php echo $total_counts; ?> (<?php echo ceil($total_counts/$per_page); ?> Pages)</span>
                    
                </div>
                <ul class="blog-posts">
 <?php
                 $path = 'uploads/content/';
                if(! empty($blogs))
                {
                    foreach($blogs as $rows)
                    {

                        ?>
                    <li class="post-item">
                        <article class="entry">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="entry-thumb image-hover2">
                                        <a href="<?php echo site_url('blog/detail/'.$rows['content_url']);?>">
                                            <img src="<?php echo $path.$rows['featured_img'];?>" alt="Blog" style="height:316px ; width:345px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="entry-ci">
                                        <h3 class="entry-title"><a href="<?php echo site_url('blog/detail/'.$rows['content_url']);?>"><?php echo $rows['content_page_title'] ;?></a></h3>
                                        <div class="entry-meta-data">
                                            <span class="author">
                                            <i class="fa fa-user"></i> 
                                            by: <a href="#">Admin</a></span>
                                            <span class="date"><i class="fa fa-calendar"></i> <?php echo date_converter($rows['created']);?></span>
                                        </div>
                                        <div class="post-star">
<?php
        $emoji=$this->content->get_emoji_total($rows['content_id']);
?>
                                            <span><?php echo $emoji['total']." Votes"; ?></span>
                                        </div>
                                        <div class="entry-excerpt">
                                           <?php echo substr($rows['content_body'],0,1200); ?>
                                        </div>
                                        <div class="entry-more">
                                            <a href="<?php echo site_url('blog/detail/'.$rows['content_url']);?>">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </li>
<?php 
                    }
                }
?>
                </ul>
                <div class="sortPagiBar clearfix">
                    <div class="bottom-pagination">
                        <nav>
                             <?php echo $this->pagination->create_links(); ?>
                        </nav>
                    </div>  
                </div>
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
