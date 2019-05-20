
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="#" title="Return to Home">My account</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">My wishlist</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block best sellers -->
        <?php if (isset($new_product_lists) && !empty($new_product_lists)): ?>
            <div class="block left-module">
                    <p class="title_block">New products</p>
                    <div class="block_content">
                        <ul class="products-block best-sell">
                <?php 
                            $folder_path="uploads/product/";
                            foreach ($new_product_lists as $value) {
                ?>
                                <li>
                                    <div class="products-block-left">
                                        <a href="<?= $folder_path.$value['product_code']."_1.".$value['product_image_1']; ?>">
                                            <img src="<?= $folder_path.$value['product_code']."_1.".$value['product_image_1']; ?>" alt="SPECIAL PRODUCTS">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="<?= site_url('products/products_detail/show/'.$value['product_slug']); ?>"><?= $value['product_title']; ?></a>
                                        </p>
                                        <p class="product-price"><?= $value['product_price_currency']." ".$value['product_sell_price']; ?></p>
                                        <p class="product-star">
                            <?php
                                $this_product_rating=$this->crud->get_products_rating($value['product_id']);
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
                    </div>
                </div>
        <?php endif ?>
                
                <!-- ./block best sellers  -->
                
                 <div class="col-left-slide left-module">
                    
<?php 
                    
                    $wishlist_banner_side = $this->crud->get_where("igc_advertisement",array('status'=>1,'delete_status'=>0,'ad_for'=>"wishlist",'ad_placement'=>'banner1','ad_sub_placement'=>'side_banner'));
                    $ads_path="uploads/advertisement/";
                    ?>

                    <ul class="<?php echo(count($wishlist_banner_side)>1)?"owl-carousel owl-style2":""; ?>" data-loop="true" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                         <?php 
                      foreach($wishlist_banner_side as $key => $rows)
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
                <!--./left silde-->
                <!-- block best sellers -->
         <?php if (isset($sell_offer) && !empty($sell_offer)): ?>
                <div class="block left-module">
                    <p class="title_block">ON SALE</p>
                    <div class="block_content product-onsale">
                        <ul class="<?php echo(count($sell_offer)>1)?"product-list owl-carousel":""; ?>" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                    <?php 
                        $folder_path="uploads/product/";
                        foreach ($sell_offer as $key => $value) {
                     ?>
                       <li>
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="<?= $folder_path.$value['product_code']."_1.".$value['product_image_1']; ?>">
                                            <img class="img-responsive" alt="product" src="<?= $folder_path.$value['product_code']."_1_300x366.".$value['product_image_1']; ?>" />
                                        </a>
                                        <div class="price-percent-reduction2">-<?=$value['sell_offer_percentage'];?>% OFF</div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="<?= site_url('products/products_detail/show/'.$value['product_slug']);?>"><?= $value['product_title']; ?></a></h5>
                                        <div class="product-star">
                            <?php
                                $this_product_rating=$this->crud->get_products_rating($value['product_id']);
                                $avg=round($this_product_rating['average'],2);
                                $star_ratings=$this->crud->get_star_rating($avg);

                            ?>
                                        <?php echo $star_ratings; ?>
                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price"><?= $value['product_price_currency']." ".$value['product_sell_price']; ?></span>
                                            <span class="price old-price"><?= $value['product_price_currency']." ".$value['product_old_sell_price']; ?></span>
                                        </div>
                                    </div>
                                    <div class="product-bottom">
                                        <a class="btn-add-cart" title="Add to Cart" href="<?=site_url('order/order/add_to_cart/'.$value['product_code']);?>">Add to Cart</a>
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
                <div class="block left-module">
                    <p class="title_block">SPECIAL PRODUCTS</p>
                    <div class="block_content">
                        <ul class="products-block">
                            <li>
                                <div class="products-block-left">
                                    <a href="#">
                                        <img src="eshopping/assets/data/product-100x122.jpg" alt="SPECIAL PRODUCTS">
                                    </a>
                                </div>
                                <div class="products-block-right">
                                    <p class="product-name">
                                        <a href="#">Woman Within Plus Size Flared</a>
                                    </p>
                                    <p class="product-price">$38,95</p>
                                    <p class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
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
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
               <!-- page heading-->
                <h2 class="page-heading">
                    <span class="page-heading-title2">My wishlist</span>
                </h2>
                <!-- ../page heading-->
                <div class="box-border box-wishlist">
                    <h2>New wishlist</h2>
                    <label for="wishlist-name">Name</label>
                    <input type="text" class="form-control input">
                    <button class="button">Save</button>
                </div>
                <table class="table table-bordered table-wishlist">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Created</th>
                            <th>Derect link</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php 
                            $folder_path="uploads/product/";
                            if($this->session->userdata('wish_list') == true)
                            {
                                foreach($this->session->userdata['wish_list'] as $key => $slug)
                                {
                                $this_product=$this->crud->get_detail($key,"product_slug","products");
                      ?>   
                                <tr>
                                    <td><?php echo $this_product['product_title']; ?></td>
                                    <td><?php echo $slug['qty']; ?></td>
                                    <td><?php echo $slug['created']; ?></td>
                                    <td>
                                        <a href="<?php  echo site_url('products/products_detail/show/'.$this_product['product_slug']); ?>">View</a>
                                    </td>
                                    <td class="text-center"><a href="<?php  echo site_url('order/order/remove_wish_list/'.$key); ?>"><i class="fa fa-close"></i></a></td>
                                </tr>
                    <?php
                            }
                        }
                    ?>      
                    </tbody>
                </table>
                <ul class="row list-wishlist">
                    <?php 
                            $folder_path="uploads/product/";
                            if($this->session->userdata('wish_list') == true)
                            {
                            foreach($this->session->userdata['wish_list'] as $key => $slug)
                            {
                                $this_product=$this->crud->get_detail($key,"product_slug","products");
                    ?>
                    <li class="col-sm-3">
                        <div class="product-img">
                            <a href="<?php echo $folder_path.$this_product['product_code']."_1.".$this_product['product_image_1']; ?>">
                                <img src="<?php echo $folder_path.$this_product['product_code']."_1_300x366.".$this_product['product_image_1']; ?>" alt="Product"></a>
                        </div>
                        <h5 class="product-name">
                            <a href="<?php echo site_url('products/products_detail/show/'.$key); ?>"><?php echo $this_product['product_title']; ?></a>
                        </h5>
                <form action="order/order/update_wish_list/<?php echo $key;?>" method="post">
                        <div class="qty">
                            <label>Quantity</label>
                            <input value="<?php echo $slug['qty']; ?>" type="number" name="qty" class="form-control input input-sm">
                        </div>
                        <div class="button-action">
                            <button class="button button-sm">Save</button>
                            <a href="<?php  echo site_url('order/order/remove_wish_list/'.$key); ?>"><i class="fa fa-close"></i></a>
                        </div>
                </form>
                    </li>
                <?php
                            }
                        }
                        ?>
                </ul>
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>