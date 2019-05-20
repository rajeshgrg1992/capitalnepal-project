

<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a class="navigation_page">Big Offers</a>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <div class="block left-module">
                   
                </div>
                <!-- ./block category  -->
                <!-- block filter -->
               
                <!-- ./block filter  -->
                
                <!-- left silide -->
              <!--   <div class="col-left-slide left-module">
                </div> -->
                <!--./left silde-->
                <!-- SPECIAL -->
                <!-- ./SPECIAL -->
                <!-- TAGS -->
               <!--  <div class="block left-module">
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
                </div> -->
                <!-- ./TAGS -->
                <!-- Testimonials -->
                <div class="block left-module">
                    <p class="title_block">Testimonials</p>
                    <div class="block_content">
                        <ul class="testimonials owl-carousel" data-loop="true" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplay="true" data-autoplayHoverPause = "true" data-items="1">
                            <li>
                                <div class="client-mane">Roverto & Maria</div>
                                <div class="client-avarta">
                                    <img src="eshopping/assets/data/testimonial.jpg" alt="client-avarta">
                                </div>
                                <div class="testimonial">
                                    "Your product needs to improve more. To suit the needs and update your image up"
                                </div>
                            </li>
                            <li>
                                <div class="client-mane">Roverto & Maria</div>
                                <div class="client-avarta">
                                    <img src="eshopping/assets/data/testimonial.jpg" alt="client-avarta">
                                </div>
                                <div class="testimonial">
                                    "Your product needs to improve more. To suit the needs and update your image up"
                                </div>
                            </li>
                            <li>
                                <div class="client-mane">Roverto & Maria</div>
                                <div class="client-avarta">
                                    <img src="eshopping/assets/data/testimonial.jpg" alt="client-avarta">
                                </div>
                                <div class="testimonial">
                                    "Your product needs to improve more. To suit the needs and update your image up"
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ./Testimonials -->
            </div>
            <!-- ./left colunm -->
            <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- category-slider -->
                <div class="category-slider">
                </div>
                <!-- ./category-slider -->
                <!-- subcategories -->
                <!-- sub category listing -->
                <div class="subcategories">
                    <ul>
                        <li class="current-categorie">
                            <a href="#">LATEST DEALS : BIG OFFERS</a>
                        </li>
                    </ul>
                </div>
                <!-- ./subcategories -->
                <!-- view-product-list-->
                <div id="view-product-list" class="view-product-list">
                    <h2 class="page-heading">
                        <span class="page-heading-title"> BIG OFFERS</span>
                    </h2>
                    <ul class="display-product-option">
                        <li class="view-as-grid selected">
                            <span>grid</span>
                        </li>
                        <li class="view-as-list">
                            <span>list</span>
                        </li>
                    </ul>
                    <!-- PRODUCT LIST -->
                    <ul class="row product-list grid">
                    <?php 
                        $folder_path="uploads/product/";
                        $i=0;
                        foreach($latest_deal as $key => $rows)
                        {
                    ?>
                        <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div id="product_end_date_<?php echo $i;?>"  style="display:none;">
                                   <?php echo date_converter_l($rows['product_offer_end_date']);?>                              
                                </div>
                               
                                <div class="countdown">
                                    <span class="day" id="day_<?php echo $i;?>"></span><span class="colon">:</span>
                                    <span class="hour" id="hour_<?php echo $i;?>"></span><span class="colon">:</span>
                                    <span class="minute" id="minute_<?php echo $i;?>"></span><span class="colon">:</span>
                                   <span class="second" id="second_<?php echo $i;?>"></span>
                                </div>
                                <div class="left-block">
                                    <a href="<?php echo site_url('products/products_detail/show/'.$rows['product_slug']); ?>"><?php echo $rows['product_title'] ?>
                                        <img class="img-responsive" alt="product" 
                                                src="<?php echo $folder_path.$rows['product_code']."_1_300x366.".$rows['product_image_1']; ?>" />
                                    </a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="<?php echo site_url('order/order/add_wish_list/'.$rows['product_slug']); ?>"></a>
                                            <a title="Add to compare" class="compare" href="<?php echo site_url('order/order/add_compare_list/'.$rows['product_slug']); ?>"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="<?php echo site_url('order/order/add_to_cart/'.$rows['product_code']); ?>">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="<?php echo site_url('products/products_detail/show/'.$rows['product_slug']); ?>"><?php echo $rows['product_title'] ?></a></h5>
                                    <div class="product-star">
                            <?php
                                $this_product_rating=$this->crud->get_products_rating($rows['product_id']);
                                $avg=round($this_product_rating['average'],2);
                                $star_ratings=$this->crud->get_star_rating($avg);

                            ?>
                                        <?php echo $star_ratings; ?>
                                    </div>
                                    <div class="content_price">
                                        <span class="price product-price"><?php echo $rows['product_price_currency']." ".$rows['product_sell_price'] ?></span>
                                        <?php if($rows['sell_offer'] =='1' || ($rows['product_offer_deal'] =='1') && $rows['product_offer_start_date'] <= date('Y-m-d:H:i:s')){ ?>
                                                <span class="price old-price"><?php echo $rows['product_price_currency']." ".$rows['product_old_sell_price'] ;?></span>
                                        <?php } ?>
                                    </div>
                                    <div class="info-other">
                                        <p>Product Code: <?php echo $rows['product_code']; ?></p>
                                        <p class="availability">Arival: <span><?php echo ($rows['new_arrival']=="1")?"New":"Old"; ?></span></p>
                                         <p class="availability">Availability: 
                                            <span class="label label-<?php echo ($rows['counts'] > 0)?"success":"warning"; ?>">
                                                <?php echo ($rows['counts'] > 0)?"In Stock":"Out Of Stock"; ?>
                                            </span>
                                        </p>
                                        <div class="product-desc">
                                            <?php  ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php 
                            $i++;
                        }
                    ?>
                    </ul>
                    <!-- ./PRODUCT LIST -->
                </div>
               <!-- 
                <div class="sortPagiBar">
                    <div class="bottom-pagination">
                        <nav>
                          <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">Next &raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                    <div class="show-product-item">
                        <select name="">
                            <option value="">Show 18</option>
                            <option value="">Show 20</option>
                            <option value="">Show 50</option>
                            <option value="">Show 100</option>
                        </select>
                    </div>
                    <div class="sort-product">
                        <select>
                            <option value="">Product Name</option>
                            <option value="">Price</option>
                        </select>
                        <div class="sort-product-icon">
                            <i class="fa fa-sort-alpha-asc"></i>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>

