

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
                                                            <label>brands Title <span class="asterisk">*</span></label>
                                                            <input type="text" name="brands_title" data-validation-allowing="float"
                                                                   class="form-control" data-validation="required"
                                                                   value="<?php echo (isset($detail['brands_title']) && $detail['brands_title'] != "") ? $detail['brands_title'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Short Description <span class="asterisk">*</span></label>
                                                            <input type="text" name="brands_caption" data-validation-allowing="float"
                                                                   class="form-control" data-validation="required"
                                                                   value="<?php echo (isset($detail['brands_caption']) && $detail['brands_caption'] != "") ? $detail['brands_caption'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Image</label>
                                                            <?php
                                                            $path  =  '../uploads/brands/';
                                                            if(isset($detail['brands_image']) && file_exists($path.$detail['brands_image']))
                                                            {

                                                                ?>
                                                                <div class="remove_option">


                                                                    <img src="<?php echo $path. $detail['brands_image'];?>"  style="width: 20%">

                                                                    <span class="btn btn-info remove_btn" id="btn_remove">Remove</span>
                                                                </div>
                                                                <input type="hidden" class="form-control" name="pre_brands_image" value="<?php echo $detail['brands_image']; ?>">
                                                                <div id="image_input">
                                                                    <input type="file" class="form-control" name="brands_image" id="brands_image">(Image Dimension 237*273 px)
                                                                    <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                                    <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20.</p>
                                                                </div>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>

                                                                <span>(Image Dimension 237*273 px)</span>
                                                                <input type="file" class="form-control" name="brands_image"  id="brands_image">
                                                                <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                                <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20MB.</p>
                                                                <?php
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">

                                                        </div>
                                                    </div>
                                                </div>






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
                                            <input type="hidden" name="brands_id"
                                                   value="<?php echo (isset($detail['brands_id']) && $detail['brands_id'] != "") ? $detail['brands_id'] : ""; ?>">
                                            <input type="submit" name="Setting Btn" id="brands_btn" class="button" value="Save">
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

    $('#brands_btn').click(function(e)
    {

        var a=0;

        var ext1 =  $('#brands_image').val().split('.').pop().toLowerCase();


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
            alert('Invalid brands Image');
            e.preventDefault();
        }

        else{

            e.submit;

        }


    });
</script>