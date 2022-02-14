<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="style1.css">

</head>
<body>
    <div class="t">
        <div class="header">
            <a href="#" class="logo"> <i class="fas fa-hiking"></i> travel.</a>
            <div class="navbar">
                <div id="nav-close" class="fas fa-times"></div>  
                <a href="http://localhost/Final-Project/homepage.php">Home</a>
                <a href="./index.php?page=schedule">Bus Schedule</a>
                <a href="./index.php?page=home">Booking</a>
                <a href="Donate.html">Donate</a>
                <a href="http://localhost/Final-Project/reviews.php">Reviews</a>
                <a href="about us.html">About</a>
                <a href="contact.php">Contact</a>
                <a href="#">Maintenance</a>
                <li><a href="./index.php?page=bus">Bus List</a></li>
              <li><a href="./index.php?page=location">Location List</a></li> 
           
          <li class="drop-down nav-user"><a href="#"><?php echo $_SESSION['load_user'] ?> </a>
             <ul>
  
              <li><a href="./index.php?page=user">Users</a></li>
              <li><a href="javascript:void(0)" id="manage_account">Manage Account</a></li>
              <li><a href="./logout.php">Logout</a></li>
             
            </ul>
          </li>
            </div>
        
            <div class="icon">
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        
        </div>
        <div class="title">
            <br><br>
            <h3>අපේක්ශාවට අත්වැලක්</h3>
        </div>
                           
       
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
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>