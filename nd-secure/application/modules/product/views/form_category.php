

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
                                                            <label for="Category">  Category Name <span class="asterisk">*</span>   </label>
                                                            <input type="text" name="category_title" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($parent_detail['category_title']) && $parent_detail['category_title'] != "") ? $parent_detail['category_title'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Category">  Description   </label>
                                                            <input type="text" name="category_detail" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($parent_detail['category_detail']) && $parent_detail['category_detail'] != "") ? $parent_detail['category_detail'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">
                                                        </div>
                                                    </div>



                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Category">  Font Awesome icon (E.g.: fa fa-gift)  </label>
                                                            <input type="text" name="fa_icon" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($parent_detail['fa_icon']) && $parent_detail['fa_icon'] != "") ? $parent_detail['fa_icon'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">
                                                        </div>
                                                    </div>                                                  
                                                </div>

                                                <div class="row">
                                                      <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Category"> Featured Image Full</label>
                                                            <?php
                                                            if(isset($parent_detail['featured_img']))
                                                            {

                                                                ?>
                                                                <div class="remove_option">

                                                                    <?php
                                                                    $path  = '../uploads/product_category/';
                                                                    ?>
                                                                    <img src="<?php echo $path. $parent_detail['featured_img'];?>" alt="featured_image" style="width: 20%;">

                                                                    <span class="btn btn-info remove_btn" id="btn_remove">Remove</span>
                                                                </div>
                                                                <input type="hidden" class="form-control" name="pre_featuredimg" value="<?php echo $parent_detail['featured_img']; ?>">
                                                                <div id="image_input">


                                                                    <input type="file" class="form-control" name="featured_img" id="featuredimg">
                                                                    <span id="type_error"></span>

                                                                </div>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>


                                                                <input type="file" class="form-control" name="featured_img"  id="featuredimg" >
                                                                <span id="type_error" style="padding-left: 33px;"></span>


                                                                <?php
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                      <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Category"> Image For Front Show(small)</label>
                                                            <?php
                                                            if(isset($parent_detail['featured_img_small']))
                                                            {

                                                                ?>
                                                                <div class="remove_option">

                                                                    <?php
                                                                    $path  = '../uploads/product_category/';
                                                                    ?>
                                                                    <img src="<?php echo $path. $parent_detail['featured_img_small'];?>" alt="featured_image" style="width: 20%;">

                                                                    <span class="btn btn-info remove_btn" id="btn_remove">Remove</span>
                                                                </div>
                                                                <input type="hidden" class="form-control" name="pre_featuredimg_small" value="<?php echo $parent_detail['featured_img_small']; ?>">
                                                                <div id="image_input">


                                                                    <input type="file" class="form-control" name="featured_img_small" id="featuredimg_small">
                                                                    <span id="type_error"></span>

                                                                </div>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>


                                                                <input type="file" class="form-control" name="featured_img_small"  id="featuredimg_small" >
                                                                <span id="type_error" style="padding-left: 33px;"></span>


                                                                <?php
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Category">Category Parent</label>
                                                            <select name="parent_id" class="form-control">
                                                                <?php if(count($paretn_category) > 0): ?>
                                                                    <option value="0">No Parent</option>
                                                                    <?php foreach($paretn_category as $cat): ?>
                                                                        <option value="<?php echo $cat['category_id']; ?>" <?php if((isset($parent_detail['parent_id']) && $parent_detail['parent_id'] > 0)){ echo ($parent_detail['parent_id'] == $cat['category_id']) ? "selected" : ""; }?>>
                                                                            <?php echo $cat['category_title']; ?>
                                                                        </option>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="PageType">Publish <span class="asterisk">*</span></label>
                                                            <select name="status" class="publish_status form-control">

                                                                <option value="1"  <?php echo (isset($parent_detail['status']) && $parent_detail['status'] =="1")?"selected":"";?>>Yes</option>
                                                                <option value="0"  <?php echo (isset($parent_detail['status']) && $parent_detail['status'] =="0")?"selected":"";?>>No</option>



                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>



                                                </tbody>
                                            </table>


                                        </div>


                                        <p class="submit">
                                            <input type="hidden" name="category_id"
                                                   value="<?php echo (isset($parent_detail['category_id']) && $parent_detail['category_id'] != "") ? $parent_detail['category_id'] : ""; ?>">
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