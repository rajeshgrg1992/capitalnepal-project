

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
                    <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="panel-body">

                            <div class="tab-content">


                                <div class="panel panel-info">
                                    <div class="panel-heading">

                                        <a class="btn btn-info" data-rel="tooltip" href="<?php echo site_url('pictures/form');?>" title="Add pictures"><i class="fa fa-plus-square-o"></i> Add pictures</a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table  id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>pictures Title</th>
                                                    <th>pictures Image</th>
                                                    <th>Status</th>
                                                    <th>Control</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $i = 1;
                                                foreach($records as $row)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i++;?></td>
                                                        <td><?php echo substr($row['pictures_title'],0,50);?>..</td>
                                                        <td>
                                                            <?php
                                                            $path = '../uploads/pictures/';
                                                            ?>
                                                            <img src="<?php echo $path.$row['pictures_image'];?>" width="200" height="100">
                                                        </td>
                                                        <td><?php echo (isset($row['publish_status']) && $row['publish_status'] =="1")?"Active":"Inactive";?></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="<?php echo site_url('pictures/form/'. $row['pictures_id']);?>" class="btn btn-success" title="Edit"><i class="fa fa-pencil-square-o"></i></a>

                                                                <a class="btn btn-danger" data-target="#myModal_delete<?php echo $row['pictures_id'];?>" data-toggle="modal" title="Delete"><i class="fa fa-trash-o" ></i></a>
                                                            </div>

                                                            <!-- Modal for booking delete -->
                                                            <div id="myModal_delete<?php echo $row['pictures_id'];?>" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">

                                                                    <!-- Modal content-->
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            <h4 class="modal-title">pictures Delete Confirmation</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Are you sure to delete this Information</p>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <input type="hidden" class="hidden_link_delete" value="<?php echo site_url('pictures/delete/'. $row['pictures_id']); ?>">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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
                                        </div>
                                    </div>
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
    $('.delete').click(function(){

        var values = $(this).parent() .find('.hidden_link_delete').val();
        window.location =  values;
    });



</script>