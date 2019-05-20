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
<main>
    <div class="breadcrumbs">
        <div class="container-fluid">
            <div class="boxed">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">home</a></li>
                    <li><a href="<?php echo base_url(); ?>login/register">Register</a></li>
                </ul>
            </div>
        </div>
    </div>

</main>

<!--Page Body-->
<div id="page-body" class="page-body">
<section class="page-section bgc-light">
  
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xs-12 __block __login section-block">
    <?php
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
    ?>
    
        <form method="POST" action="login/register" class="shop-account">
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

          <div class="__forgotten"><a href="login" class="color-secondary fz-6-s"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; Already Have An Account? Login Here</a></div>
          </form>
        </div>
      </div>
    </div>
</section>
</div>
  <!--End Page Body-->