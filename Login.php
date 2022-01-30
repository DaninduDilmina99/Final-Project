<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/83325a7e2a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Login.css" />
    <title>Sign in & Sign up Form</title>
    
  </head>
<body>
<div class="container"> 
      <div class="forms-container">    
        <div class="signin-signup">
	 
  <form method="post" action="Login.php" class="sign-in-form">
  	<?php include('errors.php'); ?>
      <div class="logo">
              <img src="img/Logo.jpeg" alt="Logo"/>
           </div>  
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
  		<input type="text" placeholder="Username" name="username" >
  	</div>
      <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"/>
            </div>
  
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
	
  <form action="Login.php" class="sign-up-form" method="post">
          <?php include('errors.php'); ?>
            <div class="logo">
              <img src="img/Logo.jpeg" alt="Logo"/>
           </div>  
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
  	  <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>">
  	</div>
      <div class="input-field">
              <i class="fas fa-envelope"></i>
  	  <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>">
  	</div>
      <div class="input-field">
              <i class="fas fa-lock"></i>
  	  <input type="password" placeholder="Password" name="password">
  	</div>
  	<input type="submit" class="btn" value="Sign up" name="Users"/>
      <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
  	<div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Create an Account</h3>
            <p>
              Create your own account it takes less than a minute.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="undraw_bus_stop_re_h8ej.svg" class="image" alt="" />

        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              If you already have an Account!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div> 

          <img src="undraw_medicine_b-1-ol.svg" class="image" alt="" />

        </div>
      </div>
    </div>

    <script src="Login.js"></script>
  </body>
</html>