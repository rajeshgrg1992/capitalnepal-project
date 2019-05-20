

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Media Library</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                                <div id="grid-layout-table-1" class="box jplist">
                                    <iframe  width="100%" height="800" frameborder="0"
                                             src="<?php echo base_url(); ?>../filemanager/dialog.php?type=0">
                                    </iframe>
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
    $('.delete').click(function(){

        var values = $(this).parent() .find('.hidden_link_delete').val();
        window.location =  values;
    });

</script>
