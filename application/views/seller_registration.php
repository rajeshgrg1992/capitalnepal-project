<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="row">
            <div class="col-sm-6">

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
            </div>
        </div>
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Company Registration</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Company Registration Form</span>
        </h2>
        <!-- ../page heading-->

        <form class="page_form" method="post" action="" enctype="multipart/form-data">
        <div class="page-content">
            
            <div class="row">
                <div class="col-sm-4">
                     <label for="company_name">Company Legal Name:<span class="asterisk">*</span></label>
                        <input id="company_name" name="company_name" type="text" class="form-control">
                       
                    <!-- <div class="box-authentication"> --> 
                        <!-- <h3>Create an account</h3> -->
                        <!-- <p>Please enter your email address to create an account.</p> -->
                        <!-- <label for="emmail_register">Email address</label> -->
                        <!-- <input id="emmail_register" type="text" class="form-control"> -->
                        <!-- <button class="button"><i class="fa fa-user"></i> Create an account</button> -->
                       
                    <!-- </div> -->
                </div>
                <div class="col-sm-4">
                    <label for="company_website">Company Website:<span class="asterisk">*</span></label>
                        <input id="company_website" name="company_website" type="text" class="form-control">
                    <!-- <div class="box-authentication"> -->
                        <!-- <h3>Already registered?</h3> -->
                        <!-- <label for="emmail_login">Email address</label> -->
                        <!-- <input id="emmail_login" type="text" class="form-control"> -->
                        <!-- <label for="password_login">Password</label> -->
                        <!-- <input id="password_login" type="password" class="form-control"> -->
                        <!-- <p class="forgot-pass"><a href="#">Forgot your password?</a></p> -->
                        <!-- <button class="button"><i class="fa fa-lock"></i> Sign in</button> -->
                        
                    <!-- </div> -->
                </div>
                <div class="col-sm-4">
                    <label for="business_type">Business Type:<span class="asterisk">*</span></label>
                        <select class="form-control business_type" name="business_type">
                            <option value="0">Choose Business Type</option>
                    <?php
                        foreach ($business_type as $key => $rows) {
                    ?>
                            <option value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
                    <?php 
                        }
                    ?>

                        </select>
                        <!-- <input id="business-type" class="business_type" type="text" class="form-control"> -->
                </div>
            </div><!--End of row-->
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="contact-info-h3">Contact Information</h2>
                </div>

            </div><!--End of row-->
            <div class="row form-info">
                 <div class="col-sm-4">
                     <label for="first_name">First Name:<span class="asterisk">*</span></label>
                     <input id="first_name" name="first_name" type="text" class="form-control" required="required">
                 </div>

                  <div class="col-sm-4">
                     <label for="middle_name">Middle Name:</label>
                     <input id="middle_name" name="middle_name" type="text" class="form-control">
                 </div>

                  <div class="col-sm-4">
                     <label for="last_name">Last Name:<span class="asterisk">*</span></label>
                     <input id="last_name" name="last_name" type="text" class="form-control" required="required">
                 </div>

            </div><!--End of row-->

            <div class="row form-info">
                 <div class="col-sm-4">
                     <label for="phone">Contact No:<span class="asterisk">*</span></label>
                     <input id="phone" name="phone" type="text" class="form-control" required="required">
                 </div>

                  <div class="col-sm-4">
                     <label for="address">Address:<span class="asterisk">*</span></label>
                     <input id="address" name="address" type="text" class="form-control" required="required">
                 </div>

                  <div class="col-sm-4">
                     <label for="country">Country:<span class="asterisk">*</span></label>
                     <!-- <input id="country" name="country" type="text" class="form-control"> -->
                     <select class="form-control" name="country" required="required">
                            <option value="">Choose Country</option>
                    <?php
                        foreach ($countries as $key => $rows) {
                    ?>
                            <option value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
                    <?php
                        }
                    ?>
                     </select>
                 </div>

            </div><!--End of row-->

             <div class="row form-info">
                 <div class="col-sm-4">
                     <label for="city">City<span class="asterisk">*</span></label>
                     <input id="city" name="city" type="text" class="form-control" required="required" >
                 </div>

                  <div class="col-sm-4">
                     <label for="state">State<span class="asterisk">*</span></label>
                     <input id="state" name="state" type="text" class="form-control" required="required">
                 </div>

                  <div class="col-sm-4">
                     <label for="zip_code">Zip-Code<span class="asterisk">*</span></label>
                     <input id="zip_code" name="zip_code" type="text" class="form-control" required="required">
                 </div>

            </div><!--End of row-->

             <div class="row form-info">
                 <div class="col-sm-4">
                     <label for="email">E-mail<span class="asterisk">*</span></label>
                     <input id="email" name="email" type="email" class="form-control" required="required">
                 </div>

                  <div class="col-sm-4">
                     <label for="seller_image">LOGO(Image dimension 400*400px)</label>
                     <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                     <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20.</p>
                     <input id="seller_image" name="seller_image" type="file" class="form-control" required="required">
                 </div>

            </div><!--End of row-->

             <div class="row">
                 <div class="col-sm-12">
                    
                     <label for="company_offer"><span class="company-offer-heading">What kind of products/services does your company offer?</span><span class="asterisk">*</span></label>
                     <textarea id="company_offer" name="company_offer" class="form-control company_offer" required="required"></textarea>
                     <!-- <input id="email" name="email" type="" class="form-control"> -->
                 </div>

                 
                 
            </div><!--End of row-->

             <div class="row company-description">
                 <div class="col-sm-12">
                    
                     <label for="description">Give Company Information about:<span class="asterisk">*</span></label>
                     <p>
                     <span class="company-info">Company Found Year</span>
                      <span class="company-info">Company Size</span>
                       <span class="company-info">Company Audience</span>
                       <span class="company-info">Geographical Target</span>
                    </p>
                     <textarea id="description" name="description" class="form-control" required="required"></textarea>
                     <!-- <input id="email" name="email" type="" class="form-control"> -->
                 </div>

                 
                 
            </div><!--End of row-->

             <div class="row username-password">
                 <div class="col-sm-4">
                     <label for="s_username">Username:<span class="asterisk">*</span></label>
                     <input id="s_username" name="s_username" type="text" placeholder="username" class="form-control" required="required">
                 </div>

                  <div class="col-sm-4">
                     <label for="s_password">Password:<span class="asterisk">*</span></label>
                        <input id="s_password" name="s_password" type="password" class="form-control" required="required">
                 </div>

                  <div class="col-sm-4">
                     <label for="s_cpassword">Confirmation Password:<span class="asterisk">*</span></label>
                     <input id="s_cpassword" name="s_cpassword" type="password" class="form-control" required="required">
                 </div>

            </div><!--End of row-->
            <div class="row">
                <div class="col-sm-12">
                    <input type="submit" name="Setting Btn" class="btn btn-primary btn-md" id="seller_btn" class="button" value="Save">
                </div>
            </div>
        </div>
     </form>
    </div>
