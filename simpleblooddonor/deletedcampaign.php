<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'conn.php';


$qry="delete from campaign where id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"Campaign Deleted";
    header('Location:editcampaign.php');
}else{
    echo"ERROR!!";
}
}
?>