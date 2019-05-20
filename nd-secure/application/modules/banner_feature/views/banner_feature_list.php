

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

                                        <a class="btn btn-info" data-rel="tooltip" href="<?php echo site_url('banner_feature/form');?>" title="Add Sellers"><i class="fa fa-plus-square-o"></i> EDIT</a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-respnsive">
                                            <table id="example1" class="table table-bordered table-striped" >
                                                <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Photo</th>
                                                    <th>Title</th>
                                                    <th>URL</th>
                                                    <th>Description</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                            <?php
                                                    $path = '../uploads/banner_feature/';      
                                                for($i=1; $i<=4; $i++)
                                                {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $i;?></td>
                                                        <td>
                                                            <img src="<?php echo $path.$records['bf_img_'.$i];?>" width="100" height="100">
                                                        </td>
                                                        <td><?php echo $records['bf_title_'.$i];?> </td>
                                                        <td><?php echo $records['bf_url_'.$i];?> </td>
                                                        <td><?php echo $records['bf_des_'.$i];?> </td>
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