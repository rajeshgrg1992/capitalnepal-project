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
                    <li><a href="<?php echo base_url(); ?>">Reset Password</a></li>
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
        <form method="POST" action="login/password_reset_link/<?php echo $this->uri->segment('3'); ?>" class="shop-account">
          <div class="__separator hidden-sm hidden-xs text-center"></div>
          <h3 class="__title text-center">Reset Password</h3>
          <div class="__sub-title font-serif fz-6-s text-center">Reset Your Account Password Below</div>
          <div class="__password">
            <h6 class="fz-6-s">New Password<span class="color-primary">*</span></h6>
            <input type="password" class="form-control" name="password" data-validation="required length" id="password"  data-validation-length="max50" tabindex="2" class="form-control"  placeholder="Password">
          <br />
          </div>
          <div class="__password">
            <h6 class="fz-6-s">Retype Password<span class="color-primary">*</span></h6>
            <input type="password" class="form-control" name="confirm_password" data-validation="required length"  id="confirm-password" data-validation-length="max50" class="form-control" placeholder="Password">
          <br />
          </div>
          <div class="__button"><button type="submit" class="btn btn-danger fullwidth no-border">RESET NOW</button></div>
          <br/>
          <input type="hidden" name="activation_code" value="<?php echo $activation_code;?>">
          <div class="__forgotten"><a href="login/register" class="color-secondary fz-6-s"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; No Account Created Yet? Register Here</a></div>
          </form>
        </div>
      </div>
    </div>
</section>
</div>
  <!--End Page Body-->

<script>
   $.validate();
</script>
<script type="text/javascript">

    $('#confirm-password').bind("cut copy paste",function(e) {
        e.preventDefault();
    });

</script>
<script>
    $('#reset-submit').click(function (e){

        $('#retype_error').text('');
        var password= $('#password').val();
        var confirmpassword= $('#confirm-password').val();

        if(password == confirmpassword)
        {
            e.submit();
        }
        else {

            $('#retype_error').text("Password Confirmation Can't Match");
            $("#retype_error").css("color","red");
            e.preventDefault();
        }


    });

</script>