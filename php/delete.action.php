<?php

require_once('./config.php');


$slug = $_GET['slug'];

$sql = "DELETE FROM `students` WHERE `slug` = '$slug'";

$run = mysqli_query($conn, $sql);

if($run){
    echo "<script>";
    echo "alert('User Deleted Successfully')";
    echo "</script>";
    header("refresh:0.1;url=./../allstudents.php");
}else{
    echo "<script>";
    echo "alert('Something went wrong')";
    echo "</script>";
}

?>