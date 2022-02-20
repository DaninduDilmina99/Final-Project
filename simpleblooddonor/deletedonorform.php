<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'conn.php';


$qry="delete from blooddonor where id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"DELETED";
    header('Location:deletedonor.php');
}else{
    echo"ERROR!!";
}
}
?>