

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
                        <h3 class="box-title">Data Table With Full Features</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <?php echo (isset($title) && $title !="") ? $title:""; ?>
                            </div>

                            <div class="panel-body">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#home" data-toggle="tab">General</a>
                                    </li>

                                    <li class=""><a href="#settings" data-toggle="tab">Meta Settings</a>
                                    </li>
                                    <li class=""><a href="#home_setting" data-toggle="tab">Home Work</a>
                                    </li>
                                    <li class=""><a href="#home_service" data-toggle="tab">Home Titles</a>
                                    </li>
                                    <li class=""><a href="#home_counter" data-toggle="tab">Home Others</a>
                                    </li>



                                </ul>
                                <form class="tab_form" method="post" action="<?php echo site_url('site_settings/site_form');?>" enctype="multipart/form-data">
                                    <div class="tab-content">

                                        <div class="tab-pane fade active in" id="home">

                                            <table class="form-table content-adjustment">
                                                <tbody>
                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="admin_name">Site Name <span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;"><input type="text" name="site_name" class="form-control" id="admin_name" size="50" value="<?php echo (isset($setting['site_name']) && $setting['site_name'] !="") ? $setting['site_name']:""; ?>" required="required" autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on"></td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="slogan">Slogan<span class="asterisk">*</span> </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;"><input type="text" name="site_slogan" class="form-control" id="slogan" class="regular-text" required="required"  size="50" value="<?php echo (isset($setting['site_name']) && $setting['site_slogan'] !="") ? $setting['site_slogan']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on"></td>
                                                </tr>
                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="feedback_email">Website Url<span class="asterisk">*</span> </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;"><input type="text" name="site_url" class="form-control"  value="<?php echo (isset($setting['site_url']) && $setting['site_url'] !="") ? $setting['site_url']:""; ?>" required="required" size="50" autocomplete="off" class="regular-text required" kl_virtual_keyboard_secure_input="on">

                                                    </td>

                                                </tr>
                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Profile/Broucher </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="profile" size="50" class="form-control" value="<?php echo (isset($setting['profile']) && $setting['profile'] !="") ? $setting['profile']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>
                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Opening Hours </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="time_hour" class="form-control" size="50" value="<?php echo (isset($setting['time_hour']) && $setting['time_hour'] !="") ? $setting['time_hour']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="feedback_email">Feedback Email<span class="asterisk">*</span> </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;"><input type="text" name="feedback_email" class="form-control" id="feedback_email" value="<?php echo (isset($setting['feedback_email']) && $setting['feedback_email'] !="") ? $setting['feedback_email']:""; ?>" required="required" size="50" autocomplete="off" class="regular-text required" kl_virtual_keyboard_secure_input="on"></td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="contact_number">Contact<span class="asterisk">*</span> </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;"><input type="text" name="contact_number" class="form-control" id="contact_number" value="<?php echo (isset($setting['contact_number']) && $setting['contact_number'] !="") ? $setting['contact_number']:""; ?>" required="required" size="50" autocomplete="off" class="regular-text required" kl_virtual_keyboard_secure_input="on"></td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>WhatsApp </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="whatsapp" class="form-control" size="50" value="<?php echo (isset($setting['whatsapp']) && $setting['whatsapp'] !="") ? $setting['whatsapp']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="contact_address">Address<span class="asterisk">*</span> </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;"><input type="text" name="contact_address" class="form-control" id="contact_address" value="<?php echo (isset($setting['contact_address']) && $setting['contact_address'] !="") ? $setting['contact_address']:""; ?>" required="required" size="50" autocomplete="off" class="regular-text required" kl_virtual_keyboard_secure_input="on"></td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Skype </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="skype" id="skype_name" class="form-control" size="50" value="<?php echo (isset($setting['skype']) && $setting['skype'] !="") ? $setting['skype']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Facebook URL </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="facebook_link" class="form-control"  size="50"  value="<?php echo (isset($setting['facebook_link']) && $setting['facebook_link'] !="") ? $setting['facebook_link']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Twitter URL </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="twiter_link" class="form-control"  size="50" value="<?php echo (isset($setting['twiter_link']) && $setting['twiter_link'] !="") ? $setting['twiter_link']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>YouTube URL </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="youtube_link" class="form-control"  size="50" value="<?php echo (isset($setting['youtube_link']) && $setting['youtube_link'] !="") ? $setting['youtube_link']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Google+ </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="google_plus_link" class="form-control" size="50" value="<?php echo (isset($setting['google_plus_link']) && $setting['google_plus_link'] !="") ? $setting['google_plus_link']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>
                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Linked In </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="linked_in" class="form-control" size="50" value="<?php echo (isset($setting['linked_in']) && $setting['linked_in'] !="") ? $setting['linked_in']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>
                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Instagram </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="instagram" class="form-control" size="50" value="<?php echo (isset($setting['instagram']) && $setting['instagram'] !="") ? $setting['instagram']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Location Map </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <textarea name="location_map" class="form-control"  rows="5" cols="80"><?php echo (isset($setting['location_map']) && $setting['location_map'] !="") ? $setting['location_map']:""; ?></textarea>




                                                    </td>
                                                </tr>
                                                <tr valign="top" class="contact_detail">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row">
                                                        <label>Contact Details</label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <textarea rows="5" cols="10" name="contact_details" class="form-control" id="contact-detail"><?php echo (isset($setting['contact_details']) && $setting['contact_details'] !="") ? $setting['contact_details']:""; ?></textarea>
                                                    </td>
                                                </tr>


                                                </tbody>
                                            </table>


                                        </div>

                                        <div class="tab-pane fade" id="settings">

                                            <table class="form-table content-adjustment">

                                                <tbody><tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="meta_title">Meta Title</label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="meta_title" class="form-control" id="meta_title" size="28" value="<?php echo (isset($setting['meta_title']) && $setting['meta_title'] !="") ? $setting['meta_title']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="meta_description">Meta Description </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <textarea name="meta_description" class="form-control" id="meta_description" rows="5" cols="100"><?php echo (isset($setting['meta_description']) && $setting['meta_description'] !="") ? $setting['meta_description']:""; ?></textarea><br>

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="meta_keyword">Meta Keyword</label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <textarea name="meta_keywords" class="form-control" id="meta_keywords" rows="5" cols="100"><?php echo (isset($setting['meta_keywords']) && $setting['meta_keywords'] !="") ? $setting['meta_keywords']:""; ?></textarea><br>

                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>

                                        </div>


                                        <div class="tab-pane fade" id="home_setting">

                                            <table class="form-table content-adjustment">

                                                <tbody><tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="meta_title">About Title</label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="home_title" class="form-control" id="meta_title" size="28" value="<?php echo (isset($setting['home_title']) && $setting['meta_title'] !="") ? $setting['home_title']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="home_description">Description </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <textarea name="home_description" class="form-control" id="home_description" rows="5" cols="100"><?php echo (isset($setting['home_description']) && $setting['home_description'] !="") ? $setting['home_description']:""; ?></textarea><br>

                                                    </td>
                                                </tr>



                                                </tbody>
                                            </table>

                                        </div>

                                        <div class="tab-pane fade" id="home_service">

                                            <table class="form-table content-adjustment">

                                                <tbody>
                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="service_title_one">Tab one</label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="service_title_one" class="form-control" id="service_title_one" size="28" value="<?php echo (isset($setting['service_title_one']) && $setting['service_title_one'] !="") ? $setting['service_title_one']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="home_description">Description </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <textarea name="service_description_one" class="form-control" id="service_description_one" rows="5" cols="100"><?php echo (isset($setting['service_description_one']) && $setting['service_description_one'] !="") ? $setting['service_description_one']:""; ?></textarea><br>

                                                    </td>
                                                </tr>


                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="service_title_two">Tab Two</label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="service_title_two" class="form-control" id="service_title_two" size="28" value="<?php echo (isset($setting['service_title_two']) && $setting['service_title_two'] !="") ? $setting['service_title_two']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="home_description">Description </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <textarea name="service_description_two" class="form-control" id="service_description_two" rows="5" cols="100"><?php echo (isset($setting['service_description_two']) && $setting['service_description_two'] !="") ? $setting['service_description_two']:""; ?></textarea><br>

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="service_title_three">Tab Three</label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="service_title_three" class="form-control" id="service_title_three" size="28" value="<?php echo (isset($setting['service_title_three']) && $setting['service_title_three'] !="") ? $setting['service_title_three']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="service_description_three">Description </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <textarea name="service_description_three" class="form-control" id="service_description_three" rows="5" cols="100"><?php echo (isset($setting['service_description_three']) && $setting['service_description_three'] !="") ? $setting['service_description_three']:""; ?></textarea><br>

                                                    </td>
                                                </tr>


                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="service_title_five">Tab Four</label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="service_title_five" class="form-control" id="service_title_five" size="28" value="<?php echo (isset($setting['service_title_five']) && $setting['service_title_five'] !="") ? $setting['service_title_five']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="service_description_five">Description </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <textarea name="service_description_five" class="form-control" id="service_description_five" rows="5" cols="100"><?php echo (isset($setting['service_description_five']) && $setting['service_description_five'] !="") ? $setting['service_description_five']:""; ?></textarea><br>

                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>

                                        </div>


                                        <div class="tab-pane fade" id="home_counter">

                                            <table class="form-table content-adjustment">

                                                <tbody>
                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="counter_one">Tab one</label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="counter_one" class="form-control" id="counter_one" size="28" value="<?php echo (isset($setting['counter_one']) && $setting['counter_one'] !="") ? $setting['counter_one']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="counter_one_description">Description </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <textarea name="counter_one_description" class="form-control" id="counter_one_description" rows="5" cols="100"><?php echo (isset($setting['counter_one_description']) && $setting['counter_one_description'] !="") ? $setting['counter_one_description']:""; ?></textarea><br>

                                                    </td>
                                                </tr>


                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="counter_two">Tab Two</label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="counter_two" class="form-control" id="counter_two" size="28" value="<?php echo (isset($setting['counter_two']) && $setting['counter_two'] !="") ? $setting['counter_two']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="home_description">Description </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <textarea name="counter_two_description" class="form-control" id="counter_two_description" rows="5" cols="100"><?php echo (isset($setting['counter_two_description']) && $setting['counter_two_description'] !="") ? $setting['counter_two_description']:""; ?></textarea><br>

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="counter_three">Tab Three</label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="counter_three" class="form-control" id="counter_three" size="28" value="<?php echo (isset($setting['counter_three']) && $setting['counter_three'] !="") ? $setting['counter_three']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="service_description_three">Description </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <textarea name="counter_three_description" class="form-control" id="counter_three_description" rows="5" cols="100"><?php echo (isset($setting['counter_three_description']) && $setting['counter_three_description'] !="") ? $setting['counter_three_description']:""; ?></textarea><br>

                                                    </td>
                                                </tr>


                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="counter_four">Tab Four</label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="counter_four" class="form-control" id="counter_four" size="28" value="<?php echo (isset($setting['counter_four']) && $setting['counter_four'] !="") ? $setting['counter_four']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="service_description_five">Description </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <textarea name="counter_four_description" class="form-control" id="counter_four_description" rows="5" cols="100"><?php echo (isset($setting['counter_four_description']) && $setting['counter_four_description'] !="") ? $setting['counter_four_description']:""; ?></textarea><br>

                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>

                                        </div>






                                        <p class="submit">
                                            <input type="hidden" name="id" value="<?php echo (isset($setting['id']) && $setting['id'] !="") ? $setting['id']:""; ?>">
                                            <input type="submit" name="Setting Btn" class="button" value="Save Settings">
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







<div class="row">
    <div class="col-lg-12">

    </div>
</div>
<div class="row">
<div class="col-md-12">



</div>
</div>
<script>
    CKEDITOR.replace( 'contact-detail'  ,{

        filebrowserBrowseUrl : '/charteredtax/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/dubaisetup/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/dubaisetup/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );


    KEDITOR.replace( 'contact-detail' );
</script>