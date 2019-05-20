<!-- page wapper-->
<?php $settings = $this->site_settings_model->get_site_settings(); ?>
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Checkout</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Checkout</span>
        </h2>
        <!-- ../page heading-->

        <div class="page-content checkout-page">
            <h3 class="checkout-sep">1. Checkout Method</h3>
            
 <?php 
        if(empty($this->session->userdata('email')) && empty($this->session->userdata('customer_id')))
        {
?>
            <div class="box-border">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Checkout as a Guest or Register</h4>
                        <p>Register with us for future convenience:</p>
                        <ul>
                            <li><label><input type="radio" value="guest" id="guest_radio" name="radio1" checked="checked">Checkout as Guest</label></li>
                            <li>
                                <label>
                                    <input type="radio" value="register" id="register_radio" name="radio1" <?php echo ($register=="active")?"checked=\"checked\"":""; ?>>Register
                                </label>
                            </li>
                        </ul>
                        <br>
                        <h4>Register and save time!</h4>
                        <p>Register with us for future convenience:</p>
                        <p><i class="fa fa-check-circle text-primary"></i> Fast and easy check out</p>
                        <p><i class="fa fa-check-circle text-primary"></i> Easy access to your order history and status</p>
                    </div>
                    <!-- for login division-->
                    <div class="col-sm-6">
                         <?php
                             if($register != "active")
                             {
                                if(validation_errors())
                                {
                                    ?>
                                    <div class="alert  alert-danger alert_box">
                                        <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                                    class="fa fa-times"></i></a>
                                        <?php echo validation_errors();?>
                                    </div>

                                    <?php
                                }
                                ?>

                                <?php if (isset($error)) {
                                    ?>
                                    <div class="alert alert-danger alert_box">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                                                    class="fa fa-times"></i></a>
                                        <strong>Error!</strong>  <?php echo isset($error)?$error:"" ; ?>.
                                    </div>
                                    <?php
                                }
                                ?>
                                <?php
                                if ($this->session->flashdata('success') != "") {
                                    ?>
                                    <div class="alert alert-success alert_box">
                                        <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                                    class="fa fa-times"></i></a>
                                        <strong>Success !</strong> <?php echo $this->session->flashdata('success'); ?>.
                                    </div>
                                    <?php
                                }
                                ?>
                                <?php
                                if ($this->session->flashdata('error') != "") {
                                    ?>
                                    <div class="alert alert-danger alert_box">
                                        <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                                    class="fa fa-times"></i></a>
                                        <strong>Success !</strong> <?php echo $this->session->flashdata('error'); ?>.
                                    </div>
                                    <?php
                                }
                                //echo "Login Email:  " . $this->session->userdata('email');
                                //echo "Customer ID: " . $this->session->userdata('customer_id');
                                // echo "Redirect URL: " . $this->session->userdata('return_to_url');
                            }
                        ?>
                    <form method="post" action="<?php echo site_url('order/order/login'); ?>" class="form-signin">
                        <h4>Login</h4>
                        <p>Already registered? Please log in below:</p>
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control input">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control input">
                        <p><a href="<?php echo site_url('login/password_rest'); ?>">Forgot your password?</a></p>
                        <button type="submit" class="button">Login</button>
                    </form>
                    </div>

                </div>
            </div>

                <?php
                    }
                ?>
