<!DOCTYPE html>
<html>
<head>
<style>
div {
  border: 1px solid black;
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 80px;
  background-color: lightblue;
}
</style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Shopping cart</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>

<div id="bill_info">

		<?php
		$grand_total = 0;
		// Calculate grand total.
		if ($cart = $this->cart->contents()):
		foreach ($cart as $data):
		$grand_total = $grand_total + $data['subtotal'];
		endforeach;
		endif;
		?>   
        <form name="billing" method="post" action="<?php echo base_url('BillController/test') ?>" >
            <!-- <form name="billing" method="post" action="#" id="submit_bill"> -->

            <div align="center">   
                <h1 align="center">Billing</h1>
                <table border="0" cellpadding="2px">
                    <tr><td>Order Total:</td><td><strong>฿ <?php echo $grand_total; ?></strong></td></tr>
                    <tr><td>Your Name:</td><td><input type="text" name="name" required="" value="<?php echo $this->session->userdata('firsname'); ?>"></td></tr>
                    <tr><td>Address:</td><td><input type="text" name="address" required="" value="a1" /></td></tr>
                    <tr><td>Email:</td><td><input type="text" name="email" required="" value="<?php echo $this->session->userdata('email'); ?>"/></td></tr>
                    <tr><td>Phone:</td><td><input type="text" name="phone"  required="" pattern="[0-9]{1,}" value="A1" /></td></tr>
                    <tr><td><a class ='fg-button teal' id='back' href="<?php echo site_url("CartController/viewall"); ?>">Back</a></td>
                        <td>
                        <!-- <input class ='fg-button teal' type="submit" value="Place Order" /> -->
                        <button  type="submit" id="login-button">ต่อไป</button>
                        </td>
                        
                    </tr> 
                 
                </table>
            </div>
        </form>

    <!-- Order items -->
    <table class="table">
    <thead>
        <tr>
            <th width="13%"></th>
            <th width="34%">Product</th>
            <th width="18%">Price</th>
            <th width="13%">Quantity</th>
            
        </tr>
    </thead>
      <tbody>
        <?php if($this->cart->total_items() > 0){ foreach($cart as $data){ ?>
        <tr>
            <td>
                <?php $imageURL = !empty($data["image"])?base_url('images/'.$data["image"]):base_url('assets/images/'); ?>
                <img src="<?php echo $imageURL; ?>" width="75"/>
            </td>
            <td><?php echo $data["name"]; ?></td>
            <td><?php echo '฿'.$data["subtotal"].' bath'; ?></td>
            <td><?php echo $data["qty"].'ชิ้น'; ?></td><br>
            
        </tr>
        <?php } }else{ ?>
        <tr>
            <td colspan="5"><p>No items in your cart...</p></td>
        </tr>
        <?php } ?>
    </tbody>

        </div>
        <script src="http://malsup.github.com/jquery.form.js"></script> 
<script>
$(document).ready(function() {
   $("#submit_bill").ajaxForm({
        url:'<?php echo site_url('BillController/test') ?>',
        type:'post',
        datatype:'json',
        success:function(data){
            alert("Success");
            $("html").empty().html(data);
            $("html").load('<?php echo site_url('BillController/test') ?>');

        }
   });
});
</script>
</body>
</html>

