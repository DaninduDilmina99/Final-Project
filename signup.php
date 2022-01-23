<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "Login_register";

$conn = mysqli_connect($server, $user, $pass, $database);
if(isset($_POST['send'])){
    $username= $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $request = "insert into Users(username,email,password) values('$username','$email','$password')";
    mysqli_query($conn, $request);
    header('location:Login.php');
}else{
    echo 'Something went wrong try again.';
}
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
