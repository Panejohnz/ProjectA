<!DOCTYPE HTML>
<html lang="eng">

<head>
    <meta charset="UTF-8">
</head>

<body>

</body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

    <title>Invoice</title>

    <link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>./assets/css4/style.css" />
    <link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>./assets/css4/print.css" media="print" />
    <script type='text/javascript' src="<?php echo base_url('./assets/js4/jquery-1.3.2.min.js'); ?>"></script>
    <script type='text/javascript' src="<?php echo base_url('./assets/js4/example.js'); ?>"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <style>
        table {
            text-align: center;
        }

        body {
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>

<body>





    <div id="page-wrap ">


        <textarea id="header">Bill</textarea>

        <div id="identity">

            <?php
            foreach ($name as $data) { ?>

                <p> <?php echo  'ชื่อ : ' . $data->name; ?></p>
                <p> <?php echo 'ที่อยู่ : ' .  $data->address; ?></p>
                <p> <?php echo 'เมล : ' . $data->email; ?></p>
                <p> <?php echo 'เบอร์ : (+66)' .  $data->phone; ?></p>

            <?php }
            ?>
        </div>
        <div id="logo">


            <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
            </div>
            <img id="image" src="../images/logos.png" style="width:50px" alt="logo" />
            <h5>
                <div>*กรุณาจำเลขออเดอร์เพื่อยืนยันการชำระเงิน</div>
            </h5>
        </div>

    </div>

    <div style="clear:both"></div>

    <div id="customer">

        <label id="customer-title">SMA</label>

        <table id="meta">

            <tr>

                <td class="meta-head">ID</td>
                <?php
                foreach ($result as $data) { ?>
                    <td>#<?php echo $data->orderid ?></td>

                <?php }
                ?>


            </tr>


        </table>

    </div>

    <table id="items">

        <tr>
            <th>Item</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Image</th>
            <th>Date</th>

        </tr>


        <tr class="item">
            <td class="item-name">
                <div class="delete-wpr">
                    <?php
                    foreach ($productid as $data) { ?>
            <td><?php echo $data->productid  ?></td>
        <?php }
        ?>
        <!-- <a class="delete" href="javascript:;" title="Remove row">X</a> -->
        </div>
        </td>
        <?php
        foreach ($result as $data) { ?>

            <td><?php echo $data->quantity ?></td>
            <td><?php echo $data->price ?>
            </td>
        <?php }
        ?>
        <td>
            <?php foreach ($productid as $data) { ?>
                <img class="image" src="<?php echo base_url(); ?>/image/<?php echo $data->image ?>" width="100" height="50">
            <?php }
            ?>
        </td>
        <?php foreach ($name as $data) { ?>
            <td><?php echo $data->date ?></td>
        <?php }
        ?>
        </tr>


        }



    </table>
    <table>
        <td class="meta-total">Total</td>
        <?php foreach ($result as $data) { ?>

            <td><?php echo $data->price ?></td>
        <?php }
        ?>
    </table>
    <div id="terms">
        <h5>ITEM</h5>
    </div>
    <input type="button" value="Back" onclick="window.location.href='<?php echo site_url('CartController/viewall'); ?>'" />
    <input type="button" class="btn btn--radius-2 btn--red" value="Print" onclick="window.print() " />
    </form>

    </div>


</body>

</html>