<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a class="navigation_page"><?php echo $product_category['category_title'];?></a>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
    <?php if (isset($all_sub_cat) && !empty($all_sub_cat)): ?>
                 <div class="block left-module">
                    <p class="title_block">Product types</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
                                    <?php
                                        foreach($all_sub_cat as $key => $rows)
                                        {
                                    ?>
                                        <li><span></span><a href="<?php echo site_url('products/products_detail/sub_category_products/'.$rows['category_slug']); ?>"><?php echo $rows['category_title']; ?></a></li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
    <?php endif ?>
                <!-- ./block category  -->
                <!-- block filter -->
              <!-- ./block filter  -->
                
                <!-- left silide -->
                <div class="col-left-slide left-module">
                    
<?php 
                    
                    $category_banner_side = $this->crud->get_where("igc_advertisement",array('status'=>1,'delete_status'=>0,'ad_for'=>"categories",'ad_sub_for'=>$product_category['category_id'],'ad_placement'=>'banner','ad_sub_placement'=>'side_banner'));
                    $ads_path="uploads/advertisement/";
                    ?>

                    <ul class="<?php echo(count($category_banner_side)>1)?"owl-carousel owl-style2":""; ?>" data-loop="true" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                         <?php 
                      foreach($category_banner_side as $key => $rows)
                            {
                ?>
                                <li>
                                    <a href="<?=$rows['ad_url'];?>">
                                        <img src="<?= $ads_path."ban_side_".$rows['ad_image'];?>" alt="<?=$rows['ad_title'];?>">
                                    </a>
                                </li>
                <?php
                             }
                 ?>
                        <!-- <li><a href="#"><img src="eshopping/assets/data/slide-left3.png" alt="slide-left"></a></li> -->
                    </ul>
                </div>
                <!--./left silde-->
                <!-- SPECIAL -->
               <!-- SPECIAL -->
        <?php 
            $sp_product=$this->crud->get_where_order_by_limit('products',array('delete_status'=>'0','status'=>1,'admin_status'=>1,'sp_product_status'=>'1','product_category_id'=>$product_category['category_id']),"added_date","DESC",1);
            $folder_path="uploads/product/";
            if(count($sp_product) > 0)
            {
             $sp_product=$sp_product[0];
        ?>
               <div class="block left-module">
                    <p class="title_block">SPECIAL PRODUCTS</p>
                    <div class="block_content">
                        <ul class="products-block">
                            <li>
                                <div class="products-block-left">
                                    <a href="<?php echo $folder_path.$sp_product['product_code']."_1_300x366.".$sp_product['product_image_1']; ?>">
                                        <img src="<?php echo $folder_path.$sp_product['product_code']."_1_300x366.".$sp_product['product_image_1']; ?>" alt="SPECIAL PRODUCTS">
                                    </a>
                                </div>
                                <div class="products-block-right">
                                    <p class="product-name">
                                        <a href="<?php echo site_url('products/products_detail/show/'.$sp_product['product_slug']); ?>">
                                            <?php echo $sp_product['product_title'] ?>
                                       </a>
                                    </p>
                                    <p class="product-price"><?php echo $sp_product['product_price_currency']." ".$sp_product['product_sell_price']; ?></p>
                                    <p class="product-star">
                                            <?php
                                                $this_product_rating=$this->crud->get_products_rating($sp_product['product_id']);
                                                $avg=round($this_product_rating['average'],2);
                                                $star_ratings=$this->crud->get_star_rating($avg);
                                            ?>
                                            <?php echo $star_ratings; ?>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="products-block">
                            <div class="products-block-bottom">
                                <a class="link-all" href="#">All Products</a>
                            </div>
                        </div>
                    </div>
                </div> 
        <?php
            }
        ?>
                
                <!-- ./SPECIAL -->
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


            <?php 
                $ads_path="uploads/advertisement/";
                $category_banner_top=$this->crud->get_where("igc_advertisement",array('status'=>1,'delete_status'=>0,'ad_for'=>"categories",'ad_sub_for'=>$product_category['category_id'],'ad_placement'=>'banner','ad_sub_placement'=>'top_banner'));
            ?>
                    <ul class="<?php echo(count($category_banner_top)>1)?"owl-carousel owl-style2":""; ?>" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1">
                        <?php
                            foreach($category_banner_top as $key => $rows)
                            {
                        ?>
                                <li>
                                    <img src="<?= $ads_path."ban_top_".$rows['ad_image'];?>" alt="<?=$rows['ad_title'];?>">
                                </li>
                        <?php
                            }
                        ?>
                        
                    </ul>
                </div>
                <!-- ./category-slider -->
                <!-- subcategories -->
                <!-- sub category listing -->
                <div class="subcategories">
                    <ul>
                        <li class="current-categorie">
                            <a href="<?php echo site_url('products/products_detail/category_products/'.$product_category['category_slug']);  ?>"><?php echo $product_category['category_title']; ?></a>
                        </li>
                    <?php
                         if (isset($all_sub_cat) && !empty($all_sub_cat)) {
                                foreach($all_sub_cat as $key => $rows)
                                {
                    ?>
                                    <li><span></span
                                        ><a href="<?php echo site_url('products/products_detail/sub_category_products/'.$rows['category_slug']);  ?>">
                                        <?php echo $rows['category_title']; ?>    
                                        </a>
                                    </li>
                            <?php
                                }
                         }
                    ?>
                    </ul>
                </div>
                <!-- ./subcategories -->
                <!-- view-product-list-->
                <div id="view-product-list" class="view-product-list">
                    <h2 class="page-heading">
                        <span class="page-heading-title"><?php echo $product_category['category_title']; ?></span>
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
                        foreach($all_cat_product_list as $key => $rows)
                        {
                    ?>
                        <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
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
                                        <?php  if($rows['sell_offer'] == '1' || ($rows['product_offer_deal'] =='1' && $rows['product_offer_start_date'] >  date('Y-m-d h:i:s'))){ ?>
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
                        }
                    ?>
                   
                    </ul>
                    <!-- ./PRODUCT LIST -->
                </div>
               
                <!-- <div class="sortPagiBar">
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
    // $(document).ready(function(){
    //      $("#p1").click(function(){
    //         $.post('<?php //echo site_url('products/products_detail/post_action');?>',{range: $("#p1").val()}, function(data) {
    //             $('#all_cat_products').html(data.sub_cat);
    //         });
    //      });
        // $("#p1").click(function(){       
        //      $.ajax({
        //          type: "POST",
        //          url: base_url()+'products/products_detail/post_action', 
        //          data: {range: $("#p1").val()},
        //          dataType: "text",  
        //          cache:false,
        //          success: 
        //               function(data){
        //                 $('#all_cat_products').html(data.sub_cat);
        //               }
        //           });// you have missed this bracket
        //      return false;
        // });
 //   });
</script>