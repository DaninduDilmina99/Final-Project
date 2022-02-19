<?php inclide_once('inc/connect.php');?>

<?php

if(isset($_POST['submit'])){

//declaring variables

$fname = "" ;
$gender = "" ;
$email = "" ;
$phone = "" ;
$donation = "" ;

$fname = input_varify($_POST['fname']);
$gender = input_varify($_POST['gender']);
$email = input_varify($_POST['email']);
$phone = input_varify($_POST['phone']);
$donation = input_varify($_POST['donation']);

// echo $fname;
// echo "<br>";
// echo $gender;
// echo "<br>";
// echo $email;
// echo "<br>";
// echo $phone;
// echo "<br>";
// echo $donation;
// echo "<br>";

$Query = "INSERT INTO tbl_donate(fname,gender,email,phone,donate_type,Deg_Date) VALUES(
    '{$fname}','{$gender}','{$email}','{$phone}','{$donate_type}',NOW()
)";

$result = mysqli_query($connect, $Query);

if($result){
    echo "User Registration Success!";
}
else{
    echo mysql_error($connect);
}

}

function input_varify($data){
    
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugging/bootstrap.min.css">
    <script src="plugging/jquery.min.js"></script>
    <script src="plugging/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/donate_up.css">
    <title>Donation</title>
</head>

<body>

<?php include_once('inc/navbar.php')
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header" id="card-header">
                    <h4>Apekshawata Athwelak Donation Form</h4>
                </div>       
                <div class="card-body" id="card-body">

                    <form action="donate_up.php" method="POST" autocomplete="off">

                    <div class="form-group">
                      <label for="">Full Name</label>
                      <input type="text" name="fname" id="fname" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="fname" class="text-muted">Enter Your Name</small>
                    </div>

                    <div class="form-group">
                      <label for="gender">Gender</label>
                      <input type="select" name="gender" id="gender" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="gender" class="text-muted">Choose Your Gender</small>
                    </div>

                    <div class="form-group">
                      <label for="">E-mail</label>
                      <input type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="email" class="text-muted">Enter Your E-mail</small>
                    </div>

                    <div class="form-group">
                      <label for="">Phone Number</label>
                      <input type="text" name="phone" id="phone" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="phone" class="text-muted">Enter Your Phone Number</small>
                    </div>

                    <div class="form-group">
                      <label for="dtype">Donation Type</label>
                      <input type="text" name="donation" id="donation" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="donation" class="text-muted">Choose You Donation Type</small>
                    </div>


                </div>

                <div class="card-footer" id="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>
    
    
</body>
</html>