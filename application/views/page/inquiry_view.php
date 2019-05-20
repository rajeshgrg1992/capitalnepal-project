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
<header class="page-header common-header bgc-dark-o-5">
  <div data-parallax="scroll" data-image-src="theme/assets/images/banner/background-1.jpg" data-speed="0.3" class="parallax-background"></div>
  <div class="container text-center cell-vertical-wrapper">
    <div class="cell-middle">
      <h1 class="text-responsive size-l nmb" style="padding-top: 100px;"><?php echo ucfirst(($this->crud->get_site_language() == 'ar') ? $inquiry_detail['content_title_ar'] : $inquiry_detail['content_title']); ?></h1>
    </div>
  </div>
</header>
<!--End Page Header-->
<!--Page Body-->
<div id="page-body" class="page-body">
  <section class="page-section bgc-light<?php echo ($this->crud->get_site_language() == 'ar') ? ' text_rtl' : ''; ?>">
    <div class="container">
      <div class="row group-contact-left-header">

        <div class="col-md-8 col-xs-12 section-block">
          <form id="contact_form">
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="name" placeholder="<?php echo $this->crud->getLanguageBySlug('full_name'); ?>" required="required"/>
              </div>
              <div class="col-md-6">
                <input type="text" name="phone" placeholder="<?php echo $this->crud->getLanguageBySlug('contact_number'); ?>"/>
              </div>
              <div class="col-md-6">
                <input type="email" name="email" placeholder="<?php echo $this->crud->getLanguageBySlug('email'); ?>" required="required"/>
              </div>
              <div class="col-md-6">
                <select name="select" class="form-control">
                  <option value="<?php echo $this->crud->getLanguageBySlug('product_inquiry'); ?>"><?php echo $this->crud->getLanguageBySlug('product_inquiry'); ?></option>
                  <option value="<?php echo $this->crud->getLanguageBySlug('order_product'); ?>"><?php echo $this->crud->getLanguageBySlug('order_product'); ?></option>
                </select>
              </div>
              <div class="col-md-12">
                <input type="text" name="subject" placeholder="<?php echo $this->crud->getLanguageBySlug('subject'); ?>"/>
              </div>
              <div class="col-md-12">
                <textarea name="message" placeholder="<?php echo $this->crud->getLanguageBySlug('message'); ?>" required="required"></textarea>
              </div>
              <div class="col-md-12 text-center-md-max">
                <button type="submit" class="btn btn-size-2 btn-primary"><?php echo $this->crud->getLanguageBySlug('send_messsage'); ?></button>
              </div>
            </div>
          </form>
        </div>

        <div class="col-md-4 col-md-offset-8 col-xs-12 __header">
          <div class="cell-vertical-wrapper">
            <div class="">
              <header class="hr-header">
                <h4 class="smb"><strong><?php echo ucfirst(($this->crud->get_site_language() == 'ar') ? $inquiry_detail['content_body_ar'] : $inquiry_detail['content_body']); ?></strong></h2>
                <div class="separator-2-color"></div>
                <div class="footer-widget-contact">
                  <h4><?php echo $this->crud->getLanguageBySlug('our_main_office'); ?></h4>
                  <div class="__content font-heading fz-6-ss">
                    <div class="__address"><i class="icon icon-location"></i><span><?php echo $settings['contact_address']; ?></span></div>
                    <div class="__phone"><i class="icon icon-phone-1"></i><span><?php echo $settings['contact_number']; ?></span></div>
                    <div class="__phone-2"><i class="icon icon-mobile-1"></i><span><?php echo $settings['whatsapp']; ?></span></div>
                    <div class="__email"><i class="icon icon-paper-plane"></i><span><?php echo $settings['feedback_email']; ?></span></div>
                    <div class="__time"><i class="icon icon-clock-1"></i><span>Sat - Thu: 9:00 am - 9:00 pm</span></div>
                  </div>
                </div>
              </header>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php if(count($newsletter_signup) > 0): ?>
<!-- New Letter-->
<section class="page-section pt-60 pb-60 bgc-dark-o-7<?php echo ($this->crud->get_site_language() == 'ar') ? ' text_rtl' : ''; ?>">
  <div data-parallax="scroll" data-position="top" data-image-src="<?php echo base_url(); ?>uploads/content/<?php echo $newsletter_signup['featured_img']; ?>" data-speed="0.3" class="parallax-background"></div>
  <div class="news-letter">
    <div class="container">
      <div class="__content-wrapper row">
        <div class="col-md-6 col-xs-12 __content-left">
          <div class="cell-vertical-wrapper">
            <div class="cell-middle">
              <h2 class="mb-5"><?php echo ($this->crud->get_site_language() == 'ar') ? $newsletter_signup['content_title_ar'] : $newsletter_signup['content_title'] ?></h2>
              <p class="font-serif-italic mb-0 fz-3"><?php echo strip_tags(($this->crud->get_site_language() == 'ar') ? $newsletter_signup['content_body_ar'] : $newsletter_signup['content_body']); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 __content-right">
          <div class="cell-vertical-wrapper">
            <div class="cell-middle">
              <form>
                <input type="email" placeholder="<?php echo $this->crud->getLanguageBySlug('enter_your_email'); ?>..."/><a href="#" class="btn-secondary btn no-border"><?php echo $this->crud->getLanguageBySlug('sign_up'); ?></a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End New Letter-->
<?php endif; ?>
</div>
<!--End Page Body-->
