

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
                                                            <label for="Slider">  Payment Title <span class="asterisk">*</span>   </label>
                                                            <input type="text" name="fp_title" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['fp_title']) && $detail['fp_title'] != "") ? $detail['fp_title'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>



                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Slider">  Description
                                                                <span class="asterisk">*</span>   </label>
                                                            <input type="text" name="fp_caption" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['fp_caption']) && $detail['fp_caption'] != "") ? $detail['fp_caption'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">
                                                        </div>
                                                    </div>



                                                </div>


                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Slider">   Link  </label>
                                                            <input type="text" class="form-control" name="fp_link" value="<?php echo (isset($detail['fp_link']) && $detail['fp_link'] != "") ? $detail['fp_link'] : ""; ?>" >

                                                        </div>
                                                    </div>



                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="SliderImage"> Payment Image</label>
                                                            <?php
                                                            $path  =  '../uploads/footer_payment/';
                                                            if(isset($detail['slider_image']) && file_exists($path.$detail['slider_image']))
                                                            {

                                                                ?>
                                                                <div class="remove_option">


                                                                    <img src="<?php echo $path. $detail['slider_image'];?>"  width="30%">

                                                                    <span class="btn btn-info remove_btn" id="btn_remove">Remove</span>
                                                                </div>
                                                                <input type="hidden" name="pre_slider_image" class="form-control" value="<?php echo $detail['slider_image']; ?>">
                                                                <div id="image_input">
                                                                    <input type="file" name="slider_image" id="slider_image">(Image Dimension 853*405 px)
                                                                    <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                                    <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20.</p>
                                                                </div>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>

                                                                <span>(Image Dimension 853*405 px)</span>
                                                                <input type="file" name="slider_image" class="form-control"  id="slider_image">
                                                                <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>
                                                                <p id="sig_error2" style="display:none; color:#FF0000;">Max file size should be 20MB.</p>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">

                                                        <div class="form-group">
                                                            <label for="PageType">Publish <span class="asterisk">*</span></label>
                                                            <select name="publish_status" class="publish_status form-control">

                                                                <option value="1"  <?php echo (isset($content['publish_status']) && $content['publish_status'] =="1")?"selected":"";?>>Yes</option>
                                                                <option value="0"  <?php echo (isset($content['publish_status']) && $content['publish_status'] =="0")?"selected":"";?>>No</option>



                                                            </select>
                                                        </div>

                                                    </div>

                                                </div>




                                                



                                                </tbody>
                                            </table>


                                        </div>


                                        <p class="submit">
                                            <input type="hidden" name="footer_payment_id"
                                                   value="<?php echo (isset($detail['footer_payment_id']) && $detail['footer_payment_id'] != "") ? $detail['footer_payment_id'] : ""; ?>">
                                            <input type="submit" name="Setting Btn" id="slider_btn" class="button" value="Save">
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

    $('#slider_btn').click(function(e)
    {

        var a=0;

        var ext1 =  $('#slider_image').val().split('.').pop().toLowerCase();


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
            alert('Invalid Slider Image');
            e.preventDefault();
        }

        else{

            e.submit;

        }


    });
</script>