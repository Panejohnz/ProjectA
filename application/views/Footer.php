
  <script src="<?php echo base_url('./assets/js/core/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('./assets/js/core/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('./assets/js/core/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('./assets/js/plugins/bootstrap-switch.js'); ?>"></script>
  <script src="<?php echo base_url('./assets/js/plugins/nouislider.min.js'); ?>"></script>
  <script src="<?php echo base_url('./assets/js/plugins/bootstrap-datepicker.js'); ?>"></script>
  <script src="<?php echo base_url('./vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
  <script src="<?php echo base_url('./vendor/bootstrap/js/popper.js'); ?>"></script>
  <script src="<?php echo base_url('./vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('./vendor/select2/select2.min.js'); ?>"></script>
  <script src="<?php echo base_url('./vendor/tilt/tilt.jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('./assets/js/main.js'); ?>"></script>
  <script src="<?php echo base_url('./assets/js/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('./assets/js/jquery-migrate-3.0.1.min.js');?>"></script>
  <script src="<?php echo base_url('./assets/js/popper.min.js');?>"></script>
  <script src="<?php echo base_url('./assets/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('./assets/js/jquery.easing.1.3.js');?>"></script>
  <script src="<?php echo base_url('./assets/js/jquery.waypoints.min.js');?>"></script>
  <script src="<?php echo base_url('./assets/js/jquery.stellar.min.js');?>"></script>
  <script src="<?php echo base_url('./assets/js/owl.carousel.min.js');?>"></script>
  <script src="<?php echo base_url('./assets/js/jquery.magnific-popup.min.js');?>"></script>
  <script src="<?php echo base_url('./assets/js/aos.js');?>"></script>
  <script src="<?php echo base_url('./assets/js/jquery.animateNumber.min.js');?>"></script>
  <script src="<?php echo base_url('./assets/js/bootstrap-datepicker.js');?>"></script>
  <script src="<?php echo base_url('./assets/js/jquery.timepicker.min.js');?>"></script>
  <script src="<?php echo base_url('./assets/js/google-map.js');?>"></script>
  <script src="<?php echo base_url('./assets/js/main1.js');?>"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
  <script>
      function change(){
        var val = $('#Cate').val()
        $.get("<?=base_url('index.php/DropdownController/imaeYet/')?>"+val,
        function (data){
          $("#Pro").html(data)
        })
              }
  </script>