
  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/83325a7e2a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylenew.css">
    
    <title>Responsive Navbar</title>
</head>

<body>
    <header>
        <div class="container">
            <input type="checkbox" name="" id="check">
            
            <div class="logo-container">
                <img src="img/Logo.png" class="logo"/>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .4s">
                        <a href="homepage.php">Home</a>
                        </li>
                       
                        <li class="nav-link" style="--i: .85s">
                        <a href="./index.php?page=schedule">BusSchedule</a>
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                        <a href="./index.php?page=home">Booking</a>
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                        <a href="Donate.html">Donate</a>
                        </li>
                        <li class="nav-link" style="--i: 1.6s">
                        <a href="http://localhost/Final-Project/reviews.php">Reviews</a>
                        </li>
                        
                        <li class="nav-link" style="--i: 2.35s">
                            <a href="#">Maintenance<i class="fas fa-caret-down"></i></a>

                            <div class="dropdown">
                                <ul>
                                <div class="drop-down nav-user"><a href="#"><?php echo isset($_SESSION['load_user']) ?> </a>
                                    <li class="dropdown-link">
                                    <a href="./index.php?page=bus">Bus List</a>
                                    </li>
                                    <li class="dropdown-link">
                                    <a href="./index.php?page=location">Location List</a>
                                    </li>
                                    <li class="dropdown-link">
                                     <a href="#">User details</a><i class="fas fa-caret-down"></i></a>

                                        <div class="dropdown second">
                                            <ul>
                                                <li class="dropdown-link">
                                                <a href="./index.php?page=user">Users</a><i class="fas fa-caret-down"></i></a>
                                                </li>
                                                <li class="dropdown-link">
                                                <a href="javascript:void(0)" id="manage_account">Manage Account</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="./logout.php">Logout</a>
                                                </li>
                                               
                                                <div class="arrow"></div>
                                            </ul>
                                        </div>
                                    </li>
                                    
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

              
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
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
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    
    </body>

</html>