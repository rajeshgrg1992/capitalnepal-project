

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
                                <a class="btn btn-info" data-rel="tooltip" href="<?php echo site_url('advertisement/form'); ?>"
                                   title="Add Region"><i class="fa fa-plus-square-o"></i> Add Advetisement</a>
                            </div>


                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>For:</th>
                                            <th>For sub:</th>
                                            <th>Ads Placement</th>
                                            <th>Ads Sub Placement</th>
                                            <th>Create Date</th>
                                            <th>Status</th>
                                            <th>Control</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i = 1;
                                        $folder_path="../uploads/advertisement/";
                                        foreach ($ads as $row) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><img src="<?=$folder_path.$row['ad_image'];?>" style="height: 160px;width: 160px"></td>
                                                <td><?php echo $row['ad_title']; ?></td>
                                                <td><?php echo $row['ad_for']; ?></td>
                                                <td></td>
                                                <td><?php echo $row['ad_placement']; ?></td>
                                                <td><?php echo $row['ad_sub_placement']; ?></td>
                                                <td><?php echo $row['created']; ?></td>
                                                <td>
                                                    <span class="label label-<?php echo ($row['status'] == '1')?"success":"danger"; ?>">
                                                         <i class="fa fa-<?php echo ($row['status'] == '1')?"check":"remove"; ?>"></i>       
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="<?php echo site_url('advertisement/form/'.$row['ad_id']); ?>"
                                                           class="btn btn-success" title="Edit"><i
                                                                    class="fa fa-pencil-square-o"></i></a>
                                                        <a class="btn btn-danger"
                                                           data-target="#myModal_delete<?php echo $row['ad_id']; ?>"
                                                           data-toggle="modal" title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    </div>

                                                    <!-- Modal for booking delete -->
                                                    <div id="myModal_delete<?php echo $row['ad_id']; ?>"
                                                         class="modal fade"
                                                         role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">user Delete Confirmation</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Are you sure to delete this Information</p>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <input type="hidden" class="hidden_link_delete"
                                                                           value="<?php echo site_url('advertisement/delete/'.$row['ad_id']); ?>">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                                        Cancel
                                                                    </button>
                                                                    <button type="button" class="btn btn-default delete">Ok</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!--modal-->
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>

                                        </tbody>
                                    </table>
                                    <?php echo $this->pagination->create_links(); ?>
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