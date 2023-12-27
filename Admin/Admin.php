<!DOCTYPE html>
<html lang="en">

<!--
    getting data from users
-->
<?php
//db connection
require_once '../db.configs/connection.db.php';
//starting sesstions
session_start();

$userQuery = "SELECT * FROM users";
$userResult = $conn -> query($userQuery);



?>


<!--
    getting data from massages
-->
<?php

$massageQuery = "SELECT * FROM usermassages";
$MassageResult = $conn -> query($massageQuery); 



?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">Brand Name</span>
                    </a>
                </li>

                <li>
                    <a href="#" onclick="openHome()">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon" onclick="openUsers()">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon" onclick="openMassages()">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#" onclick="closeAdmin()">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main" id="Home">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php $totalUsers = $userResult -> num_rows; echo $totalUsers;?></div>
                        <div class="cardName">Users</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Massages</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">7842</div>
                        <div class="cardName">Reviews</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Massages</h2>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>UserMail</td>
                                <td>Massage</td>
                                <td>Submited Date</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>

                        <?php 
                            while($massageRow = mysqli_fetch_assoc($MassageResult)){
                        ?>
                            <tr>
                                <td><?php echo $massageRow['UserName']; ?></td>
                                <td><?php echo $massageRow['Massage']; ?></td>
                                <td><?php  echo $massageRow['SubmittedDate']; ?></td>
                                <td><span class="status <?php if($massageRow['read'] == 0){echo 'return';}else{echo 'delivered';} ?>"><?php if($massageRow['read'] == 0){ echo "UnRead"; } else { echo "Readed"; }?></span></td>
                            </tr>

                            <?php
                            }
                            ?>
                            
                            

                            
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>

                    <table>
                        <?php
                            while($userRow = mysqli_fetch_assoc($userResult)){
                        ?>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="<?php echo "../UserImg/".$userRow['Img']; ?>" alt=""></div>
                            </td>
                            <td>
                                <h4><?php echo $userRow['name']; ?> <br> <span><?php echo $userRow['signup_date'] ?></span></h4>
                            </td>
                        </tr>

                        <?php 
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>

        <!--
            main 2
        -->
        <div class="main main2" id="Users" style="display: none;">
            <div class="topbar">
                <div class="toggle" id="toggle2" onclick="navs2()">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
            
                <div class="user" >
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>
            <h1>Users</h1>
            <!--
                cards
            -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>
            
                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>
            
                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Dailsy Logins</div>
                    </div>
            
                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>
            
                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Daily Sign Ups</div>
                    </div>
            
                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>
            
            </div>
        </div>

        <!--
            main 3
        -->
        <div class="main main3" id="Msg" style="display: none;">
            <div class="topbar">
                <div class="toggle" id="toggle2" onclick="navs3()">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
        
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
        
                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>
            <h1>Massages</h1>
            <div class="cardBox">
                
            
                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Read Massages</div>
                    </div>
            
                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Unread Massages</div>
                    </div>
                
                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">222</div>
                        <div class="cardName">Total Massages</div>
                    </div>
                
                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>
            
            </div>
        </div>

    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!--
          sweet alert
        -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!--
          scripts for sweet alert
        -->

    <script>
        function closeAdmin() {
                Swal.fire({
                    title: "Are you sure?",
                    text: "Do you want to sign out",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, Switch Now!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.href = "../index.php";
                    }
                });
            }
    </script>    
</body>

</html>