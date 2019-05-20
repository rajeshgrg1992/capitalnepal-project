

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

                                <form class="tab_form" method="post" action="" enctype="multipart/form-data">
                                    <div class="tab-content">

                                        <div class="tab-pane fade active in" id="home">

                                            <table class="form-table content-adjustment">
                                                <tbody>  
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="employee">Banner Feautre 1 (Title): <span class="asterisk">*</span></label>
                                                            <input type="text" name="bf_title_1" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['bf_title_1']) && $detail['bf_title_1'] != "") ? $detail['bf_title_1'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="employee">URL: </label>
                                                            <input type="text" name="bf_url_1" class="form-control" data-validation-allowing="float"
                                                                   size="50" 
                                                                   value="<?php echo (isset($detail['bf_url_1']) && $detail['bf_url_1'] != "") ? $detail['bf_url_1'] : ""; ?>" autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                     <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="seller_Image">Image:</label>
                                                            <?php
                                                            $path  =  '../uploads/banner_feature/';
                                                            if(isset($detail['bf_img_1']) && file_exists($path.$detail['bf_img_1']))
                                                            {

                                                                ?>
                                                                <div class="remove_option">


                                                                    <img src="<?php echo $path. $detail['bf_img_1'];?>"  width="30%">

                                                                    
                                                                </div>
                                                                <input type="hidden" name="pre_bf_img_1" class="form-control" value="<?php echo $detail['bf_img_1']; ?>">
                                                                <div id="image_input">
                                                                    <input type="file" name="bf_img_1" id="bf_img_1">(Image Dimension 400*400 px)
                                                                    <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                                    <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20.</p>
                                                                </div>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>

                                                                <span>(Image Dimension 400*400 px)</span>
                                                                <input type="file" name="bf_img_1" class="form-control"  id="bf_img_1">
                                                                <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                                <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20MB.</p>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="employee">Short Description: <span class="asterisk">*</span></label>
                                                            <input type="text" name="bf_des_1" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['bf_des_1']) && $detail['bf_des_1'] != "") ? $detail['bf_des_1'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="employee">Banner Feautre 2 (Title): <span class="asterisk">*</span></label>
                                                            <input type="text" name="bf_title_2" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['bf_title_2']) && $detail['bf_title_2'] != "") ? $detail['bf_title_2'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="employee">URL: </label>
                                                            <input type="text" name="bf_url_2" class="form-control" data-validation-allowing="float"
                                                                   size="50"
                                                                   value="<?php echo (isset($detail['bf_url_2']) && $detail['bf_url_2'] != "") ? $detail['bf_url_2'] : ""; ?>" autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                     <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="seller_Image">Image:</label>
                                                            <?php
                                                            $path  =  '../uploads/banner_feature/';
                                                            if(isset($detail['bf_img_2']) && file_exists($path.$detail['bf_img_2']))
                                                            {

                                                                ?>
                                                                <div class="remove_option">


                                                                    <img src="<?php echo $path. $detail['bf_img_2'];?>"  width="30%">

                                                                    
                                                                </div>
                                                                <input type="hidden" name="pre_bf_img_2" class="form-control" value="<?php echo $detail['bf_img_2']; ?>">
                                                                <div id="image_input">
                                                                    <input type="file" name="bf_img_2" id="bf_img_2">(Image Dimension 400*400 px)
                                                                    <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                                    <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20.</p>
                                                                </div>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>

                                                                <span>(Image Dimension 400*400 px)</span>
                                                                <input type="file" name="bf_img_2" class="form-control"  id="bf_img_2">
                                                                <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                                <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20MB.</p>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="employee">Short Description: <span class="asterisk">*</span></label>
                                                            <input type="text" name="bf_des_2" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['bf_des_2']) && $detail['bf_des_2'] != "") ? $detail['bf_des_2'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="employee">Banner Feautre 3 (Title): <span class="asterisk">*</span></label>
                                                            <input type="text" name="bf_title_3" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['bf_title_3']) && $detail['bf_title_3'] != "") ? $detail['bf_title_3'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="employee">URL: </label>
                                                            <input type="text" name="bf_url_3" class="form-control" data-validation-allowing="float"
                                                                   size="50" 
                                                                   value="<?php echo (isset($detail['bf_url_3']) && $detail['bf_url_3'] != "") ? $detail['bf_url_3'] : ""; ?>" autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                     <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="seller_Image">Image:</label>
                                                            <?php
                                                            $path  =  '../uploads/banner_feature/';
                                                            if(isset($detail['bf_img_3']) && file_exists($path.$detail['bf_img_3']))
                                                            {

                                                                ?>
                                                                <div class="remove_option">


                                                                    <img src="<?php echo $path. $detail['bf_img_3'];?>"  width="30%">

                                                                    
                                                                </div>
                                                                <input type="hidden" name="pre_bf_img_3" class="form-control" value="<?php echo $detail['bf_img_3']; ?>">
                                                                <div id="image_input">
                                                                    <input type="file" name="bf_img_3" id="bf_img_3">(Image Dimension 400*400 px)
                                                                    <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                                    <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20.</p>
                                                                </div>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>

                                                                <span>(Image Dimension 400*400 px)</span>
                                                                <input type="file" name="bf_img_3" class="form-control"  id="bf_img_3">
                                                                <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                                <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20MB.</p>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="employee">Short Description: <span class="asterisk">*</span></label>
                                                            <input type="text" name="bf_des_3" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['bf_des_3']) && $detail['bf_des_3'] != "") ? $detail['bf_des_3'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="employee">Banner Feautre 4 (Title): <span class="asterisk">*</span></label>
                                                            <input type="text" name="bf_title_4" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['bf_title_4']) && $detail['bf_title_4'] != "") ? $detail['bf_title_4'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="employee">URL: </label>
                                                            <input type="text" name="bf_url_4" class="form-control" data-validation-allowing="float"
                                                                   size="50"
                                                                   value="<?php echo (isset($detail['bf_url_4']) && $detail['bf_url_4'] != "") ? $detail['bf_url_4'] : ""; ?>" autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                     <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="seller_Image">Image:</label>
                                                            <?php
                                                            $path  =  '../uploads/banner_feature/';
                                                            if(isset($detail['bf_img_4']) && file_exists($path.$detail['bf_img_4']))
                                                            {

                                                                ?>
                                                                <div class="remove_option">


                                                                    <img src="<?php echo $path. $detail['bf_img_4'];?>"  width="30%">

                                                                    
                                                                </div>
                                                                <input type="hidden" name="pre_bf_img_4" class="form-control" value="<?php echo $detail['bf_img_4']; ?>">
                                                                <div id="image_input">
                                                                    <input type="file" name="bf_img_4" id="bf_img_4">(Image Dimension 400*400 px)
                                                                    <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                                    <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20.</p>
                                                                </div>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>

                                                                <span>(Image Dimension 400*400 px)</span>
                                                                <input type="file" name="bf_img_4" class="form-control"  id="bf_img_4">
                                                                <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                                <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20MB.</p>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="employee">Short Description: <span class="asterisk">*</span></label>
                                                            <input type="text" name="bf_des_4" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['bf_des_4']) && $detail['bf_des_4'] != "") ? $detail['bf_des_4'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                  </div>
                                                  <hr>
                                                </tbody>
                                              </table>
                                                 
                                        <p class="submit">
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