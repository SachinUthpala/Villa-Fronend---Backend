<?php
//db connection
require_once '../connection.db.php';
//session start
session_start();

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = $_POST['id'];


    if(isset($_FILES['img'])){
        $imgname = $_FILES["img"]['name'];
        $imgSize = $_FILES["img"]['size'];
        $temp_name = $_FILES["img"]["tmp_name"];
        $error = $_FILES["img"]['error'];

        if($error === 0){
            $img_ex = pathinfo($imgname , PATHINFO_EXTENSION);
            $img_ex_cl = strtolower($img_ex);
            $new_img_name = uniqid("Img-",true).'.'.$img_ex_cl;
            $imp_upload_path = "../../UserImg/".$new_img_name;
            move_uploaded_file($temp_name , $imp_upload_path);

            echo $id;

            $query = "UPDATE users SET Img = '$new_img_name' WHERE uid = $id";
            $resultImg = $conn -> query($query); 
        }
    }

    $querys = "UPDATE users SET name = '$name' , email = '$email' , password = '$password' WHERE uid = $id";
    $results = $conn -> query($querys);

        if($results){
            $_SESSION['ProfileUpdate'] = 1;
            header("Location: http://localhost/Villa/ProfileSettings/ProfileSettings.php");
        }
}



?>