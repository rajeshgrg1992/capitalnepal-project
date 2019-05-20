<?php
if (isset($_GET['count'])) { $count = trim($_GET['count']); }
else{ $count = "0"; }
$getValues = implode('&', array_map( function ($v, $k) { return sprintf("%s=%s", $k, $v); },$_GET, array_keys($_GET))); 
?>

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
                                <h4><?php echo $sub_title; ?></h4>
                                <h5>[ <?php echo count($records); ?> Results Found ]</h5>
                            </div>
                            
                            <div class="pull-right download_area" style="padding: 15px;">
                                <a href="reports/download_agency/?<?php echo $getValues; ?>" class="btn btn-success btn-sm" style="color: #FFF;"><i class="fa fa-download" aria-hidden="true"></i>&nbsp; Download Record</a>
                            </div>
                            <br clear="all" />

                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="example1">
                                        <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Booked By</th>
                                            <th>Shipping Detail</th>
                                            <th>Order Detail</th>
                                            <th>Order/Sales Date</th>
                                            <th>Status</th>
                                            <th>View Detail</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($records as $row) {
                                            $userDetail = $this->crud->get_detail($row['user_id'], "customer_id", "igc_site_users");
                                        ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td>
                                                    <span><strong>Name: </strong><?php echo $userDetail['first_name']; ?></span><br/>
                                                    <span><strong>E-mail: </strong><?php echo $userDetail['email']; ?></span><br/>
                                                </td>
                                                <td>
                                                    <span><strong>Payment Type: </strong><?php echo (strlen($row['order_address']) <= 0) ? "Paid On Counter" : "Cash On Delivery"; ?></span><br/>
                                                    <span><strong>Full Name: </strong><?php echo $row['order_full_name']; ?></span><br/>
                                                    <span><strong>Order Phone: </strong><?php echo $row['order_phone']; ?></span><br/>
                                                </td>
                                                <td>
                                                    <span><strong>Ordered Quantity: </strong><?php echo $row['order_quantity']; ?></span><br/>
                                                    <span><strong>Ordered Amount: </strong><?php echo "AED " . number_format($row['order_amount'],2); ?></span><br/>
                                                </td>
                                                <td><?php echo $row['order_date']; ?></td>
                                                <td><?php echo $row['order_status']; ?></td>
                                                <td><a href="reports/sales_detail/<?php echo $row['ordering_code']; ?>" class="btn btn-warning btn-sm"><strong><i class="fa fa-eye" aria-hidden="true"></i>&nbsp; Full Detail</strong></a></td>
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
<style type="text/css">
    .noti_tool{
        position: absolute;
        bottom: -5px;
        left: -10px;
        padding: 6px 0;
        border-radius: 50%;
        font-size: 10px;
        font-weight: bold;
        width: 25px;
        height: 25px;
        z-index: 999;
    }
    .noti_red{
        background: #c90000;
        color: #fff;
    }
    .noti_orange{
        background: #e4840a;
        color: #fff;
    }
    .small_lists li{
        list-style: none;
        float: left;
    }
    .small_lists li a{
        width: 50px;
        position: relative;
    }
    .search_again_form{
        float: left;
    }
    .search_again_form input{
        line-height: 24px;
        background: #f0f0f0;
    }
    .search_again_form button{
        height: 30px;
        border-radius: 0;
        padding: 5px 15px;
        background: #24709e;
    }
</style>