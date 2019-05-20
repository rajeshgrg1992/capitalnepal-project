

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
                                                    <th>Image</th>
                                                    <th>Product Title</th>
                                                    <th>Seller Company</th>
                                                    <th>Ordered By</th>
                                                    <th>Order Date:</th>
                                                    <th>Quantity</th>
                                                    <th>Sold Status</th>
                                                    <th>Control</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $sn = 0;
                                                    foreach($records as $key => $row)
                                                    {
                                                    $product_detail=$this->crud->get_detail($row['product_id'],"product_id","products");
                                                    $order_record = $this->crud->get_detail($row['id'],"id","igc_order_products");
                                                    $order_info = $this->crud->get_detail($row['customer_code'],"customer_code","igc_guest_order");
                                                    $country= $this->crud->get_detail($order_info['country'],"id","all_values");  
                                                    if($row['seller_ref'] > 0)
                                                        {$seller=$this->crud->get_detail($row['seller_ref'],"seller_id","igc_sellers"); }
                                                    if($row['seller_user_ref'] > 0)
                                                        {
                                                            $seller_user=$this->crud->get_detail($row['seller_user_ref'],"user_id","igc_sellers_users"); 
                                                            $seller=$this->crud->get_detail($seller_user['seller_id'],"seller_id","igc_sellers");
                                                        }
                                                    $sn++;
                                                    $productId = $row['product_id'];
                                                ?>
                                                <tr>
                                                    <td><?php echo $sn; ?>.</td>
                                                    <td>
                                                        <?php
                                                        if(strlen($product_detail['product_image_1']) > 1){
                                                            $imageUrl = "../uploads/product/".$product_detail['product_code']."_1.".$product_detail['product_image_1'];
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
                                                            <?php echo $product_detail['product_title']; ?>

                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php echo $seller['company_name']; ?>

                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php echo $order_info['first_name']." ".$order_info['last_name']; ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php echo date_convert($order_info['created']) ; ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php echo $order_record['quantity'] ; ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                            <span class="label label-<?php echo ($order_record['sold_status'] ==1)?"success":"warning"; ?>">
                                                                <i class="fa fa-<?php echo ($order_record['sold_status'] ==1)?"check":"remove"; ?> "></i>
                                                            </span>
                                                    </td>
                                                    <td>
                                                         <a class="btn btn-info" data-target="#myModal_info<?php echo $order_record['id'];?>" data-toggle="modal" title="Info"><i class="fa fa-info-circle "></i></a>
                                            <?php
                                                    if($this->session->userdata('permission')=='0')
                                                    {
                                            ?>
                                                        <a class="btn btn-danger" data-toggle="modal" data-target="#deleteModel_<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></a>
                                            <?php
                                                    }
                                            ?>
                                                        

                                                        <!-- For Info -->
                                                           <div class="modal fade" id="myModal_info<?php echo $row['id'];?>">
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
                                                                                        <label>Product Name :</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $product_detail['product_title'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Product Code :</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $product_detail['product_code'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                               <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Product Sell Price:</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $product_detail['product_sell_price'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Product Amount Total :</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $product_detail['product_sell_price']*$order_record['quantity'];?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Product COlor</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $order_record['color']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Product Size</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $order_record['size']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Customer Code</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $order_record['customer_code']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-1s2">
                                                                                        <center><label>Seller Information</label></center>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Name</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $seller['first_name']." ".$seller['middle_name']." ".$seller['last_name']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Seller Company Name</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $order_info['company_name']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Sellers Users:</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php 
                                                                                             if($row['seller_ref'] > 0)
                                                                                                    {echo "SELF"; }
                                                                                             elseif($row['seller_user_ref'] > 0)
                                                                                                    {
                                                                                                       echo $seller_user['name'];
                                                                                                    }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-1s2">
                                                                                        <center><label>Billing Information</label></center>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Name</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $order_info['first_name']." ".$order_info['last_name']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Company Name</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $order_info['company_name']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Email Address</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $order_info['email_address']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                 <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Address</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $order_info['address']; ?><br>
                                                                                        <?php echo $order_info['city'].", ".$order_info['state'].", ".$order_info['postal_code']; ?><br>
                                                                                        <?php echo $country['name']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                 <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Telephone</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $order_info['telephone']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                 <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Fax</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $order_info['fax']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                        <?php 
                                                                            if($order_info['diff_bill_ship'] == '1')
                                                                            {
                                                                        ?>
                                                                                <div class="row">
                                                                                    <div class="col-md-1s2">
                                                                                        <center><label>Shipping Information</label></center>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Name</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $order_info['first_name_1']." ".$order_info['last_name_1']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Company Name</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $order_info['company_name_1']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Email Address</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $order_info['email_address_1']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                 <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Address</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php $country_1= $this->crud->get_detail($order_info['country_1'],"id","all_values");   ?>
                                                                                        <?php echo $order_info['address_1']; ?><br>
                                                                                        <?php echo $order_info['city_1'].", ".$order_info['state_1'].", ".$order_info['postal_code_1']; ?><br>
                                                                                        <?php echo $country_1['name']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                 <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Telephone</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $order_info['telephone_1']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                 <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Fax</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php echo $order_info['fax_1']; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                        <?php
                                                                            }
                                                                        ?>

                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Shipping Method</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php 
                                                                                            if($order_info['shipping_method'] =='0')
                                                                                                { echo "Free Shipping"; }
                                                                                            else
                                                                                                { echo "Standard Shipping"; }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="modal-hr">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>Payment Method</label>
                                                                                    </div>
                                                                                    <div class="col-md-8">
                                                                                        <?php 
                                                                                            if($order_info['payment_information'] =='0')
                                                                                                { echo "Check / Money order"; }
                                                                                            elseif($order_info['payment_information'] =='1')
                                                                                                { echo " Credit card (saved)"; }
                                                                                            elseif($order_info['payment_information'] =='2')
                                                                                                { echo " Cash Delivery"; }
                                                                                        ?>
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

                                                      <!-- --------- Delete Modal Area ------------------ -->
                                                        <div id="deleteModel_<?php echo $row['id']; ?>" class="modal fade" role="dialog">
                                                          <div class="modal-dialog">
                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                            <form method="POST" action="<?php echo site_url('order/admin_delete/'.$row['id']); ?>">
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
                                            <?php echo $this->pagination->create_links(); ?>
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