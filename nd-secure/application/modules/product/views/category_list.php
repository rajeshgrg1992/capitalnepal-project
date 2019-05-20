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
                                    <?php
                                    $mainId = (strlen($this->uri->segment('3')) > 0) ? "/".$this->uri->segment('3') : "";
                                    ?>
                                    <a class="btn btn-info" data-rel="tooltip" href="<?php echo site_url('product/add_category'.$mainId);?>" title="Add Slider"><i class="fa fa-plus-square-o"></i> Add Product Category</a>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="example1" class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>S.N</th>
                                                <th>Category Image</th>
                                                <th>Category Name</th>
                                                <th>In Parent Of</th>
                                                <th>Hot Status</th>
                                                <th>Show Front</th>
                                                <th>Status</th>
                                                <th>Control</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $sn = 0;
                                            foreach($records as $row){
                                                $sn++;
                                                $cat_path = '../uploads/product_category/';
                                                if($row['parent_id'] > 0){ $categoryDetail = $this->crud->get_detail_rows($row['parent_id'], "category_id", "product_category"); }
                                                else{ $categoryDetail = array(); }
                                                ?>
                                                <tr>
                                                    <td><?php echo $sn; ?>.</td>
                                                    <td>
                                                        <img src="<?php echo $cat_path.$row['featured_img']; ?>" width="20%" />
                                                    </td>
                                                    <td>
                                                        <span><strong>
                                                            <?php echo $row['category_title']; ?>

                                                        </strong></span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php
                                                            if(count($categoryDetail) > 0):
                                                                ?>
                                                                <?php echo $categoryDetail[0]['category_title']; ?>

                                                            <?php
                                                            else:
                                                                echo "Self";
                                                            endif;
                                                            ?>
                                                        </span>
                                                    </td>
                                                     <td>

                                                        <a href="product/yes_hot/<?php echo $row['category_id']; ?>" class="btn <?php if($row['hot_status'] == '1'){ echo "btn-success";  }else{ echo "btn-warning";}; ?> btn-xs btn-sm">Yes</a>
                                                        <a href="product/no_hot/<?php echo $row['category_id']; ?>" class="btn <?php if($row['hot_status'] == '0'){ echo "btn-success";  }else{ echo "btn-warning";}; ?> btn-xs btn-sm">No</a>


                                                    </td>
                                                    <td>

                                                        <a href="product/yesshow/<?php echo $row['category_id']; ?>" class="btn <?php if($row['show_front'] == '1'){ echo "btn-success";  }else{ echo "btn-warning";}; ?> btn-xs btn-sm">Yes</a>
                                                        <a href="product/noshow/<?php echo $row['category_id']; ?>" class="btn <?php if($row['show_front'] == '0'){ echo "btn-success";  }else{ echo "btn-warning";}; ?> btn-xs btn-sm">No</a>


                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php echo ($row['status'] == 1) ? "Active" : "Inactive"; ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo site_url('product/add_category/'.$row['category_id']); ?>" class="btn btn-primary btn-sm" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModel_<?php echo $row['category_id']; ?>"><i class="fa fa-trash"></i></a>

                                                        <div id="deleteModel_<?php echo $row['category_id']; ?>" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <form method="POST" action="product/delete_cat/<?php echo $row['category_id']; ?>">
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