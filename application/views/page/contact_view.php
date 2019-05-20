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
      <h1 class="text-responsive size-l nmb"><?php echo ucfirst(($this->crud->get_site_language() == 'ar') ? $contact_detail['content_title_ar'] : $contact_detail['content_title']); ?></h1>
      <p><?php echo ucfirst(($this->crud->get_site_language() == 'ar') ? $contact_detail['content_body_ar'] : $contact_detail['content_body']); ?></p>
    </div>
  </div>
</header>
<!--End Page Header-->
<!--Page Body-->
<div id="page-body" class="page-body">
  <section class="page-section bgc-light<?php echo ($this->crud->get_site_language() == 'ar') ? ' text_rtl' : ''; ?>">
    <div class="container">
      <div class="row group-contact-left-header">
        <div class="col-md-5 col-xs-12 __header">
          <div class="cell-vertical-wrapper">
            <div class="cell-middle">
              <header class="hr-header text-center">
                <h2 class="smb"><?php echo $settings['site_name']; ?></h2>
                <p class="common-serif __caption"><?php echo $this->crud->getLanguageBySlug('send_message'); ?></p>
                <div class="separator-2-color"></div>
                <p><?php echo $settings['contact_details']; ?></p>
              </header>
            </div>
          </div>
        </div>
        <div class="col-md-7 col-md-offset-5 col-xs-12 section-block">
          <form id="" method="POST" action="">
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="name" placeholder="<?php echo $this->crud->getLanguageBySlug('full_name'); ?>" required="required"/>
              </div>
              <div class="col-md-6">
                <input type="text" name="phone" placeholder="<?php echo $this->crud->getLanguageBySlug('contact_number'); ?>"/>
              </div>
              <div class="col-md-12">
                <input type="email" name="email" placeholder="Email" required="required"/>
                <textarea name="message" placeholder="<?php echo $this->crud->getLanguageBySlug('message'); ?>" required="required"></textarea>
              </div>
              <div class="col-md-12 text-center-md-max">
                <button type="submit" class="btn btn-size-2 btn-primary"><?php echo $this->crud->getLanguageBySlug('send_message'); ?></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div id="google_map">
      <?php echo $settings['location_map']; ?>
    </div>
</section>
</div>
<!--End Page Body-->
<style type="text/css">
  #google_map iframe{ width: 100%; height: 400px; }
</style>