</div>
<script>
    $.validate();
</script>
<script>

    CKEDITOR.replace( 'description'  ,{
         toolbar: [

            { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
            { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'CopyFormatting' ] },
            { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
            { name: 'align', items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
            { name: 'links', items: [ 'Link', 'Unlink' ] },
            { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
            { name: 'insert', items: [ 'Image', 'Table' ] },
            { name: 'tools', items: [ 'Maximize' ] },
            { name: 'editing', items: [ 'Scayt' ] }
        ],


        filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );

      CKEDITOR.replace( 'company_offer'  ,{
         toolbar: [

            { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
            { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'CopyFormatting' ] },
            { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
            { name: 'align', items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
            { name: 'links', items: [ 'Link', 'Unlink' ] },
            { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
            { name: 'insert', items: [ 'Image', 'Table' ] },
            { name: 'tools', items: [ 'Maximize' ] },
            { name: 'editing', items: [ 'Scayt' ] }
        ],


        filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );
</script>
<script>

    $('#seller_btn').click(function(e)
    {

        var a=0;

        var ext1 =  $('#seller_image').val().split('.').pop().toLowerCase();


        if(ext1 == "")
        {
            a = 1;
        }
        else
        {
            if($.inArray(ext1, ['gif','png','jpg','jpeg']) == -1)
            {
                a = 0
            }
            else
            {

                a = 1;
            }
        }

        if(a != "1")
        {
            alert('Invalid Employee Image');
            e.preventDefault();
        }

        else{

            e.submit;

        }


    });
</script>