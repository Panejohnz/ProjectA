<!DOCTYPE php>
<php lang="en">
  <head>
    <title>อากีลูลู่</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css2/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css2/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css2/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css2/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css2/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css2/aos.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css2/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css2/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css2/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css2/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css2/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css2/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url("HomeController");?>">อากีลูลู่</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="<?php echo site_url("HomeController");?>" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="solutions.php" class="nav-link">Solution</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href=<?php echo site_url("TestController");?>>หลังบ้าน</a>
                  <a class="dropdown-item" href="portfolio-single.php">Sign Out</a>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel ftco-degree-bg">
      <div class="slider-item"  img src="<?php echo base_url(); ?>images/bg_1.jpg" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 ftco-animate text-center">
              <h1 class="mb-4">
                <strong class="typewrite" data-period="4000" data-type='["ยินดีต้อนรับครับ"]'>
                  <span class="wrap"></span>
                </strong>
              </h1>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p><a href="https://vimeo.com/45830194" class="btn btn-primary btn-outline-white px-4 py-3 popup-vimeo"><span class="ion-ios-play mr-2"></span> Watch Video</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->


    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="<?php echo site_url("TestController");?>" class="block-20">
                <img src="<?php echo base_url(); ?>./assets/images/image_1.jpg" alt="IMG" >
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div><a href="#">July 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text p-4">
                <div class="meta mb-3">
                  <div><a href="#">July 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text p-4">
                <div class="meta mb-3">
                  <div><a href="#">July 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Company</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="<?php echo site_url("HomeController");?>" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Portfolio</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">198 West 21th Street, Suite 721 New York NY 10016</a></li>
                <li><a href="#" class="py-2 d-block">+ 1235 2355 98</a></li>
                <li><a href="#" class="py-2 d-block">info@yoursite.com</a></li>
                <li><a href="#" class="py-2 d-block">email@email.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <span class="icon icon-paper-plane"></span>
                  <input type="text" class="form-control" placeholder="Subscribe">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
 
    
  </body>
</php>