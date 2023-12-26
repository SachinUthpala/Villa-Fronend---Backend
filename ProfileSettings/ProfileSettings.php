<?php

//db connection
require_once '../db.configs/connection.db.php';

//to get current date
 $date = date('m/d/Y', time());
 //session start
 session_start();
  // Turn off all error reporting
  error_reporting(0);


  if($_SESSION['userMail'] != null){
    $mail = $_SESSION['userMail'];
    $profileQuery = "SELECT * FROM users WHERE email = '$mail'";
    $result = $conn -> query($profileQuery);
    
    if($result -> num_rows > 0){
      $profileRow = $result -> fetch_assoc();
    }

  }
?>

<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Profile Settings</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section class="container">
      <header>Profile Settings</header>
      <div class="divs">
        <img src="./sachin.png" alt="">
        <h1>: Sachin</h1>
        <hr>
      </div>
      <form action="../db.configs/ProfileSettings/ProfileSettings.php" class="form" method="post" enctype="multipart/form-data">
        <div class="input-box">
          <label>Name</label>
          <input type="text" name="name"  required value="<?php if($_SESSION['userMail'] != null) { echo $profileRow['name']; } else {} ?>" />
        </div>

        <div class="input-box">
          <label>Name</label>
          <input type="hidden" name="id"  required value="<?php if($_SESSION['userMail'] != null) { echo $profileRow['uid']; } else {} ?>" />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="email" name="email"  required value="<?php if($_SESSION['userMail'] != null){ echo $profileRow['email']; } else{}  ?>" />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Password</label>
            <input type="password" name="password"  required value="<?php if($_SESSION['userMail'] != null){ echo $profileRow['password']; } else{}  ?>" />
          </div>
        </div>

        <div class="column">
          <div class="input-box">
            <label>Profile Img</label>
            <input type="file"  name="img" />
          </div>
        </div>
        <button type="submit" name="submit">Submit</button>
        <button onclick="location.href='../index.php'">Cancel</button>
      </form>
    </section>
  </body>
</html>
