<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Shopping cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <style type="text/css">
.container{
  background-color: linear-gradient(#00d4ff, #090979);
}


    .catalog-grid .tile {
      width: 100%;
      max-width: 356px;
      position: relative;
      border: 1px solid #b2b2b2;
      -webkit-border-radius: 0px;
      -moz-border-radius: 0px;
      border-radius: 0px;
      margin: 16px auto 24px auto;
      text-align: left;
      
    }

    .catalog-grid .tile .price-label {
      background: #c7b07b;
      background-image: linear-gradient(#00d4ff, #090979)
    }

    .catalog-grid .tile .price-label {
      position: absolute;
      padding: 11px 10px 11px 12px;
      height: 47px;
      background: #ff9016;
      top: 0;
      right: 0;
      z-index: 12;
      font-size: 1.125em;
      color: #fff;
      font-weight: 900;
      background-image: linear-gradient(#00d4ff, #090979)
    }

    .catalog-grid .tile a .tile-overlay {
      position: absolute;
      top: 0;
      left: 0;
      display: block;
      width: 100%;
      min-height: 100%;
      z-index: 10;
      -webkit-transition: all 0.3s;
      -moz-transition: all 0.3s;
      transition: all 0.3s;
      background-image: linear-gradient(#00d4ff, #090979)
    }

    .catalog-grid .tile .footer {
      border-top: 1px solid #b2b2b2;
      padding: 24px 12px 12px 12px;
      background: #fff;
      position: relative;
      text-align: center;
      -webkit-border-radius: 0 0 0px 0px;
      -moz-border-radius: 0 0 0px 0px;
      border-radius: 0 0 0px 0px;
      background-image: linear-gradient(#00d4ff, #090979)
    }

    .catalog-grid .tile img {
      display: block;
      margin: auto;
      -webkit-border-radius: 0px 0px 0 0;
      -moz-border-radius: 0px 0px 0 0;
      border-radius: 0px 0px 0 0;
    }

    img {
      display: block;
      max-width: 100%;
      height: 200px;
      vertical-align: middle;
    }

    .quantity {
      display: inline-block;
      width: 36px;
      height: 38px;
      margin: 0 2px;
      padding-left: 3px;
      padding-right: 3px;
      text-align: center;
    }

    .thumb {
      width: 6%;
      padding: 8px 0 12px 0;
      vertical-align: middle;
      font-size: 1.125em;
      font-weight: 300;
      position: relative;
    }

    .delete {
      vertical-align: middle;
      padding: 8px 0 12px 0;
      vertical-align: middle;
      font-size: 1.125em;
      font-weight: 300;
      position: relative;
    }

    .icon-delete {
      color: #607d8b;
      display: inline-block;
      font-size: 1.5em;
      color: #ff9016;
      cursor: pointer;
      -webkit-transition: color 0.3s;
      -moz-transition: color 0.3s;
      transition: color 0.3s;
    }

    .incr-btn {
      display: inline-block;
      width: 20px;
      height: 38px;
      -webkit-border-radius: 0px;
      -moz-border-radius: 0px;
      border-radius: 0px;
      background: #292c2e !important;
      color: #fff;
      text-align: center;
      font-size: 1.3em;
      font-weight: normal;
      line-height: 34px;
      -webkit-transition: background 0.3s;
      -moz-transition: background 0.3s;
      transition: background 0.3s;
    }

    th {
      width: 18%;
    }

    .thumb img {
      width: 45%;
    }

    .Update {
      cursor: pointer;
    }
  </style>
</head>

<body>

  <div class="container">
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal" onclick="javascript:opencart()">
      <span>
        Cart ( <span class="cartcount"><?php echo count($this->cart->contents());  ?></span> )
      </span>
    </button>
    <div class="col-sm-12">
      <form name="keyword" id="keyword" method="post">

        <div class="col-sm-6">
          <div id="" class="dataTables_filter">
            <input type="search" name="keyword" class="form-control input-sm" placeholder="ค้นหา"></label>
            <!-- <button type='submit' class="btn mt-5">search</button> -->

          </div>
        </div>
        <div class="col-sm-6">
          <div id="" class="dataTables_filter">
            <button type='submit' class="btn mt-5">search</button>
            
          </div>
        </div>
      </form>

    </div>

  </div>


  <div class="container catalog-grid">
    <div class="row" id="Heace"> 
      <?php
      if (isset($member_list) && is_array($member_list) && count($member_list)) {
          $i = 1;
          foreach ($member_list as $key => $data) {
              ?>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="tile">
              <div class="price-label price<?php echo $data['img_id'] ?>" rel="<?php echo $data['img_price'] ?>">฿ <?php echo $data['img_price'] ?></div>
              <img class="image<?php echo $data['img_id'] ?>" rel="<?php echo $data['image'] ?>" src="<?php echo base_url(); ?>/images/<?php echo $data['image'] ?>" alt="<?php echo $data['img_id'] ?>" >
              <span class="tile-overlay"></span>
              <div class="footer">
           
                <p class="name<?php echo $data['img_id'] ?>" rel="<?php echo $data['img_id'] ?>"><?php echo $data['img_name'] ?></p>
                <p class="stock<?php echo $data['img_id'] ?>" rel="<?php echo $data['img_stock'] ?>">สินค้าเหลือ :
                  <?php if ($data['img_stock'] <= 0) {
                  echo '<span style="color:#FF0000;text-align:center;">0</span>';
              } else {
                  echo  $data['img_stock'].' ชิ้น';
              } ?> </p>
                <button class="btn btn-primary"  <?php if ($data['img_stock'] <= 0) { ?> disabled <?php   } ?> onclick="javascript:addtocart(<?php echo $data['img_id']?>)">Add to Cart</button>
              </div>
            </div>
          </div>
      <?php
          $i++;
          }
      }
      ?>
    </div>
    <?php echo $pagination; ?>
  </div>





  <script>
    $(document).on('submit', '#keyword', function() {

      $.post("<?= base_url('searchcontroller/search') ?>", $("#keyword").serialize(),
        function(data) {
          $('#Heace').html(data);
        }
      );
      event.preventDefault();
    });
  </script>

  <script type="text/javascript">
    function addtocart(p_id) {
      var price = $('.price' + p_id).attr('rel');
      var image = $('.image' + p_id).attr('rel');
      var name = $('.name' + p_id).text();
      var id = $('.name' + p_id).attr('rel');
      var stock = $('.stock' + p_id).attr('rel');
      var answer = confirm ("Are you sure you want to add " + name + " ?");
if (answer)
{
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('CartController/add'); ?>",
        data: "id=" + id + "&image=" + image + "&name=" + name + "&price=" + price + "&stock=" + stock,
        success: function(response) {
          $(".cartcount").text(response);
        }

      });
    }
    }

    function opencart() {
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('CartController/opencart'); ?>",
        data: "",
        success: function(response) {
          $(".displaycontent").html(response);
        }
      });
    }
  </script>
  <script>
$(document).ready(function(){
	$('.btn btn-primary').click(function(){
		var pkg = parseInt($(this).data('package'));
		var qty = $(this).parent().find('.span1').eq(0);
		var val = parseInt($(qty).val());
		if(val<pkg){
			$(qty).val(0);
		}else{
			$(qty).val(val - pkg);
		}
	});
	$('.qty-plus').click(function(){
		var pkg = parseInt($(this).data('package'));
		var qty = $(this).parent().find('.span1').eq(0);
		var val = parseInt($(qty).val());
		$(qty).val(val + pkg);	
	});
});
</script>

  <div class="modal fade bs-example-modal-lg displaycontent" id="exampleModal" tabindex="-1">

</body>

</html>