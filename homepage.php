
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="homepage.css">

</head>
<body>
   <div class="header">
    <a href="#" class="logo"> <img src="images/Logo.png" alt=""></a>
    <div class="navbar">
        <div id="nav-close" class="fas fa-times"></div>  
        <a href="./index.php?page=homepage">Home</a>
        <a href="./index.php?page=schedule">Bus Schedule</a>
        <a href="./index.php?page=home">Booking</a>
        <a href="#Donate">Donate</a>
        <a href="./index.php?page=review">Reviews</a>
        <a href="#About">About</a>
        <a href="#Contact">Contact</a>
    </div>

    <div class="icon">
        <div id="menu-btn" class="fas fa-bars"></div>
    </div>

</div>
 
<section class="home" id="home">

    <div class="swiper home-slider">
        

        <div class="swiper-wrapper">
            
            <div class="swiper-slide">

                <div class="box" style="background: url('images/home-bg-1.jpg') no-repeat;">

                    <div class="content">
                        <span>never stop</span>
                        <h3>exploring</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium ab dicta incidunt optio consequuntur, doloremque quis tempora repudiandae ad ipsam tempore. Vero quis nobis id nulla ipsam placeat, iste commodi!</p>

                        <a href="#" class="btn">get started</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">

                <div class="box second" style="background: url(images/home-bg-3.jpg) no-repeat;">

                    <div class="content">
                        <span>make toure</span>
                        <h3>amazing</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium ab dicta incidunt optio consequuntur, doloremque quis tempora repudiandae ad ipsam tempore. Vero quis nobis id nulla ipsam placeat, iste commodi!</p>

                        <a href="#" class="btn">get started</a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">

                <div class="box" style="background: url(images/home-bg-2.jpg) no-repeat;">

                    <div class="content">
                        <span>explore the</span>
                        <h3>new world</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium ab dicta incidunt optio consequuntur, doloremque quis tempora repudiandae ad ipsam tempore. Vero quis nobis id nulla ipsam placeat, iste commodi!</p>

                        <a href="#" class="btn">get started</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>














    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="homepage.js"></script>
</body>
</html>