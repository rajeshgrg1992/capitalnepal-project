

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
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
                <?php if ($this->session->flashdata('error') != "") {

                    ?>
                    <div class="alert alert-danger alert_box">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                                    class="fa fa-times"></i></a>
                        <strong>Error!</strong>  <?php echo $this->session->flashdata('error'); ?>.
                    </div>
                    <?php
                }
                ?>
            </div>

            <div class="col-xs-12">

                <!-- /.box -->

                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <?php echo (isset($title) && $title != "") ? $title : ""; ?>
                            </div>

                            <div class="panel-body">
                               <?php
                                    if(validation_errors())
                                    {
                                        ?>
                                        <div class="alert alert-danger">
                                            <?php echo validation_errors();?>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                    if(isset($error))
                                    {
                                        ?>
                                        <div class="alert alert-danger">
                                            <?php echo $error;?>
                                        </div>
                                        <?php
                                    }
                              ?>

                                <form class="tab_form" method="post" action="" enctype="multipart/form-data">
                                    <div class="tab-content">

                                        <div class="tab-pane fade active in" id="home">

                                            <table class="form-table content-adjustment">
                                                <tbody>  
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="employee">Company Legal Name: <span class="asterisk">*</span></label>
                                                            <input type="text" name="company_name" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['company_name']) && $detail['company_name'] != "") ? $detail['company_name'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="employee">Company Website: <span class="asterisk">*</span></label>
                                                            <input type="text" name="company_website" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['company_website']) && $detail['company_website'] != "") ? $detail['company_website'] : ""; ?>" autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                <!-- /////////////////////////////////////////////////// -->
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="employee">Bussiness Type: <span class="asterisk">*</span></label>
                                                            <select name="business_type" class="form-control" required>
                                                            <?php if(count($business_type) > 0): ?>
                                                                <option value="">Choose Business Type</option>
                                                                <?php foreach($business_type as $bt): ?>
                                                                    <option value="<?php echo ucfirst($bt['id']); ?>" <?php if((isset($detail['business_type']) && $detail['business_type'] > 0)){ echo ($detail['business_type'] == $bt['id']) ? "selected" : ""; }?>>
                                                                        <?php echo ucfirst($bt['name']); ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                  </div>
                                                
                                                  <div class="row">
                                                  
                                                    <div class="col-sm-12">

                                                            <h3 style="margin-bottom: 30px;"><center>Contact Information:</center></h3>
                                                            
                                                         
                                                    </div>
                                                  </div>  
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="employee">First Name <span class="asterisk">*</span>   </label>
                                                            <input type="text" name="first_name" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['first_name']) && $detail['first_name'] != "") ? $detail['first_name'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="employee">Middle Name  </label>
                                                            <input type="text" name="middle_name" class="form-control" data-validation-allowing="float"
                                                                   size="50"
                                                                   value="<?php echo (isset($detail['middle_name']) && $detail['middle_name'] != "") ? $detail['middle_name'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>

                                                  
                                                    <div class="col-sm-4">

                                                        <div class="form-group">
                                                            <label for="employee">Last Name <span class="asterisk">*</span>   </label>
                                                            <input type="text" name="last_name" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['last_name']) && $detail['last_name'] != "") ? $detail['last_name'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="employee">Contact No: <span class="asterisk">*</span></label>
                                                            <input type="text" name="phone" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['phone']) && $detail['phone'] != "") ? $detail['phone'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">           
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="employee">Address: <span class="asterisk">*</span>   </label>
                                                            <input type="text" name="address" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['address']) && $detail['address'] != "") ? $detail['address'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

            
                                                        </div>
                                                    </div>
                                                       <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="Category"> Country <span class="asterisk">*</span></label>
                                                            <select name="country" class="form-control" required>
                                                                <?php if(count($countries) > 0): ?>
                                                                <option value="">Choose Country</option>
                                                                <?php foreach($countries as $country): ?>
                                                                    <option value="<?php echo ucfirst($country['id']); ?>" <?php if((isset($detail['country']) && $detail['country'] > 0)){ echo ($detail['country'] == $country['id']) ? "selected" : ""; }?>>
                                                                        <?php echo ucfirst($country['name']); ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    </div>


                                                <div class="row">
                                                     
                                                <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="employee">City:<span class="asterisk">*</span></label>
                                                            <input type="text" name="city" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['city']) && $detail['city'] != "") ? $detail['city'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">           
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="employee">State:<span class="asterisk">*</span></label>
                                                            <input type="text" name="state" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['state']) && $detail['state'] != "") ? $detail['state'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">           
                                                        </div>
                                                    </div>
                                                     <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="employee">Zip Code: <span class="asterisk">*</span></label>
                                                            <input type="text" name="zip_code" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['zip_code']) && $detail['zip_code'] != "") ? $detail['zip_code'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">           
                                                        </div>
                                                    </div>
                                                  </div>
                                                <div class="row">
                                                  <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="employee">Email <span class="asterisk">*</span>   </label>
                                                            <input type="email" name="email" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['email']) && $detail['email'] != "") ? $detail['email'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">

                                                        <div class="form-group">
                                                            <label for="PageType">Active Status <span class="asterisk">*</span></label>
                                                            <select name="active_status" class="publish_status form-control">

                                                                <option value="1"  <?php echo (isset($detail['active_status']) && $detail['active_status'] =="1")?"selected":"";?>>Yes</option>
                                                                <option value="0"  <?php echo (isset($detail['active_status']) && $detail['active_status'] =="0")?"selected":"";?>>No</option>



                                                            </select>
                                                        </div>
          
                                                    </div>
                                                      <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="seller_Image">Seller Image</label>
                                                            <?php
                                                            $path  =  '../uploads/sellers/';
                                                            if(isset($detail['seller_image']) && file_exists($path.$detail['seller_image']))
                                                            {

                                                                ?>
                                                                <div class="remove_option">


                                                                    <img src="<?php echo $path. $detail['seller_image'];?>"  width="30%">

                                                                    <span class="btn btn-info remove_btn" id="btn_remove">Remove</span>
                                                                </div>
                                                                <input type="hidden" name="pre_seller_image" class="form-control" value="<?php echo $detail['seller_image']; ?>">
                                                                <div id="image_input">
                                                                    <input type="file" name="seller_image" id="seller_image">(Image Dimension 400*400 px)
                                                                    <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                                    <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20.</p>
                                                                </div>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>

                                                                <span>(Image Dimension 400*400 px)</span>
                                                                <input type="file" name="seller_image" class="form-control"  id="seller_image">
                                                                <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                                <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20MB.</p>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="row">                                                
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="company_offer">What Kind of Products/Services does Your Company offer ?
                                                                 <span class="asterisk">*</span> </label>
                                                            <textarea rows="5" data-validation="required" cols="10" class="form-control" name="company_offer" id="company_offer"><?php echo (isset($detail['company_offer']) && $detail['company_offer'] != "") ? $detail['company_offer'] : ""; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" >                                                
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="employee">Company Information on:<br>
                                                              <div>
                                                              <ul class="seller_description">
                                                                <li >Company Found Year</li>
                                                                <li >Company Size</li>
                                                                <li >Company Audience</li>
                                                                <li >Geopgraphical Target</li>
                                                              </ul>
                                                          </div>
                                                            </label>
                                                             <textarea rows="5" data-validation="required" cols="10" class="form-control" name="description" id="description"><?php echo (isset($detail['description']) && $detail['description'] != "") ? $detail['description'] : ""; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                     
                                                <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="employee">Username:<span class="asterisk">*</span></label>
                                                            <input type="text" name="s_username" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required" placeholder="username"
                                                                   value="<?php echo (isset($detail['s_username']) && $detail['s_username'] != "") ? $detail['s_username'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">           
                                                        </div>
                                                    </div>
                                                <?php 
                                                      if(empty($detail['s_password']))
                                                      {
                                                ?>
                                                          <div class="col-sm-4">
                                                              <div class="form-group">
                                                                  <label for="employee">Password:<span class="asterisk">*</span></label>
                                                                  <input type="password" name="s_password" class="form-control" data-validation-allowing="float"
                                                                         size="50" placeholder="Password"
                                                                         value=""
                                                                         autocomplete="off" class="regular-text required valid"
                                                                         kl_virtual_keyboard_secure_input="on">           
                                                              </div>
                                                          </div>
                                                         <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="employee">Confirmation Password: <span class="asterisk">*</span></label>
                                                                    <input type="password" name="s_cpassword" class="form-control" data-validation-allowing="float" placeholder="Retype Password"
                                                                           size="50"
                                                                           value="<?php echo (isset($detail['s_cpassword']) && $detail['s_cpassword'] != "") ? $detail['s_cpassword'] : ""; ?>"
                                                                           autocomplete="off" class="regular-text required valid"
                                                                           kl_virtual_keyboard_secure_input="on">           
                                                                </div>
                                                    </div>
                                                <?php
                                                      }
                                                ?>
                                                    
                                                  </div>
                                              </tbody>
                                            </table>


                                        </div>


                                        <p class="submit">
                                            <input type="hidden" name="seller_id"
                                                   value="<?php echo (isset($detail['seller_id']) && $detail['seller_id'] != "") ? $detail['seller_id'] : ""; ?>">
                                            <input type="submit" name="Setting Btn" class="btn btn-primary btn-md" id="employee_btn" class="button" value="Save">
                                        </p>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



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

    $('#employee_btn').click(function(e)
    {

        var a=0;

        var ext1 =  $('#employee_image').val().split('.').pop().toLowerCase();


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