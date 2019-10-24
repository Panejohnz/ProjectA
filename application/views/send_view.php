<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            จัดส่งสินค้า
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  base_url('sendcontroller'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active">จัดส่งสินค้า</li>
        </ol>
    </section>
    <!-- Top menu -->
    <?php echo $this->session->flashdata('msginfo'); ?>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">ตารางข้อมูล</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-6">
                            <a class="btn btn-default" href="<?php echo  base_url('index.php/sendcontroller'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                        </div>
                        <div class="col-sm-6">
                            <div id="" class="dataTables_filter">
                            <form action="" method="GET" name="search">
                            	<label>ค้นหา</label>:<input type="search" name="keyword" class="form-control input-sm" placeholder="ค้นหาออเดอร์"></label>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                        
                                        
                                    </tr>
                                </thead>

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
                                    <?php if (!empty($results)) {
    foreach ($results as $data) { ?>
                                        <tr role="row">
                                            <td>
                                            วันที่ : <?php echo  $data->date;
                                            ?>
                                                </td>
                                               <td>
                                            orderid : <?php echo $data->orderid ;?>
                                            </td>
                                            <td>
                                            รหัสสินค้า : <?php echo $data->productid; ?>
                                            </td>
                                            
                                            <td>
                                            <?php echo $data->quantity; ?>
                                            </td>
                                            <td>
                                             
                                            ราคา : <?php echo $data->price; ?>
                                          
                                           
                                            
                                        
                                        
                                            </td>

                                            
                                            <td>  
                                            <?php //สถานะ
                                             $status = $data->status;
                                             if ($status == 1) {
                                                 ?>
                                                <a href="sendcontroller/update_status?sid=<?php echo $data->id; ?>&sval=<?php echo $data->status; ?>" <?php if ($status == 1) { ?> disabled <?php   } ?> class="btn btn-success">กำลังไปส่งแล้ว</a>
                                             <?php
                                             } else {
                                                 ?>
                                                 <a href="sendcontroller/update_status?sid=<?php echo $data->id; ?>&sval=<?php echo $data->status; ?>" disabled class="btn btn-danger">รอแปบนึง</a>
                                           <?php
                                             }
                                            ?>
                                            </td>
                                            
                                            <td>
                                                 <?php   $send = $data->send;
                                                      ?>  <form method="post" action=<?php echo base_url('sendcontroller/sending') ?> >
                                                            <input type="text" name="send" id="send" disabled value=<?php echo $data->send ?>>
                                                           
                                                        </form>
                                                    </td>
                                            
                                        </tr>
                                    <?php }
} ?>
                                </tbody>

                            </table>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Total <?php echo  $total_rows; ?> entries</div>
                        </div>
                        <div class="col-sm-7">
                            <div id="example1_paginate" class="dataTables_paginate paging_simple_numbers">
                                <?php echo $link; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->