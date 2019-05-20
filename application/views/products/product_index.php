
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="<?php echo site_url('products/products_detail/category_products/'.$product_category['category_slug']); ?>" title="Return to Category"><?php echo $product_category['category_title'];?></a>
            <span class="navigation-pipe">&nbsp;</span>
            <?php 
                if(isset($product_sub_category) && !empty($product_sub_category))
                {
            ?>
            <a href="<?php echo site_url('products/products_detail/sub_category_products/'.$product_sub_category['category_slug']); ?>" title="Return to Sub Category"><?php echo $product_sub_category['category_title'];?></a>
            <span class="navigation-pipe">&nbsp;</span>
            <?php
                }
            ?>
            <span class="navigation_page"><?php echo $product_ind_detail['product_title'];?></span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <?php if (isset($all_sub_cat) && !empty($all_sub_cat)): ?>
                    <div class="block left-module">
                        <p class="title_block">CATEGORIES</p>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered layered-category">
                                <div class="layered-content">
                                    <ul class="tree-menu">
                                    <?php
                                        foreach($all_sub_cat as $key => $rows)
                                        {
                                    ?>
                                        <li  <?php if($rows['category_id']==$product_sub_category['category_id']){echo "class=\"active\" ";}  else{echo "";} ?> ><span></span><a href="<?php echo site_url('products/products_detail/sub_category_products/'.$rows['category_slug']); ?>"><?php echo $rows['category_title']; ?></a></li>
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
                <!-- block best sellers -->
                <?php if (isset($product_best_sellers) && !empty($product_best_sellers)): ?>
                <div class="block left-module">
                    <p class="title_block">BEST SELLERS</p>
                    <div class="block_content">
                        <?php 
                            $folder_path="uploads/product/";
                            $product_best_sellers_first=array_slice($product_best_sellers,0,3);
                            $product_best_sellers_second=array_slice($product_best_sellers,3,3);
                        ?>
                        <div class="<?php echo(count($product_best_sellers_second) > 0)?"owl-carousel owl-best-sell":""; ?>" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplay="true" data-autoplayHoverPause = "true" data-items="1">
                        
                        <?php
                            if(count($product_best_sellers_first) > 0)
                            {
                        ?>
                         <ul class="products-block best-sell">
                        <?php
                            foreach ($product_best_sellers_first as $key => $rows) 
                            {
                                $best_products=$this->crud->get_detail($rows['product_id'],"product_id","products");
                        ?>
                                 <li>
                                    <div class="products-block-left">
                                        <a href="<?php echo  $folder_path.$best_products['product_code']."_1.".$best_products['product_image_1']; ?>">
                                            <img src="<?php echo  $folder_path.$best_products['product_code']."_1.".$best_products['product_image_1']; ?>" alt="SPECIAL PRODUCTS">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="<?php echo site_url('products/products_detail/show/'.$best_products['product_slug']);?>">
                                                <?php echo  $best_products['product_title']; ?>
                                                    
                                            </a>
                                        </p>
                                        <p class="product-price"><?php echo  $best_products['product_sell_price']; ?></p>
                                        <p class="product-star">
                            <?php
                                $this_product_rating=$this->crud->get_products_rating($best_products['product_id']);
                                $avg=round($this_product_rating['average'],2);
                                $star_ratings=$this->crud->get_star_rating($avg);

                            ?>
                                        <?php echo $star_ratings; ?>
                                        </p>
                                    </div>
                                </li>
                        <?php
                                }  
                        ?>
                        </ul>
                        <?php    
                            }
                        ?>
                        <?php
                            if(count($product_best_sellers_second) > 0)
                            {
                        ?>
                            
                            <ul class="products-block best-sell">
                                <?php
                                
                            foreach ($product_best_sellers_second as $key => $rows) {
                                $best_products=$this->crud->get_detail($rows['product_id'],"product_id","products");
                        ?>
                                 <li>
                                    <div class="products-block-left">
                                        <a href="<?php echo  $folder_path.$best_products['product_code']."_1.".$best_products['product_image_1']; ?>">
                                            <img src="<?php echo  $folder_path.$best_products['product_code']."_1.".$best_products['product_image_1']; ?>" alt="SPECIAL PRODUCTS">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="<?php echo site_url('products/products_detail/show/'.$best_products['product_slug']);?>">
                                                <?php echo  $best_products['product_title']; ?>
                                                    
                                            </a>
                                        </p>
                                        <p class="product-price"><?php echo  $best_products['product_sell_price']; ?></p>
                                        <p class="product-star">
                             <?php
                                $this_product_rating=$this->crud->get_products_rating($best_products['product_id']);
                                $avg=round($this_product_rating['average'],2);
                                $star_ratings=$this->crud->get_star_rating($avg);

                            ?>
                                        <?php echo $star_ratings; ?>
                                        </p>
                                    </div>
                                </li>
                        <?php
                                } 
                        ?>
                         </ul>
                         <?php  
                            }
                        ?>
                        </div>
                    </div>
                </div>
            <?php endif ?>
                <!-- ./block best sellers  -->
                  <div class="col-left-slide left-module">
                    
<?php 
                    
                    $detail_banner_side = $this->crud->get_where("igc_advertisement",array('status'=>1,'delete_status'=>0,'ad_for'=>"detail_page",'ad_placement'=>'banner1','ad_sub_placement'=>'side_banner'));
                    $ads_path="uploads/advertisement/";
                    ?>

                    <ul class="<?php echo(count($detail_banner_side)>1)?"owl-carousel owl-style2":""; ?>" data-loop="true" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                         <?php 
                      foreach($detail_banner_side as $key => $rows)
                            {
                ?>
                                <li>
                                    <a href="<?php echo $rows['ad_url'];?>">
                                        <img src="<?php echo  $ads_path."ban_side_".$rows['ad_image'];?>" alt="<?php echo $rows['ad_title'];?>">
                                    </a>
                                </li>
                <?php
                             }
                 ?>
                        <!-- <li><a href="#"><img src="eshopping/assets/data/slide-left3.png" alt="slide-left"></a></li> -->
                    </ul>
                </div>
                <!--./left silde-->
                <!-- block best sellers -->
             <?php if (isset($all_related_sell_offers) && !empty($all_related_sell_offers)): ?>
                <div class="block left-module">
                    <p class="title_block">ON SALE</p>
                    <div class="block_content product-onsale">
                        <ul class="product-list <?php echo(count($all_related_sell_offers) > 1)?"owl-carousel":""; ?>" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                <?php
                      $folder_path="uploads/product/"; 
                    foreach ($all_related_sell_offers as $key => $rows) {
                ?>
                              <li>
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="<?php echo site_url('products/products_detail/show/'.$rows['product_slug']); ?>">
                                            <img class="img-responsive" alt="product" src="<?php echo $folder_path.$rows['product_code']."_1_300x366.".$rows['product_image_1']; ?>" />
                                        </a>
                                        <div class="price-percent-reduction2">-<?php echo $rows['sell_offer_percentage'];?>% OFF</div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="<?php echo site_url('products/products_detail/show/'.$rows['product_slug']); ?>"><?php echo $rows['product_title'];?></a></h5>
                                        <div class="product-star">
                            <?php
                                $this_product_rating=$this->crud->get_products_rating($rows['product_id']);
                                $avg=round($this_product_rating['average'],2);
                                $star_ratings=$this->crud->get_star_rating($avg);

                            ?>
                                        <?php echo $star_ratings; ?>
                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price"><?php echo $rows['product_price_currency']." ".$rows['product_sell_price'];?></span>
                                           <?php  if($rows['sell_offer'] == '1' || ($rows['product_offer_deal'] =='1' && $rows['product_offer_start_date'] >  date('Y-m-d h:i:s'))){ ?>
                                            <span class="price old-price"><?php echo $rows['product_price_currency']." ".$rows['product_old_sell_price'] ;?></span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="product-bottom">
                                        <a class="btn-add-cart" title="Add to Cart" href="<?php echo site_url('order/order/add_to_cart/'.$rows['product_code']); ?>">Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                <?php                       
                    }
                ?>
                        </ul>
                    </div>
                </div>
            <?php endif ?>
                <!-- ./block best sellers  -->
                <!-- left silide -->
                <div class="col-left-slide left-module">
                    <div class="banner-opacity">
                        <a href="#"><img src="eshopping/assets/data/ads-banner.jpg" alt="ads-banner"></a>
                    </div>
                </div>
                <!--./left silde-->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- Product -->
                    <div id="product">
                        <div class="primary-box row">
                            <div class="pb-left-column col-xs-12 col-sm-6">
                                <!-- product-imge-->
                                <div class="product-image">
                                    <div class="product-full">
                                        <?php $folder_path="uploads/product/"; ?>
                                        <img id="product-zoom" 
                                        src='<?php echo $folder_path.$product_ind_detail['product_code']."_1_420x512.".$product_ind_detail['product_image_1']; ?>' 
                                        data-zoom-image="<?php echo $folder_path.$product_ind_detail['product_code']."_1_850x1036.".$product_ind_detail['product_image_1']; ?>"/>
                                    </div>
                                    <div class="product-img-thumb" id="gallery_01">
                                        <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false" data-margin="20" data-loop="false">
                                            <?php
                                                $i=1;
                                                while($i<5 and $product_ind_detail['product_image_'.$i.''] != "")
                                                {
                                            ?>
                                                    <li>
                                                        <a href="#" 
                                                            data-image="<?php echo $folder_path.$product_ind_detail['product_code']."_".$i."_420x512.".$product_ind_detail['product_image_'.$i]; ?>"
                                                            data-zoom-image="<?php echo $folder_path.$product_ind_detail['product_code']."_".$i."_850x1036.".$product_ind_detail['product_image_'.$i]; ?>"> 
                                                            <img id="product-zoom"  
                                                            src="<?php echo $folder_path.$product_ind_detail['product_code']."_".$i."_100x122.".$product_ind_detail['product_image_'.$i]; ?>" /> 
                                                        </a>
                                                    </li>
                                            <?php
                                                    $i++;
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-imge-->
                            </div>
                            <div class="pb-right-column col-xs-12 col-sm-6">
                                <h1 class="product-name"><?php echo $product_ind_detail['product_title']; ?></h1>
                                <div class="product-comments">
                                    <div class="product-star">
                            <?php
                                $avg=round($product_rating['average'],2);
                                $star_ratings=$this->crud->get_star_rating($avg);

                            ?>
                                        <?php echo $star_ratings; ?>
                                       
                                    </div>
                                    <div class="comments-advices">
                                        <?php echo $avg; ?>
                                        <a href="#">Based  on <?php echo $product_rating['total'] ?> ratings</a>
                                        <a href="<?php echo site_url('products/products_detail/product_review/'.$product_ind_detail['product_slug']); ?>"><i class="fa fa-pencil"></i> write a review</a>
                                    </div>
                                </div>
                                <div class="product-price-group">
                                    <span class="price"><?php echo $product_ind_detail['product_price_currency']." ".$product_ind_detail['product_sell_price']; ?></span>
                                    <?php 
                                            if($product_ind_detail['sell_offer'] =='1' or ($product_ind_detail['product_offer_deal'] =="1" and date('Y-m-d h:i:s') > $product_ind_detail['product_offer_start_date']))
                                            { 
                                        ?>
                                        <span class="price old-price">
                                            <?php echo $product_ind_detail['product_price_currency']." ".$product_ind_detail['product_old_sell_price'] ;?>
                                        </span>
                                        <span class="discount">
                                            <?php echo $product_ind_detail['sell_offer_percentage']." %"; ?>
                                        </span>

                                    <?php } ?>
            
                                </div>
                                <div class="info-orther">
                                    <p>Product Code: <?php echo $product_ind_detail['product_code']; ?></p>
                                    <p>Availability: 
                                        <span class="label label-<?php echo ($product_ind_detail['counts'] >0)?"success":"danger"; ?>">
                                            <?php echo ($product_ind_detail['counts'] >0)?"In Stock":"Out Of Stuck"; ?>
                                                
                                        </span>
                                    </p>
                                    <p>Arrival: <?php echo ($product_ind_detail['new_arrival']=='1')?"New":"Old"; ?></p>
                                </div>
                                <div class="product-desc">
                                   <?php echo $product_ind_detail['product_short_detail']; ?>
                                </div>
                            <form action="<?php echo site_url('order/order/add_to_cart/'.$product_ind_detail['product_code']); ?>" method="post">
                                <div class="form-option">
                                    <p class="form-option-title">Available Options:</p>
                                    <div class="attributes">
                                        <div class="attribute-label">Color:</div>
                                        <div class="attribute-list">
                                             <ul class="list-color">
                                        <?php 
                                            if(isset($product_ind_detail['product_color']) && $product_ind_detail['product_color'] !="")
                                            {
                                                $colors=explode(',',$product_ind_detail['product_color']);
                                                foreach($colors as $key => $color)
                                                {
                                        ?>
                                                <li style="background:<?php echo $color;?>;"><a><?php echo $color;?></a></li>
                                        <?php
                                                }
                                            }
                                        ?>
                                            </ul>
                                        </div>
                                    </div>
                                          <?php 
                                if(isset($product_ind_detail['product_color']) && $product_ind_detail['product_color'] !="")
                                {
                            ?>
                                    <div class="attributes">
                                        <div class="attribute-label">Color:</div>
                                        <div class="attribute-list">
                                            <select id="prod_color" name="prod_color">
                                                <?php 
                                                    $colors=explode(',',$product_ind_detail['product_color']);
                                                    foreach($colors as $key => $color)
                                                    {
                                                ?>
                                                        <option value="<?php echo $color;?>"><?php echo $color;?></option>          
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        
                                    </div>
                            <?php
                                }
                            ?>
                                    <div class="attributes">
                                        <div class="attribute-label">Qty:</div>
                                        <div class="attribute-list product-qty">
                                            <div>
                                                <input id="option-product-qty" name="qty" type="number" value="1" min="0" max="<?php echo  $product_ind_detail['counts']; ?>">
                                            </div>
                                        </div>
                                    </div>
                            <?php 
                                if(isset($product_ind_detail['product_size']) && $product_ind_detail['product_size'] !="")
                                {
                            ?>
                                    <div class="attributes">
                                        <div class="attribute-label">Size:</div>
                                        <div class="attribute-list">
                                            <select id="prod_size" name="prod_size">
                                                <?php 
                                                    $sizes=explode(',',$product_ind_detail['product_size']);
                                                    foreach($sizes as $key => $size)
                                                    {
                                                ?>
                                                        <option value="<?php echo $size;?>"><?php echo $size;?></option>          
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                            <a style="cursor: pointer;margin-left: 30px;color: #FF5C85" class="fancybox"  data-target="#myModal_sizechart" data-toggle="modal">Size Chart</a>
                                            <!-- ============================ -->
                                           <!-- modal for info -->
                                                            <div class="modal fade" id="myModal_sizechart">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                            <h4 class="modal-title text-center">Size Chart Details</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="box">
                                                                                <table width="100%" style="text-align: center;border: 1px;">
                                                                                    <thead>
                                                                                        <tr >
                                                                                            <th style="text-align: center">SN</th>
                                                                                            <th style="text-align: center">Sizes</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                <?php
                                                                                    $sn=1;
                                                                                    foreach($sizes as $key => $size)
                                                                                    {
                                                                                ?>
                                                                                        <tr>
                                                                                            <td><?php echo $sn; ?></td>
                                                                                            <td><?php echo $size; ?></td>
                                                                                        </tr>
                                                                                <?php
                                                                                        $sn++;
                                                                                    }
                                                                                ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                            <!-- /.modal-content -->
                                                                </div>
                                                        <!-- /.modal-dialog -->
                                                            </div>
                                                <!-- =========== -->                                        
                                        </div>
                                    </div>
                            <?php
                                }
                            ?>
                                </div>
                                <div class="form-action">
                                    <div class="button-group">
                                        <button type="submit" class="btn-add-cart">Add to cart</button>
                                    </div>
                                    <div class="button-group">
                                        <a class="wishlist" href="<?php echo site_url('order/order/add_wish_list/'.$product_ind_detail['product_slug']); ?>"><i class="fa fa-heart-o"></i>
                                        <br>Wishlist</a>
                                        <a class="compare" href="<?php echo site_url('order/order/add_compare_list/'.$product_ind_detail['product_slug']); ?>""><i class="fa fa-signal"></i>
                                        <br>        
                                        Compare</a>
                                    </div>
                                </div>
                        </form>
                                <div class="form-share">
                                    <div class="sendtofriend-print">
                                        <a href="javascript:print();"><i class="fa fa-print"></i> Print</a>
                                        <a href="#"><i class="fa fa-envelope-o fa-fw"></i>Send to a friend</a>
                                    </div>
                                    <div class="network-share">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab product -->
                        <div class="product-tab">
                            <ul class="nav-tab">
                                <li class="active">
                                    <a aria-expanded="false" data-toggle="tab" href="#product-detail">Product Details</a>
                                </li>
                                <li>
                                    <a aria-expanded="true" data-toggle="tab" href="#information">information</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews">reviews</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#guarantees">guarantees</a>
                                </li>
                            </ul>
                            <div class="tab-container">
                                <div id="product-detail" class="tab-panel active">
                                    <?php echo $product_ind_detail['product_full_detail']; ?>
                                </div>
                                <div id="information" class="tab-panel"><!--  -->
                                    <?php echo $product_ind_detail['product_features']; ?>
                                </div>
                                <div id="reviews" class="tab-panel">
                                    <div class="product-comments-block-tab">
                <?php 
                    $rating=array_slice($this->crud->get_where("products_rating",array("delete_status"=>'0','product_id'=>$product_ind_detail['product_id'])),0,3);
                ?>
                                  <?php foreach ($rating as $key => $rows): 
                                            $avg=$rows['product_rating'];
                                  ?>
                                         <div class="comment row">
                                            <div class="col-sm-3 author">
                                                <div class="grade">
                                                    <span>Grade</span>
                                                    <span class="reviewRating">
                                                        <?php if ($avg==0.00): ?>
                                                                    <i class="fa fa-star-o"></i>
                                                        <?php else : ?>    
                                                                    <i class="fa fa-star"></i>  
                                                        <?php endif ?>
                                                        <?php if ($avg < 2): ?>
                                                                    <i class="fa fa-star-o"></i>
                                                        <?php else: ?> 
                                                                     <i class="fa fa-star"></i> 
                                                        <?php endif ?>
                                                        <?php if ($avg < 3): ?>
                                                                    <i class="fa fa-star-o"></i>
                                                        <?php else: ?> 
                                                                     <i class="fa fa-star"></i> 
                                                        <?php endif ?>
                                                        <?php if ($avg < 4): ?>
                                                                    <i class="fa fa-star-o"></i>
                                                        <?php else: ?> 
                                                                     <i class="fa fa-star"></i> 
                                                        <?php endif ?>
                                                        <?php if ($avg == 5): ?>
                                                                    <i class="fa fa-star"></i>
                                                        <?php else: ?> 
                                                                     <i class="fa fa-star-0"></i> 
                                                        <?php endif ?>
                                                    </span>
                                                </div>
                                                <div class="info-author">
                                                    <!-- <span><strong>Jame</strong></span> -->
                                                    <em><?php echo date_convert($rows['created']);?></em>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 commnet-dettail">
                                               <?php echo $rows['product_review']; ?>
                                            </div>
                                        </div>
                                    <?php endforeach ?>  
                                       
                                        <p>
                                            <a class="btn-comment" href="<?php echo site_url('products/products_detail/product_review/'.$product_ind_detail['product_slug']); ?>">Write your review !</a>
                                        </p>
                                    </div>
                                    
                                </div>
                                
                                <div id="guarantees" class="tab-panel">
                                    <?php echo $product_ind_detail['product_return_policy']; ?>
                                </div>
                            </div>
                        </div>
                        <!-- ./tab product -->
                        <!-- box product -->
                        
                        <div class="page-product-box">
                            <h3 class="heading">Related Products</h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                            <?php 
                               
                                foreach($all_related_products as $key => $rows)
                                {
                                    if($rows['product_id'] != $product_ind_detail['product_id'])
                                    {
                            ?>
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="<?php echo site_url('products/products_detail/show/'.$rows['product_slug']); ?>">
                                                <img class="img-responsive" alt="product" src="<?php echo $folder_path.$rows['product_code']."_1_300x366.".$rows['product_image_1'] ?>" />
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
                                            <h5 class="product-name"><a href="#"><?php echo $rows['product_title']; ?></a></h5>
                                            <div class="product-star">
                            <?php
                                $this_product_rating=$this->crud->get_products_rating($rows['product_id']);
                                $avg=round($this_product_rating['average'],2);
                                $star_ratings=$this->crud->get_star_rating($avg);

                            ?>
                                        <?php echo $star_ratings; ?>
                                       
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price"><?php echo $rows['product_price_currency']." ".$rows['product_sell_price']; ?></span>
                                                <?php  if($rows['sell_offer'] == '1' || ($rows['product_offer_deal'] =='1' && $rows['product_offer_start_date'] >  date('Y-m-d h:i:s'))){ ?>
                                                <span class="price old-price"><?php echo $rows['product_price_currency']." ".$rows['product_old_sell_price'] ;?></span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php
                                    }
                                }
                            ?>
                            </ul>
                        </div>
                        <!-- ./box product -->
                       <!--   box product -->
                     <!--   <div class="page-product-box">
                            <h3 class="heading">You might also like</h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="eshopping/assets/data/p97.jpg" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#add">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="eshopping/assets/data/p34.jpg" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#add">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="eshopping/assets/data/p36.jpg" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#add">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="eshopping/assets/data/p36.jpg" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#add">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                        <!-- ./box product -->
                    </div>
                <!-- Product -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