<!-- //////////////////////////////////////////////////////////////// -->

        <!--//////////////////////////////////////Page Body to register////////////////////////////////////-->
        <div id="registration_body">
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
            <div id="page-body" class="page-body">
            <section class="page-section bgc-light">
              
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-xs-12 __block __login section-block">
                <?php
            if($register=="active") 
            {   
                if(validation_errors())
                {
                    ?>
                    <div class="alert  alert-danger alert_box">
                        <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                class="fa fa-times"></i></a>
                        <?php echo validation_errors();?>
                    </div>

                    <?php
                }
                ?>

                <?php if (isset($error)) {
                    ?>
                    <div class="alert alert-danger alert_box">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                                class="fa fa-times"></i></a>
                        <strong>Error!</strong>  <?php echo isset($error)?$error:"" ; ?>.
                    </div>
                    <?php
                }
                ?>
                <?php
                if ($this->session->flashdata('success') != "") {
                    ?>
                    <div class="alert alert-success alert_box">
                        <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                class="fa fa-times"></i></a>
                        <strong>Success !</strong> <?php echo $this->session->flashdata('success'); ?>.
                    </div>
                    <?php
                }
                ?>
                <?php
                if ($this->session->flashdata('error') != "") {
                    ?>
                    <div class="alert alert-danger alert_box">
                        <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                class="fa fa-times"></i></a>
                        <strong>Success !</strong> <?php echo $this->session->flashdata('error'); ?>.
                    </div>
                    <?php
                }
            }    
            ?>
                
                    <form method="post" action="order/order/register" class="shop-account">
                      <div class="__separator hidden-sm hidden-xs text-center"></div>
                      <h3 class="__title text-center"> New User Register</h3>
                      <div class="__sub-title font-serif fz-6-s text-center">Register Now</div>
                      <div class="__nmae">
                        <label>Full Name<span class="color-primary"  >*</span></label>
                        <input type="text" name="full_name" class="form-control" required>
                      </div>
                      <div class="__number">
                        <label >Contact Number<span class="color-primary"  >*</span></label>
                        <input type="number" name="contact_number" class="form-control" required>
                      </div>
                      <div class="__email">
                        <label >Email address<span class="color-primary">*</span></label>
                        <input type="email" name="email" class="form-control" >
                      </div>
                      <div class="__password">
                        <label>Password<span class="color-primary">*</span></label>
                        <input type="password" name="password" class="form-control" >
                      </div>
                      <div class="__password">
                        <label >Re-Type Password<span class="color-primary">*</span></label>
                        <input type="password" name="confirm_password" class="form-control" >
                      </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="accept" value="remember" checked required><span><i class="icon-accepted"></i><span class="font-serif fz-6-s">I Accept All The Terms and Conditions of Al Rukn Al Shami.</span></span>
                            </label>
                        </div>
                      <div class="__button">
                          <button type="submit" class="btn btn-primary">CREATE ACCOUNT</button></div>

                      <br/>

                      <div class="__forgotten"><a href="order/order/login" class="color-secondary fz-6-s"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; Already Have An Account? Login Here</a></div>
                      </form>
                    </div>
                  </div>
                </div>
            </section>
            </div>
  <!--End Page Body-->
        </div>
          <!-- End of the Register DIv -->
        <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->
              <!--End Page Body-->
