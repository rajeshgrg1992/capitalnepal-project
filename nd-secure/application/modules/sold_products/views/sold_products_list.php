

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
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="example1">
                                                <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Photo</th>
                                                    <th>Product Title</th>
                                                    <th>Seller</th>
                                                    <th>Seller-User</th>
                                                    <th>Customer Name</th>
                                                    <th>Contact</th>
                                                    <th>Counts </th>
                                                    <th>Sell Price</th>
                                                    <th>Payment Type</th>
                                                    <th>Control</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $sn = 0;
                                                foreach($records as $row){
                                                $sn++;
                                                $productDetail = $this->crud->get_detail($row['products'], "product_id", "products");
                                                if($row['seller_ref'] != "")
                                                {
                                                    $sellers=$this->crud->get_detail($row['seller_ref'], "seller_id", "igc_sellers");
                                                }
                                                elseif($row['seller_user_ref'] != "")
                                                {
                                                    $users=$this->crud->get_detail($row['seller_user_ref'], "user_id", "igc_sellers_users");
                                                    $sellers=$this->crud->get_detail($users['seller_id'], "seller_id", "igc_sellers");

                                                }
                                                ?>
                                                <tr>
                                                    <td><?php echo $sn; ?>.</td>
                                                    <td>
                                                        <?php
                                                        if(strlen($productDetail['product_image_1']) > 1){
                                                            $imageUrl = "../uploads/product/".$productDetail['product_code']."_1.".$productDetail['product_image_1'];
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
                                                            <?php echo $productDetail['product_title']; ?>

                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php echo $sellers['first_name']." ".$sellers['middle_name']." ".$sellers['last_name']; ?>

                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php 
                                                                    if($row['seller_ref'] != "")
                                                                    {
                                                                       echo "Self";
                                                                    }
                                                                    elseif($row['seller_user_ref'] != "")
                                                                    {
                                                                       echo $users['name']; 

                                                                    }
                                                            ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php echo $row['customer_name']; ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php echo $row['phone']; ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php echo $row['counts']; ?>
                                                        </span>
                                                    </td>
                                                    
                                                    <td>
                                                        <span>
                                                            <?php echo $row['sold_price']; ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php 
                                                            if($row['payment_type']=='0'){echo "None";}
                                                            elseif ($row['payment_type']=='1'){echo "Full";}
                                                            else {echo "Partial";}

                                                            ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                         <a class="btn btn-info btn-xs" data-target="#myModal_info<?php echo $row['sell_store_id'];?>" data-toggle="modal" title="Info"><i class="fa fa-info-circle "></i></a>
                                                        

                                                        <!-- For Info -->
                                                           <div class="modal fade" id="myModal_info<?php echo $row['sell_store_id'];?>">
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
                                                                                        <?php echo $row['customer_name'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Address :</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['address'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Contact</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['phone']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Email</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['email']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Product Title</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $productDetail['product_title']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Total Payment</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['total_amount']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Payment Remaining</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $row['remaining_payment']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Sold Date</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo date_converter($row['created']); ?>
                                                                                    </div>
                                                                                </div>
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