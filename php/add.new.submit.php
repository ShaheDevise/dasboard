<?php

require_once('./config.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $setname = $_POST['name'];
    $setemail = $_POST['email'];
    $setgender = $_POST['gender'];
    $setclass = $_POST['class'];

    // create slug
    $set_chr = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; // slug character

    $set_slug = rand() . '-' . substr(str_shuffle($set_chr), 0, 20);

    $insert = "INSERT INTO `students` (`name`, `email`, `gender`, `class`, `slug`) VALUES ('$setname', '$setemail', '$setgender', '$setclass', '$set_slug')";

    $run_insert = mysqli_query($conn, $insert);

    if ($run_insert) {
        echo "<script>";
        echo "alert('Data Inserted Successfully')";
        echo "</script>";
        header("refresh:0.1;url=./../allstudents.php");
    }
}
