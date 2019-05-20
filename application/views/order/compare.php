<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Compare</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Compare Products</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content">
            <table class="table table-bordered table-compare">
                <tr>
                    <td class="compare-label">Product Image</td>

                <?php if (isset($this->session->userdata['compare_list'])){
                        $folder_path="uploads/product/";
                ?>

                    <?php foreach ($this->session->userdata['compare_list'] as $key => $value){
                           $this_product=$this->crud->get_detail($value,"product_slug","products");
                    ?>

                        <td>
                            <a href="<?php echo $folder_path.$this_product['product_code']."_1.".$this_product['product_image_1']; ?>"><img src="<?php echo $folder_path.$this_product['product_code']."_1_300x366.".$this_product['product_image_1']; ?>" alt="Product"></a>
                        </td>

                    <?php } ?>                   
                <?php } ?>
                    
                </tr>
                <tr>
                    <td class="compare-label">Product Name</td>
                     <?php if (isset($this->session->userdata['compare_list'])): 
                            $folder_path="uploads/product/";
                    ?>

                        <?php foreach ($this->session->userdata['compare_list'] as $key => $value): 
                               $this_product=$this->crud->get_detail($value,"product_slug","products");
                        ?>

                           <td>
                                <a href="<?php echo site_url('products/products_detail/show/'.$value); ?>"><?php echo $this_product['product_title']; ?></a>
                            </td>

                        <?php endforeach ?>                   
                    <?php endif ?>
                </tr>

                <tr>
                    <td class="compare-label">Rating</td>
                    <?php if (isset($this->session->userdata['compare_list']) ): 
                            $folder_path="uploads/product/";
                    ?>

                        <?php foreach ($this->session->userdata['compare_list'] as $key => $value): 
                               $this_product=$this->crud->get_detail($value,"product_slug","products");
                        ?>

                           <td>
                                <div class="product-star">
                            <?php
                                $this_product_rating=$this->crud->get_products_rating($this_product['product_id']);
                                $avg=round($this_product_rating['average'],2);
                                $star_ratings=$this->crud->get_star_rating($avg);

                            ?>
                                        <?php echo $star_ratings; ?>
                                    <span>(<?php echo $this_product_rating['total']; ?> Reviews)</span>
                                </div>
                            </td>

                        <?php endforeach ?>                   
                    <?php endif ?>
                </tr>
                <tr>
                    <td class="compare-label">Price</td>
                    <?php if (isset($this->session->userdata['compare_list'])): 
                            $folder_path="uploads/product/";
                    ?>

                        <?php foreach ($this->session->userdata['compare_list'] as $key => $value): 
                               $this_product=$this->crud->get_detail($value,"product_slug","products");
                        ?>

                                <td class="price"><?php echo $this_product['product_price_currency']." ".$this_product['product_sell_price']; ?></td>
                        <?php endforeach ?>                   
                    <?php endif ?>
                </tr>
                <tr>
                    <td class="compare-label">Description</td>
                    <?php if (isset($this->session->userdata['compare_list']) ): 
                            $folder_path="uploads/product/";
                    ?>

                        <?php foreach ($this->session->userdata['compare_list'] as $key => $value): 
                               $this_product=$this->crud->get_detail($value,"product_slug","products");
                        ?>

                           <td><?php echo $this_product['product_short_detail']; ?></td>

                        <?php endforeach ?>                   
                    <?php endif ?>
                    
                </tr>
                <tr>
                    <td class="compare-label">Manufacturer</td>
                    <?php if (isset($this->session->userdata['compare_list'])): 
                            $folder_path="uploads/product/";
                    ?>

                        <?php foreach ($this->session->userdata['compare_list'] as $key => $value): 
                               $this_product=$this->crud->get_detail($value,"product_slug","products");
                               $this_brand=$this->crud->get_detail($this_product['brands_id'],"brands_id","igc_brands");
                        ?>
                                    
                                    <td><?php echo $this_brand['brands_title']; ?></td>

                        <?php endforeach ?>                   
                    <?php endif ?>
                </tr>
                <tr>
                    <td class="compare-label">Availability</td>
                   <?php if (isset($this->session->userdata['compare_list'])): 
                            $folder_path="uploads/product/";
                    ?>

                        <?php foreach ($this->session->userdata['compare_list'] as $key => $value): 
                               $this_product=$this->crud->get_detail($value,"product_slug","products");
                        ?>

                           
                                 <td class="instock"><span class="label label-<?php echo ($this_product['counts'] > 0)?"success":"danger"; ?>"><?php echo ($this_product['counts'] >0)?"In Stock (".$this_product['counts']." items)":"Out Of Stuck"; ?></td>

                        <?php endforeach ?>                   
                    <?php endif ?>
                </tr>
                <tr>
                    <td class="compare-label">Product Code</td>
                   <?php if (isset($this->session->userdata['compare_list']) ): 
                            $folder_path="uploads/product/";
                    ?>

                        <?php foreach ($this->session->userdata['compare_list'] as $key => $value): 
                               $this_product=$this->crud->get_detail($value,"product_slug","products");
                        ?>

                         
                                <td><?php echo $this_product['product_code'] ?></td>

                        <?php endforeach ?>                   
                    <?php endif ?>
                </tr>
                <tr>
                    <td class="compare-label">Size</td>
                   <?php if (isset($this->session->userdata['compare_list']) ): 
                            $folder_path="uploads/product/";
                    ?>

                        <?php foreach ($this->session->userdata['compare_list'] as $key => $value): 
                               $this_product=$this->crud->get_detail($value,"product_slug","products");
                        ?>

                           
                                     <td><?php echo $this_product['product_size']; ?></td>

                        <?php endforeach ?>                   
                    <?php endif ?>
                </tr>
                <tr>
                    <td class="compare-label">Color</td>
                    <?php if (isset($this->session->userdata['compare_list']) ): 
                            $folder_path="uploads/product/";
                    ?>

                        <?php foreach ($this->session->userdata['compare_list'] as $key => $value): 
                               $this_product=$this->crud->get_detail($value,"product_slug","products");
                        ?>

                           <td><?php echo $this_product['product_color'] ?></td>

                        <?php endforeach ?>                   
                    <?php endif ?>
                    
                </tr>
                <tr>
                    <td class="compare-label">Weight</td>
                    <?php if (isset($this->session->userdata['compare_list']) ): 
                            $folder_path="uploads/product/";
                    ?>

                        <?php foreach ($this->session->userdata['compare_list'] as $key => $value): 
                               $this_product=$this->crud->get_detail($value,"product_slug","products");
                        ?>

                           
                                 <td><?php echo $this_product['product_weight']; ?></td>

                        <?php endforeach ?>                   
                    <?php endif ?>
                </tr>
                <tr>
                    <td class="compare-label">Action</td>
                   <?php if (isset($this->session->userdata['compare_list'])): 
                            $folder_path="uploads/product/";
                    ?>

                        <?php foreach ($this->session->userdata['compare_list'] as $key => $value): 
                               $this_product=$this->crud->get_detail($value,"product_slug","products");
                        ?>

                           
                                <td class="action">
                                    <a href="<?php echo site_url('order/order/add_to_cart/'.$this_product['product_code']); ?>" title="Add to Cart">
                                        <button class="add-cart button button-sm">Add to cart</button>
                                    </a>
                                     <a href="<?php echo site_url('order/order/add_wish_list/'.$this_product['product_slug']); ?>" title="Add to wishlist">
                                        <button class="button button-sm"><i class="fa fa-heart-o"></i></button>
                                    </a>
                                    <a href="<?php echo site_url('order/order/remove_compare_list/'.$key); ?>" title="Remove">
                                        <button class="button button-sm"><i class="fa fa-close"></i></button>
                                    </a>
                                </td>

                        <?php endforeach ?>                   
                    <?php endif ?>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- ./page wapper-->
<!-- Footer -->