<style>


    .item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
    .menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0;margin-top:20px}
    .btn-success{width:100%;border-radius:0;}
    .section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
    .title-price{margin-top:30px;margin-bottom:0;color:black}
    .title-attr{margin-top:0;margin-bottom:0;color:black;}
    .btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
    .btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
    div.section > div {width:100%;display:inline-flex;}
    div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
    .attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
    .attr.active,.attr2.active{ border:1px solid orange;}
    .nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #666; }
    .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4285F4 !important; background: transparent; }
    .nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
    .tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
    .tab-pane { padding: 15px 0; }
    .tab-content{padding-top:10px}

    .card {background: #FFF none repeat scroll 0% 0%;
        /*box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); */
        margin-bottom: 30px; }
    @media (max-width: 426px) {
        .container {margin-top:0px !important;}
        .container > .row{padding:0 !important;}
        .container > .row > .col-xs-12.col-sm-5{
            padding-right:0 ;
        }
        .container > .row > .col-xs-12.col-sm-9 > div > p{
            padding-left:0 !important;
            padding-right:0 !important;
        }
        .container > .row > .col-xs-12.col-sm-9 > div > ul{
            padding-left:10px !important;

        }
        .section{width:104%;}
        .menu-items{padding-left:0;}
    }
    
    
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    margin-top: 3%;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

</style>


<section class="product-details">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>
                    </h2>
                <?php if(validation_errors()) {


                    ?>
                    <div class="alert alert-danger alert_box">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                                    class="fa fa-times"></i></a>
                        <?php echo validation_errors() ?>.
                    </div>
                    <?php
                }
                ?>


            </div>

        </div>
    </div>



</section>

<section >

    <div class="container">
        <div class="row">
