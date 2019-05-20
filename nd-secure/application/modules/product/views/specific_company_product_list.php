

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <?php if ($this->session->flashdata('success') != "") { ?>
                    <div class="alert alert-success alert_box">
                        <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i class="fa fa-times"></i></a>
                        <strong>Success !</strong> <?php echo $this->session->flashdata('success'); ?>.
                    </div>
                <?php } ?>
                <?php if ($this->session->flashdata('error') != "") { ?>
                    <div class="alert alert-danger alert_box">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fa fa-times"></i></a>
                        <strong>Error!</strong>  <?php echo $this->session->flashdata('error'); ?>.
                    </div>
                <?php } ?>
            </div>
            <div class="col-xs-12">

                <!-- /.box -->

                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body">


                            <div class="tab-content">


                                <div class="panel panel-info">
                                    <div class="panel-heading">

                                        <a class="btn btn-info" data-rel="tooltip" href="<?php echo site_url('product/add_product');?>" title="Add Product"><i class="fa fa-plus-square-o"></i> Add Product</a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="example1">
                                                <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Product Image</th>
                                                    <th>Product Title</th>
                                                    <th>Product Category</th>
                                                    <th>User</th>
                                                    <th>Counts </th>
                                                    <th>New Arrival</th>
                                                    <th>Status</th>
                                                    <th>Control</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $sn = 0;
                                                foreach($records as $row){
                                                $sn++;
                                                $productId = $row['product_id'];
                                                $categoryDetail = $this->crud->get_detail_rows($row['product_category_id'], "category_id", "product_category");

                                                $countryDetail = $this->crud->get_detail($row['product_country'], "id", "all_values");
                                                ?>
                                                <tr>
                                                    <td><?php echo $sn; ?>.</td>
                                                    <td>
                                                        <?php
                                                        if(strlen($row['product_image_1']) > 1){
                                                            $imageUrl = "../uploads/product/".$row['product_code']."_1.".$row['product_image_1'];
                                                        ?>
                                                        <a href="<?php echo $imageUrl; ?>" target="_blank">
                                                            <img src="<?php echo $imageUrl; ?>" height="100" alt="Product" />
                                                        </a>
                                                        <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php echo $row['product_title']; ?>

                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php echo $categoryDetail[0]['category_title']; ?>
                                                        </span>
                                                    </td>
                                                    <?php
                                                            $users = $this->crud->get_detail($row['admin_ref'], "user_id", "igc_users");
                                                    ?>
                                                    <td>
                                                        <span>
                                                            <?php 
                                                                    if($row['admin_ref'] > 0 )
                                                                    {
                                                                        echo $users['username'];
                                                                    }
                                                                    else
                                                                    {
                                                                        echo "";
                                                                    }
                                                            ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php echo $row['counts']; ?>
                                                        </span>
                                                    </td>

                                                    <td>

                                                      <?php echo ($row['new_arrival']=="1")?"YES":"NO"; ?>


                                                    </td>

                                                    <td>

                                                    <?php echo ($row['status']=="1")?"YES":"NO"; ?>

                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                               
                                                                <a class="btn btn-info" data-target="#myModal_info<?php echo $row['product_id'];?>" data-toggle="modal" title="Info"><i class="fa fa-info-circle"></i></a>

                                                            </div>

                                                               <!-- modal for info -->
                                                            <div class="modal fade" id="myModal_info<?php echo $row['product_id'];?>">
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
                                                                                        <label>Product Code :</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['product_code'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Product Title :</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['product_title'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Product Category</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $categoryDetail[0]['category_title']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>No. of Counts Left :</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['counts'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Product For :</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['product_for'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Made In: :</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $countryDetail['name'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Product Sell Price</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['product_sell_price'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Product Added Date</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['added_date'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                    
                                                                                 <p class="modal_note">
                                                                                     <label>Details: </label>   <?php echo $row['product_full_detail'];?>
                                                                                 </p>
                                                                                  <hr class="modal-hr">
                                                                                 <p class="modal_note">
                                                                                     <label>Features: </label>   <?php echo $row['product_features'];?>
                                                                                 </p>
                                                                                 <p class="modal_note">
                                                                                     <label>Return Policy: </label>   <?php echo $row['product_return_policy'];?>
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