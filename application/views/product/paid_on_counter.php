<!--Page Header-->
<header class="page-header common-header bgc-dark-o-5">
  <div data-parallax="scroll" data-image-src="theme/assets/images/banner/background-1.jpg" data-speed="0.3" class="parallax-background"></div>
  <div class="container text-center cell-vertical-wrapper">
    <div class="cell-middle">
      <h1 class="text-responsive size-l nmb"><?php echo ($this->crud->get_site_language() == 'ar') ? "دفع على العداد" : "Paid On Counter" ?></h1>
    </div>
  </div>
</header>
<!--End Page Header-->

<!--Page Body-->
      <div id="page-body" class="page-body">
        <section class="page-section one-child">
          <form class="checkout-form" method="POST" action="<?php echo site_url('product/complete_order'); ?>">
          	<input type="hidden" name="address" value="">
            <div class="container">

              <?php //print_r($user_detail); ?>
              <div class="row checkout-customer_detail pt-10">
                <div class="col-md-5 pb-10">
                    <div class="mb-10">
                     <h6 class="__title mb-35"><strong>PAID ON COUNTER DETAIL *</strong></h6>
                      <div class="__inputs">
                      <div class="__item"><span>
                        <input type="text" name="fullName" placeholder="Full Name *" value="<?php echo (strlen($user_detail['first_name']) > 0) ? $user_detail['first_name'] : ''; ?>" required></span></div>
                      <div class="__item"><span>
                        <input type="email" name="email" placeholder="Email *" value="<?php echo (strlen($user_detail['email']) > 0) ? $user_detail['email'] : ''; ?>" required></span></div>
                      <div class="__item"><span>
                        <input type="number" name="phone" placeholder="Phone *" value="<?php echo (strlen($user_detail['contact_no']) > 0) ? $user_detail['contact_no'] : ''; ?>" required></span></div>
                      <div class="__message">
                        <textarea placeholder="Any Message" name="message"></textarea>
                        </div>
                      <div class="__item"><span>
                      	<input type="hidden" name="payment_option" value="counter" />
                        <button type="submit" class="btn btn-success btn-lg"> SEND DETAIL </button></span></div>
                      </div>
                      <div class="checkbox">
                      <label>
                        <input type="checkbox" name="accept_shipping" value="iAcceptDetail" checked><span><i class="icon-accepted"></i><span class="font-serif-italic fz-6-s">I Accept All Tersm & Conditions of <?php echo "Al Rukh Al Shami"; ?></span></span>
                      </label>
                      </div>
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