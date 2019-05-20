<main>
    <div class="breadcrumbs">
        <div class="container-fluid">
            <div class="boxed">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">home</a></li>
                    <li><a href="<?php echo current_url(); ?>"><?php echo $about_us['content_page_title']; ?></a></li>
                </ul>

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

<!--Page Body-->
<div id="page-body" class="page-body" style="margin-top: 3%;">

  <section class="page-section<?php echo ($this->crud->get_site_language() == 'ar') ? ' text_rtl' : ''; ?>">
    <div class="container">
      <div class="row">
        <div class="col-md-7 section-block-p">
          <header class="hr-header">
            <h2 class="smb"><?php echo ($this->crud->get_site_language() == 'ar') ? $about_us['content_title_ar'] : $about_us['content_title']; ?></h2>
            <p class="common-serif __caption"><?php echo ($this->crud->get_site_language() == 'ar') ? $about_us['content_page_title_ar'] : $about_us['content_page_title']; ?></p>
            <div class="separator-2-color"></div>
          </header>
          <p><?php echo ($this->crud->get_site_language() == 'ar') ? $about_us['content_body_ar'] : $about_us['content_body']; ?></p>
        </div>
        <div class="col-md-5 section-block pt-20"><a href="#" data-modal-open><img src="<?php echo base_url(); ?>uploads/content/<?php echo $about_us['featured_img']; ?>" alt="<?php echo ($this->crud->get_site_language() == 'ar') ? $about_us['content_title_ar'] : $about_us['content_title']; ?>" class="img-responsive"></a>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section bgc-gray-lighter<?php echo ($this->crud->get_site_language() == 'ar') ? ' text_rtl' : ''; ?>" style="margin-top: 3%;">
      <div class="client-section-2">
        <div class="container">
          <div class="row">
            <div data-wow-delay="0.3s" class="col-md-6 col-md-push-6 col-xs-12 section-block wow fadeInRight">
              <div class="__header">
                <header class="hr-header">
                  <h2 class="smb"><?php echo ucfirst(($this->crud->get_site_language() == 'ar') ? $mission_data['content_title_ar'] : $mission_data['content_title']); ?></h2>
                  <div class="separator-2-color"></div>
                  <p class="__content"><?php echo ucfirst(($this->crud->get_site_language() == 'ar') ? $mission_data['content_body_ar'] : $mission_data['content_body']); ?></p>
                </header>
              </div>
            </div>
            <div data-wow-delay="0.3s" class="col-md-6 col-md-pull-6 col-xs-12 wow fadeInUp">

              <div class="__header">
                <header class="hr-header">
                  <h2 class="smb"><?php echo ucfirst(($this->crud->get_site_language() == 'ar') ? $history_data['content_title_ar'] : $history_data['content_title']); ?></h2>
                  <div class="separator-2-color"></div>
                  <p class="__content"><?php echo ucfirst(($this->crud->get_site_language() == 'ar') ? $history_data['content_body_ar'] : $history_data['content_body']); ?></p>
                </header>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

</div>
<!--End Page Body-->