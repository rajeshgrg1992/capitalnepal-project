<!-- page wapper-->
<?php $settings = $this->site_settings_model->get_site_settings(); ?>
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="<?php echo base_url();?>" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Your shopping cart</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading no-line">
            <span class="page-heading-title2">Shopping Cart Summary</span>
        </h2>
        <!-- ../page heading-->
<?php 
    if(count($this->cart->contents()) > 0)
    {
        $grand_total=0;
?>
        <div class="page-content page-order">
            <ul class="step">
                <li class="current-step"><span>01. Summary</span></li>
                <li><span>02. Sign in</span></li>
                <li><span>03. Address</span></li>
                <li><span>04. Shipping</span></li>
                <li><span>05. Payment</span></li>
            </ul>
            <div class="heading-counter warning">Your shopping cart contains:
                <span><?php echo count($this->cart->contents()); ?> Product</span>
            </div>
            <div class="order-detail-content">
                <table class="table table-bordered table-responsive cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product">Product</th>
                            <th>Description</th>
                            <th>Avail.</th>
                            <th>Unit price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Total in NPR</th>
                            <th  class="action"><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                    $folder_path="uploads/product/";
                    foreach($this->cart->contents() as $key => $rows)
                    {
                        $product_detail=$this->crud->get_detail($rows['id'],"product_code","products");
                ?>
                            <tr>
                            <td class="cart_product">
                                <a href="<?php echo $folder_path.$product_detail['product_code']."_1.".$product_detail['product_image_1']; ?>">
                                    <img src="<?php echo $folder_path.$product_detail['product_code']."_1.".$product_detail['product_image_1']; ?>" alt="Product">
                                </a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name">
                                    <a href="<?php echo site_url('products/products_detail/show/'.$product_detail['product_slug']); ?>">
                                    <?php echo $product_detail['product_title']; ?> 
                                    </a>
                                </p>
                                <small class="cart_ref">Product Code : <?php echo $product_detail['product_code']; ?></small><br>
                        <?php 
                                if(isset($product_detail['product_size']) && $product_detail['product_size'] !="")
                             {
                        ?>
                        <form action="<?php echo site_url('order/order/update_color_cart/'.$rows['rowid']); ?>" method="post" >
                                <small>Color :
                                    <?php 
                                        $color=explode(',',$product_detail['product_color']);
                                    ?> 
                                        <input type="hidden" name="prod_size" value="<?php echo $rows['options']['size']?>">
                                        <select name="prod_color">
                                            <?php foreach ($color as $value): ?>
                                                <option value="<?php echo $value; ?>" <?php echo ($rows['options']['color'] == $value)?"selected":""; ?>><?php echo $value; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                        <button type="submit" class="button button-sm">Save</button>
                                </form>
                                    
                               
                                </small><br>
                        <?php 
                                }
                        ?>
                         <?php 
                                if(isset($product_detail['product_size']) && $product_detail['product_size'] !="")
                             {
                        ?>      <form action="<?php echo site_url('order/order/update_size_cart/'.$rows['rowid']); ?>" method="post">
                                   <small>Size :
                                    <?php 
                                        $size=explode(',',$product_detail['product_size']);
                                    ?> 
                                         <input type="hidden" name="prod_size" value="<?php echo $rows['options']['color']?>">
                                        <select name="prod_size">
                                            <?php foreach ($size as $value): ?>
                                                <option value="<?php echo $value; ?>" <?php echo ($rows['options']['size'] == $value)?"selected":""; ?>><?php echo $value; ?></option>
                                            <?php endforeach ?>
                                            
                                        </select>
                             
                                    </small><br>   
                                            <button type="submit" class="button button-sm">Save</button>
                                </form>
                        <?php 
                                }
                        ?>
                            </td>
                            
                            <td class="cart_avail"><span class="label label-<?php echo ($product_detail['counts'] > 0)?"success":"danger"; ?>"><?php echo ($product_detail['counts'] > 0)?"In Stock":"Out Of Stock"; ?></span></td>

                            <td class="price"><span><?php echo $product_detail['product_price_currency']." ".$rows['price']; ?></span></td>

                            <td class="qty">
                                <form action="<?php echo site_url('order/order/update_cart/'.$rows['rowid']); ?>" method="post" accept-charset="utf-8">
                                    <input type="number" value="<?php echo $rows['qty'];?>" name="qty" min="0" max="<?php echo  $product_detail['counts']; ?>"/><br>
                                    <div class="button-action">
                                        <button type="submit" class="button button-sm">Save</button>
                                    </div>
                                </form>
                            </td>
                            <td class="price">
                                <span><?php echo ($product_detail['counts'] > 0) ?$product_detail['product_price_currency']." ".$rows['subtotal'] : "0 (out of stock)"; ?></span>
                            </td>
                             <td class="price">
                                <span>

                <?php 
                    $npr_sub_total = $this->crud->currency_conversion($product_detail['product_price_currency'],$rows['subtotal']);
                    echo ($product_detail['counts'] > 0) ?"NPR ".number_format($npr_sub_total,3) : "0 (out of stock)"; 
                    if($product_detail['counts'] > 0 )
                    {
                        $grand_total +=   $npr_sub_total; 
                    }
                    else
                    {
                         $grand_total =  $grand_total+0; 
                    }
                ?>
                                </span>
                            </td>
                            <td class="action">
                                <a href="<?php echo site_url('order/order/remove_cart/'.$rows['rowid']); ?>">Delete item</a>
                            </td>
                        </tr>
                <?php       
                    }
                    $grand_total_tax = ((100+$settings['tax'])/100)*$grand_total;
                    $grand_total_tax = round($grand_total_tax,3);
                ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" rowspan="3"></td>
                            <td colspan="3">Total (discluding Tax.)</td>
                            <td colspan="2"><?php echo  "NPR ".number_format($grand_total,3);?></td>
                        </tr>
                        <tr>
                            <td colspan="3">Total Tax (<?php echo $settings['tax']; ?>%)</td>
                            <td colspan="2"><?php echo  "NPR ".number_format((($settings['tax']/100)*$grand_total),3) ;?></td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Total</strong></td>
                            <td colspan="2"><strong><?php echo  "NPR ".number_format($grand_total_tax,3) ;?></strong></td>
                        </tr>
                    </tfoot>    
                </table>
                <div class="cart_navigation">
                    <?php 
                        $sub_cat=$this->crud->get_detail($product_detail['product_sub_cat_id'],"category_id","product_category");
                    ?>
                    <a class="prev-btn" href="<?php echo site_url('products/products_detail/sub_category_products/'.$sub_cat['category_slug']); ?>">Continue shopping</a>
                    <a class="next-btn" href="<?php echo site_url('order/order/check_out'); ?>">Proceed to checkout</a>
                </div>
            </div>
        </div>
<?php
    } //end of if for having products in carts
    else
    {
?>
                <h2>Cart List is Empty!</h2>
                <h4>Sorry! Currently there is no item in your shopping cart.</h4>
                <p>Please <a href="<?php echo site_url(''); ?>" class="btn btn-primary btn-sm">Continue Shopping</a> to add item in your card.</p>
<?php
    }
?>
        
    </div>
</div>
<!-- ./page wapper-->