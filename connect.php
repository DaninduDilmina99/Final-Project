<?php

//defining host
$host = "localhost";
//username
$username = "root";
//password
$password = "";
//database
$database = "blogapp";

$connect = mysqli_connect($host, $username, $password, $database);

if(!$connect){
    die("Database Connection Fail" . mysqli_error($connect));
}
else{
    echo "Database Connection Success!!";
}


?>