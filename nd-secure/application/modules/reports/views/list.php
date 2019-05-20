<?php
$toDay = $date_time['todate'];
?>

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
                                Customer List (قائمة العملاء)
                            </div>


                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Title</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($all_lists as $key => $value) {
                                        ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $value; ?></td>
                                                <td>
                                                    <a href="reports/sales/?action=days&count=7" class="btn btn-primary btn-sm">View All (عرض الكل)</a>
                                                    <a href="reports/sales/?action=all" class="btn btn-primary btn-sm">View Last 7 Days (عرض آخر 7 أيام)</a>
                                                    <a href="reports/sales/?action=custom&from=<?php echo date('Y-m-d', strtotime("-90 days", strtotime($toDay))); ?>&to=<?php echo date('Y-m-d'); ?>" class="btn btn-primary btn-sm">View Custom (عرض مخصص)</a>  
                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-success btn-sm"><i class="fa fa-download" aria-hidden="true"></i>&nbsp; Download (تحميل)</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>

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
    $('.delete').click(function () {

        var values = $(this).parent().find('.hidden_link_delete').val();
        window.location = values;
    });


</script>