<?php
// Turn off all error reporting
error_reporting(0);
session_start();

session_decode($_SESSION["userMail"]);
$_SESSION["logOut"] = 1;
header("Location: http://localhost/Villa/");


?>