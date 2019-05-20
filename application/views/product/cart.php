<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <h3>CART LIST</h3>
            <?php if(count($this->cart->contents()) > 0): $totalCartAmount = 0; ?>
            <?php
            //print_r($this->cart->contents());
            ?>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Total</th>
                    <th> </th>
                </tr>
                </thead>
                <tbody>
                <?php
                $vatValue = 5;
                foreach($this->cart->contents() as $items):
                $totalCartAmount += $items['subtotal'];
                $thisItemDetail = $this->crud->get_detail($items['id'], "product_code", $this->table);
                ?>
                <tr>
                    <td class="col-sm-8 col-md-6">
                        <div class="media">

                            <a class="thumbnail pull-left" href="<?php echo site_url('product/detail/'.$thisItemDetail['product_slug']); ?>">
                                <img class="media-object" src="<?php echo base_url(); ?>uploads/product/<?php echo $thisItemDetail['product_code']; ?>_1.<?php echo $thisItemDetail['product_image_1']; ?>" style="width: 72px; height: 72px;">
                            </a>
                            <div class="media-body">

                                <h4 class="media-heading">
                                    <a href="<?php echo site_url('product/detail/'.$thisItemDetail['product_slug']); ?>" target="_blank">
                                        <?php echo $thisItemDetail['product_title']; ?>
                                    </a>

                                </h4>
                                <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                <span>Weight: </span><span class="text-success"><strong><?php echo $thisItemDetail['product_weight']; ?> <?php echo ucfirst($thisItemDetail['product_unit']); ?></strong></span>
                            </div>
                        </div></td>
                    <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $items['qty']; ?>">
                    </td>
                    <td class="col-sm-1 col-md-1 text-center"><strong>  AED <?php echo $this->cart->format_number($items['price']); ?></strong></td>
                    <td class="col-sm-1 col-md-1 text-center"><strong>AED <?php echo $this->cart->format_number($items['subtotal']); ?></strong></td>
                    <td class="col-sm-1 col-md-1">
                        <form method="post" action="<?php echo site_url('product/remove_item/'.$items['rowid']); ?>" style="cursor: pointer; padding: 5px 10px;" onsubmit="return confirm('Are you sure to remove this item?')">
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                </tr>
                <?php endforeach; ?>
                <?php $vatAmount = $totalCartAmount*($vatValue/100); ?>



                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td><h5>Subtotal</h5></td>
                    <td class="text-right"><h5><strong>AED <?php echo $this->cart->format_number($totalCartAmount); ?></strong></h5></td>
                </tr>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td><h5>VAT Amount</h5></td>
                    <td class="text-right"><h5><strong>AED <?php echo $this->cart->format_number($vatAmount); ?></strong></h5></td>
                </tr>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td><h3>Total</h3></td>
                    <td class="text-right"><h3><strong>AED <?php echo $this->cart->format_number($totalCartAmount+$vatAmount); ?></strong></h3></td>
                </tr>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td>
                        <a href="<?php echo base_url(); ?>pages/products">
                            Continue Shopping
                        </a>

                    </td>
                    <td>
                        <?php if(count($this->cart->contents()) > 0):?>
                            <a href="<?php echo site_url('product/checkout'); ?>" class="btn btn-success no-border">CHECK OUT</a>
                        <?php endif; ?>
                    </td>
                </tr>
                </tbody>
            </table>
            <?php else: ?>
                <h2>Cart List is Empty!</h2>
                <h4>Sorry! Currently there is no item in your shopping cart.</h4>
                <p>Please <a href="<?php echo site_url('pages/products'); ?>" class="btn btn-primary btn-sm">Continue Shopping</a> to add item in your card.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
