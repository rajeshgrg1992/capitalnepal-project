<main>
    <div class="breadcrumbs">
        <div class="container-fluid">
            <div class="boxed">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">home</a></li>
                    <li><a href="<?php echo current_url(); ?>"><?php echo $category_detail['category_title'] ?></a></li>
                </ul>

            </div>
        </div>
    </div>


    <header class="page-header small common-header bgc-dark-o-5">
        <div data-parallax="scroll" data-position="top" data-image-src="theme/assets/images/banner/background-1.jpg" data-speed="0.3" class="parallax-background"></div>
        <div class="container text-center cell-vertical-wrapper">
            <div class="cell-middle">
                <h1 class="text-responsive size-l nmb"><?php echo ($this->crud->get_site_language() == 'ar') ? $category_detail['category_title_ar'] : $category_detail['category_title'] ?></h1>
                <p>List of Products in <?php echo ($this->crud->get_site_language() == 'ar') ? $category_detail['category_title_ar'] : $category_detail['category_title'] ?> Category</p>
            </div>
        </div>
    </header>
    <!--End Page Header-->

    <div class="container-fluid md-overflow-hidden">
        <div class="boxed">
            <div class="listing">

                <div class="row">
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="control">


                            <div class="float-block">
                                <div class="btn-list-block">
                                    <a href="#" class="btn-list-view-1 list">
                                        <span class="icon icon-th-list"></span>
                                    </a>
                                    <a href="#" class="btn-list-view-2 grid active">
                                        <span class="icon icon-th"></span>
                                    </a>
                                </div>

                            </div>

                        </div>
                        <div class="row products-wrapper product-grid product-lg-3 product-md-2 product-sm-2 product-xs-2 ">
                            <ul>
                                <?php if(count($product_lists) > 0): ?>
                                    <?php foreach($product_lists as $row): ?>

                                        <li>
                                            <div class="product"  data-product-id="9">
                                                <div class="substrate"></div>
                                                <div class="product-main-inside">
                                                    <div class="product-image-block">
                                                        <a href="<?php echo site_url('product/detail/'.$row['product_slug']); ?>">
                                                            <img src="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_1.<?php echo $row['product_image_1']; ?>" alt="<?php echo ($this->crud->get_site_language() == 'ar') ? $row['product_title_ar'] : $row['product_title'] ?>"/>
                                                        </a>




                                                        <div class="curtain-1 curtain">
                                                            <div class="fon"></div>

                                                        </div>

                                                        <a href="#" class="product-button-add icon-add"></a>
                                                    </div>
                                                    <div class="product-info-block">
                                                        <div class="row">
                                                            <div class="col-left">
                                                                <div class="product-description">
                                                                    <a href="<?php echo site_url('product/detail/'.$row['product_slug']); ?>"><?php echo $row['product_title']; ?></a>
                                                                    <?php echo $row['product_features']; ?>
                                                                </div>



                                                                <p class="price">
                                                                    <span class="text">Selling price:</span>
                                                                    <span class="special-price"><?php echo $row['product_price_currency']; ?> <?php echo number_format($row['product_sell_price'],2); ?></span>

                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="product-hidden-block-2">
                                                    <ul class="preview-images-wrapp">
                                                        <?php
                                                        if(!empty($row['product_image_1'])){
                                                            ?>

                                                            <li>
                                                                <img src="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_1.<?php echo $row['product_image_1']; ?>" alt="preview" data-preview="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_1.<?php echo $row['product_image_1']; ?>"/>
                                                            </li>

                                                            <?php
                                                        }

                                                        ?>

                                                        <?php
                                                        if(!empty($row['product_image_2'])){
                                                            ?>

                                                            <li>
                                                                <img src="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_2.<?php echo $row['product_image_1']; ?>" alt="preview" data-preview="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_2.<?php echo $row['product_image_1']; ?>"/>
                                                            </li>

                                                            <?php

                                                        }
                                                        ?>

                                                        <?php
                                                        if(!empty($row['product_image_3'])){
                                                            ?>

                                                            <li>
                                                                <img src="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_3.<?php echo $row['product_image_1']; ?>" alt="preview" data-preview="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_3.<?php echo $row['product_image_1']; ?>"/>
                                                            </li>

                                                            <?php

                                                        }
                                                        ?>

                                                        <?php
                                                        if(!empty($row['product_image_4'])){
                                                            ?>


                                                            <li>
                                                                <img src="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_4.<?php echo $row['product_image_1']; ?>" alt="preview" data-preview="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_4.<?php echo $row['product_image_1']; ?>"/>
                                                            </li>

                                                            <?php

                                                        }
                                                        ?>



                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <h3>Sorry! There is No Product List Yet.</h3>
                                    <p>Please Try With Other Category.</p>
                                <?php endif; ?>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="blog-sidebar">
                            <H2 class="head-text-type2">Product Categories</H2>
                            <ul class="tt-list2">
                                <?php if(count($category_lists) > 0): $sn = 0;?>
                                    <?php foreach($category_lists as $row): $sn++; ?>
                                        <li >
                                            <a href="<?php echo site_url('product/category/'.$row['category_id']); ?>"><?php echo $row['category_title']; ?></a>

                                        </li>

                                    <?php
                                    endforeach; ?>

                                <?php endif; ?>

                            </ul>
                            <H2 class="head-text-type2">Contact</H2>
                            <div class="tt-tags">
                                <?php $settings = $this->site_settings_model->get_site_settings(); ?>
                                <?php echo $settings['contact_details']; ?>

                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</main>

