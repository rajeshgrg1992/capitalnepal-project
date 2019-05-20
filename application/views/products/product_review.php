<div class="columns-container">
	<div class="container">
		<div class="row">
			<div class="breadcrumb clearfix">
	            <a class="home" href="#" title="Return to Home">Home</a>
	            <span class="navigation-pipe">&nbsp;</span>
	             <a class="home" href="<?php echo site_url('products/products_detail/show/'.$product_detail['product_slug']); ?>" title="Return to Home"><?php echo $product_detail['product_title']; ?></a>
	            <span class="navigation-pipe">&nbsp;</span>
	            <a class="navigation_page">Write a Review</a>
	        </div>
		</div>	<!-- end of row -->
		<div class="row">
		 	 <div class="col-sm-4">
	        	<div id="product">
	        	  <div class="pb-right-column">
					 <div class="product-image">
	                    <div class="product-full">
	                        <?php $folder_path="uploads/product/"; ?>
	                        <img id="product-zoom" 
	                            src='<?php echo $folder_path.$product_detail['product_code']."_1_420x512.".$product_detail['product_image_1']; ?>' 
	                             data-zoom-image="<?php echo $folder_path.$product_detail['product_code']."_1_850x1036.".$product_detail['product_image_1']; ?>"/>
	                    </div>
	                 </div>
	                 <div class="product-price-group">
	                 	   <h1 class="product-name"><?php echo $product_detail['product_title']; ?></h1>
	                      <span class="price"><?php echo $product_detail['product_price_currency']." ".$product_detail['product_sell_price']; ?></span>
	                       <?php 
	                            if($product_detail['sell_offer'] =='1' or ($product_detail['product_offer_deal'] =="1" and date('Y-m-d h:i:s') > $product_detail['product_offer_start_date']))
	                            { 
	                        ?>
	                       <span class="price old-price">
	                            <?php echo $product_detail['product_price_currency']." ".$product_detail['product_old_sell_price'] ;?>
	                        </span>
	                        <span class="discount">
	                            <?php echo $product_detail['sell_offer_percentage']." %"; ?>
	                        </span>

	                      <?php } ?>
	                  </div>
	                  <div class="info-orther">
	                       <p>Product Code: <?php echo $product_detail['product_code']; ?></p>
	                       <p>Availability: 
		                       <span class="label label-<?php echo ($product_detail['counts'] >0)?"success":"danger"; ?>">
		                            <?php echo ($product_detail['counts'] >0)?"In Stock":"Out Of Stuck"; ?>
		                       </span>
	                       </p>
	                       <p>Arrival: <?php echo ($product_detail['new_arrival']=='1')?"New":"Old"; ?></p>
	                  </div>
	                  <div class="product-desc">
	                       <?php echo $product_detail['product_short_detail']; ?>
	                  </div>
	                  <div class="form-option">
	                       <p class="form-option-title">Available Options:</p>
	                       <div class="attributes">
	                            <div class="attribute-label">Color:</div>
	                            <div class="attribute-list">
	                                <ul class="list-color">
	                            <?php 
	                                if(isset($product_detail['product_color']) && $product_detail['product_color'] !="")
	                                {
	                                	$colors=explode(',',$product_detail['product_color']);
	                                    foreach($colors as $key => $color)
	                                    {
	                            ?>
	                                    <li style="background:<?php echo $color;?>;"><a><?php echo $color;?></a></li>
	                            <?php
	                            		}
	                            	}
	                            ?>
	                                </ul>
	                            </div>
	                        </div>
	                        <div class="attributes">
	                            <div class="attribute-label">Size:</div>
	                            <div class="attribute-list">
	                                <ul >
	                            <?php 
	                                if(isset($product_detail['product_size']) && $product_detail['product_size'] !="")
	                                {
	                                	$sizes=explode(',',$product_detail['product_size']);
	                                    foreach($sizes as $key => $size)
	                                    {
	                            ?>
	                                    <li style="display: inline;"><?php echo $size; ?></li>
	                            <?php
	                            		}
	                            	}
	                            ?>
	                                </ul>
	                            </div>
	                        </div>
	                        <div class="form-action">
	                            <div class="button-group">
	                                  <button type="submit" class="btn-add-cart">Add to cart</button>
	                            </div>
	                            <div class="button-group">
	                                  <a class="wishlist" href="<?php echo site_url('order/order/add_wish_list/'.$product_detail['product_slug']); ?>"><i class="fa fa-heart-o"></i>
	                                  <br>Wishlist</a>
	                                  <a class="compare" href="<?php echo site_url('order/order/add_compare_list/'.$product_detail['product_slug']); ?>""><i class="fa fa-signal"></i>
	                                  <br>Compare</a>
	                            </div>
	                        </div>
	                    </div>
					</div>
				</div>
			</div>	<!-- end of col-sm-4-->
			<div class="col-sm-8">
			<form action="" method="post" accept-charset="utf-8">
				<div class="row">
					<div class="form-group">
                        <label for="product_review">Write A Review</label>
	                    <textarea style ="resize:none;" rows="15" cols="10" class="form-control" name="product_review" id="product_review"></textarea>
                    </div>
				</div>
				<div class="row">
					<div class="form-group">
                        <label for="product_rating">Rate the Product:</label><br>
	                   	1 <input type="radio" name="product_rating" value="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                   	2 <input type="radio" name="product_rating" value="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                   	3 <input type="radio" name="product_rating" value="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                   	4 <input type="radio" name="product_rating" value="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                   	5 <input type="radio" name="product_rating" value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
				</div>
				<div class="row">
					<input type="hidden" name="product_id" value="<?php echo $product_detail['product_id']; ?>">
					<button type="submit" class="review_submit">Submit</button>
				</div>
			</form>
			</div>  <!-- end of col-sm-8 -->
		</div><!-- end of row -->
	</div> <!-- end of container -->
</div> <!-- end of columns container -->
<script>

    CKEDITOR.replace( 'product_review'  ,{
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


    } );
 </script>