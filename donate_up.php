
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

<?php include('navbar.php')
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

                    <div>
                        <div >
                            <label for="">Gender</label>
                        </div>
                        <select class="custom-select" name="gender" id="gender">
                            <option selected> </option>
                            <option value="Male">Male</option>
                            <option value="Femal">Femal</option>
                        </select>
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

                    <div>
                        <div>
                            <label for="">Donation Type</label>
                        </div>
                        <select class="custom-select" name="donate" id="danate">
                            <option selected> </option>
                            <option value="Money">Money</option>
                            <option value="Blood">Blood</option>
                            <option value="Hair">Hair</option>
                            <option value="Food">Food</option>
                            <option value="Toys">Toys</option>
                            <option value="Books">Books</option>
                            <option value="Instruments">Instruments</option>
                        </select>
                        <small id="donate" class="text-muted">Choose Your Donation Type</small>
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
