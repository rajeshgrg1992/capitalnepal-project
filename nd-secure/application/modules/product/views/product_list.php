

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
                                                    <td>
                                                        <span>
                                                            <?php echo $row['counts']; ?>
                                                        </span>
                                                    </td>

                                                    <td>

                                                           <a href="product/newarrival/<?php echo $productId; ?>" class="btn <?php if($row['new_arrival'] == '1'){ echo "btn-success";  }else{ echo "btn-warning";}; ?> btn-xs btn-sm">Yes</a>
                                                        <a href="product/notnewarrival/<?php echo $productId; ?>" class="btn <?php if($row['new_arrival'] == '0'){ echo "btn-success";  }else{ echo "btn-warning";}; ?> btn-xs btn-sm">No</a>


                                                    </td>

                                                    <td>

                                                        <a href="product/activate/<?php echo $productId; ?>" class="btn <?php if($row['status'] == '1'){ echo "btn-info";  }else{ echo "btn-danger";}; ?> btn-xs btn-sm">Active</a>
                                                        <a href="product/inactive/<?php echo $productId; ?>" class="btn <?php if($row['status'] == '0'){ echo "btn-info";  }else{ echo "btn-danger";}; ?> btn-xs btn-sm">Inactive</a>


                                                    </td>
                                                    <td>
                                                        <a href="<?php echo site_url('product/add_product/'.$row['product_id']);?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>    
                                                        <a class="btn btn-info btn-xs" data-target="#myModal_info<?php echo $row['product_id'];?>" data-toggle="modal" title="Info"><i class="fa fa-info-circle"></i></a>
                                                        <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModel_<?php echo $productId; ?>"><i class="fa fa-trash"></i></a> 

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
                                                    
                                                        <div id="deleteModel_<?php echo $productId; ?>" class="modal fade" role="dialog">
                                                          <div class="modal-dialog">
                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                            <form method="POST" action="product/delete/<?php echo $productId; ?>">
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