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
<header class="page-header small common-header bgc-dark-o-5">
  <div data-parallax="scroll" data-position="top" data-image-src="theme/assets/images/banner/background-1.jpg" data-speed="0.3" class="parallax-background"></div>
  <div class="container text-center cell-vertical-wrapper">
    <div class="cell-middle">
      <h1 class="text-responsive size-l nmb"><?php echo ucfirst(($this->crud->get_site_language() == 'ar') ? $services_detail['content_title_ar'] : $services_detail['content_title']); ?></h1>
      <p><?php echo ucfirst(($this->crud->get_site_language() == 'ar') ? $services_detail['content_page_title_ar'] : $services_detail['content_page_title']); ?></p>
    </div>
  </div>
</header>
<!--End Page Header-->

<!--Page Body-->
<div id="page-body" class="page-body">
  <section class="page-section border-bottom-lighter<?php echo ($this->crud->get_site_language() == 'ar') ? ' text_rtl' : ''; ?>">
    <div class="container">
      <div class="row">
        <div class="col-md-4 section-block hidden-xs hidden-sm"><img src="<?php echo base_url(); ?>uploads/content/<?php echo $services_detail['featured_img']; ?>" alt="left-image" class="img-responsive center-block"/></div>
        <div class="col-md-8 col-sm-12">
          <div class="row">
            <?php if(count($service_lists) > 0): $sn = 0; ?>
            <?php foreach($service_lists as $row): $sn++; ?>
                <?php if($sn == 1){ continue; } ?>
            <div class="col-sm-6 section-block">
              <div data-wow-delay="0.2s" class="block-icon-box wow fadeInUp">
                <div class="__header clearfix">
                  <div class="__icon"><img src="<?php echo base_url(); ?>uploads/content/<?php echo $row['featured_img']; ?>" width="75" height="75" alt="" /></div>
                  <h6 class="nmb __heading"><?php echo strtoupper(($this->crud->get_site_language() == 'ar') ? $row['content_page_title_ar'] : $row['content_page_title']); ?></h6>
                </div>
                <p class="__content"><?php echo strip_tags(($this->crud->get_site_language() == 'ar') ? $row['content_body_ar'] : $row['content_body']); ?></p>
              </div>
            </div>
              <?php if($sn == 5){ break; } ?>
              <?php endforeach; ?>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section no-padding-top">
    <div class="container pt-90 section-block-p">
      <div class="row">
        <div class="group-process small-icon">

          <div class="block-process<?php echo ($this->crud->get_site_language() == 'ar') ? ' text_rtl' : ''; ?>">
            <h6 class="__title">STEP 01: RESEARCH</h6>
            <div class="__icon">
              <div class="circle-icon icon-trophy"></div>
            </div>
            <p class="__content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
          </div>

          <div class="block-process<?php echo ($this->crud->get_site_language() == 'ar') ? ' text_rtl' : ''; ?>">
            <h6 class="__title">STEP 02: DESIGN LAYOUT</h6>
            <div class="__icon">
              <div class="circle-icon icon-layers"></div>
            </div>
            <p class="__content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
          </div>

          <div class="block-process active<?php echo ($this->crud->get_site_language() == 'ar') ? ' text_rtl' : ''; ?>">
            <h6 class="__title">STEP3: OPTIMIZATION</h6>
            <div class="__icon">
              <div class="circle-icon icon-linegraph"></div>
            </div>
            <p class="__content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
          </div>

          <div class="block-process<?php echo ($this->crud->get_site_language() == 'ar') ? ' text_rtl' : ''; ?>">
            <h6 class="__title">STEP4: MARKETING PLAN</h6>
            <div class="__icon">
              <div class="circle-icon icon-traget"></div>
            </div>
            <p class="__content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p>
          </div>
          
        </div>
      </div>
    </div>
  </section>
</div>
<!--End Page Body-->