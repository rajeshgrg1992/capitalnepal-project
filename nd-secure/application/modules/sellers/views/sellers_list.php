

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

                                        <a class="btn btn-info" data-rel="tooltip" href="<?php echo site_url('sellers/form');?>" title="Add Sellers"><i class="fa fa-plus-square-o"></i> Add Sellers</a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-respnsive">
                                            <table id="example1" class="table table-bordered table-striped" >
                                                <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Photo</th>
                                                    <th>Sellers Name</th>
                                                    <th>Mobile</th>
                                                    
                                                    <th>Email</th>
                                                    <th>Company</th>
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
                                                        <td>
                                                            <?php
                                                            $path = '../uploads/sellers/';
                                                            ?>
                                                            <img src="<?php echo $path.$row['seller_image'];?>" width="100" height="100">
                                                        </td>
                                                        <td><?php echo $row['first_name']." ".$row['middle_name'];?> <?php echo $row['last_name'];?></td>
                                                        <td><?php echo $row['phone'];?> </td>
                                                        <td><?php echo $row['email'];?> </td>
                                                        <td><?php echo $row['company_name'];?> </td>

                                                        <td><?php echo (isset($row['active_status']) && $row['active_status'] =="1")?"Active":"Not Active";?></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="<?php echo site_url('sellers/form/'.$row['seller_id']);?>" class="btn btn-success" title="Edit"><i class="fa fa-pencil-square-o"></i></a>

                                                                <a class="btn btn-info" data-target="#myModal_info<?php echo $row['seller_id'];?>" data-toggle="modal" title="Info"><i class="fa fa-info-circle"></i></a>

                                                                <a class="btn btn-danger" data-target="#myModal_delete<?php echo $row['seller_id'];?>" data-toggle="modal" title="Delete"><i class="fa fa-trash-o" ></i></a>
                                                            </div>

                                                               <!-- modal for info -->
                                                            <div class="modal fade" id="myModal_info<?php echo $row['seller_id'];?>">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                            <h4 class="modal-title text-center">Details</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="box">

                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Company Name :</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['company_name'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Address :</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['address']." ".$row['city'];?><br>
                                                                                        <?php echo $row['state']." ".$row['zip_code']." ".$row['country'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Web Site</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['company_website'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Phone :</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['phone'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Email :</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['email'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Name :</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Business Type:</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php
                                                                                            $value=$this->crud->get_where_row("all_business_type",array('id'=>$row['business_type']));
                                                                                            echo $value['name'];
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Active Status:</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo (isset($row['active_status']) && $row['active_status'] =="1")?"Yes":"No";?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                               

                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Seller Added :</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo date_converter($row['created']);?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                 <p class="modal_note">
                                                                                     <label>Company Offers: </label>   <?php echo $row['company_offer'];?>
                                                                                 </p>
                                                                                  <hr class="modal-hr">
                                                                                 <p class="modal_note">
                                                                                     <label>Company Description: </label>   <?php echo $row['description'];?>
                                                                                 </p>

                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                            <!-- /.modal-content -->
                                                                </div>
                                                        <!-- /.modal-dialog -->
                                                            </div>

                                                            <!--  -->



                                                            <!-- Modal for booking delete -->
                                                            <div id="myModal_delete<?php echo $row['seller_id'];?>" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">

                                                                    <!-- Modal content-->
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            <h4 class="modal-title">Employee Delete Confirmation</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Are you sure to delete this Information</p>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <input type="hidden" class="hidden_link_delete" value="<?php echo site_url('sellers/delete/'. $row['seller_id']); ?>">
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