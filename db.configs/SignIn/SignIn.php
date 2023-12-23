<?php
require_once '../connection.db.php';
session_start();

if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo $email;
    echo $password;

    $cheackQuery = "SELECT * FROM users WHERE email = '$email'";
    $cheackResult = $conn -> query($cheackQuery);

    if($cheackResult -> num_rows > 0){
        $rowData = $cheackResult -> fetch_assoc();
        echo $rowData['password'];

        if($password == $rowData['password']){
            $_SESSION['userMail'] = $email;
            $_SESSION["loginSucess"] = 1;
            header("Location: http://localhost/Villa/");
        }else{
            $_SESSION["worngPassword"] = 1;
            header("Location: http://localhost/Villa/");
        }
    }else{
        $_SESSION["mailNotExsist"] = 1;
        header("Location: http://localhost/Villa/");
    }
}



?>