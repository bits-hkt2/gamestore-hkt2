<?php 
    // AUTHENTICATION VERIFICATION
    if (!isset($_SESSION['username'])) {
  
        header('Location: unqualified.php');
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTAWESOME ICONS  -->
    <link rel="stylesheet" href="./icon/fontawesome-free-6.2.1-web/css/all.min.css">


    <!-- INTER FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet" />

    <title>My Cart</title>
    <link rel="stylesheet" href="./css/EmptyCart.css" type="text/css">
</head>

<body>
    <!--HEADER-->
    <header>
        <nav class="navigation">
            <div class="list-items">
                <img class="web_icon" src="./images/logo.png" alt="logo">
                <ul class="nav-items ">
                    <a href="#">
                        <li class="items">
                            store
                            <span><i class="fa-solid fa-chevron-down fa-2xs"></i> </span>
                        </li>
                    </a>
                    <a href="#">
                        <li class="items">
                            about
                            <span><i class="fa-solid fa-chevron-down fa-2xs"></i> </span>
                        </li>
                    </a>
                    <a href="#">
                        <li class="items ">
                            community
                            <span><i class="fa-solid fa-chevron-down fa-2xs"></i> </span>
                        </li>
                    </a>
                    <a href="#">
                        <li class="items">
                            support
                            <span><i class="fa-solid fa-chevron-down fa-2xs"></i> </span>
                        </li>
                    </a>
                </ul>
                <div class="profile ">
                    <a href=" #"><img class="profile_img" src="./images/icon.png" alt="">
                        <div class=""></div>
                        <div class="status-circle">
                        </div>
                    </a>
                    <div class="name-user ">
                        <h3 class=""> 2HKT</h3>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--MAIN-->
    <main>
        <!--search bar-->
        <!--My cart and back button-->
        <span class="my_cart">My Cart</span>
        <a class="back_button" href="#">Back</a>
        <!--empty-->
        <div id="boxes">
            <div id="leftbox">
                <div class="left"></div>
            </div>

            <div id="middlebox">
                <div class="middle">
                    <div class="empty_message">
                        <img class="center_icon" src="./images/purple_face.png" alt="purple_face">
                        <span class="message">Your cart is empty!</span>
                        <a href="#">
                            <span class="home_link">Shop for Games</span>
                        </a>
                    </div>
                </div>
            </div>

            <div id="rightbox">
                <div class="right"></div>
            </div>
        </div>
    </main>
    <!--FOOTER-->
    <footer>
        <div class="footer-section">
            <div class="about">
                <ul class="about-items">
                    <a href="">
                        <li> Policy |</li>
                    </a>
                    <a href="">
                        <li> Terms of Service |</li>
                    </a>
                    <a href="">
                        <li> Contact Us | </li>
                    </a>
                    <a href="">
                        <li> Jobs Opportunities</li>
                    </a>
                </ul>
            </div>
            <!-- SOCIAL MEDIA SECTION -->
            <div class="social-media">
                <ul class="social-platform">
                    <a href="#">
                        <li><i class="fa-brands fa-square-facebook"></i> </li>
                    </a>
                    <a href="#">
                        <li><i class="fa-brands fa-twitter"></i> </li>
                    </a>
                    <a href="#">
                        <li><i class="fa-brands fa-youtube"></i> </li>
                    </a>
                </ul>
            </div>
            <img class="footer-icon" src="./images/logo.png" alt="">
        </div>
        <div>
            <p class="copy-right"> ?? 2HKT. All rights reserved. All trademarks and registered trademarks are the
                property of their respective owners.
            </p>
        </div>
    </footer>
</body>

</html>