<div class="col-sm-6">
    <style>
        /*set a border on the images to prevent shifting*/
        #gallery_01 img{border:2px solid white;}

        /*Change the colour*/
        .active img{border:2px solid #333 !important;}
    </style>
    <script src='themes/zoom/jquery-1.8.3.min.js'></script>
    <script src='themes/zoom/jquery.elevatezoom.js'></script>
    <div class="zoom-wrapper">
        <div class="zoom-left">
            <?php
            $path = 'uploads/package/'.$detail['package_id'].'/';
            ?>

            <img style="border:1px solid #e8e8e6;" id="zoom_09" src="<?php echo $path.$detail['packageimg'];?>" data-zoom-image="<?php echo $path.$detail['packageimg'];?>" width="411">

            <?php
            if(! empty($albums)) {


                $j=0;
                foreach ($albums as $rows) {
                    $actives = ($j == 0) ? "active" : "";
                    $path  =  'uploads/album/'.$rows['path_id'].'/';
                    ?>

            <div id="gallery_09" style="width=" 500pxfloat:left;="" "="">


            <a href="#" style="float:left;" class="elevatezoom-gallery <?php echo $actives; ?>" data-update="" data-image="<?php echo $path.$rows['name'];?>" data-zoom-image="<?php echo $path.$rows['name'];?>">
                <img src="<?php echo $path.$rows['name'];?>" width="80"></a>


        </div>




                    <?php
                    $j++;
                }
            }
            else
            {
                ?>

                <?php
                $path = 'uploads/package/'.$detail['package_id'].'/';
                ?>
                <a href="#" style="float:left;" class="elevatezoom-gallery <?php echo $actives; ?>" data-update="" data-image="<?php echo $path.$detail['packageimg'];?>" data-zoom-image="<?php echo $path.$detail['packageimg'];?>">
                    <img src="<?php echo $path.$rows['name'];?>" width="80"></a>


                <?php
            }
            ?>







    </div>


    <script type="text/javascript">
        $(document).ready(function () {
            $("#zoom_09").elevateZoom({
                gallery : "gallery_09",
                galleryActiveClass: "active"
            });



        });

    </script>
</div>



        </div>
        <div class="col-sm-4" style="border:0px solid gray">
            <!-- Datos del vendedor y titulo del producto -->
            <h4>Product Name: <span class="product_detail"><?php echo $detail['package_name'];?></span></h4>



            <h4>Brand Name: <span class="product_detail"><?php echo $brands['clients_title']; ?></span></h4>
            <h5 style="color:#337ab7">Product Code: <span class="product_detail"><?php echo $detail['tourcode'];?></span></h5>

            <!-- Precios -->

                <small> <?php echo $detail['summary']; ?>
                </small>
            <!--                <h3 style="margin-top:0px;">U$S 399</h3>-->

            <!-- Detalles especificos del producto -->
            
            <div class="section">
                <form method="post"  >
                <div class="form-group">
                    <label class="title-attr" style="margin-top:15px;" >Available Size</label>

                    <select name="size" class="form-control">

                        <option value="">Select</option>
                        <option value="305 30 20">305 30 20</option>
                        <option value=" 305 30 19"> 305 30 19</option>
                        <option value=" 295 40R 20"> 295 40R 20</option>
                        <option value=" 295 40 20"> 295 40 20</option>
                        <option value=" 295 35 21"> 295 35 21</option>
                        <option value=" 295 35 20"> 295 35 20</option>
                        <option value=" 295 30 20"> 295 30 20</option>
                        <option value=" 295 30 19"> 295 30 19</option>
                        <option value=" 295 25 22"> 295 25 22</option>
                        <option value=" 285 60 18"> 285 60 18</option>
                        <option value=" 285 50 20"> 285 50 20</option>
                        <option value=" 285 45 19"> 285 45 19</option>
                        <option value=" 285 40 19"> 285 40 19</option>
                        <option value=" 285 35 19"> 285 35 19</option>
                        <option value=" 285 35 18"> 285 35 18</option>
                        <option value=" 285 30 21"> 285 30 21</option>
                        <option value=" 285 30 20"> 285 30 20</option>
                        <option value=" 285 30 18"> 285 30 18</option>
                        <option value=" 275 70 16"> 275 70 16</option>
                        <option value=" 275 65 17"> 275 65 17</option>
                        <option value=" 275 60 20"> 275 60 20</option>
                        <option value=" 275 50 20"> 275 50 20</option>
                        <option value=" 275 45 19"> 275 45 19</option>
                        <option value=" 275 45 18"> 275 45 18</option>
                        <option value=" 275 40 20"> 275 40 20</option>
                        <option value=" 275 35 20"> 275 35 20</option>
                        <option value=" 275 35 19"> 275 35 19</option>
                        <option value=" 275 30 19"> 275 30 19</option>
                        <option value=" 265 70 18"> 265 70 18</option>
                        <option value=" 265 70 17"> 265 70 17</option>
                        <option value=" 265 65 17"> 265 65 17</option>
                        <option value=" 265 60 18"> 265 60 18</option>
                        <option value=" 265 35 19"> 265 35 19</option>
                        <option value=" 265 35 18"> 265 35 18</option>
                        <option value=" 265 30 19"> 265 30 19</option>
                        <option value=" 255 70 18"> 255 70 18</option>
                        <option value=" 255 55 19"> 255 55 19</option>
                        <option value=" 255 55 18"> 255 55 18</option>
                        <option value=" 255 50 20"> 255 50 20</option>
                        <option value=" 255 50 19"> 255 50 19</option>
                        <option value=" 255 45 81"> 255 45 81</option>
                        <option value=" 255 45 19"> 255 45 19</option>
                        <option value=" 255 45 18"> 255 45 18</option>
                        <option value=" 255 40 20"> 255 40 20</option>
                        <option value=" 255 40 18"> 255 40 18</option>
                        <option value=" 255"> 255</option>
                    </select>
                    <label class="title-attr" style="margin-top:15px;" >Quantity</label>
                    <input type="tex" name="quantity" class="form-control">
                    <label class="title-attr" style="margin-top:15px;" >&nbsp;</label>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="title-attr"  >Availability</label>
                        </div>


                        <div class="col-sm-4">
                            <?php
                            if($detail['show_front'] == 1){
                                ?>
                                <button class="btn btn-success btn-xs " width="50px;"> IN STOCK</button>
                                <?php

                            }else{
                                ?>
                                <button class="btn btn-danger btn-xs"> OUT STOCK</button>

                                <?php

                            }


                            ?>

                        </div>
                    </div>

                    <label class="title-attr" style="margin-top:15px;" >&nbsp;</label>
                    

                </div>
                </form>

<button class="btn btn-success" id="myBtn" style="margin-bottom: 5%;"> Send To Enquiry</button>

            </div>




        </div>
        <div class="col-sm-2">
            <h4><span class="btn btn-danger" style="width: 100%;">Need Help?</span></h4>
            <h5> Call us at   04-3889952</h5>
        </div>

        <div class="col-sm-12 desc-sum">

            <div class="card">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="des-title">Description</li>





                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <?php echo $detail['description']; ?>

                </div>
            </div>
        </div>
    </div>




<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
			<form action="<?php echo site_url('home/product_query');?>" method="post" enctype="multipart/form-data">
				<div class="form-group col-lg-12">
					<label>Company Name</label>
					<input type="hidden" name="product_name" value="<?php echo $detail['package_name'];?>" >
					<input type="hidden" name="brand_name" value="<?php echo $brands['clients_title']; ?>" >
					<input type="hidden" name="product_code" value="<?php echo $detail['tourcode'];?>" >
					<input type="hidden" name="description" value="<?php echo $detail['description']; ?>" >
					<input type="text" name="company_name" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Your Name</label>
					<input type="text" name="fullname" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Phone</label>
					<input type="text" name="phone" class="form-control" id="" value="">
				</div>
					
				<div class="form-group col-lg-6">
					<label>Mobile</label>
					<input type="text" name="mobile" class="form-control" id="" value="">
				</div>
								
				<div class="form-group col-lg-6">
					<label>Email Address</label>
					<input type="email" name="email" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-12">
					<label>Enquiry</label>
					 <textarea class="form-control" name="query" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
				</div>			
				
				<div class="col-sm-12">
				&nbsp;
				</div>

					
			
			<div class="col-sm-6">
			<button type="submit" class="btn btn-primary">Enquire Now</button>
			
			        
			
			    
			</div>
			</form>
			</div>
		
			<div class="col-md-4">
				<h3 class="dark-grey">Summary</h3>
				<h4>Product Name: <span class="product_detail"><?php echo $detail['package_name'];?></span></h4>



            <h4>Brand Name: <span class="product_detail"><?php echo $brands['clients_title']; ?></span></h4>
            <h5 style="color:#337ab7">Product Code: <span class="product_detail"><?php echo $detail['tourcode'];?></span></h5>
				
				<p>
					<?php echo $detail['summary']; ?>
				</p>
				
				
			</div>
		</div>
	</section>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>







</section>
