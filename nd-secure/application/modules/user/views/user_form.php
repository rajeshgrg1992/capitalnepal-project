

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
                        <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>.
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
                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row">
                                                        <label>User Name<span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">

                                                        <input type="text" name="username" class="form-control" size="50" data-validation="required"
                                                               value="<?php echo (isset($User['username']) && $User['username'] != "") ? $User['username'] : ""; ?>"
                                                               autocomplete="off" class="regular-text required valid"
                                                               kl_virtual_keyboard_secure_input="on"></td>
                                                </tr>


                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row">
                                                        <label>Email<span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">

                                                        <input type="text" name="email" class="form-control" size="50" data-validation="required"
                                                               value="<?php echo (isset($User['email']) && $User['email'] != "") ? $User['email'] : ""; ?>"
                                                               autocomplete="off" class="regular-text required valid"
                                                               kl_virtual_keyboard_secure_input="on"></td>
                                                </tr>


                                                <tr valign="top">
                                                    <?php
                                                    if (!isset($User['password'])) {


                                                    ?>
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row">
                                                        <label>Password<span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">

                                                        <input type="password" name="password" class="form-control" size="50" data-validation="required"
                                                               autocomplete="off" class="regular-text required valid"
                                                               kl_virtual_keyboard_secure_input="on">

                                                        <?php } ?>
                                                    </td>
                                                </tr>


                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row">
                                                        <label>User Type <span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">


                                                        <input type="radio" name="permission"
                                                               value="0" data-validation=""
                                                               autocomplete="off" class="regular-text required valid"
                                                               kl_virtual_keyboard_secure_input="on" <?php if(isset($User['permission'])&&$User['permission']=='0') echo 'checked="checked"'?> >Admin


                                                        <input type="radio" name="permission"
                                                               value="1" data-validation="required"
                                                               autocomplete="off" class="regular-text required valid"
                                                               kl_virtual_keyboard_secure_input="on" <?php if(isset($User['permission'])&&$User['permission']=='1') echo 'checked="checked"'?>>Normal


                                                </tr>
                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row">
                                                        <label>Status <span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">


                                                        <input type="radio" name="status"
                                                               value="0" data-validation=""
                                                               autocomplete="off" class="regular-text required valid"
                                                               kl_virtual_keyboard_secure_input="on" <?php if(isset($User['status'])&&$User['status']=='0') echo 'checked="checked"'?> >Inactive


                                                        <input type="radio" name="status"
                                                               value="1" data-validation="required"
                                                               autocomplete="off" class="regular-text required valid"
                                                               kl_virtual_keyboard_secure_input="on" <?php if(isset($User['status'])&&$User['status']=='1') echo 'checked="checked"'?>>Active


                                                </tr>
                                                 <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row">
                                                        <label>User Image<span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">

                                                         <?php
                                                            $path  =  '../uploads/admin_users/';
                                                            if(isset($User['image_name']) && file_exists($path.$User['image_name']))
                                                            {

                                                                ?>
                                                                <div class="remove_option">


                                                                    <img src="<?php echo $path. $User['image_name'];?>"  width="30%">

                                                                    <span class="btn btn-info remove_btn" id="btn_remove">Remove</span>
                                                                </div>
                                                                <input type="hidden" name="pre_image_name" class="form-control" value="<?php echo $User['image_name']; ?>">
                                                                <div id="image_input">
                                                                    <input type="file" name="image_name" id="user_image">(Image Dimension 160*160 px)
                                                                    <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                                    <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20.</p>
                                                                </div>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>

                                                                <span>(Image Dimension 160*160 px)</span>
                                                                <input type="file" name="image_name" class="form-control"  id="user_image">
                                                                <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                                <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20MB.</p>
                                                                <?php
                                                            }
                                                            ?>
                                                </tr>


                                                </tbody>
                                            </table>


                                        </div>




                                        <p class="submit">
                                            <input type="hidden" name="user_id"
                                                   value="<?php echo (isset($User['user_id']) && $User['user_id'] != "") ? $User['user_id'] : ""; ?>">
                                            <input type="submit" name="Setting Btn" id="user_btn" class="button" value="Save">
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
    $('#user_btn').click(function(e)
    {

        var a=0;

        var ext1 =  $('#user_image').val().split('.').pop().toLowerCase();


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
            alert('Invalid User Image');
            e.preventDefault();
        }

        else{

            e.submit;

        }


    });
</script>

