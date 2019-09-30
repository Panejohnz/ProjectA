<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <a class="navbar-brand" href="<?php echo site_url("InhomeController");?>">Back</a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
 <br /><br />
 
 <div class="col-lg-6 col-md-6">
  <div class="table-responsive">
   <h3 align="center"></h3><br />
   <?php
   foreach($img as $row)
   {
    echo '
    <div class="col-md-4" style="padding:16px; background-color:#f1f1f1; border:1px solid #ccc; margin-bottom:16px; height:400px" align="center">
     <img src="'.base_url().'uploads/'.$row->image.'" class="img-thumbnail" /><br />
     <h4>'.$row->img_name.'</h4>
     <h3 class="text-danger">$'.$row->img_price.'</h3>
     <input type="text" name="quantity" class="form-control quantity" id="'.$row->img_id.'" /><br />
     <button type="button" name="add_cart" class="btn btn-success add_cart" data-imgname="'.$row->img_name.'" data-price="'.$row->img_price.'" data-imgid="'.$row->img_id.'" />Add to Cart</button>
    </div>
    ';
   }
   ?>
      
  </div>
 </div>
 <div class="col-lg-6 col-md-6">
  <div id="cart_details">
   <h3 align="center">Cart is Empty</h3>
  </div>
 </div>
 
</div>
</body>
</html>
<script>
$(document).ready(function(){
 
 $('.add_cart').click(function(){
  var img_id = $(this).data("imgid");
  var img_name = $(this).data("imgname");
  var img_price = $(this).data("price");
  var quantity = $('#' + img_id).val();
  if(quantity != '' && quantity > 0)
  {
   $.ajax({
    url:"<?php echo base_url(); ?>shopping_cart/add",
    method:"POST",
    data:{img_id:img_id, img_name:img_name, img_price:img_price, quantity:quantity},
    success:function(data)
    {
     alert("Product Added into Cart");
     $('#cart_details').html(data);
     $('#' + img_id).val('');
    }
   });
  }
  else
  {
   alert("Please Enter quantity");
  }
 });

 $('#cart_details').load("<?php echo base_url(); ?>shopping_cart/load");

 $(document).on('click', '.remove_inventory', function(){
  var row_id = $(this).attr("id");
  if(confirm("Are you sure you want to remove this?"))
  {
   $.ajax({
    url:"<?php echo base_url(); ?>shopping_cart/remove",
    method:"POST",
    data:{row_id:row_id},
    success:function(data)
    {
     alert("Product removed from Cart");
     $('#cart_details').html(data);
    }
   });
  }
  else
  {
   return false;
  }
 });

 $(document).on('click', '#clear_cart', function(){
  if(confirm("Are you sure you want to clear cart?"))
  {
   $.ajax({
    url:"<?php echo base_url(); ?>shopping_cart/clear",
    success:function(data)
    {
     alert("Your cart has been clear...");
     $('#cart_details').html(data);
    }
   });
  }
  else
  {
   return false;
  }
 });

 $(document).on('click', '#success_cart', function(){
  if(confirm("แน่ใจนะ"))
  {
   $.ajax({
    url: "<?php echo site_url("BillController"); ?>",
    success:function(data)
    {  
     alert("...");
     $('#cart_details').html(data);
    }
   });
   exit();
  }
  
 });

});
</script>