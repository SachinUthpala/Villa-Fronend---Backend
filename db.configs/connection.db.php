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

$hostName = "localhost";
$userName = "root";
$dbPass = "";
$dbName = "villa";

$conn = mysqli_connect($hostName,$userName,$dbPass,$dbName);

if(!$conn){
    die("Something Went Worng");
}else{
    echo "connection sucessfull";
}

?>