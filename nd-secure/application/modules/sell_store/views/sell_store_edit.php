

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
                                                            <label for="employee">Payment Type<span class="asterisk">*</span>   </label>
                                                             <select name="payment_type" class="form-control" required>
                                                                <option value="">Choose Payment Type</option>
                                                                <option value="0" <?php echo ($detail['payment_type']=='0')? "selected":""; ?>>None</option>
                                                                <option value="1" <?php echo ($detail['payment_type']=='1')?"selected":""; ?>>Full</option>
                                                                <option value="2" <?php echo ($detail['payment_type']=='2')?"selected":""; ?>>Partial</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="employee">Remaining Payment </label>
                                                            <input type="text" name="remaining_payment" class="form-control" data-validation-allowing="float"
                                                            value="<?php echo $detail['remaining_payment']; ?>"
                                                                   size="50"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">

                                                        </div>
                                                    </div>
                                                 </div>
                                        <p class="submit">
                                            <input type="submit" name="Setting Btn" class="btn btn-primary btn-md" id="sell_store_btn" class="button" value="Save">
                                        </p>
                                    </tbody>
                                </table>


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

    CKEDITOR.replace( 'description'  ,{
         toolbar: [

            { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
            { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'CopyFormatting' ] },
            { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
            { name: 'align', items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
            { name: 'links', items: [ 'Link', 'Unlink' ] },
            { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
            { name: 'insert', items: [ 'Image', 'Table' ] },
            { name: 'tools', items: [ 'Maximize' ] },
            { name: 'editing', items: [ 'Scayt' ] }
        ],


        filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );
</script>