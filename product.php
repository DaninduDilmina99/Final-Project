<!DOCTYPE html>
<html>
<body>

<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'Login_register');


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT id, username, email  FROM Users";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        print "<br> id: ". $row["id"]. "<br> - Name: ". $row["username"]. "<br> - Email: " . $row["email"] . "<br>";
        print "<img src=\"".$row["img"]."\">";
       
      }
  } else {
      print "0 results";
  }
  
  
  
  $conn->close();   
          ?> 