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
                                                     <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="Category">  Advertise Name <span class="asterisk">*</span>  </label>
                                                            <input type="text" name="ad_title" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($ads['ad_title']) && $ads['ad_title'] != "") ? $ads['ad_title'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="Category">  Advertise URL <span class="asterisk">*</span>  </label>
                                                            <input type="text" name="ad_url" class="form-control" data-validation-allowing="float"
                                                                   size="50"
                                                                   value="<?php echo (isset($ads['ad_url']) && $ads['ad_url'] != "") ? $ads['ad_url'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">
                                                        </div>
                                                    </div>
                                                      <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="PageType">Publish  <span class="asterisk">*</span></label>
                                                            <select name="status" class="publish_status form-control">

                                                                <option value="1"  <?php echo (isset($ads['status']) && $ads['status'] =="1")?"selected":"";?>>Yes</option>
                                                                <option value="0"  <?php echo (isset($ads['status']) && $ads['status'] =="0")?"selected":"";?>>No</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="Category"> Advertise For: <span class="asterisk">*</span></label>
                                                            <select name="ad_for" id="ad_for" class="form-control" required>
                                                                <option value="">--------Advertise For-------</option>
                                                                    <option value="categories" <?php if((isset($ads['ad_for']) && ($ads['ad_for'] == "categories"))){ echo "selected"; } else{echo "";}?>>
                                                                        Categories
                                                                    </option>
                                                                    <option value="sub_categories" <?php if((isset($ads['ad_for']) && ($ads['ad_for'] == "sub_categories"))){ echo "selected"; } else{echo "";}?>>
                                                                        Sub Categories
                                                                    </option>
                                                                     <option value="detail_page" <?php if((isset($ads['ad_for']) && ($ads['ad_for'] == "detail_page"))){ echo "selected"; } else{echo "";}?>>
                                                                        Detail Page
                                                                    </option>
                                                                    <option value="wishlist" <?php if((isset($ads['ad_for']) && ($ads['ad_for'] == "wishlist"))){ echo "selected"; } else{echo "";}?>>
                                                                        Wishlist
                                                                    </option>
                                                                    <option value="slider" <?php if((isset($ads['ad_for']) && ($ads['ad_for'] == "slider"))){ echo "selected"; } else{echo "";}?>>
                                                                        Slider
                                                                    </option>
                                                                    <option value="bottom" <?php if((isset($ads['ad_for']) && ($ads['ad_for'] == "bottom"))){ echo "selected"; } else{echo "";}?>>
                                                                        Bottom Website
                                                                    </option>
                                                                    <option value="about" <?php if((isset($ads['ad_for']) && ($ads['ad_for'] == "about"))){ echo "selected"; } else{echo "";}?>>
                                                                        About
                                                                    </option>
                                                                    <option value="blog_list" <?php if((isset($ads['ad_for']) && ($ads['ad_for'] == "blog_list"))){ echo "selected"; } else{echo "";}?>>
                                                                        Bolg List
                                                                    </option>
                                                                    <option value="blog_detail" <?php if((isset($ads['ad_for']) && ($ads['ad_for'] == "blog_detail"))){ echo "selected"; } else{echo "";}?>>
                                                                        Blog Detail
                                                                    </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4" id="ad_placement_div">
                                                        <div class="form-group">
                                                            <label for="Category"> Advertise Placement: <span class="asterisk">*</span></label>
                                                            <select name="ad_placement" id="ad_placement" class="form-control">
                                                                <option value="">----- Advertise Placement: -----</option>
                                                                <option value="above-menu" <?php if((isset($ads['ad_placement']) && ($ads['ad_placement'] == "above-menu"))){ echo "selected"; } else{echo "";}?>>
                                                                        Above Menu
                                                                    </option>
                    
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                   <div class="col-sm-4" id="ad_sub_placement_div">
                                                        <div class="form-group">
                                                            <label for="Category"> Advertise Sub Placement: <span class="asterisk">*</span></label>
                                                            <select name="ad_sub_placement" id="ad_sub_placement" class="form-control">
                                                                 <option value="">----- Advertise Sub Placement: -----</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                   

                                                </div>
                                                <div class="row" id="ad_sub_for_div">
                                                     <div class="col-sm-4" >
                                                        <div class="form-group">
                                                            <label for="Category"> Advertise For: <span class="asterisk">*</span></label>
                                                            <select name="ad_sub_for" id="ad_sub_for" class="form-control">
                                                                 <option value="">----- Advertise Sub For: -----</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                      <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="ad_image">Advertise Image</label>
                                                            <?php
                                                            $path  =  '../uploads/advertisement/';
                                                            if(isset($ads['ad_image']) && file_exists($path.$ads['ad_image']))
                                                            {

                                                                ?>
                                                                <div class="remove_option">


                                                                    <img src="<?php echo $path. $ads['ad_image'];?>"  width="30%">

                                                                    <span class="btn btn-info remove_btn" id="btn_remove">Remove</span>
                                                                </div>
                                                                <input type="hidden" name="pre_ad_image" class="form-control" value="<?php echo $ads['ad_image']; ?>">
                                                                <div id="image_input">
                                                                    <input type="file" name="ad_image" id="ad_image">
                                                                </div>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>
                                                                <input type="file" name="ad_image" class="form-control"  id="ad_image">
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
                                                            <label for="Category"> Description</label>
                                                            <textarea rows="5" cols="10" class="form-control" name="description" id="description"><?php echo (isset($ads['description']) && $ads['description'] != "") ? $ads['description'] : ""; ?></textarea>
                                                        </div>
                                                    </div>

                                                </div>

                                                </tbody>
                                            </table>
                                            
                                        </div>
                                      
                                        <p class="submit">
                                             <input type="hidden" name="ad_id" value="<?php echo (isset($ads['ad_id']) && $ads['ad_id'] != "") ? $ads['ad_id'] : ""; ?>" />
                                            <input type="submit" name="Setting Btn" id="ad_btn" class="button" value="Save">
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
    $(document).ready(function(){
        $("#ad_for").change(function(){
            $.post('<?php echo site_url('advertisement/ad_placement_ajax');?>',{value:$('#ad_for').val()}, function(data) {
                $('#ad_placement').html(data.data1);
                $('#ad_sub_for').html(data.data2);
            });
        });

        $("#ad_placement").change(function(){
            $.post('<?php echo site_url('advertisement/ad_placement_ajax');?>',{value:$('#ad_placement').val()}, function(data) {
                $('#ad_sub_placement').html(data);
            });
        });

        $("#ad_for").change(function(){
            var value=$("#ad_for").val();
            if(value == 'slider' || value == 'about' || value == 'blog_list' || value == 'blog_detail')
            {
                $("#ad_placement_div").hide();
                $("#ad_sub_placement_div").hide();
                $("#ad_sub_for_div").hide();
            }
            else if(value == 'bottom')
            {
                $("#ad_placement_div").show();
                $("#ad_sub_placement_div").hide();
                $("#ad_sub_for_div").hide();
            }
             else if(value == 'detail_page' || value== 'wishlist')
            {
                $("#ad_placement_div").show();
                $("#ad_sub_placement_div").show();
                $("#ad_sub_for_div").hide();
            }
            else
            {
                $("#ad_placement_div").show();
                $("#ad_sub_placement_div").show();
                $("#ad_sub_for_div").show();
            }
        });
        $("#ad_placement").change(function(){
            var value=$("#ad_placement").val();
            if(value == 'side')
            {
                $("#ad_sub_placement_div").hide();
            }
            else
            {
                $("#ad_sub_placement_div").show();
            }
        });
    });
</script>
<script>

    CKEDITOR.replace( 'description'  ,{
        toolbar: [
            { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
            { name: 'styles', items: [ 'Format', 'FontSize' ] },
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline'] },
            { name: 'colors', items: [ 'TextColor' ] },
            { name: 'align', items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
            { name: 'links', items: [ 'Link', 'Unlink' ] },
            { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-' ] },
        ],
        filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
    });

    $('#ad_btn').click(function(e)
    {

        var a=0;

        var ext1 =  $('#ad_image').val().split('.').pop().toLowerCase();


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

<style type="text/css">
    .show_images{
        width: 100%;
        float: left;
        height: 110px;
        background: #f0f0f0;
    }
</style>