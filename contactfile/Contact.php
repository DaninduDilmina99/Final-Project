<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Us</title>
	<link href="img/Logo.png" rel="icon">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cssC/util.css">
	<link rel="stylesheet" type="text/css" href="cssC/main.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
<!--===============================================================================================-->
</head>
<body>
	<header>
        <div class="container">
            <input type="checkbox" name="" id="check">
            
            <div class="logo-container">
                <img src="cssC/Logo.png" class="logo"/>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .4s">
                        <a href="http://localhost/Final-Project/homepage.php">Home</a>
                        </li>
                       
                        <li class="nav-link" style="--i: .85s">
                        <a href="http://localhost/Final-Project/index.php?page=schedule">BusSchedule</a>
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                        <a href="http://localhost/Final-Project/index.php?page=home">Booking</a>
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                        <a href="http://localhost/Final-Project/SimpleBloodDonorManagement_PHP/simpleblooddonor/ ">Donate</a>
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
                                    <a href="http://localhost/Final-Project/index.php?page=bus">Bus List</a>
                                    </li>
                                    <li class="dropdown-link">
                                    <a href="http://localhost/Final-Project/index.php?page=location">Location List</a>
                                    </li>
                                    <li class="dropdown-link">
                                     <a href="#">User details</a><i class="fas fa-caret-down"></i></a>

                                        <div class="dropdown second">
                                            <ul>
                                                <li class="dropdown-link">
                                                <a href="http://localhost/Final-Project/index.php?page=user">Users</a><i class="fas fa-caret-down"></i></a>
                                                </li>
                                                <li class="dropdown-link">
                                                <a href="javascript:void(0)" id="manage_account">Manage Account</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="http://localhost/Final-Project/logout.php">Logout</a>
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


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Send Us A Message
				</span>

				<label class="label-input100" for="first-name">Tell us your name *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="last-name" placeholder="Last name">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. Nimesh@gmail.com">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Enter phone number</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="phone" placeholder="Eg. 0719008009">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Message *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Send Message
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							RWPC+V4W, Maharagama 10280
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Phone
						</span>

						<span class="txt3">
							0112 850 253
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							info@mc.lk
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="jsC/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