<script>
<?php
    $i=0;
    foreach($latest_deal as $row)
    { 
?>
    var <?php echo "end_date".$i; ?>=  document.getElementById("<?php echo "product_end_date_".$i; ?>" );
        var <?php echo "countDownDate".$i; ?> = new Date(<?php echo "end_date".$i; ?>.innerHTML).getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

                    // Get todays date and time
                    var now = new Date().getTime();
                    
                    // Find the distance between now and the count down date
                    var distance = <?php echo "countDownDate".$i; ?> - now;
                    
                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                    // Output the result in an element with id="demo"
                    document.getElementById("<?php echo "day_".$i ;?>" ).innerHTML = days;
                     document.getElementById("<?php echo "hour_".$i ;?>" ).innerHTML = hours;
                     document.getElementById("<?php echo "minute_".$i ;?>" ).innerHTML = minutes ;
                     document.getElementById("<?php echo "second_".$i ;?>" ).innerHTML = seconds ;
                      // document.getElementById("count_down_latest_deal").innerHTML = hours + "/"
                      // + minutes + "/" + seconds;
                    
                    // If the count down is over, write some text 
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("<?php echo "count_down_latest_deal_".$i ;?> ").innerHTML = "EXPIRED";
                    }
                }, 1000);
 
<?php
        $i++;
    }
?>  
        

       
    
       
</script>