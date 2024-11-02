<?php

require_once('./config.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $setid = $_POST['id'];
    $setname = $_POST['name'];
    $setemail = $_POST['email'];
    $setgender = $_POST['gender'];
    $setclass = $_POST['class'];

    $update = "UPDATE `students` SET `name` = '$setname', `email` = '$setemail', `gender` = '$setgender', `class` =  '$setclass' WHERE `id` = '$setid'";

    $run_insert = mysqli_query($conn, $update);

    if ($run_insert) {
        echo "<script>";
        echo "alert('User Updated Successfully')";
        echo "</script>";
        header("refresh:0.1;url=./../allstudents.php");
    }
}
