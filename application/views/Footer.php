
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