

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
                                                    <th>Seller</th>
                                                    <th>Seller-User</th>
                                                    <th>Counts </th>
                                                    <th>New Arrival</th>
                                                    <th>Permission Status</th>
                                                    <th>control</th>
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

                                                if($row['seller_ref'] !="")
                                                {
                                                   $sellers = $this->crud->get_detail($row['seller_ref'],"seller_id","igc_sellers"); 
                                                }
                                                elseif ($row['seller_user_ref'] !="") 
                                                {
                                                    $sellers_users = $this->crud->get_detail($row['seller_user_ref'],"user_id","igc_sellers_users"); 
                                                    $sellers_from_users =$this->crud->get_detail($sellers_users['seller_id'],"seller_id","igc_sellers"); 
                                                }

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
                                                    <td>
                                                        <span>
                                                            <?php
                                                                if($row['seller_ref'] !="")
                                                                {
                                                                    echo $sellers['first_name']." ".$sellers['middle_name']." ".$sellers['last_name'];
                                                                }
                                                                else
                                                                {
                                                                    echo $sellers_from_users['first_name']." ".$sellers_from_users['middle_name']." ".$sellers_from_users['last_name'];
                                                                }
                                                            ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php
                                                                if($row['seller_user_ref'] !="")
                                                                {
                                                                    echo $sellers_users['name'];
                                                                }
                                                                else
                                                                {
                                                                    echo "Self";
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
                                                               
                                                                <a class="btn btn-info btn-sm" data-target="#myModal_info<?php echo $row['product_id'];?>" data-toggle="modal" title="Info"><i class="fa fa-info-circle"></i></a>
                                                      <?php
                                                                if($this->session->userdata('permission')=='0')
                                                                {
                                                        ?>
                                                                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModel_<?php echo $row['product_id']; ?>"><i class="fa fa-trash"></i></a>
                                                        <?php
                                                                }
                                                        ?>

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

                                                      <!-- --------- Delete Modal Area ------------------ -->
                                                        <div id="deleteModel_<?php echo $row['product_id']; ?>" class="modal fade" role="dialog">
                                                          <div class="modal-dialog">
                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                            <form method="POST" action="<?php echo site_url('product/all_product_admin_delete/'.$row['product_id']); ?>">
                                                              <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Delete Information</h4>
                                                              </div>
                                                              <div class="modal-body" style="text-align: right;">
                                                                <p>Are You Sure To Delete This? After deleting it you may not reverse the process.</p>

                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="submit" class="btn btn-default">Yes, Delete.</button>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                              </div>
                                                            </form>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <!-- --------- Delete Modal Area ------------------ -->
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