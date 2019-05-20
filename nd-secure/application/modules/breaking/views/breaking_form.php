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
                                                     <div class="col-sm-6" id="ad_placement_div">
                                                        <div class="form-group">
                                                            <label for="Category">Breaking Layouts : <span class="asterisk">*</span></label>
                                                            <select name="breaking_layout" id="breaking_layout" class="form-control">
                                                                <option value="">----- Choose Layouts For Breaking: -----</option>
                                                                <option value="layout-first" <?php if((isset($breaking['breaking_layout']) && ($breaking['breaking_layout'] == "layout-first"))){ echo "selected"; } else{echo "";}?>>
                                                                        Layout First
                                                                    </option>
                                                                    <option value="layout-second" <?php if((isset($breaking['breaking_layout']) && ($breaking['breaking_layout'] == "layout-second"))){ echo "selected"; } else{echo "";}?>>
                                                                        Layout Second
                                                                    </option>
                                                                    <option value="none" <?php if((isset($breaking['breaking_layout']) && ($breaking['breaking_layout'] == "none"))){ echo "selected"; } else{echo "";}?>>
                                                                        None
                                                                    </option>
                    
                                                            </select>
                                                        </div>
                                                    </div>
                                                      <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="PageType">Publish  <span class="asterisk">*</span></label>
                                                            <select name="status" class="publish_status form-control">

                                                                <option value="1"  <?php echo (isset($breaking['status']) && $breaking['status'] =="1")?"selected":"";?>>Yes</option>
                                                                <option value="0"  <?php echo (isset($breaking['status']) && $breaking['status'] =="0")?"selected":"";?>>No</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                </tbody>
                                            </table>
                                            
                                        </div>
                                      
                                        <p class="submit">
                                             <input type="hidden" name="id" value="<?php echo (isset($breaking['id']) && $breaking['id'] != "") ? $breaking['id'] : ""; ?>" />
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