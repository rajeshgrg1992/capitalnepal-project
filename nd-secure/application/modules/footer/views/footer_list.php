

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


                            <div class="tab-content">


                                <div class="panel panel-info">
                                    <div class="panel-heading">

                                        <a class="btn btn-info" data-rel="tooltip" href="<?php echo site_url('footer/form');?>" title="Add Slider"><i class="fa fa-plus-square-o"></i> Add Footer</a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Footer Title</th>
                                                    <th>Description</th>
                                                    <th>Footer URL</th>
                                                    <th>Published</th>
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
                                                        <td><?php echo substr($row['footer_title'],0,50);?>..</td>
                                                        <td><?php echo $row['footer_description'];?></td>
                                                        <td><?php echo $row['footer_link'];?></td>
                                                        <td><?php echo (isset($row['publish_status']) && $row['publish_status'] =="1")?"Yes":"No";?></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="<?php echo site_url('footer/form/'. $row['footer_id']);?>" class="btn btn-success" title="Edit"><i class="fa fa-pencil-square-o"></i></a>

                                                                <a class="btn btn-danger" data-target="#myModal_delete<?php echo $row['footer_id'];?>" data-toggle="modal" title="Delete"><i class="fa fa-trash-o" ></i></a>
                                                            </div>

                                                            <!-- Modal for booking delete -->
                                                            <div id="myModal_delete<?php echo $row['footer_id'];?>" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">

                                                                    <!-- Modal content-->
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            <h4 class="modal-title">Slider Delete Confirmation</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Are you sure to delete this Information</p>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <input type="hidden" class="hidden_link_delete" value="<?php echo site_url('footer/delete/'. $row['footer_id']); ?>">
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