<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>අපේක්ෂාවට අත්වැලක්</title>
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
                            <li class="nav-item"><a href="Donate.html" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Donate</a></li>
                            <li class="nav-item"><a href="http://localhost/Final-Project/reviews.php" class="active nav-link text-uppercase font-weight-bold js-scroll-trigger">Review</a></li>
                            <li class="nav-item"><a href="about us.html" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">About</a></li>
                            <li class="nav-item"><a href="contact.php" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Contact</a></li>
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

<body>
<?php session_start() ?>
<?php

  header('index.php?page=home');
 include 'header.php'; ?>
<?php if(isset($_SESSION['login_id'])) ?>

<div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-body text-white">
  </div>
</div>

    <?php 
    if(isset($_GET['page']) && !empty($_GET['page']))
      include($_GET['page'].'.php');
    else
      include('home.php');

    ?>
   
    <div class="modal fadeIn" tabindex="-1" id="uni_modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary submit" onclick="$('#uni_modal form').submit()">
              <?php echo isset($_SESSION['login_id']) ? 'Save' : 'Find' ?> 
          </button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fadeIn" tabindex="-1" id="confirm_modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confirmation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="confirm" onclick="">Continue</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fadeIn" tabindex="-1" id="book_modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

          </div>
          
        </div>
      </div>
    </div>

  <!-- ======= Footer ======= -->
  

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <script src="assets/js/main.js"></script>

</body>
<script>
  window.uni_modal =  function($title='',$url='',$book = 0){
    $('#uni_modal .modal-title').html($title);
        start_load();

    $.ajax({
      url:$url,
      error:err=>console.log(err),
      success:function(resp){
        $('#uni_modal .modal-body').html(resp)
        if('<?php echo !isset($_SESSION['login_id']) ?>' == 1){
                if($book == 1){
                   $('#uni_modal .submit').html('Book')
                }else{
                   $('#uni_modal .submit').html('Find')
        
                }
              }
        $('#uni_modal .modal-footer').show()
        $('#uni_modal').modal('show')
      },
      complete:function(){
        end_load();

      }
    })
  }
  window._conf = function($msg='',$func='',$params = []){
     $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
     $('#confirm_modal .modal-body').html($msg)
     $('#confirm_modal').modal('show')
  }
  window.start_load = function(){
    $('body').prepend('<di id="preloader2"></di>')
  }
  window.end_load = function(){
    $('#preloader2').fadeOut('fast', function() {
        $(this).remove();
      })
  }
  window.alert_toast= function($msg = 'TEST',$bg = 'success'){
      $('#alert_toast').removeClass('bg-success')
      $('#alert_toast').removeClass('bg-danger')
      $('#alert_toast').removeClass('bg-info')
      $('#alert_toast').removeClass('bg-warning')

    if($bg == 'success')
      $('#alert_toast').addClass('bg-success')
    if($bg == 'danger')
      $('#alert_toast').addClass('bg-danger')
    if($bg == 'info')
      $('#alert_toast').addClass('bg-info')
    if($bg == 'warning')
      $('#alert_toast').addClass('bg-warning')
    $('#alert_toast .toast-body').html($msg)
    $('#alert_toast').toast({delay:3000}).toast('show');
  }
  $(document).ready(function(){
  })
</script>
       
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
</html>