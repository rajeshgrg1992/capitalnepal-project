<!--Page Header-->
<header class="page-header common-header bgc-dark-o-5">
  <div data-parallax="scroll" data-image-src="theme/assets/images/banner/background-1.jpg" data-speed="0.3" class="parallax-background"></div>
  <div class="container text-center cell-vertical-wrapper">
    <div class="cell-middle">
      <h1 class="text-responsive size-l nmb" style="padding-top: 100px;"><?php echo ($this->crud->get_site_language() == 'ar') ? "ناجح" : "Successfull" ?></h1>
    </div>
  </div>
</header>
<!--End Page Header-->

<!--Page Body-->
      <div id="page-body" class="page-body">
        <section class="page-section one-child">
            <div class="container">
              
              <div class="row checkout-customer_detail pt-10" style="padding: 10px;">
                <h2 style="font-size: 28px;font-weight: bold;color: #0e9006;">Product Order Proceed Successfully.</h2>
                <br/>
                <h4>You order has been processed successfully in Al Rukh Al Shami.<br/>
                Please view your email for detail.</h4>
                <br/>
                <a href="<?php echo site_url('home'); ?>" class="btn btn-primary btn-sm">Go To Home Page</a>
                &nbsp; Or &nbsp;
                <a href="<?php echo site_url('pages/products'); ?>" class="btn btn-success btn-sm">Shop Again</a>
              </div>
            </div>
          </form>
        </section>
      </div>
      <!--End Page Body-->

