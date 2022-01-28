<?php 

session_start();

//initializing variables
$server = "localhost";
$user = "root";
$pass = "";
$errors = array();
$database = "Login_register";

//connect to the database
$conn = mysqli_connect($server, $user, $pass, $database);

//Register the user
if(isset($_POST['Users'])){
    //Receive all input Values from the user
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username)) { 
        array_push($errors, "Username is required"); 
    }
   if (empty($email)) { 
       array_push($errors, "Email is required"); 
    }
   if (empty($password)) { 
       array_push($errors, "Password is required"); 
    }


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM Users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
   
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password);//encrypt the password before saving in the database

    $query = "INSERT INTO Users (username, email, password) 
              VALUES('$username', '$email', '$password')";
    mysqli_query($conn, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: Login.php');
}
}
    // LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM Users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: Login.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  

?>
