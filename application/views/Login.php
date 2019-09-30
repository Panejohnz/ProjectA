<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">



  <style>
    @import url("https://fonts.googleapis.com/css?family=Luckiest+Guy");

    /* BODY */
    body {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      width: 100%;
      height: 100%;
      background-color: skyblue;
      background-image: -webkit-linear-gradient(90deg, skyblue 0%, steelblue 100%);
      background-attachment: fixed;
      background-size: 100% 100%;
      overflow: hidden;
      font-family: "Luckiest Guy", cursive;
      -webkit-font-smoothing: antialiased;
    }

    ::selection {
      background: transparent;
    }

    /* CLOUDS */
    body:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      width: 0;
      height: 0;
      margin: auto;
      border-radius: 100%;
      background: transparent;
      display: block;
      box-shadow: 0 0 150px 100px rgba(255, 255, 255, 0.6),
        200px 0 200px 150px rgba(255, 255, 255, 0.6),
        -250px 0 300px 150px rgba(255, 255, 255, 0.6),
        550px 0 300px 200px rgba(255, 255, 255, 0.6),
        -550px 0 300px 200px rgba(255, 255, 255, 0.6);
    }

    /* JUMP */
    h1 {
      cursor: default;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      width: 100%;
      height: 100px;
      margin: auto;
      display: block;
      text-align: center;
    }

    h1 span {
      position: relative;
      top: 80px;
      display: inline-block;
      -webkit-animation: bounce 3s ease infinite alternate;
      font-size: 80px;
      color: #BA55D3;
      text-shadow: 0 1px 0 #9400D3, 0 2px 0 #9400D3, 0 3px 0 #9400D3, 0 4px 0 #9400D3,
        0 5px 0 #9400D3, 0 6px 0 transparent, 0 7px 0 transparent, 0 8px 0 transparent,
        0 9px 0 transparent, 0 10px 10px rgba(0, 0, 0, 0.4);
    }

    h1 span:nth-child(2) {
      -webkit-animation-delay: 0.1s;
    }

    h1 span:nth-child(3) {
      -webkit-animation-delay: 0.2s;
    }

    h1 span:nth-child(4) {
      -webkit-animation-delay: 0.3s;
    }

    h1 span:nth-child(5) {
      -webkit-animation-delay: 0.4s;
    }

    h1 span:nth-child(6) {
      -webkit-animation-delay: 0.5s;
    }



    /* ANIMATION */
    @-webkit-keyframes bounce {
      100% {
        top: -20px;
        text-shadow: 0 1px 0 #ccc, 0 2px 0 #ccc, 0 3px 0 #ccc, 0 4px 0 #ccc,
          0 5px 0 #ccc, 0 6px 0 #ccc, 0 7px 0 #ccc, 0 8px 0 #ccc, 0 9px 0 #ccc,
          0 50px 25px rgba(0, 0, 0, 0.2);
      }
    }
  </style>
</head>

<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="<?php echo base_url(); ?>./assets/images/img-01.png" alt="IMG">
        </div>

        <form name="login" id="login_form" method="post" action=<?php echo base_url('index.php/TestController/auth') ?>>
          <span class="login100-form-title">
            <h1>
              <span>L</span>
              <span>O</span>
              <span>G</span>
              <span>I</span>
              <span>N</span>
            </h1>
          </span>

          <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="usertxt" id="usertxt" placeholder="Username" required class="form-control">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="passtxt" id="passtxt" placeholder="Password" required class="form-control">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div><input type="checkbox" onclick="myFunction()">Show Password

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
          </div>

         <?php echo $this->session->flashdata('msg');?>
         
          <div class="text-center p-t-136">
            <a class="txt2" href="<?php echo site_url("RegisController"); ?>">
              Create your Account
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
  history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
   
</script>
<script>
  function myFunction() {
  var x = document.getElementById("passtxt");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>