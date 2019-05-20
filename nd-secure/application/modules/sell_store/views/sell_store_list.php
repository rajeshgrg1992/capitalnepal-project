

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

                                        <a class="btn btn-info" data-rel="tooltip" href="<?php echo site_url('sell_store/form');?>" title="Sell Product"><i class="fa fa-plus-square-o"></i>Sell Products</a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="example1">
                                                <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Image</th>
                                                    <th>Product Title</th>
                                                    <th>Customer Name</th>
                                                    <th>Contact</th>
                                                    <th>Counts </th>
                                                    <th>Sell Price</th>
                                                    <th>Payment Type</th>
                                                    <th>Remaining</th>
                                                    <th>Control</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $sn = 0;
                                                foreach($records as $row){

                                                $store_sell_product = $this->crud->get_where_row("igc_sell_store",array('delete_status'=>0,'products'=>$row['product_id']));
                                                if(!empty($store_sell_product)){    
                                                $sn++;
                                                $productId = $row['product_id'];
                                                $categoryDetail = $this->crud->get_detail_rows($row['product_category_id'], "category_id", "product_category");
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
                                                            <?php echo $store_sell_product['customer_name']; ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php echo $store_sell_product['phone']; ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php echo $store_sell_product['counts']; ?>
                                                        </span>
                                                    </td>
                                                    
                                                    <td>
                                                        <span>
                                                            <?php echo $store_sell_product['sold_price']; ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php 
                                                            if($store_sell_product['payment_type']=='0'){echo "None";}
                                                            elseif ($store_sell_product['payment_type']=='1'){echo "Full";}
                                                            else {echo "Partial";}

                                                            ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php echo $store_sell_product['remaining_payment']; ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                         <a class="btn btn-info btn-xs" data-target="#myModal_info<?php echo $store_sell_product['sell_store_id'];?>" data-toggle="modal" title="Info"><i class="fa fa-info-circle "></i></a>
                                            <?php
                                                    if($this->session->userdata('permission')==0)
                                                    {
                                            ?>
                                                        <a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModel_<?php $store_sell_product['sell_store_id']; ?>"><i class="fa fa-trash"></i></a>
                                                        <a href="<?php echo site_url('sell_store/edit/'.$store_sell_product['sell_store_id']);?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
                                            <?php
                                                    }
                                            ?>
                                                        

                                                        <!-- For Info -->
                                                           <div class="modal fade" id="myModal_info<?php echo $store_sell_product['sell_store_id'];?>">
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
                                                                                        <label>Customer Name :</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $store_sell_product['customer_name'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Address :</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $store_sell_product['address'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Contact</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $store_sell_product['phone']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Email</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $store_sell_product['email']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Product Title</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['product_title']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Total Payment</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $store_sell_product['total_amount']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Payment Remaining</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $store_sell_product['remaining_payment']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Sold Date</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo date_converter($store_sell_product['created']); ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                 <p class="modal_note">
                                                                                     <label>Description: </label>   <?php echo $store_sell_product['description'];?>
                                                                                 </p>
                                                                                  <hr class="modal-hr">
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
                                             <?php
                                                    if($this->session->userdata('seller_recognition')=="seller_admin")
                                                    {
                                            ?>
                                                      <!-- --------- Delete Modal Area ------------------ -->
                                                        <div id="deleteModel_<?php echo $store_sell_product['sell_store_id']; ?>" class="modal fade" role="dialog">
                                                          <div class="modal-dialog">
                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                            <form method="POST" action="<?php echo site_url('sell_store/delete/'.$store_sell_product['sell_store_id']); ?>">
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
                                            <?php
                                                    }
                                            ?>
                                                        <!-- --------- Delete Modal Area ------------------ -->
                                                        <div id="deleteModel_<?php $store_sell_product['sell_store_id']; ?>" class="modal fade" role="dialog">
                                                          <div class="modal-dialog">
                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                            <form method="POST" action="<?php echo site_url('sell_store/delete/'.$store_sell_product['sell_store_id']); ?>">
                                                              <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Delete Information</h4>
                                                              </div>
                                                              <div class="modal-body" >
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