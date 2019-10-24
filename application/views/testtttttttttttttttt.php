<style>
  body {
    margin-top: 20px;
  }

  .toggleDisplay {
    display: none;
  }

  .toggleDisplay.in {
    display: table-cell;
  }
</style>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<table class="table table-bordered">

  <thead>

    <tr>
      <th>Date</th>
      <th id="click-me">OrderID</th>
      <th>ProductID</th>
      <th>จำนวน</th>
      <th>ราคา</th>
      <th>สถานะ</th>
      <th>เลขพัสดุ</th>


    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($his as $data) { ?>
      <tr>

        <th scope="row"><?php echo $data['date']; ?></th>
        <td><?php echo  $data['orderid']; ?></td>
        <td><?php echo  $data['productid']; ?></td>
        <td><?php echo $data['quantity']; ?></td>
        <td><?php echo $data['price'] ?></td>
        <td><?php      //สถานะ

              $status = $data['status'];
              if ($status == 1) {
                
                ?>
            <a href="sendcontroller/update_status?sid=<?php echo $data['orderid']; ?>&sval=<?php echo $data['status']; ?>" <?php if ($status == 1) { ?> disabled <?php   } ?> class="btn btn-success">กำลังจัดส่ง</a>
          <?php
            } else {
              ?>
            <a href="sendcontroller/update_status?sid=<?php echo $data['orderid']; ?>&sval=<?php echo $data['status']; ?>" <?php if ($status == 0) { ?> disabled <?php   } ?>class="btn btn-danger">รอการตรวจสอบ</a>
          <?php
            }
            ?></td>
        <td><?php echo $data['send']; ?></td>
      <?php }
      ?>
      </tr>

  </tbody>

</table>






