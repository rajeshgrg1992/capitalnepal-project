

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
                                                            <label for="Slider">  Footer Title <span class="asterisk">*</span>   </label>
                                                            <input type="text" name="footer_title" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['footer_title']) && $detail['footer_title'] != "") ? $detail['footer_title'] : ""; ?>"
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
                                                            <input type="text" name="footer_description" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($detail['footer_description']) && $detail['footer_description'] != "") ? $detail['footer_description'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">
                                                        </div>
                                                    </div>



                                                </div>


                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Slider"> URL </label>
                                                            <input type="text" class="form-control" name="footer_link" value="<?php echo (isset($detail['footer_link']) && $detail['footer_link'] != "") ? $detail['footer_link'] : ""; ?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
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
                                            <input type="hidden" name="footer_id"
                                                   value="<?php echo (isset($detail['footer_id']) && $detail['footer_id'] != "") ? $detail['footer_id'] : ""; ?>">
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