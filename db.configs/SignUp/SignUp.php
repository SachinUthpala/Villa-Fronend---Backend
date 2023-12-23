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

//getting connections
require_once '../connection.db.php';
session_start();
//session start

if(isset($_POST["register"])){
    //current date
    $date = date('m/d/Y', time());
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    echo $date ." \n ".$name." \n ".$email." \n ".$password;

    //cheacking if mail always avilable in database
    $mailQuery = "SELECT * FROM users WHERE email = '$email'";
    $mailResult = $conn -> query($mailQuery);

    if($mailResult->num_rows>0){
        $_SESSION['Mail_EXSIST'] = 1;
        header("Location: http://localhost/Villa/");
    }else{
        $signUpQuery = "INSERT INTO users(name, email, password, signup_date) VALUES ('$name' , '$email' , '$password' , '$date')";
        $result = $conn -> query($signUpQuery);
        $_SESSION['SucessSignUp'] = 1;
        $_SESSION['userMail'] = $email;
        header("Location: http://localhost/Villa/");
    }


}

?>