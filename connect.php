<?php

//defining host
$host = "localhost";
//username
$username = "root";
//password
$password = "";
//database
$database = "Donate";

$conn = mysqli_connect($host, $username, $password, $database);

if(!$conn){
    die("Database Connection Fail");
}
else{
    echo "Database Connection Success!!";
}


?>
