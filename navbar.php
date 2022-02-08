<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Review Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Cemre Tellioğlu Tunçay">

        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap&subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <!-- Place favicon.ico in the root directory -->
      
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/responsive.css">

        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>


    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header Area Start -->
        <header class="top">
          <div class="fixedArea">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 noPadding">
                <div class="content-wrapper one">
                  <!-- Main Menu Start -->
                  <!-- Navbar-->
                  <header class="header">
                    <nav class="navbar navbar-default myNavBar" style="background-color: #333333">
                      <div class="container">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <div class="row">
                            <div class="col-md-9 col-sm-9 col-xs-9">
                              <div class="row">
                                <div class="col-md-3 col-xs-3 col-sm-3">
                                  <a style="padding-top:0px;" class=" navbar-brand navBrandText text-uppercase font-weight-bold" href="index.html"><img class="set-logo" src="img/logo/Logo.png" alt="restorant" /></a>

                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                  <!--                                                                <a href="index.html"><img class="img-responsive logo" src="img/logo/Logo.png" alt="restorant" /></a>-->

                                </div>
                              </div>


                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                            </div>
                          </div>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav navbar-right navBar">
                            <li class="nav-item"><a href="http://localhost/Final-Project/homepage.php" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Home </a></li>
                            <li class="nav-item"><a href="./index.php?page=schedule" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Bus Shedule</a></li>
                            <li class="nav-item"><a href="./index.php?page=home" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Booking</a></li>
                            <li class="nav-item"><a href="" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Donate</a></li>
                            <li class="nav-item"><a href="http://localhost/Final-Project/reviews.php" class="active nav-link text-uppercase font-weight-bold js-scroll-trigger">Review</a></li>
                            <li class="nav-item"><a href="" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">About</a></li>
                            <li class="nav-item"><a href="" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Contact</a></li>
                            <li class="drop-down nav-bus nav-location"><a href="#">Maintenance</a>
                            <ul>
              <li><a href="./index.php?page=bus">Bus List</a></li>
              <li><a href="./index.php?page=location">Location List</a></li> 
            </ul>
          </li>
          <li class="drop-down nav-user"><a href="#"><?php echo $_SESSION['load_user'] ?> </a>
             <ul>
  
              <li><a href="./index.php?page=user">Users</a></li>
              <li><a href="javascript:void(0)" id="manage_account">Manage Account</a></li>
              <li><a href="./logout.php">Logout</a></li>
             
            </ul>
          </li>
                          </ul>
                        </div>
                      </div>
                    </nav>
                  </header>
                  <!-- Main Menu End -->
                </div>
              </div>
            </div>
          </div>
        </header>
       
  <script>
    $(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>';
      if(page != ''){
        $('#top-nav li').removeClass('active')
        $('#top-nav li.nav-'+page).addClass('active')
      }
      $('#manage_account').click(function(){
      uni_modal('Manage Account','manage_account.php')
  })
    })

  </script>
   <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/jquery-easing/jquery.easing.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="js/ajax-mail.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/main.js"></script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyIMWhs-crjT0yhctbRjfJFq75FlEhSzE&callback=initMap">
        </script>