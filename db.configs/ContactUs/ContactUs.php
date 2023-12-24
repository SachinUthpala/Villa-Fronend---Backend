<?php

//db connection
require_once '../connection.db.php';
//session  start
session_start();

if(isset($_POST["massage"])){
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $msg = $_POST['msg'];
    $date = date('m/d/Y', time());

    $contactQuery = "INSERT INTO usermassages (UserMail , UserName ,Massage , SubmittedDate ) 
    VALUES ('$name','$mail','$msg','$date')";

    $result = $conn -> query($contactQuery);
    if($result){
        $_SESSION['ContactSucess'] = 1;
        header("Location: http://localhost/Villa/Contact/ContactUs.php");
    }else{
        header("Location: http://localhost/Villa/Contact/ContactUs.php");
    }
}

?>