

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
                    <div class="box-header">
                        <h3 class="box-title"> <?php echo (isset($title) && $title != "") ? $title : ""; ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="panel panel-info">

                            <div class="panel-body">

                                <form class="tab_form" method="post" action="" enctype="multipart/form-data">
                                    <div class="tab-content">

                                        <div class="tab-pane fade active in" id="home">

                                            <table class="form-table content-adjustment">
                                                <tbody>


                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>pictures
                                                            Title <span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="pictures_title" class="form-control" data-validation-allowing="float"
                                                               size="50" data-validation="required"
                                                               value="<?php echo (isset($detail['pictures_title']) && $detail['pictures_title'] != "") ? $detail['pictures_title'] : ""; ?>"
                                                               autocomplete="off" class="regular-text required valid"
                                                               kl_virtual_keyboard_secure_input="on"></td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Caption
                                                            <span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="pictures_caption" class="form-control" data-validation-allowing="float"
                                                               size="50" data-validation="required"
                                                               value="<?php echo (isset($detail['pictures_caption']) && $detail['pictures_caption'] != "") ? $detail['pictures_caption'] : ""; ?>"
                                                               autocomplete="off" class="regular-text required valid"
                                                               kl_virtual_keyboard_secure_input="on"></td>
                                                </tr>

                                                <tr valign="top" id="featured_img">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label> Image</label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <?php
                                                        $path  =  '../uploads/pictures/';
                                                        if(isset($detail['pictures_image']) && file_exists($path.$detail['pictures_image']))
                                                        {

                                                            ?>
                                                            <div class="remove_option">


                                                                <img src="<?php echo $path. $detail['pictures_image'];?>"  style="max-width: 940px; max-height: 360px;">

                                                                <span class="btn btn-info remove_btn" id="btn_remove">Remove</span>
                                                            </div>
                                                            <input type="hidden" name="pre_pictures_image" class="form-control" value="<?php echo $detail['pictures_image']; ?>">
                                                            <div id="image_input">
                                                                <input type="file" name="pictures_image" id="pictures_image">(Image Dimension 853*405 px)
                                                                <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                                <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20.</p>
                                                            </div>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>

                                                            <span>(Image Dimension 853*405 px)</span>
                                                            <input type="file" name="pictures_image" class="form-control"  id="pictures_image">
                                                            <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                            <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20MB.</p>
                                                            <?php
                                                        }
                                                        ?>


                                                    </td>
                                                </tr>
                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Picture For <span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%; padding-top: 10px;">
                                                        <input type="radio" name="locate" <?php echo (isset($detail['locate']) && $detail['locate'] == "1") ?"checked":""; ?> value="1"  data-validation="required" autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">Logo
                                                        <input type="radio" name="locate" <?php echo (isset($detail['locate']) && $detail['locate'] == "2") ?"checked":""; ?> value="2"  data-validation="required" autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">Best Logo
                                                        <input type="radio" name="locate" <?php echo (isset($detail['locate']) && $detail['locate'] == "3") ?"checked":""; ?> value="3"  data-validation="required" autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">Why Choose us
                                                        <input type="radio" name="locate" <?php echo (isset($detail['locate']) && $detail['locate'] == "4") ?"checked":""; ?> value="4"  data-validation="required" autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">Our Clients
                                                        <input type="radio" name="locate" <?php echo (isset($detail['locate']) && $detail['locate'] == "5") ?"checked":""; ?> value="5"  data-validation="required" autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">Counter
                                                        <input type="radio" name="locate" <?php echo (isset($detail['locate']) && $detail['locate'] == "6") ?"checked":""; ?> value="6"  data-validation="required" autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">Quote Page
                                                        <input type="radio" name="locate" <?php echo (isset($detail['locate']) && $detail['locate'] == "7") ?"checked":""; ?> value="7"  data-validation="required" autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">Footer Background

                                                    </td>
                                                </tr>





                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Status <span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%; padding-top: 10px;">
                                                        <br />
                                                        <input type="radio" name="publish_status" <?php echo (isset($detail['publish_status']) && $detail['publish_status'] == "1") ?"checked":""; ?> value="1"  data-validation="required" autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">Active
                                                        <input type="radio" name="publish_status" <?php echo (isset($detail['publish_status']) && $detail['publish_status'] == "0") ?"checked":""; ?> value="0"  data-validation="required" autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">Inactive
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>


                                        </div>


                                        <p class="submit">
                                            <br />
                                            <input type="hidden" name="pictures_id"
                                                   value="<?php echo (isset($detail['pictures_id']) && $detail['pictures_id'] != "") ? $detail['pictures_id'] : ""; ?>">
                                            <input type="submit" name="Setting Btn" id="pictures_btn" class="button " value="Save">
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

    $('#pictures_btn').click(function(e)
    {

        var a=0;

        var ext1 =  $('#pictures_image').val().split('.').pop().toLowerCase();


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
            alert('Invalid pictures Image');
            e.preventDefault();
        }

        else{

            e.submit;

        }


    });
</script>