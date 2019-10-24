<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            ออเดอร์
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  base_url('orders'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active">ออเดอร์</li>
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
                            <a class="btn btn-default" href="<?php echo  base_url('orders'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
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
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 30%;">ชื่อ สกุล</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">รายละเอียด</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">สถานะ</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">เลขพัสดุ</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($results)) {
                                            foreach ($results as $data) { ?>
                                        <tr role="row">
                                            <td>
                                            <a href="<?php echo base_url('Billcontroller/get_bill_from_id/'.$data->id); ?>">
                                            IdOrder : <?php echo $data->id ;?>
                                            </a> 
                                            <br>
                                            วันที่ : <?php echo  $data->date;
                                            ?><br>
                                            โดย : <?php echo $data->name; ?>
                                            </td>
                                            <td>
                                            
                                            ที่อยู่ : 
                                            <?php echo $data->address; ?>
                                            <br>
                                            
                                        
                                        
                                            </td>

                                            

                                            
                                            
                                            <td>  
                                            <?php //สถานะ
                                             $status = $data->status;
                                             if ($status == 1) {
                                                 ?>
                                                <a href="Orders/update_status?sid=<?php echo $data->id; ?>&sval=<?php echo $data->status; ?>" <?php if ($status == 1) { ?> disabled <?php   } ?> class="btn btn-success">ชำระเงินเรียบร้อยแล้ว</a>
                                                
                                             <?php
                                                
                                             } else {
                                                 ?>
                                                 <!-- <a href="Orders/update_status?sid=<?php echo $data->id; ?>&sval=<?php echo $data->status; ?>" class="btn btn-danger">รอการชำระเงิน</a> -->
                                                 <a href="Orders/update_status/<?php echo $data->id; ?>"class="btn btn-danger">รอการชำระเงิน</a>
                                           <?php
                                             }
                                            ?>
                                            </td>
                                            <td>
                                                 <?php   $send = $data->send;
                                                      ?>  <form method="post" action=<?php echo base_url('sendcontroller/sending/' . $data->id) ?> >
                                                            <input type="text" name="send" id="send" value=<?php echo $data->send ?><?php if($send != NULL){ ?>
                                                            disabled <?php   } ?>
                                                      >
                                                            <button type="submit" name="submit" value="submit" <?php if($send != NULL){ ?>
                                                            disabled <?php   } ?>
                                                       > SAVE</button>
                                                        
                                                        </form>
                                                    </td>
                                            <td>
                                            	<a class="btn btn-danger btn-xs" href="<?php echo  base_url('orders/confrm/'.$data->id); ?>" role="button"><i class="fa fa-fw fa-trash"></i> ลบข้อมูล</a>
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