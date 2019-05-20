<!--Page Header-->
<header class="page-header small common-header bgc-dark-o-5">
  <div data-parallax="scroll" data-position="top" data-image-src="theme/assets/images/banner/background-1.jpg" data-speed="0.3" class="parallax-background"></div>
  <div class="container text-center cell-vertical-wrapper">
    <div class="cell-middle">
      <h1 class="text-responsive size-l nmb"><?php echo ($this->crud->get_site_language() == 'ar') ? "الدفع" : "Checkout" ?></h1>
    </div>
  </div>
</header>
<!--End Page Header-->

<!--Page Body-->
      <div id="page-body" class="page-body">
        <section class="page-section one-child">
          <form class="checkout-form" method="POST" action="<?php echo site_url('product/complete_order'); ?>">
            <div class="container">

               <?php 
                /*echo "<pre>";
                print_r($this->cart->contents()); 
                echo "</pre>";*/
                ?>

              <?php
              if (strlen($this->session->flashdata('error')) > 0) {
                echo "<p class='error'>PLease Fill All The * Field in Deilvery Form.</p>";
                echo "<p class='error'>".$this->session->flashdata('error')."</p>";
              }
              ?>
              
              <div class="row checkout-customer_detail pt-10">
                <div class="col-md-5 pb-10">
                  <h6 class="__title mb-35"><strong>CHOOSE PAYMENT OPTION *</strong></h6>
                    <div class="__inputs">
                      <a href="<?php echo site_url('product/cash_on_delivery'); ?>" class="btn btn-primary btn-lg" style="width: 100%;"><strong>Cash On Delivery</strong></a>
                      <br/>
                      <br/>
                      <a href="<?php echo site_url('product/paid_on_counter'); ?>" class="btn btn-primary btn-lg" style="width: 100%;"><strong>Paid On Counter</strong></a>
                    </div>
                </div>
                <div class="col-md-7 pb-10">
                    <div class="shop-cart-total">
                      <?php
                      $totalCartAmount = array_sum(array_column($this->cart->contents(), 'subtotal'));
                      $vatValue = 5;
                      $vatAmount = $totalCartAmount*($vatValue/100);
                      ?>
                      <h4 class="__title">CART TOTAL</h4>
                      <hr/>
                      <div class="__sub-total">
                        <h6>ORDER TOTAL</h6><span class="price">AED <?php echo number_format($totalCartAmount,2) ?></span>
                      </div>
                      <div class="__order-total">
                        <h6>VAT/TAX</h6><span>AED <?php echo number_format($vatAmount,2) ?></span>
                      </div>
                      <hr class="no-margin"/>
                      <div class="__total color-primary">
                        <h4>GRAND TOTAL</h4><span class="price">AED <?php echo number_format($totalCartAmount+$vatAmount,2) ?></span>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </form>
        </section>
      </div>
      <!--End Page Body-->