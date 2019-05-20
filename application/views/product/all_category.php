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
<header class="page-header common-header" style="height: 125px;">
 
</header>
<!--End Page Header-->
<!--End Page Header-->
<!--End Page Header-->
<!--Page Body-->
<div id="page-body" class="page-body">
  <section class="page-section" id="product_cat_list">
    <div class="container">

      <div class="row product-listing">

        <h2 class="heading_feature_1"><?php echo ($this->crud->get_site_language() == 'ar') ? "جميع المنتجات ميزة" : "All Feature Products"; ?></h2>
        
        <?php if(count($category_lists) > 0):?>
          <?php foreach($category_lists as $row): ?>
        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
        <div class="row">
        <div class="single_cat_list">
          <a href="<?php echo site_url('product/category/'.$row['category_id']); ?>">
              <img src="<?php echo site_url('uploads/category/'.$row['category_icon']); ?>" width="100" height="" alt="Category Image" />
              <p><?php echo ucfirst(($this->crud->get_site_language() == 'ar') ? $row['category_title_ar'] : $row['category_title']); ?></p>
          </a>
        </div>
        </div>
        </div>
          <?php endforeach; ?>
        <?php endif; ?> 
        
        <br clear="all"/>
        <h2 class="heading_feature"><?php echo ucfirst(($this->crud->get_site_language() == 'ar') ? "لدينا منتجات جديدة" : "Our New Products"); ?></h2>

        <?php if(count($product_lists) > 0): $sn = 0; ?>
          <?php foreach($product_lists as $row): $sn++; ?>
          <div class="col-md-3 col-sm-6 col-xs-12 shop-product-wrapper">
            <a href="<?php echo site_url('product/detail/'.$row['product_slug']); ?>" class="quick-view" title="View Detail">
            <div class="block-shop-product font-heading">
              <div class="__image overlay-container"><img src="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_1.<?php echo $row['product_image_1']; ?>" alt="<?php echo ($this->crud->get_site_language() == 'ar') ? $row['product_title_ar'] : $row['product_title'] ?>"/>
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

      </div>
    </div>
  </section>
</div>
<!--End Page Body-->
<style type="text/css">
#product_cat_list{
  background: url(theme/assets/images/banner/slide1.jpg) top left;

}
  .single_cat_list{ width: 84%; float: left; margin: 8%; text-align: center; }
  .single_cat_list img{     
    max-width: 100%;
    padding: 15px;
    border: 1px #f0f0f0 solid;
    border-radius: 25%; 
    transition-duration: 1s;
}
  .single_cat_list p{ font-size: 14px; font-weight: 400; color: #FFF; padding-top: 15px; text-align: center; transition-duration: 1s;}
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
    margin-bottom: 50px;
  }
  
   .heading_feature_1{
    color: #FFF;
    font-size: 48px;
    font-family: sans-serif;
    text-align: center;
    padding: 6px;
    font-weight: bold;
    margin-bottom: 50px;
  }
</style>