<?php

// connect config file
require_once('./config.php');

// catch input
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST['fullname'];
    $email = $_POST['user_email'];
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];
    $user_role = $_POST['user_role'];
    $contact_number = $_POST['contact_number'];
    $user_img = $_FILES['user_image'];
    $image_name = 'cc'.rand().'_'.'n'.'.'.pathinfo($user_img['name'],PATHINFO_EXTENSION);

    $insert_sql = "INSERT INTO `register` (`fullname`, `email`, `password`, `gender`, `user_role`, `contact_number`, `user_image`) VALUES ('$fullname', '$email', '$password', '$gender', '$user_role', '$contact_number', '$image_name')";

    $run_sql = mysqli_query($conn, $insert_sql);

    if ($run_sql) {
        echo "<script>";
        echo "alert('Register has been Successfully.')";
        echo "</script>";
        move_uploaded_file($user_img['tmp_name'],'./../user/'.$image_name);
        header('refresh:0.2;url=./login.php');
    }else{
        echo "Something went wrong";
    }
}
