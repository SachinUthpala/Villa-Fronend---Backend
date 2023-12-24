<!--
    Developed By - @SachinGunasekara

    <--
        Github -
        Gmail - 
        Facebook - 
        Inster - 
        Whatsapp -
    ->    
-->

<?php
//db connection
require_once '../../db.configs/connection.db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>River's Edge</title>

    <!--link for fav icons-->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!--custome css-->
    <link rel="stylesheet" href="../../assets/css/style.css" />

    <!--
        preload images
    -->
    <link rel="preload" as="image" href="../../assets/images/preloader.svg" />
</head>

<body>

    <!--
        #preloader
    -->
    <div class="preloader" data-preloader>
        <div class="preloader-inner">
            <img src="../../assets/images/preloader.svg" width="50" height="50" alt="" />
        </div>
    </div>

    <!--header section-->
    <header class="header" header-data>
        <div class="container">
            <a href="#" class="logo">
                <img src="../../assets/images/logo.png" alt="logo" width="187" height="38" />
            </a>

            <nav class="navbar" data-navbar>
                <!--navbaar top-->
                <div class="navbar-top">
                    <a href="#" class="logo">
                        <img src="../../assets/images/logo.png" alt="logo" width="187" height="38" />
                    </a>

                    <button class="nav-toggle-btn" aria-label="close menu" data-nav-toggler onclick="closeMenu()">
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>
                <!--menu icons-->
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="../../index.php" class="navbar-link ">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Room.php" class="navbar-link active" style="display:flex;">Rooms->Room03</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../../Gallary/Gallary.php" class="navbar-link">Gallary</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../../About/About.php" class="navbar-link">About</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../../Contact/ContactUs.php" class="navbar-link">Contact</a>
                    </li>
                </ul>
                <!--header action-->
                <div class="header-action">
                    <a href="../../Registration/Registration.php" class="btn btn-primary">LogIn</a>
                </div>
            </nav>

            <button class="nav-toggle-btn" aria-label="open menu" onclick="openMenu()">
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>

            <div class="overlay" data-overlay data-nav-toggler></div>
        </div>
    </header>

    <main>
        <article>
            <!--
                header
            -->
            <section class="section hero has-bg-image" aria-label="hero"
                style="background-image: url(../../assets/images/hero-bg.jpg)">
                <div class="container">
                    <div class="hero-content">

                        <h1 class="h1 title">
                            Room 03
                        </h1>
                        <br>
                        <ul class="room-ul">
                            <li class="room-li">
                                Room Size -> <span style="color: hsl(249, 95%, 63%);">🏚️ 200 SQ</span>
                            </li>
                            <li class="room-li">
                                Comfotable For -> <span style="color: hsl(249, 95%, 63%);">😊 4 Persons</span>
                            </li>
                            <li class="room-li">
                                Price -><span style="color: hsl(249, 95%, 63%);">💕 150$ / Day</span>
                            </li>
                        </ul>
                        <br>

                        <figure class="hero-banner mobile">
                            <iframe class="w-100" alt="" width="631" height="276"
                                style="border-radius: 10px; box-shadow: 0 0 0 4px #00000033;"
                                src="https://momento360.com/e/u/6954667f00a34b518720eef09dfabfe5?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true"
                                frameborder="0"></iframe>
                        </figure>
                        <br>
                        <div class="wrapper">
                            <a href="#imagesMore" class="btn btn-secondary">
                                <span class="span" style="text-transform: uppercase;">inquire now</span>
                                <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
                            </a>
                        </div>
                    </div>

                    <figure class="hero-banner pc">
                        <iframe class="w-100" alt="" width="631" height="276"
                            style="border-radius: 10px; box-shadow: 0 0 0 4px #00000033;"
                            src="https://momento360.com/e/u/6954667f00a34b518720eef09dfabfe5?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true"
                            frameborder="0"></iframe>
                    </figure>
                </div>
            </section>

            <section class="section imgmore" id="imagesMore">
                <h1 class="h1 title">
                    More Images
                </h1>
                <p>🥰There are More Images to get a clear idea about our room number 03.🥰</p>
                <div class="img">
                    <div class="img-container">
                        <img src="../../assets//images/room3.jpg" alt="">
                    </div>

                    <div class="img-container">
                        <img src="../../assets//images/room3.jpg" alt="">
                    </div>

                    <div class="img-container">
                        <img src="../../assets//images/room3.jpg" alt="">
                    </div>

                    <div class="img-container">
                        <img src="../../assets//images/room3.jpg" alt="">
                    </div>
                </div>
            </section>


        </article>
    </main>

    <!--
        Footer Section
    -->

    <footer class="footer">
        <div class="container">

            <div class="footer-top">

                <div class="footer-brand">
                    <a href="#" class="logo">
                        <img src="../../assets/images/logo.png" alt="" class="logo" width="187" height="40"
                            loading="lazy">
                    </a>
                    <p class="footer-text">
                        We always make our customer
                        happy by providing as many
                        choices as possible
                    </p>

                    <ul class="social-list">
                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>
                    </ul>
                </div>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">
                            About
                        </p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">
                            Features
                        </a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">
                            Room Features
                        </a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">
                            Home
                        </a>
                    </li>

                </ul>

                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title">
                            Company
                        </p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">
                            Partner With Us
                        </a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">
                            FAQ
                        </a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">
                            Blogs
                        </a>
                    </li>


                </ul>

                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title">
                            Support Center
                        </p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">
                            Feedback
                        </a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">
                            Contact Us
                        </a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">
                            Accessibility
                        </a>
                    </li>


                </ul>

                <div class="footer-list">
                    <p class="footer-list-title">
                        Get in Touch
                    </p>

                    <p class="footer-text">
                        Question or feedback? We’d love to hear from you.
                    </p>

                    <form action="#" class="input-wrapper">
                        <input type="email" name="emailAddress" class="input-feild" placeholder="Email Address"
                            autocomplete="off" aria-label="send a message" required>

                        <button type="submit" class="input-btn">
                            <ion-icon name="paper-plane-outline" aria-hidden="true"></ion-icon>
                        </button>
                    </form>
                </div>

            </div>

            <div class="footer-bottom">

                <p class="copyright">
                    Copyright 2023. Made by <a href="https://github.com/SachinUthpala"
                        class="copyright-link">@SachinUthpala</a>
                </p>
            </div>

            <ul class="footer-bottom-list">
                <li>
                    <a href="#" class="footer-bottom-link">Terms and Condition</a>
                </li>

                <li>
                    <a href="#" class="footer-bottom-link">Privacy and Policy</a>
                </li>
            </ul>

        </div>
    </footer>




    <!--
        end of landing page
    -->
    <!--custome js icons-->
    <script src="../../assets/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>