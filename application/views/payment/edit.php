<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
    ชำระเงิน
    
  </h1>
  <ol class="breadcrumb">
   <li>
    <a href="<?php echo base_url(); ?>">
     <i class="fa fa-dashboard">
     </i>หน้าแรก
    </a>
   </li>
   <li>
    <a href="<?php echo base_url('payment'); ?>">
      การชำระเงิน
    </a>
   </li>
   <li class="active">
    เพิ่มข้อมูลใหม่
   </li>
  </ol>
 </section>
 <!-- Main content -->
 <section class="content">
  <!-- Your Page Content Here -->
  <div class="box box-primary">
   <div class="box-header with-border">
    <h3 class="box-title">
     เพิ่มข้อมูล
    </h3>
   </div><!-- /.box-header -->
   <!-- form start -->
   <form role="form" action="<?php echo base_url('payments/update'); ?>" method="post" enctype="multipart/form-data">
   <input type="hidden" value="<?php echo $doc['payid']; ?>" name="payid">
   <input type="hidden" value="<?php echo $doc['imgpay']; ?>" name="payment2">



    <div class="box-body">
     

     <div class="form-group">
      <label for="exampleInputEmail1">
       เลขออเดอร์
      </label> <?php echo $this->session->flashdata('err_payname'); ?>
      <input type="text" id="payname" class="form-control" name="payname" value="<?php echo $doc['payname']; ?>">
     </div>
     
     
     <div class="form-group">
      <label for="exampleInputEmail1">
       อัพโหลดไฟล์ภาพ (<a href="<?php echo base_url('images/' . $doc['imgpay']); ?>" target="_blank"> ไฟล์เก่า </a>)
      </label> <?php echo $this->session->flashdata('err_imgpay'); ?>
      <input type="file" name="payment" id="payment" >
     </div>
     
    </div><!-- /.box-body -->

   

    <div class="box-footer">
     <button class="btn btn-primary" type="submit">
      <i class="fa fa-fw fa-save">
      </i>บันทึกข้อมูล
     </button>
     <a class="btn btn-danger" href="<?php echo base_url('document'); ?>" role="button">
      <i class="fa fa-fw fa-close">
      </i>ยกเลิก
     </a>
    </div>
   </form>
  </div>
 </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<script type="text/javascript">
 $('#register_date').datepicker().on(picker_event,function(e)
  {
  });
</script>