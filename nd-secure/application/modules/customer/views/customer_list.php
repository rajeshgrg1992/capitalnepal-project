

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
                                Customer List
                            </div>


                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Create Date</th>
                                            <th>Last Login</th>
                                            <th>Control</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($all_lists as $row) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $row['first_name']; ?></td>
                                                <td><?php echo "Email:".$row['email']; ?><br/><?php echo "Ph.:". $row['contact_no']; ?></td>
                                                <td><?php echo $row['city'].",<br/>".$row['country']; ?></td>
                                                <td>
                                                    <?php if ($row['active_status'] == "Y") { echo 'Active';}
                                                    else { echo 'Inactive'; } ?>
                                                </td>
                                                <td><?php echo $row['created']; ?></td>
                                                <td><?php echo $row['last_login']; ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="javascript:void(0);" class="btn btn-success" title="Edit"
                                                           data-target="#myModal_change_status<?php echo $row['customer_id']; ?>"
                                                           data-toggle="modal"><i class="fa fa-pencil-square-o"></i></a>
                                                    </div>

                                                    <!-- Modal for booking delete -->
                                                    <div id="myModal_change_status<?php echo $row['customer_id']; ?>"
                                                         class="modal fade"
                                                         role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal Customer Status -->
                                                            <div class="modal-content">
                                                                <form method="post" action="customer/change_status/<?php echo $row['customer_id']; ?>">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Change User Status</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                        <p>Choose Status To Change</p>
                                                                        <select name="active_status" class="form-control">
                                                                            <option value="Y" <?php echo ($row['active_status'] == "Y") ? "selected" : ""; ?>>Active</option>
                                                                            <option value="N" <?php echo ($row['active_status'] == "N") ? "selected" : ""; ?>>Inactive</option>
                                                                        </select>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-success">Change</button>
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                            <!-- Modal Customer Status -->

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