
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	    <script type="text/javascript" src="eshopping/assets/lib/jquery/jquery-1.11.2.min.js"></script>
</head>
<body>
<form action="" method="post" accept-charset="utf-8">
	<input type="checkbox" value="0,1000" id="p1">Tick this

</form>
<div id="all_cat_products">
</div>
<script>
    $(document).ready(function(){
         $("#p1").click(function(){
            $.post('<?php echo site_url('test/post_action');?>',{range: $("#p1").val()}, function(data) {
                $('#all_cat_products').html(data.sub_cat);
            });
         });
        // $("#p1").click(function(){       
        //      $.ajax({
        //          type: "POST",
        //          url: base_url()+'products/products_detail/post_action', 
        //          data: {range: $("#p1").val()},
        //          dataType: "text",  
        //          cache:false,
        //          success: 
        //               function(data){
        //                 $('#all_cat_products').html(data.sub_cat);
        //               }
        //           });// you have missed this bracket
        //      return false;
        // });
    });
</script>

	
</body>
</html>