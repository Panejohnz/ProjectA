<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="<?php echo base_url(); ?>./assets/css2/bootstrap.css" rel="stylesheet" />
    
    <link href="<?php echo base_url(); ?>./assets/css2/pe-icon-7-stroke.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>./assets/css2/ct-navbar.css" rel="stylesheet" />  
  
    <!--     Font Awesome     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <style>
        .fa-heart{
            color: #F74933;
        }   
        .space-100{
            height: 100px;
            display: block;
        }
        pre.prettyprint{
            background-color: #ffffff;
            border: 1px solid #999;
            margin-top: 20px;
            padding: 20px;
            text-align: left;
        }
        .atv, .str{
            color: #05AE0E;
        }
        .tag, .pln, .kwd{
             color: #3472F7;
        }
        .atn{
          color: #2C93FF;
        }
        .pln{
           color: #333;
        }
        .com{
            color: #999;
        } 
    </style>
</head>

<body>
 <div id="navbar-full">
    <div id="navbar">
       <!--    
        navbar-default can be changed with navbar-ct-blue navbar-ct-azzure navbar-ct-red navbar-ct-green navbar-ct-orange  
        -->
        <nav class="navbar navbar-ct-blue navbar-fixed-top navbar-transparent" role="navigation">
          
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand navbar-brand-logo" href="http://www.creative-tim.com">
                    <div class="logo">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/new_logo.png">
                    </div>
                    <div class="brand">Trial</div>
              </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                    <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          
                            <p>Shop  <b class="caret"></b></p>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Shopping</a></li>
                            <li><a href="#">Product</a></li>
                          </ul>
                    </li>

                  
                    <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               
                                <p>Account <b class="caret"></b></p>
                            </a>
                          <ul class="dropdown-menu">
                          <li><a href="#">Contact</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Sing in</a></li>
                          </ul>
                    </li>
               </ul>
               <form class="navbar-form navbar-right navbar-search-form" role="search">                  
                 <div class="form-group">
                      <input type="text" value="" class="form-control" placeholder="Search...">
                 </div> 
              </form>
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
       <div class="blurred-container">
            <div class="img-src" style="background-image: url('assets/images/bg.jpg')"></div>
        </div>
    </div><!--  end navbar -->

</div> <!-- end menu-dropdown -->



</body>

    <script src="<?php echo base_url('./assets/js3/jquery-1.10.2.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('./assets/js3/bootstrap.js');?>" type="text/javascript"></script>
	
	<script src="<?php echo base_url('./assets/js3/ct-navbar.js');?>"></script>
	

</html>