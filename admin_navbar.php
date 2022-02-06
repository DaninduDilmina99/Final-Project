
  <header class="top">
  
                  <div class="fixedArea">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 noPadding">
                            <div class="content-wrapper one">
                                
                                <header class="header">
                                    <nav class="navbar navbar-default myNavBar">
                                        <div class="container">

                                           
                                            <div class="navbar-header">
                                                <div class="row">
                                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                                        <div class="row">
                                                            <div class="col-md-3 col-xs-3 col-sm-3">
                                                                <a style="padding-top:0px;" class=" navbar-brand navBrandText text-uppercase font-weight-bold" href="index.html"><img class="set-logo" src="/img/Logo.png" alt="" /></a>

                                                            </div>
                                                            <div class="col-md-9 col-sm-9 col-xs-9">

                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                            <span class="sr-only">Toggle navigation</span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>

                                            
                                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-right navBar">
                                                    <li class="nav-item"><a href="./index.php?page=home" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Home <span class="sr-only">(current)</span></a></li>
                                                    <li class="nav-item"><a href="./index.php?page=schedule" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Bus Shedule</a></li>
                                                    <li class="nav-item"><a href="./index.php?page=booked" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Booking</a></li>
                                                    <li class="nav-item"><a href="#section3" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Donate</a></li>
                                                    <li class="nav-item"><a href="reviews.html" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Review</a></li>
                                                    <li class="nav-item"><a href="#section5" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">About</a></li>
                                                    <li class="nav-item"><a href="#section6" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Contact</a></li>
                                                    <li class="drop-down nav-bus nav-location"><a href="#">Maintenance</a>
            <ul>
              <li><a href="./index.php?page=bus">Bus List</a></li>
              <li><a href="./index.php?page=location">Location List</a></li>
             
              
            </ul>
          </li>
          <li class="drop-down nav-user"><a href="#"><?php echo $_SESSION['login_name'] ?> </a>
             <ul>
              <li><a href="./index.php?page=user">Users</a></li>
              <li><a href="javascript:void(0)" id="manage_account">Manage Account</a></li>
              <li><a href="./logout.php">Logout</a></li>
             
            </ul>
          </li>


                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </header>
                               
                            </div>
						</div>
                  </div>
			</div>
		</header>
  <script>
    $(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>';
      if(page != ''){
        $('#top-nav li').removeClass('active')
        $('#top-nav li.nav-'+page).addClass('active')
      }
      $('#manage_account').click(function(){
      uni_modal('Manage Account','manage_account.php')
  })
    })

  </script>