<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <!-- /.box -->

                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4><?php echo $title; ?></h4>
                            </div>


                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        
                                        <tr><th>Order ID</th><td><?php echo $records['ordering_code']; ?></td></tr>
                                        <tr><th>Transition ID</th><td><?php echo $records['transition_id']; ?></td></tr>
                                        <tr><th>Ordered Date</th><td><?php echo $records['order_date']; ?></td></tr>
                                        <tr><th>Ordered Time</th><td><?php echo $records['order_time']; ?></td></tr>
                                        <tr><th>Delivery Status</th><td><?php echo $records['delivery_status']; ?></td></tr>
                                        <tr><th>Ordered From Detail: </th><td>
                                            <span><strong>Ordered User Name : </strong><?php echo $user_detail['first_name']; ?></span><br/>
                                            <span><strong>Ordered User Email : </strong><?php echo $user_detail['email']; ?></span><br/>
                                            <span><strong>Ordered User Contact : </strong><?php echo $user_detail['contact_no']; ?></span><br/>
                                            <span><strong>Ordered User Address : </strong><?php echo $user_detail['city'].", ".$user_detail['country']; ?></span><br/>
                                        </td></tr>
                                        <tr><th>Payment Type: </th><td><?php echo (strlen($records['order_address']) <= 0) ? "Paid On Counter" : "Cash On Delivery"; ?></td></tr>
                                        <tr><th>Shipping To Detail: </th><td>
                                            <span><strong>Shipping Full Name : </strong><?php echo $records['order_full_name']; ?></span><br/>
                                            <span><strong>Shipping Email : </strong><?php echo $records['order_email']; ?></span><br/>
                                            <span><strong>Shipping Contact Number : </strong><?php echo $records['order_phone']; ?></span><br/>
                                            <span><strong>Shipping Address : </strong><?php echo $records['order_address']; ?></span><br/>
                                            <span><strong>Shipping Message : </strong><?php echo $records['order_message']; ?></span><br/>
                                        </td></tr>
                                        <tr><th>Ordered Quantity: </th><td><?php echo $records['order_quantity']; ?> (counts)</td></tr>
                                        <tr><th>Price Detail: </th><td>
                                            <span><strong>Sub Total Amount : </strong><?php echo $records['order_currency']; ?> <?php echo $records['order_cart_total']; ?></span><br/>
                                            <span><strong>VAT Amount : </strong><?php echo $records['order_currency']; ?> <?php echo $records['order_vat_amount']; ?></span><br/>
                                            <span><strong>Offer Amount : </strong><?php echo $records['order_currency']; ?> <?php echo $records['order_offer_amount']; ?></span><br/>
                                            <span><strong>Coupon Discount Amount : </strong><?php echo $records['order_currency']; ?> <?php echo $records['order_coupon_amount']; ?></span><br/>
                                            <span><strong>Total Ordered Amount : </strong><?php echo $records['order_currency']; ?> <?php echo $records['order_amount']; ?></span><br/>
                                        </td></tr>
                                        <tr><th>Product Detail: </th><td>
                                            <table width="100%" class="table table-striped table-hovered">
                                                <thead>
                                                    <tr>
                                                        <th>S.N.</th>
                                                        <th>Product Code</th>
                                                        <th>Product Name</th>
                                                        <th>Qty</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            <?php
                                            if(count($product_list) > 0): $sn = 0;
                                            foreach($product_list as $list): $sn++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $sn; ?></td>
                                                    <td><?php echo $list['product_code']; ?></td>
                                                    <td><?php echo $list['product_name']; ?></td>
                                                    <td><?php echo $list['quantity']; ?></td>
                                                    <td><?php echo $list['amount']; ?></td>
                                                </tr>
                                                <?php
                                            endforeach;
                                            endif;
                                            ?>
                                                </tbody>
                                            </table>
                                        </td></tr>
                                        <tr><th>Ordered IP Address: </th><td><?php echo $records['order_ip']; ?></td></tr>
                                        <tr><th>Ordered Latitude: </th><td><?php echo $records['order_lat']; ?></td></tr>
                                        <tr><th>Ordered Longtitude: </th><td><?php echo $records['order_long']; ?></td></tr>
                                        <tr><th>Order Status: </th><td><?php echo $records['order_status']; ?></td></tr>
                                        
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
<style type="text/css">
    table tr th,
    table tr td{
        padding: 5px;
    }
</style>