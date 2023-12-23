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
//to get current date
 $date = date('m/d/Y', time());
 //session start
 session_start();
  // Turn off all error reporting
  error_reporting(0);
//db
require_once './db.configs/connection.db.php';
  
?>

<!--
  -cheacking the person is admin or normal user-
-->
<?php
  $isAdmin = false;
  if(isset($_SESSION['userMail'])){
    $email = $_SESSION['userMail'];
    $adminQuery = "SELECT * FROM users WHERE email = '$email'";
    $adminResult = $conn -> query($adminQuery);

    if($adminResult -> num_rows > 0){
      $adminRow = $adminResult -> fetch_assoc();
      $CheackAdmin = $adminRow['isAdmin'];
      if($CheackAdmin == 1){
        $isAdmin = true;
      }
    }
  }
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
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!--custome css-->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!--
        preload images
    -->
    <link rel="preload" as="image" href="./assets/images/preloader.svg" />
    <!--fonts icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  
  </head>
  <body>

    <!--
        #preloader
    -->
    <div class="preloader" data-preloader>
      <div class="preloader-inner">
        <img
          src="./assets/images/preloader.svg"
          width="50"
          height="50"
          alt=""
        />
      </div>
    </div>

    <!--header section-->
    <header class="header" header-data>
      <div class="container">
        <a href="#" class="logo">
          <img
            src="./assets/images/logo.png"
            alt="logo"
            width="187"
            height="38"
          />
        </a>

        <nav class="navbar" data-navbar>
          <!--navbaar top-->
          <div class="navbar-top">
            <a href="#" class="logo">
              <img
                src="./assets/images/logo.png"
                alt="logo"
                width="187"
                height="38"
              />
            </a>

            <button
              class="nav-toggle-btn"
              aria-label="close menu"
              data-nav-toggler
              onclick="closeMenu()"
            >
              <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>
          <!--menu icons-->
          <ul class="navbar-list">
            <li class="navbar-item">
              <a href="#" class="navbar-link active">Home</a>
            </li>
            <li class="navbar-item">
              <a href="./Rooms/Room.php" class="navbar-link">Rooms</a>
            </li>
            <li class="navbar-item">
              <a href="./Gallary/Gallary.php" class="navbar-link">Gallary</a>
            </li>
            <li class="navbar-item">
              <a href="./About/About.php" class="navbar-link">About</a>
            </li>
            <li class="navbar-item">
              <a href="./Contact/ContactUs.php" class="navbar-link">Contact</a>
            </li>
            <li class="navbar-item" style="display: <?php if($isAdmin == false){echo 'none';}else if($isAdmin == true) {echo 'block';} ?>;" onclick="openAdmin()" >
              <a href="#" class="navbar-link" onlicik="openAdmin()">Admin</a>
            </li>
          </ul>
          <!--header action-->
          <div class="header-action" style="display:<?php if($_SESSION['userMail'] != null){ echo 'none';} else { echo 'block';} ?>;">
            <a href="./Registration/Registration.php" class="btn btn-primary">LogIn</a>
          </div>
          <img src="./assets/images/k.jpg" width="50px" height="50px" style="border-radius: 100%;cursor:pointer;display: <?php if($_SESSION['userMail'] != null){ echo 'block';} else { echo 'none';} ?>;" alt="">
          <span style="cursor: pointer;padding-left:20px;font-size:27px;display: <?php if($_SESSION['userMail'] != null){ echo 'block';} else { echo 'none';} ?>;" class="material-symbols-outlined" onclick="signout()">power_settings_new</span>
        </nav>

        <button
          class="nav-toggle-btn"
          aria-label="open menu"
          onclick="openMenu()"
        >
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
        <section
          class="section hero has-bg-image"
          aria-label="hero"
          style="background-image: url(./assets/images/hero-bg.jpg)"
        >
          <div class="container">
            <div class="hero-content">
              <p class="hero-subtitle">
                Explore Sri Lanka 🌎
              </p>

              <h1 class="h1 title hero-title">
                You Lookig a place to Stay? Join with us
              </h1>

              <p class="hero-text">
                We always make our customer happy by providing as many choices
                as possible
              </p>

              <div class="wrapper">
                <a href="#" class="btn btn-secondary">
                  <span class="span">Find Now</span>
                  <ion-icon
                    name="chevron-forward"
                    aria-hidden="true"
                  ></ion-icon>
                </a>

                <button class="hero-btn">
                  <div class="btn-img">
                    <img
                      src="./assets/images/hero-button-img.jpg"
                      alt=""
                      width="100"
                      height="100"
                      class="img-cover"
                    />
                    <ion-icon name="play" aria-hidden="true"></ion-icon>
                  </div>

                  <p class="text">Watch our Story</p>
                </button>
              </div>
            </div>

            <figure class="hero-banner">
              <img
                src="./assets/images/hero-banner.png"
                class="w-100"
                alt=""
                width="631"
                height="735"
              />
            </figure>
          </div>
        </section>

        <!--
                services
            -->
        <section class="section service">
          <div class="container">
            <div class="title-wrapper">
              <p class="section-subtitle">What We Serve</p>
              <h2 class="h2 title title-section">Top Values For You</h2>
              <p class="section-text">
                Try a variety of benefits when using our villa service.
              </p>
            </div>

            <div class="service-card">
              <div class="icon-card">
                <img
                  src="./assets/images/service-icon-1.svg"
                  width="60px"
                  height="60px"
                  loading="lazy"
                  alt=""
                />
              </div>

              <h3 class="h3 title card-title">3 Bed-Room Villa</h3>
              <p class="card-text">
                Total 460+ living area with all facilities.
              </p>
            </div>

            <div class="service-card">
              <div class="icon-card">
                <img
                  src="./assets/images/service-icon-2.svg"
                  width="60px"
                  height="60px"
                  loading="lazy"
                  alt=""
                />
              </div>

              <h3 class="h3 title card-title">Memorable Vacation</h3>
              <p class="card-text">
                TBest way to spen your vaction.
              </p>
            </div>

            <div class="service-card">
              <div class="icon-card">
                <img
                  src="./assets/images/service-icon-3.svg"
                  width="60px"
                  height="60px"
                  loading="lazy"
                  alt=""
                />
              </div>

              <h3 class="h3 title card-title">Easy Booking</h3>
              <p class="card-text">
                With an easy and fast ticket purchase process.
              </p>
            </div>
          </div>
        </section>

        <!--
            Experience
        -->

        <section class="section exp" area-lable="Experience">
            <div class="container">
                <div class="exp-content">
                    <p class="section-subtitle">
                        Our Experience
                    </p>
                
                    <h2 class="h2 title section-title">
                        With Our Experience We Will Serve You
                    </h2>
                
                    <p class="section-text">
                        Since we first opened we have always prioritized the convenience of our users by providing low prices and with a
                        easy
                        process.
                    </p>
                
                    <ul class="exp-list">
                        <li class="exp-item">
                            <h3 class="h3 title item-title">
                                20
                            </h3>
                
                            <p class="item-text">
                                Years <br>
                                Experience
                            </p>
                        </li>
                        <li class="exp-item">
                            <h3 class="h3 title item-title">
                                3+
                            </h3>
                
                            <p class="item-text">
                                Comfotable <br>
                                Bed Rooms
                            </p>
                        </li>
                        <li class="exp-item">
                            <h3 class="h3 title item-title">
                                50 sq+
                            </h3>
                
                            <p class="item-text">
                                Mind-relaxing <br>
                                Garden
                            </p>
                        </li>
                    </ul>
                </div>
                
                <figure class="exp-banner">
                    <img src="./assets/images/experience-banner.png" alt="" class="w-100" width="550" height="660">
                    <img src="./assets/images/exp-shape.svg" width="75" height="
                    109" loading="lazy" alt="" class="exp-shape">
                </figure>
            </div>
        </section>


        <!--
            room fectures
        -->

        <section class="section service">
            <div class="container">
                <div class="title-wrapper">
                    <p class="section-subtitle">Feactures of our room</p>
                    <h2 class="h2 title title-section">Best Living For You</h2>
                    <p class="section-text">
                        Try a variety of benefits when using our villa service.
                    </p>
                </div>
        
                <div class="service-card">
                    <div class="icon-card">
                        <img src="./assets/images/air-conditioning.webp" width="60px" height="60px" loading="lazy" alt="" />
                    </div>
        
                    <h3 class="h3 title card-title">Air Conditioners</h3>
                    <p class="card-text">
                        24/7 unlimited air air-conditioning.
                    </p>
                </div>
        
                <div class="service-card">
                    <div class="icon-card">
                        <img src="./assets/images/bath.webp" width="60px" height="60px" loading="lazy" alt="" />
                    </div>
        
                    <h3 class="h3 title card-title">Hot water</h3>
                    <p class="card-text">
                        Our Rooms are included hot water baths.
                    </p>
                </div>
        
                <div class="service-card">
                    <div class="icon-card">
                        <img src="./assets/images/television.webp" width="60px" height="60px" loading="lazy" alt="" />
                    </div>
        
                    <h3 class="h3 title card-title">Television</h3>
                    <p class="card-text">
                        International TV service with 50+ channels.
                    </p>
                </div>

                <div class="service-card">
                    <div class="icon-card">
                        <img src="./assets/images/safe.webp" width="60px" height="60px" loading="lazy" alt="" />
                    </div>
                
                    <h3 class="h3 title card-title">Safe Locker</h3>
                    <p class="card-text">
                        Protect your personal things in our locker.
                    </p>
                </div>

                <div class="service-card">
                    <div class="icon-card">
                        <img src="./assets/images/washing-machine-1.webp" width="60px" height="60px" loading="lazy" alt="" />
                    </div>
                
                    <h3 class="h3 title card-title">Washing Mashine</h3>
                    <p class="card-text">
                        Wash and Dry your own cloths.
                    </p>
                </div>
            </div>
        </section>


        <!--
            I alreay skipping that destination part because I dont need it
        -->

        <!--
            cta = call to action 
        -->

        <section class="section cta">
            <div class="container">
                <div class="cta-card has-bg-image" style="background-image: url(./assets/images/cta-bg.jpg);">
                    <h2 class="h2 title section-title">
                        Prepare Yourself & Let’s Explore The Beauty Of The World
                        <img src="./assets/images/title-icon.svg" width="36" height="36" loading="lazy" class="img" alt="">
                    </h2>
                    <p class="section-text">
                        We have many special offers especially for you.
                    </p>
                    <a href="#" class="btn btn-primary">Get Started</a>
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
                        <img src="./assets/images/logo.png" alt="" 
                        class="logo" width="187" height="40" loading="lazy">
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

                <ul class="footer-list"a
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
                        <a href="#"  class="footer-link">
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
                        <input type="email" name="emailAddress"  class="input-feild"
                        placeholder="Email Address" autocomplete="off" aria-label = "send a message" required>

                        <button type="submit" class="input-btn">
                            <ion-icon name="paper-plane-outline" aria-hidden="true"></ion-icon>
                        </button>
                    </form>
                </div>

            </div>

            <div class="footer-bottom">

                <p class="copyright">
                    Copyright 2023. Made by <a href="https://github.com/SachinUthpala" class="copyright-link">@SachinUthpala</a>
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
    <script src="./assets/js/script.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <!--
      sweet alert
    -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--
      email already esist error and sucess massage
    -->
    <?php
    if($_SESSION['Mail_EXSIST'] != null){
        echo '<script>Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Email Already Exsist!",
          });</script>';

          $_SESSION['Mail_EXSIST'] = null;
    }

    if($_SESSION['SucessSignUp'] != null){
      echo '<script>Swal.fire({
        title: "Sucessfully Registed!",
        text: "Sucessfull",
        icon: "success"
      });</script>';
      $_SESSION['SucessSignUp'] = null;
     }

     if($_SESSION['logOut'] != null){
      echo '<script>Swal.fire({
        title: "Sucessfully Sign Out!",
        text: "Sucessfull",
        icon: "success"
      });</script>';
      $_SESSION['logOut'] = null;
     }

     if($_SESSION["loginSucess"] != null){
      echo '<script>Swal.fire({
        title: "Sucessfully Log In!",
        text: "Sucessfull",
        icon: "success"
      });</script>';
      $_SESSION["loginSucess"] = null;
     }

     if($_SESSION["worngPassword"] != null){
      echo '<script>Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Wrong Password!",
          });</script>';
      $_SESSION["worngPassword"] = null;
     }

     if($_SESSION["mailNotExsist"] != null){
      echo '<script>Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Email not exsist. Sign Up Now !",
          });</script>';
      $_SESSION["mailNotExsist"] = null;
     }
      
    ?>

    <!--
      scripts for sweet alert
    -->
    <script>
      function openAdmin(){
        Swal.fire({
          title: "Are you sure?",
          text: "Do you want to switch Admin Dashbord",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, Switch Now!"
        }).then((result) => {
          if (result.isConfirmed) {
            location.href="./Admin/Admin.html";
          }
        });
      }

      function signout(){
        Swal.fire({
          title: "Are you sure?",
          text: "Do you want to Exsit",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, Logout Now!"
        }).then((result) => {
          if (result.isConfirmed) {
            location.href="./db.configs/SignOut/SignOut.php";
          }
        });
      }
    </script>
  </body>
</html>
