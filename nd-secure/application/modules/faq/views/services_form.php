<div class="row">
    <div class="col-lg-12">
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
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <?php echo (isset($title) && $title != "") ? $title : ""; ?>
            </div>

            <div class="panel-body">

                <form class="tab_form" method="post" action="" enctype="multipart/form-data">
                    <div class="tab-content">

                        <div class="tab-pane fade active in" id="home">

                            <table class="form-table">
                                <tbody>


                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Services
                                            Title <span class="asterisk">*</span>
                                        </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="services_title" data-validation-allowing="float"
                                               size="50" data-validation="required"
                                               value="<?php echo (isset($detail['services_title']) && $detail['services_title'] != "") ? $detail['services_title'] : ""; ?>"
                                               autocomplete="off" class="regular-text required valid"
                                               kl_virtual_keyboard_secure_input="on"></td>
                                </tr>

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Detail
                                             <span class="asterisk">*</span>
                                        </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="services_caption" data-validation-allowing="float"
                                               size="50" data-validation="required"
                                               value="<?php echo (isset($detail['services_caption']) && $detail['services_caption'] != "") ? $detail['services_caption'] : ""; ?>"
                                               autocomplete="off" class="regular-text required valid"
                                               kl_virtual_keyboard_secure_input="on"></td>
                                </tr>

                                <tr valign="top" id="featured_img">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Services Image</label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <?php
                                        $path  =  '../uploads/services/';
                                        if(isset($detail['services_image']) && file_exists($path.$detail['services_image']))
                                        {

                                            ?>
                                            <div class="remove_option">


                                                <img src="<?php echo $path. $detail['services_image'];?>"  style="max-width: 940px; max-height: 360px;">

                                                <span class="btn btn-info remove_btn" id="btn_remove">Remove</span>
                                            </div>
                                            <input type="hidden" name="pre_services_image" value="<?php echo $detail['services_image']; ?>">
                                            <div id="image_input">
                                                <input type="file" name="services_image" id="services_image">(Image Dimension 800*358 px)
                                                <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20.</p>
                                            </div>
                                        <?php
                                        }
                                        else
                                        {
                                            ?>

                                            <span>(Image Dimension 800*358 px)</span>
                                            <input type="file" name="services_image"  id="services_image">
                                            <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                            <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20MB.</p>
                                        <?php
                                        }
                                        ?>


                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Status <span class="asterisk">*</span>
                                        </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%; padding-top: 10px;">
                                        <input type="radio" name="publish_status" <?php echo (isset($detail['publish_status']) && $detail['publish_status'] == "1") ?"checked":""; ?> value="1"  data-validation="required" autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">Active
                                        <input type="radio" name="publish_status" <?php echo (isset($detail['publish_status']) && $detail['publish_status'] == "0") ?"checked":""; ?> value="0"  data-validation="required" autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">Inactive
                                     </td>
                                </tr>

                                </tbody>
                            </table>


                        </div>


                        <p class="submit">
                            <input type="hidden" name="services_id"
                                   value="<?php echo (isset($detail['services_id']) && $detail['services_id'] != "") ? $detail['services_id'] : ""; ?>">
                            <input type="submit" name="Setting Btn" id="services_btn" class="button" value="Save">
                        </p>


                    </div>
                </form>
            </div>
        </div>


    </div>
</div>
<script>
    $.validate();
</script>
<script>

    $('#services_btn').click(function(e)
    {

        var a=0;

        var ext1 =  $('#services_image').val().split('.').pop().toLowerCase();


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
            alert('Invalid Services Image');
            e.preventDefault();
        }

        else{

            e.submit;

        }


    });
</script>