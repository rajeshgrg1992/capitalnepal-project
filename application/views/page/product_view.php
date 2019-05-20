
<main>
    <div class="breadcrumbs">
        <div class="container-fluid">
            <div class="boxed">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>pages/products">Products</a></li>
                </ul>
            </div>
        </div>
    </div>

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
                                <?php if(count($product_lists) > 0): $sn = 0; ?>
                                <?php foreach($product_lists as $row): $sn++; ?>

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

                                        <?php if($sn == 99){ break; } ?>
                                    <?php endforeach; ?>
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
    </div>
</main>



<style type="text/css">
.page-header {
    margin: 50px 0 0px !important;
}
@media only screen and (max-width: 500px) {
    .common-header.small {
        height: 200px;
    }
    .page-header {
        margin: 0px 0 0px !important;
    }
}
</style>
<!--Page Header-->
<header class="page-header small common-header" style="height: 125px;">
</header>
<!--End Page Header-->
<br clear="all"/>
<!--Page Body-->
<div id="page-body" class="page-body">
<section class="top_section">
    <div class="container">
        <div class="row">
        <div class="">    
        
            <div class="col-xs-6 single_button" style="text-align: center;">
                <a href="pages/products#services"><?php echo ucfirst(($this->crud->get_site_language() == 'ar') ? "عرض الخدمات" : "View Services"); ?></a>
            </div>
            
            <div class="col-xs-6 single_button" style="text-align: center;">
                <a href="pages/products#products"><?php echo ucfirst(($this->crud->get_site_language() == 'ar') ? "مشاهدة المنتجات" : "View Products"); ?></a>
            </div>
            
        </div>
        </div>
    </div>
</section>
  <section class="page-section" id="product_cat_list">
    <div class="container">
    <a name="products"></a>    
      <div class="row product-listing">
        <h2 class="heading_feature_1"><?php echo ucfirst(($this->crud->get_site_language() == 'ar') ? "ميزة المنتجات" : "Feature Products"); ?></h2>

        
        <br clear="all" />
        <br clear="all" />
        <h2 class="heading_feature"><?php echo ucfirst(($this->crud->get_site_language() == 'ar') ? "لدينا منتجات جديدة" : "Our New Products"); ?></h2>
        <?php if(count($product_lists) > 0): $sn = 0; ?>
          <?php foreach($product_lists as $row): $sn++; ?>
          <div class="col-md-3 col-sm-6 col-xs-12 shop-product-wrapper">
            <a href="<?php echo site_url('product/detail/'.$row['product_slug']); ?>" class="quick-view" title="View Detail">
            <div class="block-shop-product font-heading">
              <div class="__image overlay-container">
                  <img src="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_1.<?php echo $row['product_image_1']; ?>" alt="<?php echo ($this->crud->get_site_language() == 'ar') ? $row['product_title_ar'] : $row['product_title'] ?>"/>
                <div class="overlay text-center">
                  <div class="__layer bgc-dark-o-3"></div>
                  <ul>
                    <li class="clearfix"><a href="<?php echo site_url('product/detail/'.$row['product_slug']); ?>" class="quick-view" title="View Detail"><i class="icon-search-icon"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="__info text-center"><a href="<?php echo site_url('product/detail/'.$row['product_slug']); ?>"><strong><?php echo ($this->crud->get_site_language() == 'ar') ? $row['product_title_ar'] : $row['product_title'] ?></a>
              </div>
            </div>
            </a>
          </div>
          <?php if($sn == 8){ break; } ?>
          <?php endforeach; ?>
        <?php endif; ?>
        
        <a name="services"></a>
        <br clear="all" />
        <br clear="all" />
        <h2 class="heading_feature"><?php echo ucfirst(($this->crud->get_site_language() == 'ar') ? "لدينا ميزة الخدمات" : "Our Feature Services"); ?></h2>
        
        <div class="team">
            <div class="container">
              <div class="row">
                 <?php if(count($service_lists) > 0): $sn = 0; ?>
                <?php foreach($service_lists as $row): $sn++; ?>
                    <?php if($sn == 1){ continue; } ?>
                <div class="col-md-3 col-sm-6 col-xs-12 section-block">
                  <div class="block-team">
                    <div class="__image">
                      <div><a href="#"><img src="<?php echo base_url(); ?>uploads/content/<?php echo $row['featured_img']; ?>" alt="team member"  /></a></div>
                    </div>
                    <div class="__info">
                      <h4 class="__name"><a href="#"><?php echo strtoupper(($this->crud->get_site_language() == 'ar') ? $row['content_page_title_ar'] : $row['content_page_title']); ?></a></h4>
                      <p class="__text"><?php echo strip_tags(($this->crud->get_site_language() == 'ar') ? $row['content_body_ar'] : $row['content_body']); ?></p>
                    </div>
                  </div>
                </div>
                <?php if($sn == 5){ break; } ?>
              <?php endforeach; ?>
          <?php endif; ?>
                
                
              </div>
            </div>
          </div>
        
        

      </div>
    </div>
  </section>
</div>
<!--End Page Body-->
<style type="text/css">
.top_section{
    margin-top: -20px;
}
.top_section .single_button{
    padding: 30px;
    background: #3c763d;
    border: 2px #ffffff solid;
    transition-duration: 0.5s;
}
.top_section .single_button a{
    width: 100%;
    text-align: center;
    float: left;
    color: #fff;
    font-size: 24px;
    text-transform: uppercase;
    text-decoration: none;
}
.top_section .single_button:hover{
    background: #3b444c;
    transition-duration: 0.5s;
}
#product_cat_list{
  background: url(theme/assets/images/banner/slide1.jpg) top left;
  #margin-top: -20px;

}
  .single_cat_list{ width: 84%; float: left; margin: 8%; text-align: center; }
  .single_cat_list img{     
    max-width: 100%;
    padding: 15px;
    border: 1px #f0f0f0 solid;
    border-radius: 25%; 
    transition-duration: 1s;
}
  .single_cat_list p{ font-size: 14px; font-weight: 400; color: #FFF !important; padding-top: 15px; text-align: center; transition-duration: 1s;}
  .single_cat_list:hover img{
    background: #3c763d;
    border: 1px #3c763d solid;
    transition-duration: 1s;
  }
  .single_cat_list:hover p{
    color: #026f92;
    transition-duration: 1s;
  }
  .heading_feature{
    color: #FFF;
    font-size: 24px;
    font-family: sans-serif;
    text-align: center;
    padding: 6px;
    font-weight: bold;
    border-bottom: 1px #f0f0f0 solid;
    border-top: 1px #f0f0f0 solid;
    margin-bottom: 30px;
  }
  
    .heading_feature_1{
    color: #FFF;
    font-size: 48px;
    font-family: sans-serif;
    text-align: center;
    padding: 6px;
    font-weight: bold;
    margin-bottom: 30px;
  }
  .block-team{
      background: #FFFFFF;
      padding-bottom: 15px;
  }
</style>