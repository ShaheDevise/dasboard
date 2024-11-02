<?php

session_start();

// connect config file
require_once('./config.php');

if(isset($_POST['submit'])){

    $email = $_POST['user_email'];
    $password = md5($_POST['user_password']);

    $sql = "SELECT * FROM `register` WHERE `email`='$email' AND `password`='$password'";
    
    $sql_query = mysqli_query($conn, $sql);

    $data = mysqli_fetch_array($sql_query);

    // checking match
    if($email==$data['email'] && $password==$data['password']){
        $_SESSION['email']=$data['email'];
        $_SESSION['name']=$data['fullname'];
        $_SESSION['role']=$data['user_role'];
    }else{
        echo "<script>";
        echo "alert('Email or password wrong.')";
        echo "</script>";
        header('refresh:0.1;url=./login.php');

    }

}

if(isset($_SESSION['email'])){
    header('location:./../index.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- link custom css files -->
    <link rel="stylesheet" href="./../css/style.min.css">
    <link rel="stylesheet" href="./../css/login.css">


    <!-- favicon image -->
    <link rel="shortcut icon" href="./../assets/favicon.png" type="image/x-icon">

    <!-- boxicons cdn -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <!-- --
 login section -->
    <section class="login_container">
        <!-- ---
         login form -->
        <div class="login">
            <div class="login_form_container">
                <div class="login_logo">
                    <img src="./../assets/favicon.png" alt="CodeChums" width="50">
                </div>
                <div class="login_head">
                    <span>Login to your account.</span>
                    <p>Enter you email address and password to log in.</p>
                </div>

                <form action="./login.php" method="POST">
                    <div class="input_group">
                        <div class="input_box">
                            <label for="email">Email Address</label>
                            <div class="input">
                                <input type="email" name="user_email" id="email" required>
                                <i class='bx bx-envelope'></i>
                            </div>
                        </div>

                        <div class="input_box">
                            <label for="password">Password</label>
                            <div class="input">
                                <input type="password" name="user_password" id="password" required>
                                <i class='bx bx-lock'></i>
                            </div>
                        </div>

                        <div class="rmbr_forgot">
                            <div class="rmbr">
                                <label>
                                    <input type="checkbox" required>
                                    Remebmer
                                </label>
                            </div>

                            <div class="forgot_pass">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>

                        <div class="continue">
                            <button type="submit" name="submit">Continue</button>
                        </div>
                    </div>
                </form>

                <div class="signup">
                    <span>Don't you have an account? <a href="./register.php">Sign Up</a></span>
                </div>
            </div>

        </div>
        <!-- ---
         login form -->

        <!-- ---
          dashboard image -->
        <div class="db_preview">
            <img src="./../assets/login_dashboard.png" alt="Dahsboard">
        </div>
        <!-- ---
          dashboard image -->


    </section>
    <!-- --
 login section -->

</body>

</html>