<?php

$servername="localhost";
$uname="root";
$pass="";
$db="sangamdb";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM blooddonor";
                $query = $conn->query($sql);

                echo "<h2>".$query->num_rows."</h2>";
?>