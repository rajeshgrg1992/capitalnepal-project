<?php

  $image_1 = 'uploads/product/'.$product_detail['product_code']."_1.".$product_detail['product_image_1'];
  $image_2 = 'uploads/product/'.$product_detail['product_code']."_2.".$product_detail['product_image_2'];
  $image_3 = 'uploads/product/'.$product_detail['product_code']."_3.".$product_detail['product_image_3'];
  $image_4 = 'uploads/product/'.$product_detail['product_code']."_4.".$product_detail['product_image_4'];
  $page_link = site_url('product/detail/'.$product_detail['product_slug']);
  

?>

<main>
    <div class="breadcrumbs">
        <div class="container-fluid">
            <div class="boxed">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">home</a></li>
                    <li><a href="<?php echo site_url('product/category/'.$category_detail['category_id']); ?>"><?php echo $category_detail['category_title'] ?></a></li>
                    <li><a href="#"><?php echo $product_detail['product_title']; ?></a></li>
                </ul>

            </div>
        </div>
    </div>

    <div class="boxed">
        <div class="product-block">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-block">
                        <div class="main-block owl-carousel">
                            <?php if(file_exists($image_1)): ?>
                                <a href="#" class="item">
                                    <img src="<?php echo $image_1; ?>" alt="img" data-fancybox="<?php echo $image_1; ?>"  data-zoom-image="<?php echo $image_1; ?>"/>
                                </a>

                            <?php endif; ?>
                            <?php if(file_exists($image_2)): ?>
                                <a href="#" class="item">
                                    <img src="<?php echo $image_2; ?>" alt="img" data-fancybox="<?php echo $image_2; ?>" data-zoom-image="<?php echo $image_2; ?>"/>
                                </a>

                            <?php endif; ?>
                            <?php if(file_exists($image_3)): ?>
                                <a href="#" class="item">
                                    <img src="<?php echo $image_3; ?>" alt="img" data-fancybox="<?php echo $image_3; ?>"  data-zoom-image="<?php echo $image_3; ?>"/>
                                </a>

                            <?php endif; ?>
                            <?php if(file_exists($image_4)): ?>
                                <a href="#" class="item">
                                    <img src="<?php echo $image_4; ?>" alt="img" data-fancybox="<?php echo $image_4; ?>"  data-zoom-image="<?php echo $image_4; ?>"/>
                                </a>

                            <?php endif; ?>

                        </div>
                        <div class="preview-block owl-carousel">
                            <?php if(file_exists($image_1)): ?>
                                <div class="item">
                                    <img src="<?php echo $image_1; ?>" alt="img"/>
                                </div>

                            <?php endif; ?>
                            <?php if(file_exists($image_2)): ?>
                                <div class="item">
                                    <img src="<?php echo $image_2; ?>" alt="img"/>
                                </div>

                            <?php endif; ?>
                            <?php if(file_exists($image_3)): ?>
                                <div class="item">
                                    <img src="<?php echo $image_3; ?>" alt="img"/>
                                </div>

                            <?php endif; ?>
                            <?php if(file_exists($image_4)): ?>
                                <div class="item">
                                    <img src="<?php echo $image_4; ?>" alt="img"/>
                                </div>

                            <?php endif; ?>





                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-block">
                        <h1 class="description"><?php echo $product_detail['product_title']; ?>

                        </h1>
                        <div class="clearfix"></div>
                        <ul class="stars">
                            <li class="icon-star-empty active"></li>
                            <li class="icon-star-empty active"></li>
                            <li class="icon-star-empty active"></li>
                            <li class="icon-star-empty active"></li>
                            <li class="icon-star-empty"></li>
                        </ul>
                        <span class="text-1">Be the first to review this product</span>
                        <p class="price">
                            <span class="text">Selling price:</span>
                            <span class="special-price"><?php echo $product_detail['product_price_currency']; ?> <?php echo number_format($product_detail['product_sell_price'],2); ?></span>

                        </p>
                        <div class="tabs">
                            <div class="navigation">
                                <ul>
                                    <li class="tab-btn active" data-tab="tab-1"><a href="#">Summary</a></li>
                                    <li class="tab-btn" data-tab="tab-2"><a href="#">Detail</a></li>
                                    <li class="tab-btn" data-tab="tab-3"><a href="#">Return Policy</a></li>

                                </ul>
                                <div class="border"></div>
                            </div>
                            <div class="content">
                                <div class="tab tab-1">
                                    <?php echo $product_detail['product_features']; ?>
                                </div>
                                <div class="tab tab-2">
                                    <?php echo $product_detail['product_full_detail']; ?>   </div>
                                <div class="tab tab-3">
                                    <br />
                                    <?php echo $product_detail['product_return_policy']; ?>
                                </div>

                            </div>
                        </div>
                        <div class="settings">
                            <form method="post" action="product/add_to_my_cart/<?php echo $product_detail['product_code']; ?>">
                                <div class="__option-2 clearfix">
                                    <div class="count count-product">

                                        <input type="number" name="quantity" value="1" class="output" min="1" style="width: 65px;"/>

                                    </div>



                                    <div class="">
                                        <button type="submit" class="tt-btn-1">  <span>add to cart</span> </button>
                                    </div>
                                </div>
                            </form>


                            <div class="social">
                                <div class="addthis_inline_share_toolbox_e9uf"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="head-text head-text-3">upsell products</div>

    <div class="container-fluid none-padding-small">
        <div class="boxed">
            <div class="offers">
                <div class="row owl-carousel products-wrapper product-grid">

                    <?php if(count($related_product) > 0): ?>
                    <?php $sn = 0; foreach($related_product as $row): $sn++; ?>
                    <?php $imageFile = "uploads/product/".$row['product_code']."_1.".$row['product_image_1']; ?>

                    <div class="col-md-12">
                        <div class="product right-hover-always"  data-product-id="1">
                            <div class="substrate"></div>
                            <div class="product-main-inside">
                                <div class="product-image-block">
                                    <a href="<?php echo site_url('product/detail/'.$row['product_slug']); ?>">

                                    <?php if(file_exists($imageFile)){ ?>
                                        <img src="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_1.<?php echo $row['product_image_1']; ?>" alt="<?php echo site_url('product/detail/'.$row['product_slug']); ?>" />
                                    <?php }else{
                                        ?>
                                        <img src="<?php echo base_url(); ?>uploads/product/default_al_rukn_product_image.png" alt="<?php echo ($this->crud->get_site_language() == 'ar') ? $row['product_title_ar'] : $row['product_title'] ?>"/>
                                        <?php
                                    } ?>

                                    </a>



                                    <a href="#" class="product-button-add icon-add"></a>
                                </div>
                                <div class="product-info-block">
                                    <div class="row">
                                        <div class="col-left">
                                            <div class="product-description">
                                                <a href="<?php echo site_url('product/detail/'.$row['product_slug']); ?>"><?php echo $row['product_title']; ?></a>
                                                <span class="related_price"><?php echo $row['product_price_currency']; ?> <?php echo number_format($row['product_sell_price'],2); ?></span>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                            <?php if($sn == 99){ break; } ?>
                        <?php endforeach; ?>
                    <?php endif; ?>






                </div>
            </div>
        </div>
    </div>

</main>