<form action="" method="post">
        <div id="guest_div">
            <h3 class="checkout-sep">2. Billing Infomations</h3>
            <div class="box-border">
                <ul>
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="first_name" class="required">First Name</label>
                            <input type="text" class="input form-control" name="first_name" id="first_name" required="required">
                        </div><!--/ [col] -->
                        <div class="col-sm-6">
                            <label for="last_name" class="required">Last Name</label>
                            <input type="text" name="last_name" class="input form-control" id="last_name" required="required">
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="company_name">Company Name</label>
                            <input type="text" name="company_name" class="input form-control" id="company_name">
                        </div><!--/ [col] -->
                        <div class="col-sm-6">
                            <label for="email_address" class="required">Email Address</label>
                            <input type="text" class="input form-control" name="email_address" id="email_address" required="required">
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row"> 
                        <div class="col-xs-12">

                            <label for="address" class="required">Address</label>
                            <input type="text" class="input form-control" name="address" id="address" required="required">

                        </div><!--/ [col] -->

                    </li><!-- / .row -->

                    <li class="row">

                        <div class="col-sm-6">
                            
                            <label for="city" class="required">City</label>
                            <input class="input form-control" type="text" name="city" id="city" required="required">

                        </div><!--/ [col] -->

                        <div class="col-sm-6">
                            <label class="required">State/Province</label>
                                <input class="input form-control" name="state" required="required">
                        </div><!--/ [col] -->
                    </li><!--/ .row -->

                    <li class="row">

                        <div class="col-sm-6">

                            <label for="postal_code" class="required">Zip/Postal Code</label>
                            <input class="input form-control" type="text" name="postal_code" id="postal_code">
                        </div><!--/ [col] -->

                        <div  class="col-sm-6">
                            <label class="required">Country</label>
                            <select class="input form-control" name="country" required="required">
                                <option value="" >------Choose Country------</option>
                                <?php foreach ($countries as $key => $value): ?>

                                <option value="<?php echo $value['id']; ?>" ><?php echo $value['name']; ?></option>
                                    
                                <?php endforeach ?>
                            </select>
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="telephone" class="required">Telephone</label>
                            <input class="input form-control" type="text" name="telephone" id="telephone" required="required">
                        </div><!--/ [col] -->

                        <div class="col-sm-6">
                            <label for="fax">Fax</label>
                            <input class="input form-control" type="text" name="fax" id="fax">
                        </div><!--/ [col] -->

                    </li><!--/ .row -->
                </ul>
            </div>
            <!-- //////////////// -->
         <div class="box-border">
            <div class="row">
                    <input type="radio" name="diff_bill_ship" id="same_as_billing" value="0" style="cursor:pointer; ">(Same as Billing Information)
                    <input type="radio"  checked="checked" name="diff_bill_ship" id="diff_from_billing" value="1" style="cursor:pointer;">(Different from Billing Information)
            </div>
        </div>
