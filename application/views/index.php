 
        <?php if($get_breaking_layouts['breaking_layout'] == "layout-first"){  ?>
               
               <?php
        $breaking = $this->db->query("SELECT * FROM igc_content WHERE is_flash ='1' AND delete_status ='0' AND publish_status = '1' ORDER BY created DESC limit 3");
        $cpbreaking = $breaking->result_array();
        ?>
        <?php
        $path = 'uploads/news/';
        foreach($cpbreaking as $breaking) {
        $current_date=$breaking['created'];
        $year=date('Y',strtotime($current_date));
        $month=date('m',strtotime($current_date));
        $date=date('j',strtotime($current_date));
        $hour=$this->nepali_calendar->convert_into_nepali_date(date('h',strtotime($current_date)));
        $min=$this->nepali_calendar->convert_into_nepali_date(date('i',strtotime($current_date)));
        $am_pm=date('a',strtotime($current_date));
        $nepalidate=$this->nepali_calendar->AD_to_BS($year,$month,$date);
        $nepaliTime=$this->nepali_calendar->get_time($current_date);
        $breaking['created']=$nepaliTime;
        ?>
        <div class="top-a">
    <div class="container">
        <div class="col l12">
            <div id="header_box">
                <?php
                if(!empty($breaking['tag_line'])){
                ?>
                <div class="title-tag">
                    <?php echo $breaking['tag_line']; ?>
                </div>
                <?php
                }
                ?>
                <h2 class="header1"><a href="<?php echo base_url().'news/'.$breaking['content_id']; ?>" title="<?php echo $breaking['title']; ?>"><?php echo $breaking['title']; ?></a></h2>
                <h5 class="breaking-am-subhead"> <?php echo $breaking['second_heading']; ?> </h5>
                <a href="<?php echo base_url().'news/'.$breaking['content_id']; ?>" class="hasImg">
                    <?php
                    if(!empty($breaking['video'])){
                    ?>
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?php echo $breaking['video']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <?php
                    }else if(!empty($breaking['image'])){
                    ?>
                    <img src="<?php echo base_url().$path.$breaking['image']; ?>" class="img-responsive" alt="<?php echo $breaking['title']; ?>">
                    <?php
                    }else if(!empty($breaking['server_image'])){
                    ?>
                    <img src="<?php echo $breaking['server_image']; ?>" class="img-responsive" alt="<?php echo $breaking['title']; ?>">
                    <?php
                    }else{
                    ?>
                    <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $breaking['title'] ?>" class="responsive-img">
                    <?php
                    }
                    
                    ?>
                    
                </a>
                <div class="row writer-breaking">
                    <div class="col s3">
                        <div class="breaker-author">
                            <?php
                               $guest_id = $breaking['guest_id'];
                               $reporter_id = $breaking['reporter_id'];
                               $user_id = $breaking['user_id'];

                               $tmp_guest = $this->db->query("SELECT * FROM igc_guest WHERE guest_id = '$guest_id' AND publish_status = '1' ORDER BY created DESC limit 1");
                               $guest = $tmp_guest->row_array();

                               $tmp_reporter = $this->db->query("SELECT * FROM igc_reporter WHERE reporter_id = '$reporter_id' AND publish_status = '1' ORDER BY created DESC limit 1");
                               $reporter = $tmp_reporter->row_array();

                               $tmp_user = $this->db->query("SELECT * FROM igc_users WHERE user_id = '$user_id' ORDER BY date_created DESC limit 1");
                               $user = $tmp_user->row_array();
                            ?>
                            <p class="author-name">
                               <?php 
                                 if(!empty($guest_id)){ 
                                ?>
                                    <i class="fa fa-square" aria-hidden="true"></i> <?php echo $guest['guest_title']; ?> 
                                <?php 
                                    }
                                 elseif(!empty($breaking['reporter_id'])){ 
                                ?>    
                                     <i class="fa fa-square" aria-hidden="true"></i> <?php echo $reporter['reporter_title']; ?>    
                                 <?php
                                    }
                                 else{
                                 ?>   
                                       <i class="fa fa-square" aria-hidden="true"></i> <?php echo $user['username']; ?> 
                                 <?php
                                    }
                                 ?>
                            </p>
                            <div class="divider"></div>
                            <p>
                                <?php 
                                 if(!empty($guest_id)){ 
                                ?>
                                    <a target="_blank" href="<?php echo $guest['twitter']; ?>"> <i class="fab fa-twitter" aria-hidden="true"></i><?php echo $guest['twitter']; ?></a>
                                <?php 
                                    }
                                 elseif(!empty($breaking['reporter_id'])){ 
                                ?>    
                                     <a target="_blank" href="<?php echo $reporter['twitter']; ?>"> <i class="fab fa-twitter" aria-hidden="true"></i> <?php echo $reporter['twitter']; ?> </a>
                                 <?php
                                    }
                                 else{
                                 ?>   
                                       <a target="_blank" href="<?php echo $user['email']; ?>"><i class="fa fa-envelope" aria-hidden="true" style="margin-right: 5px;"></i><?php echo $user['email']; ?> </a>
                                 <?php
                                    }
                                 ?>
                                
                            </p>
                            <div class="divider"></div>
                            <p style="font-size: 12px;"><i class="far fa-clock"></i> <?php echo $breaking['created']; ?></p>
                        </div>
                    </div>
                    <div class="col s9">
                        <div class="text-left-am">
                            <p>
                                    <?php
                                     $ams = mb_substr($breaking["content"] , 0,200 ,'UTF-8');
                                     $ams = preg_replace("/<img[^>]+\>/i", "", $ams);
                                     ?>
                                    <?php echo $ams; ?>
                                        
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
        <?php
        }
        ?>

        <?php 
         }
         elseif ($get_breaking_layouts['breaking_layout'] == "layout-second") {
        ?>
           <div class="container">
                <div class="row">
                    <div class="col l12 s12 break_layout_second">
                        <div class="row">
                            <?php foreach ($get_mukhya_two as $row){ ?>
                            <div class="col l6 s12">
                                <div class="second_big">
                                     <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                    <?php
                                    if(!empty($row['video'])){
                                    ?>
                                    <iframe src="https://www.youtube.com/embed/<?php echo $row['video'];?>"></iframe>
                                    <?php
                                    }else if(!empty($row['server_image'])){
                                    ?>
                                    <img src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                    <?php
                                    }else{
                                    ?>
                                    <img src="<?php echo base_url(); ?>/share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                    <?php
                                    }
                                    ?>
                                </a>
                                <h1><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title'] ?></a></h1>
                                <!-- <p>
                                    <?php
                                     $ams = mb_substr($row["content"] , 0,200 ,'UTF-8');
                                     $ams = preg_replace("/<img[^>]+\>/i", "", $ams);
                                     ?>
                                    <?php echo $ams; ?>
                                        
                                </p> -->
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <?php foreach ($get_mukhya_offset_two as $row){ ?>
                            <div class="col l3 s12">
                                <div class="second_small">
                                    <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                        <?php
                                        if(!empty($row['video'])){
                                        ?>
                                        <iframe width="700" height="315"src="https://www.youtube.com/embed/<?php echo $row['youtube_link'];?>"></iframe>
                                        <?php
                                        }else if(!empty($row['server_image'])){
                                        ?>
                                        <img src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                        <?php
                                        }else{
                                        ?>
                                        <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                        <?php
                                        }
                                        ?>
                                    </a>
                                    <h1><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title'] ?></a></h1>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php 
         }
         else{

         }
        ?>

<div class="container">
    <div class="news-block am-news-block">
        <div class="row">
        <div class="col l8 s12 newscontent ">
            <div class="cat_title">
                 <h5><span class="tits"> मुख्य समाचार <i class="fas fa-arrow-right"></i></span> <a href="<?php echo base_url(); ?>category/main-news"><span class="right">सबै <i class="fas fa-ellipsis-v"></i></span></a></h5>
            </div>     
                 <div class="row">
                       <div class="col l8 s12">
                             <div class="mukhya">
                                    <?php foreach ($get_mukhya_one as $row){ ?>
                                        <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                            <?php
                                             if(!empty($row['server_image'])){
                                            ?>
                                            <img src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                            <?php
                                            }else{
                                            ?>
                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                            <?php
                                            }
                                            ?>
                                        </a>
                                        <div class="overslay">
                                              <h1><a href="<?php echo base_url().'news/'.$row['content_id']; ?>" class="btt"><?php echo $row['title'] ?></a></h1>
                                              <p>
                                                   <?php
                                                     $ams = mb_substr($row["content"] , 0,200 ,'UTF-8');
                                                     $ams = preg_replace("/<img[^>]+\>/i", "", $ams);
                                                     ?>
                                                    <?php echo $ams; ?>
                                              </p>
                                        </div>
                                    <?php } ?>
                             </div>   
                       </div>
                       <div class="col l4 s12">
                             
                                <?php foreach ($get_mukhya_three_offset_one as $row){ ?>
                                    <div class="mukhya-small">
                                  <div class="col l5 s12" style="padding: 0px;">
                                        <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                            <?php
                                            if(!empty($row['server_image'])){
                                            ?>
                                            <img src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                            <?php
                                            }else{
                                            ?>
                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                            <?php
                                            }
                                            ?>
                                        </a>
                                  </div>
                                  <div class="col l7 s12">
                                        <h1><a href="<?php echo base_url().'news/'.$row['content_id']; ?>" class="bttt"><?php echo $row['title'] ?></a></h1>
                                  </div>
                                  </div>
                                 <?php } ?> 
                             
                       </div>
                 </div>   
            </div>
            <div class="col l4 s12 newscontent ">
                   
            </div>   
            </div> 
        </div>
    </div>
</div>                
<div class="container">
    <div class="row news-block am-news-block">
        <div class="col l12 s12 newscontent ">
            <h5>मुख्य समाचार <a href="<?php echo base_url(); ?>category/main-news"><span class="right">सबै <i class="fas fa-ellipsis-v"></i></span></a></h5>
            <div class="row newsmore">
                <?php foreach ($get_mukhya_two as $row){ ?>
                <div class="col l6 s12">
                    <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                        <?php
                        if(!empty($row['image'])){
                        ?>
                        <img src="<?php echo base_url('/uploads/news/'.$row['image']); ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                        <?php
                        }else if(!empty($row['server_image'])){
                        ?>
                        <img src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                        <?php
                        }else{
                        ?>
                        <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                        <?php
                        }
                        ?>
                    </a>
                    <h1><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title'] ?></a></h1>
                    <p><?php echo $row['short_content'] ?></p>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                <?php foreach ($get_mukhya_offset_two as $row){ ?>
                <div class="col l3 s12">
                    <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                        <?php
                        if(!empty($row['image'])){
                        ?>
                        <img src="<?php echo base_url('/uploads/content/'.$row['image']); ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                        <?php
                        }else if(!empty($row['server_image'])){
                        ?>
                        <img src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                        <?php
                        }else{
                        ?>
                        <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                        <?php
                        }
                        ?>
                    </a>
                    <h1><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title'] ?></a></h1>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col l12 feature">
            <div class="container">
                <h5>क्यापिटल विशेष
                </h5>
                <div class="owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-1592px, 0px, 0px); transition: all 0s ease 0s; width: 6370px;">
                            <?php
                            $spec = $this->db->query("SELECT * FROM igc_content WHERE is_special ='1' AND delete_status ='0' AND publish_status = '1' ORDER BY created DESC limit 12");
                            $specialam = $spec->result_array();
                            ?>
                            <?php
                            foreach ($specialam as $sp){
                            ?>
                            <div class="owl-item cloned" style="width: 258.5px; margin-right: 60px;">
                                <div class="item">
                                    <a href="<?php echo base_url().'news/'.$sp['content_id']; ?>">
                                        <?php
                                        if(!empty($sp['image'])){
                                        ?>
                                        <img src="<?php echo base_url().$path.$sp['image'] ?>" title="<?php echo $sp['title'] ?>" class="responsive-img">
                                        <?php
                                        }else if(!empty($sp['server_image'])){
                                        ?>
                                        <img src="<?php echo $sp['server_image'] ?>" title="<?php echo $sp['title'] ?>" class="responsive-img">
                                        <?php
                                        }else{
                                        ?>
                                        <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $sp['title'] ?>" class="responsive-img">
                                        <?php
                                        }
                                        ?>
                                    </a>
                                    <h4><a href="<?php echo base_url().'news/'.$sp['content_id']; ?>"><?php echo $sp['title']; ?></a></h4>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            </div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>             </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row news-block">
                        <div class="col s12 l12 kalasahity">
                            <h5>अर्थ तन्त्र  <a href="<?php echo base_url(); ?>category/econimics"><span class="right">सबै <i class="fas fa-ellipsis-v"></i></span></a></h5>
                            <div class="row tk_mar">
                                <div class="col s12 l3 heading5">
                                    <ul>
                                        <?php
                                        foreach ($get_artha_six_left as $arthaleft){
                                        ?>
                                        <li>
                                            <h4><a href="<?php echo base_url().'news/'.$arthaleft['content_id']; ?>"><?php echo $arthaleft['title']; ?></a></h4>
                                        </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <?php
                                foreach ($get_artha_one as $arthaone){
                                ?>
                                <div class="col s12 l6 kala_slider">
                                    <a href="<?php echo base_url().'news/'.$arthaone['content_id']; ?>">
                                        <?php
                                        if(!empty($arthaone['image'])){
                                        ?>
                                        <img src="<?php echo base_url().$path.$arthaone['image'] ?>" title="<?php echo $arthaone['title'] ?>" class="responsive-img">
                                        <?php
                                        }else if(!empty($arthaone['server_image'])){
                                        ?>
                                        <img src="<?php echo $arthaone['server_image'] ?>" title="<?php echo $arthaone['title'] ?>" class="responsive-img">
                                        <?php
                                        }else{
                                        ?>
                                        <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $arthaone['title'] ?>" class="responsive-img">
                                        <?php
                                        }
                                        ?>
                                    </a>
                                    <h4><a href="<?php echo base_url().'news/'.$arthaone['content_id']; ?>"><?php echo $arthaone['title']; ?></a></h4>
                                    <p>
                                        <?php echo $arthaone['short_content']; ?>
                                    </p>
                                </div>
                                <?php
                                }
                                ?>
                                <div class="col s12 l3 heading5">
                                    <ul>
                                        <?php
                                        foreach ($get_artha_six_right as $artharight){
                                        ?>
                                        <li>
                                            <h4><a href="<?php echo base_url().'news/'.$artharight['content_id']; ?>"><?php echo $artharight['title']; ?></a></h4>
                                        </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row news-block am-news-block">
                        <div class="col l9 s12 newscontent ">
                            <h5>बैङ्किङ  <a href="kalasahitya.html"><span class="right">सबै <i class="fas fa-ellipsis-v"></i></span></a></h5>
                            <div class="row newsmore">
                                <?php
                                foreach ($get_banking_one as $bankingone){
                                ?>
                                <div class="col l6 s12">
                                    <a href="<?php echo base_url().'news/'.$bankingone['content_id']; ?>">
                                        <?php
                                        if(!empty($bankingone['image'])){
                                        ?>
                                        <img src="<?php echo base_url().$path.$bankingone['image'] ?>" title="<?php echo $bankingone['title'] ?>" class="responsive-img">
                                        <?php
                                        }else if(!empty($bankingone['server_image'])){
                                        ?>
                                        <img src="<?php echo $bankingone['server_image'] ?>" title="<?php echo $bankingone['title'] ?>" class="responsive-img">
                                        <?php
                                        }else{
                                        ?>
                                        <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $bankingone['title'] ?>" class="responsive-img">
                                        <?php
                                        }
                                        ?>
                                    </a>
                                    <h1><a href="<?php echo base_url().'news/'.$bankingone['content_id']; ?>"><?php echo $bankingone['title']; ?></a></h1>
                                    <p>
                                        <?php echo $bankingone['short_content']; ?>
                                    </p>
                                </div>
                                <?php
                                }
                                ?>
                                <div class="col l6 s12">
                                    <div class="row">
                                        <?php
                                        foreach ($get_banking_offset_one as $ofbanking){
                                        ?>
                                        <div class="col l12">
                                            <a href="<?php echo base_url().'news/'.$ofbanking['content_id']; ?>">
                                                <?php
                                                if(!empty($ofbanking['image'])){
                                                ?>
                                                <img width="135" height="90" src="<?php echo base_url().$path.$ofbanking['image'] ?>" title="<?php echo $ofbanking['title'] ?>" class="responsive-img">
                                                <?php
                                                }else if(!empty($ofbanking['server_image'])){
                                                ?>
                                                <img width="135" height="90" src="<?php echo $ofbanking['server_image'] ?>" title="<?php echo $ofbanking['title'] ?>" class="responsive-img">
                                                <?php
                                                }else{
                                                ?>
                                                <img width="135" height="90" src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $ofbanking['title'] ?>" class="responsive-img">
                                                <?php
                                                }
                                                ?>
                                            </a>
                                            <h4><a href="<?php echo base_url().'news/'.$ofbanking['content_id']; ?>"><?php echo $ofbanking['title']; ?></a></h4>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>                </div>
                            <div class="col l3 s12 tren">
                                <h6>सेयर <i class="material-icons">trending_up</i></h6>
                                <ul>
                                    <?php
                                    $si=1;
                                    foreach($get_share_five as $share){
                                    ?>
                                    <li><span><?php echo $this->nepali_calendar->convert_into_nepali_number($si) ; ?>.</span> <a href="<?php echo base_url().'news/'.$share['content_id']; ?>"><?php echo $share['title']; ?></a></li>
                                    <?php
                                    $si++;
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col l12 news-block">
                            <h5>भिडियो<a href="video.html"><span class="right">सबै <i class="fas fa-ellipsis-v"></i></span></a></h5>
                            <div class="row video">
                                <div class="col l12">
                                    <div class="row col_remove">
                                        <ul>
                                            <?php
                                            foreach ($get_video_four as $video){
                                            ?>
                                            <li>
                                                <div class="col l3 video-pad">
                                                    <a href="<?php echo base_url().'news/'.$video['content_id']; ?>">
                                                        <div class="video_container">
                                                            <?php
                                                            if(!empty($video['image'])){
                                                            ?>
                                                            <img src="<?php echo base_url().$path.$video['image'] ?>" title="<?php echo $video['title'] ?>" class="responsive-img">
                                                            <?php
                                                            }else if(!empty($video['server_image'])){
                                                            ?>
                                                            <img  src="<?php echo $video['server_image'] ?>" title="<?php echo $video['title'] ?>" class="responsive-img">
                                                            <?php
                                                            }else{
                                                            ?>
                                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $video['title'] ?>" class="responsive-img">
                                                            <?php
                                                            }
                                                            ?>
                                                            <div class="text"><i class="fa fa-play-circle fa-3x"></i></div>
                                                            <div class="overlay1">
                                                                <div class="text"><i class="fa fa-play-circle fa-3x"></i></div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <h4><a href="<?php echo base_url().'news/'.$video['content_id']; ?>"><?php echo $video['title']; ?></a></h4>
                                                </div>
                                            </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row news-block">
                            <div class="col l9 s12">
                                <h5>पूर्वाधार  <a href="rajneeti.html"><span class="right">सबै <i class="fas fa-ellipsis-v"></i></span></a></h5>
                                <div class="row">
                                    <?php
                                    foreach($get_purbadhar_one as $purwadharone){
                                    ?>
                                    <div class="col l6">
                                        <a href="<?php echo base_url().'news/'.$purwadharone['content_id']; ?>">
                                            <?php
                                            if(!empty($purwadharone['image'])){
                                            ?>
                                            <img src="<?php echo base_url().$path.$purwadharone['image'] ?>" title="<?php echo $purwadharone['title'] ?>" class="responsive-img">
                                            <?php
                                            }else if(!empty($purwadharone['server_image'])){
                                            ?>
                                            <img  src="<?php echo $purwadharone['server_image'] ?>" title="<?php echo $purwadharone['title'] ?>" class="responsive-img">
                                            <?php
                                            }else{
                                            ?>
                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $purwadharone['title'] ?>" class="responsive-img">
                                            <?php
                                            }
                                            ?>
                                        </a>
                                        <h1><a href="<?php echo base_url().'news/'.$purwadharone['content_id']; ?>"><?php echo $purwadharone['title']; ?></a></h1>
                                        <p><?php echo $purwadharone['short_content']; ?></p>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="col l6">
                                        <div class="row col_remove">
                                            <?php
                                            foreach ($get_purbadhar_two_offset_one as $purwadhar_two){
                                            ?>
                                            <div class="col l6">
                                                <a href="<?php echo base_url().'news/'.$purwadhar_two['content_id']; ?>">
                                                    <?php
                                                    if(!empty($purwadhar_two['image'])){
                                                    ?>
                                                    <img src="<?php echo base_url().$path.$purwadhar_two['image'] ?>" title="<?php echo $purwadhar_two['title'] ?>" class="responsive-img">
                                                    <?php
                                                    }else if(!empty($purwadhar_two['server_image'])){
                                                    ?>
                                                    <img  src="<?php echo $purwadhar_two['server_image'] ?>" title="<?php echo $purwadhar_two['title'] ?>" class="responsive-img">
                                                    <?php
                                                    }else{
                                                    ?>
                                                    <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $purwadhar_two['title'] ?>" class="responsive-img">
                                                    <?php
                                                    }
                                                    ?>
                                                </a>
                                                <h4><a href="<?php echo base_url().'news/'.$purwadhar_two['content_id']; ?>"><?php echo $purwadhar_two['title']; ?></a></h4>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="row col_remove">
                                            <?php
                                            foreach ($get_purbadhar_two_offset_two as $purwadhar_twothree){
                                            ?>
                                            <div class="col l6">
                                                <a href="<?php echo base_url().'news/'.$purwadhar_twothree['content_id']; ?>">
                                                    <?php
                                                    if(!empty($purwadhar_twothree['image'])){
                                                    ?>
                                                    <img src="<?php echo base_url().$path.$purwadhar_twothree['image'] ?>" title="<?php echo $purwadhar_twothree['title'] ?>" class="responsive-img">
                                                    <?php
                                                    }else if(!empty($purwadhar_twothree['server_image'])){
                                                    ?>
                                                    <img  src="<?php echo $purwadhar_twothree['server_image'] ?>" title="<?php echo $purwadhar_twothree['title'] ?>" class="responsive-img">
                                                    <?php
                                                    }else{
                                                    ?>
                                                    <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $purwadhar_twothree['title'] ?>" class="responsive-img">
                                                    <?php
                                                    }
                                                    ?>
                                                </a>
                                                <h4><a href="<?php echo base_url().'news/'.$purwadhar_twothree['content_id']; ?>"><?php echo $purwadhar_twothree['title']; ?></a></h4>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>                </div>
                                <div class="col l3 s12 tren">
                                    <h6>ट्रेन्डिङ न्युज &nbsp; <i class="material-icons">trending_up</i></h6>
                                    <ul>
                                        <li><span>१.</span> <a href="artha/11121.html">सरकारले बढायो तेलको मूल्य</a></li>
                                        <li><span>२.</span> <a href="kalasahitya/11120.html">चाैरजहारी महाेत्सवमा महानायक देखि जन गायकसम्मकाे प्रस्तुत रहने </a></li>
                                        <li><span>३.</span> <a href="samaj/11119.html">सिम्तामा एक शिक्षकको मृत्यु</a></li>
                                        <li><span>४.</span> <a href="samaj/11116.html">जागिर जोगाइदिन अस्थायी शिक्षकको पूर्वराजालाई बिन्तिपत्र</a></li>
                                        <li><span>५.</span> <a href="rajneeti/11115.html">डा. केसीविरुद्ध उत्रेका विजय थापाको पनि अनसन तोडियो</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row news-block">
                                <div class="col l9 s12">
                                    <h5>पर्यटन   <a href="rajneeti.html"><span class="right">सबै <i class="fas fa-ellipsis-v"></i></span></a></h5>
                                    <div class="row">
                                        
                                        
                                        
                                        
                                        <?php
                                        foreach($get_paryatan_two as $row){
                                        ?>
                                        <div class="col l6">
                                            <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                <?php
                                                if(!empty($row['image'])){
                                                ?>
                                                <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                <?php
                                                }else if(!empty($row['server_image'])){
                                                ?>
                                                <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                <?php
                                                }else{
                                                ?>
                                                <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                <?php
                                                }
                                                ?>
                                            </a>
                                            <h1><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h1>
                                            <p><?php echo $row['short_content']; ?></p>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <div class="col l12">
                                            <div class="row col_remove">
                                                
                                                <?php
                                                foreach($get_paryatan_three_offset_two as $row){
                                                ?>
                                                <div class="col l4">
                                                    <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                        <?php
                                                        if(!empty($row['image'])){
                                                        ?>
                                                        <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                        <?php
                                                        }else if(!empty($row['server_image'])){
                                                        ?>
                                                        <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                        <?php
                                                        }else{
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                        <?php
                                                        }
                                                        ?>
                                                    </a>
                                                    <h4><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h4>
                                                    <span><i class="far fa-clock"></i> </span>
                                                </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>                </div>
                                    <div class="col l3 s12 tren">
                                        <iframe src="https://www.ashesh.com.np/forex/widget2.php?api=3301y0h537" frameborder="0" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:100%; height:450px; border-radius:5px;" scrolling="no" allowtransparency="true">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <!-- suchana prabidhi -->
                            <div class="container">
                                <div class="row news-block">
                                    <div class="col l9 s12 newscontent">
                                        <h5>सूचना प्रविधि  <a href="samaj.html"><span class="right">सबै <i class="fas fa-ellipsis-v"></i></span></a></h5>
                                        <div class="row newsmore">
                                            <?php
                                            foreach($get_suchana_one as $row){
                                            ?>
                                            <div class="col l6 s12">
                                                <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                    <?php
                                                    if(!empty($row['image'])){
                                                    ?>
                                                    <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                    <?php
                                                    }else if(!empty($row['server_image'])){
                                                    ?>
                                                    <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                    <?php
                                                    }else{
                                                    ?>
                                                    <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                    <?php
                                                    }
                                                    ?>
                                                </a>
                                                <h1><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h1>
                                                <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                <p><?php echo $row['short_content']; ?></p>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                            <div class="col l6 s12">
                                                <div class="row">
                                                    <?php
                                                    foreach($get_paryatan_three_offset_two as $row){
                                                    ?>
                                                    <div class="col l12">
                                                        <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                            <?php
                                                            if(!empty($row['image'])){
                                                            ?>
                                                            <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                            <?php
                                                            }else if(!empty($row['server_image'])){
                                                            ?>
                                                            <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                            <?php
                                                            }else{
                                                            ?>
                                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                            <?php
                                                            }
                                                            ?>
                                                        </a>
                                                        <h4><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h4>
                                                        <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                        
                                                    </div>
                                                    <?php
                                                    }
                                                    ?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col l3 s12 arthakhabar">
                                        <iframe name="fab6a0b2c101b" width="1000px" height="400px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:page Facebook Social Plugin" src="https://web.facebook.com/v2.11/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fd_vbiawPdxB.js%3Fversion%3D44%23cb%3Df293882684c054%26domain%3Dwww.capitalnepal.com%26origin%3Dhttp%253A%252F%252Fwww.capitalnepal.com%252Ffe2b894cb82cfc%26relation%3Dparent.parent&amp;container_width=360&amp;height=400&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FCapitalMagazineNepal&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" style="border: none; visibility: visible; width: 300px; height: 214px;" class=""></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col l9 taja mar_none">
                                        <h5>प्रदेश  <a href="index.html"><span class="right">सबै <i class="fas fa-ellipsis-v"></i></span></a></h5>
                                        <div class="row pradesh">
                                            <div class="col s12 pradesh-nav-am">
                                                <ul class="tabs">
                                                    <li class="tab col s1"><a href="#test1" class="">प्रदेश -१</a></li>
                                                    <li class="tab col s1"><a href="#test2" class="">प्रदेश -२</a></li>
                                                    <li class="tab col s1"><a href="#test3" class="">प्रदेश -३</a></li>
                                                    <li class="tab col s1"><a href="#test4" class="">प्रदेश -४</a></li>
                                                    <li class="tab col s1"><a href="#test5" class="">प्रदेश -५</a></li>
                                                    <li class="tab col s1"><a href="#test6" class="active">प्रदेश -६</a></li>
                                                    <li class="tab col s1"><a href="#test7" class="">प्रदेश -७</a></li>
                                                    <li class="indicator" style="right: 444px; left: 370px;"></li></ul>
                                                </div>
                                                
                                                <div id="test1" class="col s12 news-block active">
                                                    <div class="newscontent">
                                                        
                                                        <div class="row newsmore">
                                                            <?php
                                                            foreach($get_provinceone_one as $row){
                                                            ?>
                                                            <div class="col l6 s12">
                                                                <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                    <?php
                                                                    if(!empty($row['image'])){
                                                                    ?>
                                                                    <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }else if(!empty($row['server_image'])){
                                                                    ?>
                                                                    <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }else{
                                                                    ?>
                                                                    <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </a>
                                                                <h1><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h1>
                                                                <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                <p><?php echo $row['short_content']; ?></p>
                                                            </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            <div class="col l6 s12">
                                                                <div class="row">
                                                                    <?php
                                                                    foreach($get_provinceone_four_offset_one as $row){
                                                                    ?>
                                                                    <div class="col l12">
                                                                        <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                            <?php
                                                                            if(!empty($row['image'])){
                                                                            ?>
                                                                            <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else if(!empty($row['server_image'])){
                                                                            ?>
                                                                            <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else{
                                                                            ?>
                                                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </a>
                                                                        <h4><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h4>
                                                                        <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                        
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>















                                                <div id="test2" class="col s12 news-block active">
                                                    <div class="newscontent">
                                                        
                                                        <div class="row newsmore">
                                                            <?php
                                                            foreach($get_provincetwo_one as $row){
                                                            ?>
                                                            <div class="col l6 s12">
                                                                <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                    <?php
                                                                    if(!empty($row['image'])){
                                                                    ?>
                                                                    <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }else if(!empty($row['server_image'])){
                                                                    ?>
                                                                    <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }else{
                                                                    ?>
                                                                    <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </a>
                                                                <h1><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h1>
                                                                <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                <p><?php echo $row['short_content']; ?></p>
                                                            </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            <div class="col l6 s12">
                                                                <div class="row">
                                                                    <?php
                                                                    foreach($get_provincetwo_four_offset_one as $row){
                                                                    ?>
                                                                    <div class="col l12">
                                                                        <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                            <?php
                                                                            if(!empty($row['image'])){
                                                                            ?>
                                                                            <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else if(!empty($row['server_image'])){
                                                                            ?>
                                                                            <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else{
                                                                            ?>
                                                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </a>
                                                                        <h4><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h4>
                                                                        <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                        
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>







                                                <div id="test3" class="col s12 news-block active">
                                                    <div class="newscontent">
                                                        
                                                        <div class="row newsmore">
                                                            <?php
                                                            foreach($get_provincethree_one as $row){
                                                            ?>
                                                            <div class="col l6 s12">
                                                                <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                    <?php
                                                                    if(!empty($row['image'])){
                                                                    ?>
                                                                    <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }else if(!empty($row['server_image'])){
                                                                    ?>
                                                                    <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }else{
                                                                    ?>
                                                                    <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </a>
                                                                <h1><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h1>
                                                                <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                <p><?php echo $row['short_content']; ?></p>
                                                            </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            <div class="col l6 s12">
                                                                <div class="row">
                                                                    <?php
                                                                    foreach($get_provincethree_four_offset_one as $row){
                                                                    ?>
                                                                    <div class="col l12">
                                                                        <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                            <?php
                                                                            if(!empty($row['image'])){
                                                                            ?>
                                                                            <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else if(!empty($row['server_image'])){
                                                                            ?>
                                                                            <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else{
                                                                            ?>
                                                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </a>
                                                                        <h4><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h4>
                                                                        <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                        
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div id="test4" class="col s12 news-block active">
                                                    <div class="newscontent">
                                                        
                                                        <div class="row newsmore">
                                                            <?php
                                                            foreach($get_provincefour_one as $row){
                                                            ?>
                                                            <div class="col l6 s12">
                                                                <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                    <?php
                                                                    if(!empty($row['image'])){
                                                                    ?>
                                                                    <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }else if(!empty($row['server_image'])){
                                                                    ?>
                                                                    <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }else{
                                                                    ?>
                                                                    <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </a>
                                                                <h1><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h1>
                                                                <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                <p><?php echo $row['short_content']; ?></p>
                                                            </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            <div class="col l6 s12">
                                                                <div class="row">
                                                                    <?php
                                                                    foreach($get_provincefour_four_offset_one as $row){
                                                                    ?>
                                                                    <div class="col l12">
                                                                        <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                            <?php
                                                                            if(!empty($row['image'])){
                                                                            ?>
                                                                            <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else if(!empty($row['server_image'])){
                                                                            ?>
                                                                            <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else{
                                                                            ?>
                                                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </a>
                                                                        <h4><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h4>
                                                                        <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                        
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div id="test5" class="col s12 news-block active">
                                                    <div class="newscontent">
                                                        
                                                        <div class="row newsmore">
                                                            <?php
                                                            foreach($get_provincefive_one as $row){
                                                            ?>
                                                            <div class="col l6 s12">
                                                                <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                    <?php
                                                                    if(!empty($row['image'])){
                                                                    ?>
                                                                    <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }else if(!empty($row['server_image'])){
                                                                    ?>
                                                                    <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }else{
                                                                    ?>
                                                                    <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </a>
                                                                <h1><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h1>
                                                                <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                <p><?php echo $row['short_content']; ?></p>
                                                            </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            <div class="col l6 s12">
                                                                <div class="row">
                                                                    <?php
                                                                    foreach($get_provincefive_four_offset_one as $row){
                                                                    ?>
                                                                    <div class="col l12">
                                                                        <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                            <?php
                                                                            if(!empty($row['image'])){
                                                                            ?>
                                                                            <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else if(!empty($row['server_image'])){
                                                                            ?>
                                                                            <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else{
                                                                            ?>
                                                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </a>
                                                                        <h4><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h4>
                                                                        <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                        
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div id="test6" class="col s12 news-block active">
                                                    <div class="newscontent">
                                                        
                                                        <div class="row newsmore">
                                                            <?php
                                                            foreach($get_provincesix_one as $row){
                                                            ?>
                                                            <div class="col l6 s12">
                                                                <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                    <?php
                                                                    if(!empty($row['image'])){
                                                                    ?>
                                                                    <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }else if(!empty($row['server_image'])){
                                                                    ?>
                                                                    <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }else{
                                                                    ?>
                                                                    <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </a>
                                                                <h1><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h1>
                                                                <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                <p><?php echo $row['short_content']; ?></p>
                                                            </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            <div class="col l6 s12">
                                                                <div class="row">
                                                                    <?php
                                                                    foreach($get_provincesix_four_offset_one as $row){
                                                                    ?>
                                                                    <div class="col l12">
                                                                        <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                            <?php
                                                                            if(!empty($row['image'])){
                                                                            ?>
                                                                            <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else if(!empty($row['server_image'])){
                                                                            ?>
                                                                            <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else{
                                                                            ?>
                                                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </a>
                                                                        <h4><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h4>
                                                                        <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                        
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>





                                                <div id="test7" class="col s12 news-block active">
                                                    <div class="newscontent">
                                                        
                                                        <div class="row newsmore">
                                                            <?php
                                                            foreach($get_provinceseven_one as $row){
                                                            ?>
                                                            <div class="col l6 s12">
                                                                <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                    <?php
                                                                    if(!empty($row['image'])){
                                                                    ?>
                                                                    <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }else if(!empty($row['server_image'])){
                                                                    ?>
                                                                    <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }else{
                                                                    ?>
                                                                    <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </a>
                                                                <h1><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h1>
                                                                <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                <p><?php echo $row['short_content']; ?></p>
                                                            </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            <div class="col l6 s12">
                                                                <div class="row">
                                                                    <?php
                                                                    foreach($get_provinceseven_four_offset_one as $row){
                                                                    ?>
                                                                    <div class="col l12">
                                                                        <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                            <?php
                                                                            if(!empty($row['image'])){
                                                                            ?>
                                                                            <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else if(!empty($row['server_image'])){
                                                                            ?>
                                                                            <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else{
                                                                            ?>
                                                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </a>
                                                                        <h4><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h4>
                                                                        <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                        
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>







                                            </div> 
                                         </div>

                                         
                                            <div class="col l3 s12 aside">
                                                <div class="bichar">
                                                    <h6>बिचार &nbsp; <i class="material-icons">timeline</i></h6>
                                                    <ul>
                                                        <?php
                                                                    foreach($get_opinion_four as $row){
                                                                    ?>
                                                                   

                                                                    <li>
                                                            <div class="row">
                                                                <div class="col l8 s8">
                                                                    <h2><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h2>
                                                                    <p><span></span></p>
                                                                </div>



                                                                        <div class="col l4 s4">
                                                                        <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                            <?php
                                                                            if(!empty($row['image'])){
                                                                            ?>
                                                                            <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img circle">
                                                                            <?php
                                                                            }else if(!empty($row['server_image'])){
                                                                            ?>
                                                                            <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img circle">
                                                                            <?php
                                                                            }else{
                                                                            ?>
                                                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img circle">
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </a>
                                                                        
                                                                        
                                                                    
                                                                </div>
                                                            </div>
                                                            </li>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                    
                                                    </ul>                     </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- bazar -->
                                        <div class="container">
                                            <div class="row news-block">
                                                <div class="col l12 s12">
                                                    <h5>बजार  <a href="rajneeti.html"><span class="right">सबै <i class="fas fa-ellipsis-v"></i></span></a></h5>
                                                    <div class="row">


                                                       

                                                            <?php
                                                                    foreach($get_market_one as $row){
                                                                    ?>
                                                                    <div class="col l6">
                                                                        <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                            <?php
                                                                            if(!empty($row['image'])){
                                                                            ?>
                                                                            <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else if(!empty($row['server_image'])){
                                                                            ?>
                                                                            <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else{
                                                                            ?>
                                                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </a>
                                                                        <h1><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h1>
                                                                        <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                         <p><?php echo $row['short_content']; ?></p>
                                                                        
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                    ?>






                                                            <div class="col l6">
                                                                <div class="row col_remove"> 
                                                                    
                                                                     <?php
                                                                    foreach($get_market_two_offset_one as $row){
                                                                    ?>
                                                                    <div class="col l6">
                                                                        <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                            <?php
                                                                            if(!empty($row['image'])){
                                                                            ?>
                                                                            <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else if(!empty($row['server_image'])){
                                                                            ?>
                                                                            <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else{
                                                                            ?>
                                                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </a>
                                                                        <h4><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h4>
                                                                        <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                         <!-- <p><?php echo $row['short_content']; ?></p> -->
                                                                        
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                     


                                                                    
                                                                </div>
                                                                <div class="row col_remove">
                                                                        <?php
                                                                    foreach($get_market_two_offset_three as $row){
                                                                    ?>
                                                                    <div class="col l6">
                                                                        <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                            <?php
                                                                            if(!empty($row['image'])){
                                                                            ?>
                                                                            <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else if(!empty($row['server_image'])){
                                                                            ?>
                                                                            <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else{
                                                                            ?>
                                                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </a>
                                                                        <h4><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h4>
                                                                        <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                         <!-- <p><?php echo $row['short_content']; ?></p> -->
                                                                        
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>                </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div class="row news">
                                                        <div class="col s12 l7 main-news">
                                                            <h5>राजनीति  <a href="index.html"><span class="right">सबै <i class="fas fa-ellipsis-v"></i></span></a></h5>

                                                            
                                                                <?php
                                                                    foreach($get_politics_one as $row){
                                                                    ?>
                                                                    <div class="news_body">
                                                                        <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                            <?php
                                                                            if(!empty($row['image'])){
                                                                            ?>
                                                                            <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else if(!empty($row['server_image'])){
                                                                            ?>
                                                                            <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else{
                                                                            ?>
                                                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </a>
                                                                        <h1><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h1>
                                                                         
                                                                         <!-- <div class="author"><span class="author-img"><img src="templates/asset/sites/img/bullet_32.png" class="img-circle"></span> क्यापिटल नेपाल &nbsp; <i class="far fa-clock"></i> ३ घण्टा अगाडि &nbsp; ० <i class="far fa-comment-dots"></i></div> -->
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                    ?>

                                                        
                                                        </div>
                                                        <div class="col s12 l5 tab">
                                                            <div class="row">
                                                                <div class="col s12">
                                                                    <ul class="tabs">
                                                                        <li class="tab col s6"><a class="active" href="#taja">लोकप्रिय</a></li>
                                                                        <li class="tab col s6"><a href="#sifarish">सिफारिस</a></li>
                                                                        <li class="indicator" style="right: 254px; left: 0px;"></li></ul>
                                                                    </div>
                                                                    <div id="taja" class="col s12 active">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="samaj/11119.html">
                                                                                    <img src="templates/images/article_img/thumb/nepalgatha_thumb.jpg" class="responsive-img">
                                                                                </a>
                                                                                <h4><a href="samaj/11119.html">सिम्तामा एक शिक्षकको मृत्यु</a></h4>
                                                                                <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span>
                                                                            </li>
                                                                            <li>
                                                                                <a href="samaj/11116.html">
                                                                                    <img src="templates/images/article_img/thumb/9748739cc94ae8c2ae9c4d4405635933.jpg" class="responsive-img" alt="जागिर जोगाइदिन अस्थायी शिक्षकको पूर्वराजालाई बिन्तिपत्र">
                                                                                </a>
                                                                                <h4><a href="samaj/11116.html">जागिर जोगाइदिन अस्थायी शिक्षकको पूर्वराजालाई बिन्तिपत्र</a></h4>
                                                                                <span><i class="far fa-clock"></i> ११ घण्टा अगाडि</span>
                                                                            </li>
                                                                            <li>
                                                                                <a href="rajneeti/11115.html">
                                                                                    <img src="templates/images/article_img/thumb/11d7fcd83de43af50cd124d378d2f934.jpg" class="responsive-img" alt="डा. केसीविरुद्ध उत्रेका विजय थापाको पनि अनसन तोडियो">
                                                                                </a>
                                                                                <h4><a href="rajneeti/11115.html">डा. केसीविरुद्ध उत्रेका विजय थापाको पनि अनसन तोडियो</a></h4>
                                                                                <span><i class="far fa-clock"></i> २१ घण्टा अगाडि</span>
                                                                            </li>
                                                                            <li>
                                                                                <a href="rajneeti/11114.html">
                                                                                    <img src="templates/images/article_img/thumb/a011f7c4380c3001eb5b221c1aa35b88.jpg" class="responsive-img" alt="छाउप्रथाबारे जानकारी लिन सांसदको टोली बाजुरा">
                                                                                </a>
                                                                                <h4><a href="rajneeti/11114.html">छाउप्रथाबारे जानकारी लिन सांसदको टोली बाजुरा</a></h4>
                                                                                <span><i class="far fa-clock"></i> २३ घण्टा अगाडि</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div id="sifarish" class="col s12 taja tajanews" style="display: none;">
                                                                        <ul>

                                                            <?php
                                                                    foreach($get_sifarish_four as $row){
                                                                    ?>
                                                                    <li>
                                                                        <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                            <?php
                                                                            if(!empty($row['image'])){
                                                                            ?>
                                                                            <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else if(!empty($row['server_image'])){
                                                                            ?>
                                                                            <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else{
                                                                            ?>
                                                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </a>
                                                                        <h4><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h4>
                                                                        <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span>
                                                                        
                                                                        
                                                                    </li>

                                                                    
                                                                    <?php
                                                                    }
                                                                    ?>

 

 
                                                                        </ul>
                                                                    </div>                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col l12 s12 taja">
                                                                    <div class="row">

                                                                            <?php
                                                                    foreach($get_politics_nine_offset_one as $row){
                                                                    ?>
                                                                     <div class="col l4 s12 taja_news">
                                                                        <a href="<?php echo base_url().'news/'.$row['content_id']; ?>">
                                                                            <?php
                                                                            if(!empty($row['image'])){
                                                                            ?>
                                                                            <img src="<?php echo base_url().$path.$row['image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else if(!empty($row['server_image'])){
                                                                            ?>
                                                                            <img  src="<?php echo $row['server_image'] ?>" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }else{
                                                                            ?>
                                                                            <img src="<?php echo base_url(); ?>share/capital.jpg" title="<?php echo $row['title'] ?>" class="responsive-img">
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                             <h4><a href="<?php echo base_url().'news/'.$row['content_id']; ?>"><?php echo $row['title']; ?></a></h4>
                                                                        </a>
                                                                       
                                                                        <!-- <span><i class="far fa-clock"></i> ३ घण्टा अगाडि</span> -->
                                                                         <!-- <p><?php echo $row['short_content']; ?></p> -->
                                                                        
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                      
                                                                             


 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                        </div>