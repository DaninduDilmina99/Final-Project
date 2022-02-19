<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>අපේක්ෂාවට අත්වැලක්</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/Logo.png" rel="icon">
  <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap&subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <!-- Place favicon.ico in the root directory -->
      
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/responsive.css">

        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets1/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets1/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo"><img src="img/Logo.png"></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li><a class="nav-link scrollto" href="./index.php?page=home">Booking</a></li>
              <li><a class="nav-link scrollto"  href="./index.php?page=schedule">Bus-Schedule</a></li>
              <li><a class="nav-link scrollto " href="#portfolio">Events</a></li>
              <li><a class="nav-link scrollto" href="#review">Review</a></li>
              <li class="dropdown"><a href="#"><span>Maintenance</span> <i class="bi bi-chevron-down"></i></a>
              
              <ul>
              <a href="#"><?php echo isset($_SESSION['load_user']) ?> </a>
                <li>  <a href="./index.php?page=bus">Bus List</a></li>
                <li><a href="./index.php?page=location">Location List</a></li>
                <li class="dropdown"><a href="#"><span>User details</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="./index.php?page=user">Users</a></li>
                    <li><a href="javascript:void(0)" id="manage_account">Manage Account</a></li>
                    <li><a href="./logout.php">Logout</a></li>
                    
                  </ul>
                </li>
              </ul>
            </li>
              <li><a class="nav-link  " href="Donate.html">Donate</a></a></li>
            
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(4.jpeg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">We are professional</h2>
                <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(img/bus.jpeg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">At vero eos et accusamus</h2>
                <p class="animate__animated animate__fadeInUp">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(5.jpeg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Temporibus autem quibusdam</h2>
                <p class="animate__animated animate__fadeInUp">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(3.jpeg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Nam libero tempore</h2>
                <p class="animate__animated animate__fadeInUp">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(2.jpeg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Magnam aliquam quaerat</h2>
                <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Featured Services Section Section ======= -->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="bi bi-briefcase"></i>
            <h4 class="title"><a href="donate.html">Donate</a></h4>
            <p class="description">පිළිකා රෝගයෙන් පෙළෙන අපේම සහෝදර හදවත් වෙත මනුශ්‍යත්වයේ දෑත් දිගුකරමින් ඔවුන්ගේ  ඖෂධ ලබාගැනීම හා වෙනත් සනීපාරක්ෂක කටයුතු උදෙසා ඔබට ලබාදිය් හැකි සියලුම මූල්‍යමය ආධාට හා හිසකෙස් දන්දීමේ කටයුතු මෙමගින් සිදුකල හැක</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="bi bi-card-checklist"></i>
            <h4 class="title"><a href="index.php?page=home">Booking</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>

          <div class="col-lg-4 box">
            <i class="bi bi-binoculars"></i>
            <h4 class="title"><a href="index.php?page=schedule">Bus-Schedule</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>

        </div>
      </div>
    </section>
     <!-- ======= About Us Section ======= -->
     <section id="about">
       
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>About Us</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="about-col">
              <div class="img">
                <img src="mission.jpeg" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-bar-chart"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="about-col">
              <div class="img">
                <img src="plan.jpeg" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-brightness-high"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="about-col">
              <div class="img">
                <img src="vision.jpeg" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
                Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->
    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">

        <header class="section-header wow fadeInUp">
          <h3>Sustainability Goals</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Good health and well-being</a></h4>
            <p class="description">Ensuring people live healthy lives can cut child mortality and raise life expectancy</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Affordable and clean energy</a></h4>
            <p class="description">Ensure access to affordable, reliable, sustainable, and modern energy for all</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Industry, Innovation, and Infrastructure</a></h4>
            <p class="description">Build resilient infrastructure, promote inclusive and sustainable industrialization, and foster innovation</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Sustainable cities and communities</a></h4>
            <p class="description">Make cities and human settlements inclusive, safe, resilient, and sustainable</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Responsible consumption and production</a></h4>
            <p class="description">Ensure sustainable consumption and production patterns</p>
          </div>
          <!-- <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div> -->

        </div>

      </div>
    </section><!-- End Services Section -->
     <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Events</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class=" col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">මහරගම අපේක්ෂා රෝහල</li>
            <li data-filter=".filter-card">ශ්‍රී ලංගම බස් සේවාව</li>
            <li data-filter=".filter-web">Little Hearts අරමුදල</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="hospital2.jpeg" class="img-fluid" alt="">
              <a href="assets1/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="bi bi-plus"></i></a>
              <a href="https://www.facebook.com/ApekshaHospital.ncisl/" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">අපේක්ෂාවන්ට කාරුණික වන්න</a></h4>
              <p>මහරගම අපේක්ෂා රෝහල</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="hospital1.jpeg" class="img-fluid" alt="">
              <a href="hospital1.jpeg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 3"><i class="bi bi-plus"></i></a>
              <a href="https://www.littlehearts.lk/" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">පුංචි හදවත් සතුටු කරන්න</a></h4>
              <p>Little Hearts අරමුදල</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="hospital3.jpeg" class="img-fluid" alt="">
              <a href="hospital3.jpeg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 2"><i class="bi bi-plus"></i></a>
              <a href="https://www.facebook.com/ApekshaHospital.ncisl/" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">රසවින්දනයට හුරු කරවන්න</a></h4>
              <p>මහරගම අපේක්ෂා රෝහල</p>
            </div>
          </div>
        </div>
       
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="hospital4.jpeg" class="img-fluid" alt="">
              <a href="hospital4.jpeg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
              <a href="https://www.facebook.com/ApekshaHospital.ncisl/" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">වෙනසක් නොකොට ආදරය කරන්න</a></h4>
              <p>මහරගම අපේක්ෂා රෝහල</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="bus5.jpeg" class="img-fluid" alt="">
              <a href="bus5.jpeg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
              <a href="https://www.sltb.lk/" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">රැකවරණය</a></h4>
              <p>‍ශ්‍රී ලංගම බස් සේවාව </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="bus6.png" class="img-fluid" alt="">
              <a href="bus6.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
              <a href="https://www.sltb.lk/" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">සුවපහසුව‍</a></h4>
              <p>ශ්‍රී ලංගම බස් සේවාව</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="heart1.jpeg" class="img-fluid" alt="">
              <a href="heart1.jpeg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">කාලය ගත කරන්න</a></h4>
              <p>Little Hearts අරමුදල</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="bus7.jpeg" class="img-fluid" alt="">
              <a href="bus7.jpeg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
              <a href="https://www.sltb.lk/" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">සහනාධාර මිල</a></h4>
              <p>ශ්‍රී ලංගම බස් සේවාව</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="heart9.jpeg" class="img-fluid" alt="">
              <a href="heart9.jpeg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">ජීවිතයට ජීවිතයක් දෙන්න</a></h4>
              <p>Little Hearts අරමුදල</p>
            </div>
          </div>
        </div>

      </div>

      </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Reviews</h3>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="chathuka.png" class="testimonial-img" alt="">
                <h3>Chathuka</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <img src="assets1/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Very usefull website hadel with easy anytime,easy to get notifications about bookings.I recommended this website.
                  <img src="assets1/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="akshitha.png" class="testimonial-img" alt="">
                <h3>Akshitha</h3>
                <h4>Designer</h4>
                <p>
                  <img src="assets1/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  I don't normally write reviews but this site certainly deserves .It is easy to use and the donete payment methods are also simple.
                  <img src="assets1/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="ravindi.png" class="testimonial-img" alt="">
                <h3>Ravindi</h3>
                <h4>Store Owner</h4>
                <p>
                  <img src="assets1/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Really easy to use with friendly interface.100% recommend this site.
                  <img src="assets1/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="sathsarani.png" class="testimonial-img" alt="">
                <h3>Sathsarani</h3>
                <h4>Freelancer</h4>
                <p>
                  <img src="assets1/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  This  website very usefull for online booking bus tickets and donate to Apeksha hospital.
                  <img src="assets1/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="ishan.png" class="testimonial-img" alt="">
                <h3>Ishan</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <img src="assets1/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  This is the fully trusted site.it has made easy to find  my bus shedule for Apeksha hospital
                  <img src="assets1/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
    <section id="review" class="contact">
            <div class="contact100-form-title container">
                
                <h2>Send A Review</h2>
                    <form class="contact100-form validate-form">


                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">Your Name</span>
                            <input class="input100" type="text" name="name" placeholder="Enter your name">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <span class="label-input100">Email</span>
                            <input class="input100" type="text" name="email" placeholder="Enter your email addess">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Message is required">
                            <span class="label-input100">Message</span>
                            <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn">
                                <span>
                                    Submit
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>

                        <div class="container-contact100-form-btn response" style="margin-top: 30px;">
                            <p class="error">
                            </p>
                        </div>
                    </form>
                </div>
        </section>
        <!-- Contact End -->
      

       
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/jquery-easing/jquery.easing.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="js/ajax-mail.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/main.js"></script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyIMWhs-crjT0yhctbRjfJFq75FlEhSzE&callback=initMap">
        </script>
    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>Team</h3>
          <p>A Project by a group-29 of NSBM Green University</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <img src="Kavindu.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Kavindu Lakshitha</h4>
                  <span>Undergraduate Student</span>
                  <div class="social">
                    <a href="https://twitter.com/KavinduLakshi14"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100007968407701"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/laksxhu_84/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/kavindu-lakshitha-a68734211/"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <img src="danie.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Danindu Leewanage</h4>
                  <span>Undergraduate Student</span>
                  <div class="social">
                    <a href="https://twitter.com/danindudilmina"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/danindu.dilmina.3"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/dani3.99/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/danindu-dilmina-6719831a0/"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <img src="nimesh.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Nimesh Kavinda</h4>
                  <span>Undergraduate Student</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/nimesh.liyanage.7140"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/_n_im_e_s_h_/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/nimesh-kavinda-54435121b/"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <img src="hashini.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Hashini Ravinga</h4>
                  <span>Undergraduate Student</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/ravi.ravihansa.9"><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/hashini-ravinga-edandupola-52b596217/"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <img src="Dulari.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Dulari Wijenayake</h4>
                  <span>Undergraduate Student</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/dularipavithra.wijenayake"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/dulari.wijenayake/"><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt" ></i>
              <h3>Address</h3>
              <address><a href="https://www.google.com/maps/dir/6.9307716,79.8856817/apeksha+hospital+maharagama+address/@6.884284,79.8676392,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2507546e99623:0x884f7e1e67a4d49b!2m2!1d79.9203196!2d6.8372443">RWPC+V4W, Maharagama 10280</a></address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+94 11 285 0253</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@mc.lk">info@mc.lk</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3><img src="img/Logo.png"></h3>
            <style>
              h3 img {
                width: 200px;
                height: 100px;
              }
            </style>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Events</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#review">Review</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p><strong>Address:</strong><a href="https://www.google.com/maps/dir/6.9307716,79.8856817/apeksha+hospital+maharagama+address/@6.884284,79.8676392,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2507546e99623:0x884f7e1e67a4d49b!2m2!1d79.9203196!2d6.8372443">
              RWPC+V4W,  <br>
              Maharagama 10280<br>
              Sri Lanka <br></a>
              <strong>Phone:</strong> <a href="tel:+155895548855">+94 11 285 0253</a><br>
              <strong>Email:</strong> <a href="mailto:info@mc.lk">info@mc.lk</a><br>
            </p>

            <div class="social-links">
              <a href="#https://twitter.com/MoH_SriLanka" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#https://www.facebook.com/ApekshaHospital.ncisl" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#https://www.instagram.com/explore/locations/1028583433/apeksha-hospital-maharagama/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#https://www.linkedin.com/company/ministry-of-health-sri-lanka/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Tell Us</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Submit">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>NSBM Green University</strong>. All Rights Reserved
      </div>
      <div class="credits">
      
        Designed by <a href="https://github.com/DaninduDilmina99/Final-Project">Group-29</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets1/vendor/purecounter/purecounter.js"></script>
  <script src="assets1/vendor/aos/aos.js"></script>
  <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets1/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets1/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets1/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets1/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets1/js/main.js"></script>




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
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    </body>
    
</html>
