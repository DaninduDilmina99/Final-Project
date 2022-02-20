<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Blood Donor</title>
    <!-- Favicon-->
    <link rel="icon" href="images/Logo.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="homepage.php">අපේක්ෂාවට අත්වැලක්</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->

                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
  
                        <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="http://localhost/Final-Project/homepage.php">Home</a>
                <a class="navbar-brand" href="index.php">Donate</a>
                <a class="navbar-brand" href="http://localhost/Final-Project/reviews.php">Review</a>
                <a class="navbar-brand" href="http://localhost/Final-Project/contact.php">Contact</a>
            </div>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/Logo.png" width="150" height="80" alt="User" />
                </div>
                
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                   
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Donors</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="adddonor.html">Add Donors</a>
                            </li>
                            <li>
                                <a href="viewdonor.php">View Donors</a>
                            </li>
                            <li>
                                <a href="editdonor.php">Edit Donors</a>
                            </li>
                            <li>
                                <a href="deletedonor.php">Remove Donors</a>
                            </li>
                           
                        </ul>
                    </li>
                   
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Campaign</span>
                        </a>
                        <ul class="ml-menu">
                                <li>
                                    <a href="addcampaign.html">Create Campaign</a>
                                </li>
                                <li>
                                    <a href="editcampaign.php">Edit Campaign Details</a>
                                </li>
                                <li>
                                    <a href="viewcampaign.php">View Campaign</a>
                                </li>
                                <li>
                                    <a href="deletecampaign.php">Remove Campaign</a>
                                </li>
                              
                            </ul>
                    </li>
                  
                  
                   
    
                </ul>
            </div>
        
        </aside>
        
        
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                
            </div>

            <!-- Widgets -->
            
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <!--  -->
            <!-- #END# CPU Usage -->
            <div class="row clearfix">
            <h3 class="box-title">MESSAGES</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?php 

if(isset($_POST['name'])){
$name = $_POST["name"];    
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$weight = $_POST["weight"];
$contact = $_POST["contact"];
$bloodtype = $_POST["bloodtype"];
include 'conn.php';
//code after connection is successfull
$qry = "insert into blooddonor(name,gender,dob,weight,contact,bloodtype) values ('$name','$gender','$dob','$weight','$contact','$bloodtype')";
$result = mysqli_query($conn,$qry); //query executes

if(!$result){
    echo"ERROR";
}else {
    echo" <div style='text-align: center'><h1>ADDED SUCCESSFULLY</h1>";
    echo" <a href='index.php' div style='text-align: center'><h3>Go Back</h3>";

}

}else{
    echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
}


?>
                <!-- Visitors -->
               
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
               
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
               
                  
                <!-- #END# Answered Tickets -->
            </div>

           
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
              
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
