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
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <?php echo (isset($title) && $title != "") ? $title : ""; ?>
                            </div>

                            <div class="panel-body">
                                <?php $mainId = (strlen($this->uri->segment(3)) > 0)  ? "/".$this->uri->segment(3) : ""; ?>
                                <form class="tab_form" method="post" action="<?php echo site_url('product/add_product'.$mainId); ?>" enctype="multipart/form-data">
                                    <input type="hidden" name="p_c" value="<?php echo (isset($product_detail['product_code']) && $product_detail['product_code'] != "") ? $product_detail['product_code'] : ""; ?>" />
                                    <!-- for reference admin seller and seeler user -->
                                    <input type="hidden" name="admin_ref" value="<?php echo (isset($product_detail['admin_ref']) && $product_detail['admin_ref'] != "") ? $product_detail['admin_ref'] : ""; ?>" />
                                    <!-- ////////////////// -->
                                    <div class="tab-content">

                                        <div class="tab-pane fade active in" id="home">

                                            <table class="form-table content-adjustment">
                                                <tbody>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Category">  Product Category <span class="asterisk">*</span></label>
                                                            <select name="product_category_id" id="product_category_id" class="form-control" required>
                                                                <?php if(count($paretn_category) > 0): ?>
                                                                <option value="">Choose Category</option>
                                                                <?php foreach($paretn_category as $cat): ?>
                                                                    <option value="<?php echo $cat['category_id']; ?>" <?php if((isset($product_detail['product_category_id']) && $product_detail['product_category_id'] > 0)){ echo ($product_detail['product_category_id'] == $cat['category_id']) ? "selected" : ""; }?>>
                                                                        <?php echo $cat['category_title']; ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Category">  Product Sub Category <span class="asterisk">*</span></label>
                                                            <select name="product_sub_cat_id" id="product_sub_cat_id" class="form-control" required ></select>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Category">  Product Name <span class="asterisk">*</span>  </label>
                                                            <input type="text" name="product_title" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($product_detail['product_title']) && $product_detail['product_title'] != "") ? $product_detail['product_title'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Category"> Count <span class="asterisk">*</span>  </label>
                                                            <input type="number" name="counts" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($product_detail['counts']) && $product_detail['counts'] != "") ? $product_detail['counts'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">
                                                        </div>
                                                    </div>
                                                   

                                                </div>


                                                
                                                <div class="row">

                                                     <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Category">Product For</label>
                                                            <select name="product_for" class="form-control">
                                                                <option value="">No Unit</option>
                                                                <option value="men" >Men</option>
                                                                <option value="women" >Women</option>
                                                                <option value="children" >Children</option>
                                                                <option value="other" >Others</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Category">Product Brands </label>
                                                            <select name="brands_id" class="form-control">
                                                                <option>--- Select Brand ---</option>
                                                                <?php
                                                                foreach($brands as $brand){

                                                                    ?>
                                                                    <option value="<?php echo $brand['brands_id'] ?>" <?php echo (isset($product_detail['brands_id']) && $product_detail['brands_id'] ==$brand['brands_id'])?"selected":"";?>><?php echo $brand['brands_title']; ?>

                                                                    </option>
                                                                    <?php

                                                                }

                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Category">Currency </label>
                                                            <select name="product_price_currency" class="form-control">
                                                                <option value="NPR">NPR</option>
                                                                <option value="$">$</option>
                                                                <option value="€">€</option>
                                                                <option value="£">£</option>
                                                                <option value="INR">INR</option>
                                                                <option value="AED">AED</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Category">Product Price </label>
                                                            <input type="number" name="product_old_sell_price" step=".01" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($product_detail['product_old_sell_price']) && $product_detail['product_old_sell_price'] != "") ? $product_detail['product_old_sell_price'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Category">Product Weight</label>
                                                            <input type="number" name="product_weight" step=".01" class="form-control" data-validation-allowing="float"
                                                                   size="50" data-validation="required"
                                                                   value="<?php echo (isset($product_detail['product_weight']) && $product_detail['product_weight'] != "") ? $product_detail['product_weight'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Category">Product Unit</label>
                                                            <select name="product_unit" class="form-control">
                                                                <option value="">No Unit</option>
                                                                <option value="gram" >Gram</option>
                                                                <option value="kg" >Kg</option>
                                                                <option value="ml" >Mililiter</option>
                                                                <option value="lt" >Liter</option>
                                                                <option value="inch" >Inch</option>
                                                                <option value="foot" >Foot</option>
                                                                <option value="meter">Meter</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Category">Product Sizes (in format: XL,XXL..)</label>
                                                            <input type="text" name="product_size" class="form-control" data-validation-allowing="float"
                                                                   size="50"
                                                                   value="<?php echo (isset($product_detail['product_size']) && $product_detail['product_size'] != "") ? $product_detail['product_size'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Category">Product Colors (in format:red,black...)</label>
                                                            <input type="text" name="product_color" class="form-control" data-validation-allowing="float"
                                                                   size="50"
                                                                   value="<?php echo (isset($product_detail['product_color']) && $product_detail['product_color'] != "") ? $product_detail['product_color'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">
                                                        </div>
                                                    </div>



                                                    
                                                    
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Category">Product Made In</label>
                                                            <select name="product_country" class="form-control">
                                                                <option value="">Local Product</option>
                                                                <?php if(count($country_list) > 0): ?>
                                                                <?php foreach($country_list as $row): ?>
                                                                    <option value="<?php echo ucfirst($row['id']); ?>" <?php if((isset($product_detail['product_country']) && $product_detail['product_country'] > 0)){ echo ($product_detail['product_country'] == $row['id']) ? "selected" : ""; }?>>
                                                                        <?php echo ucfirst($row['name']); ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Category">Sell Offer</label>
                                                            <select name="sell_offer" class="form-control" id="sell_offer">
                                                                <option value="">--Select Offer--</option>
                                                                 <option value="1"  <?php echo (isset($product_detail['sell_offer']) && $product_detail['sell_offer'] =="1")?"selected":"";?>>Yes</option>
                                                                <option value="0"  <?php echo (isset($product_detail['sell_offer']) && $product_detail['sell_offer'] =="0")?"selected":"";?>>No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3" id="sell_offer_percentage">
                                                        <div class="form-group">
                                                            <label for="Category">Sell Offer Percentage</label>
                                                           
                                                             <input type="number" name="sell_offer_percentage" step=".01" class="form-control" data-validation-allowing="float"
                                                                   size="50"                                                                   value="<?php echo (isset($product_detail['sell_offer_percentage']) && $product_detail['sell_offer_percentage'] != "") ? $product_detail['sell_offer_percentage'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="Category">Special Product</label>
                                                            <select name="sp_product_status" class="form-control">
                                                                <option value="">-------------</option>
                                                                 <option value="1"  <?php echo (isset($product_detail['sp_product_status']) && $product_detail['sp_product_status'] =="1")?"selected":"";?>>Yes</option>
                                                                <option value="0"  <?php echo (isset($product_detail['sp_product_status']) && $product_detail['sp_product_status'] =="0")?"selected":"";?>>No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label for="Category">Sell Offer Deal:</label>
                                                            <select name="product_offer_deal" class="form-control" id="product_offer_deal">
                                                                <option value="">--Offer Deal--</option>
                                                                  <option value="1"  <?php echo (isset($product_detail['product_offer_deal']) && $product_detail['product_offer_deal'] =="1")?"selected":"";?>>Yes</option>
                                                                <option value="0"  <?php echo (isset($product_detail['product_offer_deal']) && $product_detail['product_offer_deal'] =="0")?"selected":"";?>>No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2" id="product_offer_price">
                                                        <div class="form-group">
                                                            <label for="Category">Product Offer Price</label>
                                                           
                                                             <input type="number" name="product_offer_price" step=".01" class="form-control" data-validation-allowing="float"
                                                                   size="50"                                                                   value="<?php echo (isset($product_detail['product_offer_price']) && $product_detail['product_offer_price'] != "") ? $product_detail['product_offer_price'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2" id="product_offer_percentage">
                                                        <div class="form-group">
                                                            <label for="Category">Offer Percentage</label>
                                                           
                                                             <input type="number" name="product_offer_percentage" step=".01" class="form-control" data-validation-allowing="float"
                                                                   size="50"                                                                   value="<?php echo (isset($product_detail['product_offer_percentage']) && $product_detail['product_offer_percentage'] != "") ? $product_detail['product_offer_percentage'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">
                                                        </div>
                                                    </div>
                                                     <div class="col-sm-3" id="product_offer_start_date">
                                                        <div class="form-group">
                                                            <label for="Category">Product Offer Start Date</label>
                                                           
                                                             <input type="date" name="product_offer_start_date" step=".01" class="form-control" data-validation-allowing="float"
                                                                   size="50"                                                                   value="<?php echo (isset($product_detail['product_offer_start_date']) && $product_detail['product_offer_start_date'] != "") ? $product_detail['product_offer_start_date'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3" id="product_offer_end_date">
                                                        <div class="form-group">
                                                            <label for="Category">Product Offer End Date</label>
                                                           
                                                             <input type="date" name="product_offer_end_date" step=".01" class="form-control" data-validation-allowing="float"
                                                                   size="50"                                                                   value="<?php echo (isset($product_detail['product_offer_end_date']) && $product_detail['product_offer_end_date'] != "") ? $product_detail['product_offer_end_date'] : ""; ?>"
                                                                   autocomplete="off" class="regular-text required valid"
                                                                   kl_virtual_keyboard_secure_input="on">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-sm-9">
                                                        <div class="form-group">
                                                            <label for="Category">  Product Images</label>
                                                            <div class="row">
                                                                
                                                                <div class="col-md-3">
                                                                    <span style="font-size: 12px;font-weight: bold;color: #f39c12;">(Note: This is Main Photos ) <span class="asterisk">*</span></span>
                                                                    <input type="file" name="product_image_1" />
                                                                    <input type="hidden" name="product_image_1_img" value="<?php echo (isset($product_detail['product_image_1']) && $product_detail['product_image_1'] != "") ? $product_detail['product_image_1'] : ""; ?>" />
                                                                    <br/>
                                                                    <div class="show_images">
                                                                        &nbsp;<?php
                                                                        if(isset($product_detail['product_image_1'])){

                                                                            ?>
                                                                                <img src="../uploads/product/<?php echo (isset($product_detail['product_code']) && $product_detail['product_code'] != "") ? $product_detail['product_code'] : ""; ?>_1.<?php echo (isset($product_detail['product_image_1']) && $product_detail['product_image_1'] != "") ? $product_detail['product_image_1'] : "" ?>" height="100" alt="Product" />

                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-3">
                                                                    <span style="font-size: 12px;font-weight: bold;color: #08c;">(Second Photo)</span>
                                                                    <input type="file" name="product_image_2" />
                                                                    <input type="hidden" name="product_image_2_img" value="<?php echo (isset($product_detail['product_image_2']) && $product_detail['product_image_2'] != "") ? $product_detail['product_image_2'] : ""; ?>" />
                                                                    <br/>
                                                                    <div class="show_images">
                                                                        <?php
                                                                        if(isset($product_detail['product_image_2'])){

                                                                            ?>
                                                                            <img src="../uploads/product/<?php echo (isset($product_detail['product_code']) && $product_detail['product_code'] != "") ? $product_detail['product_code'] : ""; ?>_2.<?php echo (isset($product_detail['product_image_2']) && $product_detail['product_image_2'] != "") ? $product_detail['product_image_2'] : "" ?>" height="100" alt="Product" />

                                                                            <?php
                                                                        }
                                                                        ?>
                                                                        &nbsp;
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-3">
                                                                    <span style="font-size: 12px;font-weight: bold;color: #08c;">(Third Photo )</span>
                                                                    <input type="file" name="product_image_3" />
                                                                    <input type="hidden" name="product_image_3_img" value="<?php echo (isset($product_detail['product_image_3']) && $product_detail['product_image_3'] != "") ? $product_detail['product_image_3'] : ""; ?>" />
                                                                    <br/>
                                                                    <div class="show_images">
                                                                        <?php
                                                                        if(isset($product_detail['product_image_3'])){

                                                                            ?>
                                                                            <img src="../uploads/product/<?php echo (isset($product_detail['product_code']) && $product_detail['product_code'] != "") ? $product_detail['product_code'] : ""; ?>_3.<?php echo (isset($product_detail['product_image_3']) && $product_detail['product_image_3'] != "") ? $product_detail['product_image_3'] : "" ?>" height="100" alt="Product" />

                                                                            <?php
                                                                        }
                                                                        ?>
                                                                        &nbsp;
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-3">
                                                                    <span style="font-size: 12px;font-weight: bold;color: #08c;">(Last Photo )</span>
                                                                    <input type="file" name="product_image_4" />
                                                                    <input type="hidden" name="product_image_4_img" value="<?php echo (isset($product_detail['product_image_4']) && $product_detail['product_image_4'] != "") ? $product_detail['product_image_4'] : ""; ?>" />
                                                                    <br/>
                                                                    <div class="show_images">
                                                                        <?php
                                                                        if(isset($product_detail['product_image_4'])){

                                                                            ?>
                                                                            <img src="../uploads/product/<?php echo (isset($product_detail['product_code']) && $product_detail['product_code'] != "") ? $product_detail['product_code'] : ""; ?>_4.<?php echo (isset($product_detail['product_image_4']) && $product_detail['product_image_4'] != "") ? $product_detail['product_image_4'] : "" ?>" height="100" alt="Product" />

                                                                            <?php
                                                                        }
                                                                        ?>
                                                                        &nbsp;
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Category">  Product Features  </label>
                                                            <textarea rows="5" cols="10" class="form-control" name="product_features" id="product_features"><?php echo (isset($product_detail['product_features']) && $product_detail['product_features'] != "") ? $product_detail['product_features'] : ""; ?></textarea>
                                                        </div>
                                                    </div>

                                                  
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Category">  Product Return Policy  </label>
                                                            <textarea rows="5" cols="10" class="form-control" name="product_return_policy" id="product_features_3"><?php echo (isset($product_detail['product_return_policy']) && $product_detail['product_return_policy'] != "") ? $product_detail['product_return_policy'] : ""; ?></textarea>
                                                        </div>
                                                    </div>



                                                </div>

                                                <div class="row">
                                                       <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Category">  Product  Short Detail ( less than  70 years) </label>
                                                            <textarea rows="5" cols="10" class="form-control" name="product_short_detail" id="product_short_detail"><?php echo (isset($product_detail['product_short_detail']) && $product_detail['product_short_detail'] != "") ? $product_detail['product_short_detail'] : ""; ?></textarea>
                                                        </div>
                                                    </div>
                                                      <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Category">  Product Detail  </label>
                                                            <textarea rows="5" cols="10" class="form-control" name="product_full_detail" id="product_features_2"><?php echo (isset($product_detail['product_full_detail']) && $product_detail['product_full_detail'] != "") ? $product_detail['product_full_detail'] : ""; ?></textarea>
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="row">

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="PageType">Publish  <span class="asterisk">*</span></label>
                                                            <select name="status" class="publish_status form-control">

                                                                <option value="1"  <?php echo (isset($product_detail['status']) && $product_detail['status'] =="1")?"selected":"";?>>Yes</option>
                                                                <option value="0"  <?php echo (isset($product_detail['status']) && $product_detail['status'] =="0")?"selected":"";?>>No</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                </tbody>
                                            </table>
                                            
                                        </div>
                                      
                                        <p class="submit">
                                            
                                            <input type="submit" name="Setting Btn" id="slider_btn" class="button" value="Save">
                                        </p>


                                    </div>
                                </form>
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
    $.validate();
</script>
<script>
    $(document).ready(function(){
        $("#product_category_id").change(function(){
            $.post('<?php echo site_url('product/product_sub_cat_ajax');?>',{id:$('#product_category_id').val()}, function(data) {
                $('#product_sub_cat_id').html(data);
            });
        });
        $("#sell_offer").change(function(){
            var value=$("#sell_offer").val();
            if(value==0)
            {
                $("#sell_offer_percentage").hide();
            }
            else
            {
                $("#sell_offer_percentage").show();
            }
        });
         $("#product_offer_deal").change(function(){
            var value=$("#product_offer_deal").val();
            if(value==0)
            {
                $("#product_offer_price").hide();
                   $("#product_offer_percentage").hide();
                $("#product_offer_start_date").hide();
                $("#product_offer_end_date").hide();
            }
            else
            {
                $("#product_offer_price").show();
                 $("#product_offer_percentage").show();
                $("#product_offer_start_date").show();
                $("#product_offer_end_date").show();
            }
        });
    });
</script>
<script>

    CKEDITOR.replace( 'product_features'  ,{
        toolbar: [
            { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
            { name: 'styles', items: [ 'Format', 'FontSize' ] },
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline'] },
            { name: 'colors', items: [ 'TextColor' ] },
            { name: 'align', items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
            { name: 'links', items: [ 'Link', 'Unlink' ] },
            { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-' ] },
        ],
        filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
    });
    CKEDITOR.replace( 'product_features_2'  ,{
        toolbar: [
            { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
            { name: 'styles', items: [ 'Format', 'FontSize' ] },
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline'] },
            { name: 'colors', items: [ 'TextColor' ] },
            { name: 'align', items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
            { name: 'links', items: [ 'Link', 'Unlink' ] },
            { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-' ] },
        ],
        filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
    });
    
    CKEDITOR.replace( 'product_features_3'  ,{
        toolbar: [
            { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
            { name: 'styles', items: [ 'Format', 'FontSize' ] },
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline'] },
            { name: 'colors', items: [ 'TextColor' ] },
            { name: 'align', items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
            { name: 'links', items: [ 'Link', 'Unlink' ] },
            { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-' ] },
            { name: 'insert', items: [ 'Image', 'Table' ] },
        ],
        filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
    });
     CKEDITOR.replace( 'product_short_detail'  ,{
        toolbar: [
            { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
            { name: 'styles', items: [ 'Format', 'FontSize' ] },
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline'] },
            { name: 'colors', items: [ 'TextColor' ] },
            { name: 'align', items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
            { name: 'links', items: [ 'Link', 'Unlink' ] },
            { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-' ] },
            { name: 'insert', items: [ 'Image', 'Table' ] },
        ],
        filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
    });

    
    CKEDITOR.replace( 'product_return_policy'  ,{
        toolbar: [
            { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
            { name: 'styles', items: [ 'Format', 'FontSize' ] },
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline'] },
            { name: 'colors', items: [ 'TextColor' ] },
            { name: 'align', items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
            { name: 'links', items: [ 'Link', 'Unlink' ] },
            { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-' ] },
        ],
        filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
    });

    
    
    CKEDITOR.replace( 'body_name'  ,{
        toolbar: [

            { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
            { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'CopyFormatting' ] },
            { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
            { name: 'align', items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
            { name: 'links', items: [ 'Link', 'Unlink' ] },
            { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
            { name: 'insert', items: [ 'Image', 'Table' ] },
            { name: 'tools', items: [ 'Maximize' ] },
            { name: 'editing', items: [ 'Scayt' ] }
        ],


        filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    });

    $('#slider_btn').click(function(e)
    {

        var a=0;

        var ext1 =  $('#slider_image').val().split('.').pop().toLowerCase();


        if(ext1 == "")
        {
            a = 1;
        }
        else
        {
            if($.inArray(ext1, ['gif','png','jpg','jpeg']) == -1)
            {
                a = 0
            }
            else
            {

                a = 1;
            }
        }

        if(a != "1")
        {
            alert('Invalid Slider Image');
            e.preventDefault();
        }

        else{

            e.submit;

        }


    });
</script>

<style type="text/css">
    .show_images{
        width: 100%;
        float: left;
        height: 110px;
        background: #f0f0f0;
    }
</style>