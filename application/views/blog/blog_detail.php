
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="<?php echo base_url(); ?>" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a class="home" href="<?php echo site_url('blog'); ?>" title="Blog">Blog</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span> <?php echo $content['content_page_title']; ?></span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->

        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- for faceboook comments -->
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
                <!-- end of facebook -->
                <!-- Blog category -->
                <div class="block left-module">
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
            $blog_detail_ads = $this->crud->get_where_row("igc_advertisement",array('status'=>1,'delete_status'=>0,'ad_for'=>"blog_detail"));
            $ads_path="uploads/advertisement/";
        ?>
                        <a href="<?php echo $blog_detail_ads['ad_url'];?>" target="_blank"><img src="<?php echo  $ads_path."blog_detail_".$blog_detail_ads['ad_image'];?>" alt="<?php echo $blog_detail_ads['ad_title'];?>"></a>
                    </div>
                </div>
                <!-- ./Banner -->
                <!-- Recent Comments -->
                
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
                <!-- Banner -->
                <!-- ./Banner -->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <h1 class="page-heading">
                    <span class="page-heading-title2"><?php echo $content['content_page_title']; ?></span>
                </h1>
                <article class="entry-detail">
                    <div class="entry-meta-data">
                        <span class="author">
                        <i class="fa fa-user"></i> 
                        by: <a href="#">Admin</a></span>
                        <span class="comment-count">
                        </span>
                        <span class="date"><i class="fa fa-calendar"></i> <?php echo date_converter($content['created']);?></span>
                        <span class="post-star">
                           <span id="total_emoji"><?php echo $total_emoji." Votes"; ?></span>
                        </span>
                    </div>
                      <?php $path="uploads/content/"; ?>
                    <div class="entry-photo">
                        <img src="<?php echo $path.$content['featured_img'];?>" alt="<?php echo $content['content_title']; ?>" style="height:613px; width:870px;">
                    </div>
                    <div class="content-text clearfix">
                       <?php echo $content['content_body']; ?>
                    </div>
                </article>
<!-- Voting for Blogs -->
    <div class="people-reaction">
                    <div class="post_emo">
                                <div class="emo-wrap">
                                    <span class="emon-per" id="happy_p"><?php echo $happy_p." %" ?></span>
                                    <span class="emo-pic">
                                        <img title="Happy!!" class="img-responsive my-emo-pic" id="happy" src="eshopping/assets/emoji/emo-happy.png" width="50%">
                                        
                                    </span>
                                    <p>
                                        <h6 class="emo-react">Happy</h6>
                                    </p>
                                </div>

                                <div class="emo-wrap">
                                    <span class="emon-per" id="sad_p"><?php echo $sad_p." %" ?></span>
                                    <span class="emo-pic">
                                        <img class="img-responsive my-emo-pic" id="sad" src="eshopping/assets/emoji/emo-sad.png" width="50%">
                                        
                                    </span>
                                    <p>
                                        <h6 class="emo-react">Sad</h6>
                                    </p>
                                </div>
                                <div class="emo-wrap">
                                    <span class="emon-per" id="excited_p"><?php echo $excited_p." %" ?></span>
                                    <span class="emo-pic">
                                       <img class="img-responsive my-emo-pic" id="excited" src="eshopping/assets/emoji/excited.png" width="50%">
                                        
                                    </span>
                                    <p>
                                        <h6 class="emo-react">Excited</h6>
                                    </p>
                                </div>

                                <div class="emo-wrap">
                                    <span class="emon-per" id="amazed_p"><?php echo $amazed_p." %" ?></span>
                                    <span class="emo-pic">
                                        <img class="img-responsive my-emo-pic" id="amazed" src="eshopping/assets/emoji/amazed.png" width="50%">
                                        
                                    </span>
                                    <p>
                                        <h6 class="emo-react">Amazed</h6>
                                    </p>
                                </div>
                                

                                <div class="emo-wrap">
                                    <span class="emon-per" id="angry_p"><?php echo $angry_p." %" ?></span>
                                    <span class="emo-pic">
                                        <img class="img-responsive my-emo-pic" id="angry" src="eshopping/assets/emoji/angry.png" width="50%">
                                        
                                    </span>
                                    <p>
                                        <h6 class="emo-react">Angry</h6>
                                    </p>
                                </div>
                    </div><!--post-emo-->
    </div><!--End of people-reaction-->
<!-- End of voting for blogs -->

                <div class="single-box">
                    <h2 class="">Comments</h2>
                    <div class="comment-list">
                        <div class="fb-comments" data-href="https://www.facebook.com/eshoppingnep/" data-width="100%" data-numposts="5"></div>
                    </div>
                </div>
                <!-- ./Comment -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>

<script>
     $(document).ready(function(){
        var id=<?php echo $content['content_id']; ?>;
        $('img').click(function(){
            var emoji=this.id;
           // alert(emoji);
            $.post('<?php echo site_url('blog/emoji');?>',{emoji:emoji,id:id}, function(data) {
                $('#happy_p').text(data.happy_p);
                $('#sad_p').text(data.sad_p);
                $('#excited_p').text(data.excited_p);
                $('#amazed_p').text(data.amazed_p);
                $('#angry_p').text(data.angry_p);
                $('#total_emoji').text(data.total_emoji);
            });
        });
    });
</script>