<!-- //////////////////////////////////////////////////////////////-->
            <div class="row">
                    <div class="col-sm-4">
                        <h3 class="checkout-sep">3. Shipping Information </h3>
                    </div> 
            </div>
            <div class="box-border" id="shipping_information">
                <ul>
                                    
                    <li class="row">
                        
                        <div class="col-sm-6">
                            
                            <label for="first_name_1" class="required">First Name</label>
                            <input class="input form-control" type="text" name="first_name_1" id="first_name_1" >

                        </div><!--/ [col] -->

                        <div class="col-sm-6">
                            
                            <label for="last_name_1" class="required">Last Name</label>
                            <input class="input form-control" type="text" name="last_name_1" id="last_name_1" >

                        </div><!--/ [col] -->

                    </li><!--/ .row -->

                    <li class="row">
                        
                        <div class="col-sm-6">
                            
                            <label for="company_name_1">Company Name</label>
                            <input class="input form-control" type="text" name="company_name_1" id="company_name_1" >

                        </div><!--/ [col] -->

                        <div class="col-sm-6">
                            
                            <label for="email_address_1" class="required">Email Address</label>
                            <input class="input form-control" type="text" name="email_address_1" id="email_address_1"  >

                        </div><!--/ [col] -->

                    </li><!--/ .row -->

                    <li class="row">

                        <div class="col-xs-12">

                            <label for="address_1" class="required">Address</label>
                            <input class="input form-control" type="text" name="address_1" id="address_1"  >

                        </div><!--/ [col] -->

                    </li><!--/ .row -->

                    <li class="row">

                        <div class="col-sm-6">
                            
                            <label for="city_1" class="required">City</label>
                            <input class="input form-control" type="text" name="city_1" id="city_1" >

                        </div><!--/ [col] -->

                        <div class="col-sm-6">

                            <label class="required">State/Province</label>

                            <div class="custom_select">

                                  <input class="input form-control" name="state_1"  >

                            </div>

                        </div><!--/ [col] -->

                    </li><!--/ .row -->

                    <li class="row">

                        <div class="col-sm-6">

                            <label for="postal_code_1" class="required">Zip/Postal Code</label>
                            <input class="input form-control" type="text" name="postal_code_1" id="postal_code_1" >

                        </div><!--/ [col] -->

                        <div class="col-sm-6">

                            <label class="required">Country</label>

                            <div class="custom_select">

                                 <select class="input form-control" name="country_1" >
                                <option value="" >------Choose Country------</option>
                                <?php foreach ($countries as $key => $value): ?>

                                <option value="<?php echo $value['id']; ?>" ><?php echo $value['name']; ?></option>
                                    
                                <?php endforeach ?>
                            </select>

                            </div>

                        </div><!--/ [col] -->

                    </li><!--/ .row -->

                    <li class="row">

                        <div class="col-sm-6">

                            <label for="telephone_1" class="required">Telephone</label>
                            <input class="input form-control" type="text" name="telephone_1" id="telephone_1" >

                        </div><!--/ [col] -->

                        <div class="col-sm-6">

                            <label for="fax_1">Fax</label>
                            <input class="input form-control" type="text" name="fax_1" id="fax_1">

                        </div><!--/ [col] -->

                    </li><!--/ .row -->

                </ul>
            </div>
            <!-- ///////////////////////////////////////////////////////// -->
            <h3 class="checkout-sep">4. Shipping Method</h3>
            <div class="box-border">
                <ul class="shipping_method">
                    <li>
                        <p class="subcaption bold">Free Shipping</p>
                        <label for="radio_button_3"><input type="radio" checked name="shipping_method" value="0" id="radio_button_3">Free $0</label>
                    </li>

                    <li>
                        <p class="subcaption bold">Free Shipping</p>
                        <label for="radio_button_4"><input type="radio" name="shipping_method"  value="1" id="radio_button_4"> Standard Shipping $5.00</label>
                    </li>
                </ul>
            </div>
            <!-- ///////////////////////////////////////////////////////////////// -->
            <h3 class="checkout-sep">5. Payment Information</h3>
            <div class="box-border">
                <ul>
                    <li>
                        <label for="radio_button_5"><input type="radio" name="payment_information" id="radio_button_5" value="0"> Check / Money order</label>
                    </li>

                    <li>
            
                        <label for="radio_button_6"><input type="radio" name="payment_information" id="radio_button_6" value="1"> Credit card (saved)</label>
                    </li>

                    <li>
                        <label for="radio_button_7"><input type="radio" checked name="payment_information" id="radio_button_7" value="2"> Cash Delivery </label>
                    </li>

                </ul>
            </div>



            <h3 class="checkout-sep"> Order Review</h3>
            <?php 
                if(count($this->cart->contents()) > 0)
                {
                    $grand_total=0;
            ?>
            <div class="box-border">
                <table class="table table-bordered table-responsive cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product">Product</th>
                            <th>Description</th>
                            <th>Avail.</th>
                            <th>Unit price</th>
                            <th>Qty</th>
                            <th>Total</th>
                             <th>Total in Dollar</th>
                            <th  class="action"><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                    $folder_path="uploads/product/";
                    foreach($this->cart->contents() as $key => $rows)
                    {
                        $product_detail=$this->crud->get_detail($rows['id'],"product_code","products");
                ?>
                            <tr>
                            <td class="cart_product">
                                <a href="<?php echo $folder_path.$product_detail['product_code']."_1.".$product_detail['product_image_1']; ?>">
                                    <img src="<?php echo $folder_path.$product_detail['product_code']."_1.".$product_detail['product_image_1']; ?>" alt="Product">
                                </a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name">
                                    <a href="<?php echo site_url('products/products_detail/show/'.$product_detail['product_slug']); ?>">
                                    <?php echo $product_detail['product_title']; ?> 
                                    </a>
                                </p>
                                <small class="cart_ref">Product Code : <?php echo $product_detail['product_code']; ?></small><br>
                            <?php     
                                if(isset($product_detail['product_color']) && $product_detail['product_color'] !="")
                                        { 
                             ?>   
                                <small>Color : <?php echo $rows['options']['color']; ?></small><br>
                            <?php
                                    }
                        ?> 
                            <?php     
                                if(isset($product_detail['product_size']) && $product_detail['product_size'] !="")
                                        { 
                             ?>   
                                <small>Size : <?php echo $rows['options']['size']; ?></small>
                            <?php
                                    }
                        ?>
                            </td>
                            <td class="cart_avail"><span class="label label-<?php echo ($product_detail['counts'] > 0)?"success":"danger"; ?>"><?php echo ($product_detail['counts'] > 0)?"In Stock":"Out Of Stock"; ?></span></td>
                            <td class="price"><span><?php echo $product_detail['product_price_currency']." ".number_format($rows['price'],3); ?></span></td>
                            <td class="qty">
                                <?php echo $rows['qty']; ?>
                            </td>
                            <td class="price">
                                <span><?php echo $product_detail['product_price_currency']." ".number_format($rows['subtotal'],3); ?></span>
                            </td>
                            <td class="price">
                                <span>
                <?php 
                    $npr_sub_total = $this->crud->currency_conversion($product_detail['product_price_currency'],$rows['subtotal']);
                    echo ($product_detail['counts'] > 0) ?"NPR ".number_format($npr_sub_total,3) : "0 (out of stock)"; 
                    if($product_detail['counts'] > 0 )
                    {
                        $grand_total +=   $npr_sub_total; 
                    }
                    else
                    {
                         $grand_total =  $grand_total+0; 
                    }
                ?>
                                </span>
                            <td class="action">
                                <a href="<?php echo site_url('order/order/remove_cart/'.$rows['rowid']); ?>">Delete item</a>
                            </td>
                        </tr>
                <?php       
                    }
                    $grand_total_tax = ((100+$settings['tax'])/100)*$grand_total;
                    $grand_total_tax = round($grand_total_tax,3);
                ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" rowspan="3"></td>
                            <td colspan="3">Total (discluding Tax.)</td>
                            <td colspan="2"><?php echo  "NPR ".number_format($grand_total,3) ;?></td>
                        </tr>
                        <tr>
                            <td colspan="3">Total Tax (<?php echo $settings['tax']; ?>%)</td>
                            <td colspan="2"><?php echo  "NPR ".number_format((($settings['tax']/100)*$grand_total),3) ;?></td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Total</strong></td>
                            <td colspan="2"><strong><?php echo  "NPR ".number_format($grand_total_tax,3) ;?></strong></td>
                        </tr>
                    </tfoot>    
                </table>
            <?php 
                }
                else
                {
            ?>
                            <h2>Cart List is Empty!</h2>
                            <h4>Sorry! Currently there is no item in your shopping cart.</h4>
                            <p>Please <a href="<?php echo site_url(''); ?>" class="btn btn-primary btn-sm">Continue Shopping</a> to add item in your card.</p>
            <?php
                }
            ?>
                <input type="hidden" name="size" value="<?= $grand_total_tax;?>">
                <input type="hidden" name="color" value="<?= $grand_total_tax;?>">
                <input type="hidden" name="grand_total_tax" value="<?= $grand_total_tax;?>">
                <button  type="submit" class="button pull-right">Place Order</button>
            </div>
        </div> 
     </form>               <!-- end of guest div -->
        </div>
    </div>
</div>
<!-- ./page wapper-->
<script>
    $(document).ready(function(){
        $("#guest_radio").click(function(){
             $("#guest_div").show();
             $("#registration_body").hide();
         });

        $("#register_radio").click(function(){
             $("#guest_div").hide();
             $("#registration_body").show();
         });

        $("#guest_radio").each(function(){
            if($(this).is(":checked")) 
            {
                 $("#guest_div").show();
                 $("#registration_body").hide();
            }
         });

       $("#register_radio").each(function(){
            if($(this).is(":checked")) 
            {
                 $("#guest_div").hide();
                 $("#registration_body").show();
            }
         });

        $("#shipping_information").each(function(){
            if($(this).is(":visible")) 
            {
                 $("#registration_body").hide();
            }
         });

        $("#same_as_billing").click(function(){
             $("#shipping_information").hide();
        });

        $("#diff_from_billing").click(function(){
             $("#shipping_information").show();
         });

    });
</script>