<?php

// connect config file
require_once('./config.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- link custom css files -->
    <link rel="stylesheet" href="./../css/style.min.css">
    <link rel="stylesheet" href="./../css/login.css">
    <link rel="stylesheet" href="./../css/register.css">


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
                <div class="login_head">
                    <span>Register now!</span>
                    <p>Fill up the information to register account.</p>
                </div>

                <form action="./submit.php" method="POST" enctype="multipart/form-data">

                    <div class="input_group">

                        <div class="input_box">
                            <label for="fullname">Full Name</label>
                            <div class="input">
                                <input type="text" name="fullname" id="fullname" required>
                                <i class='bx bx-user'></i>
                            </div>
                        </div>
                        <div class="input_box">
                            <label for="email">Email Address</label>
                            <div class="input">
                                <input type="email" name="user_email" id="email" required>
                                <i class='bx bx-envelope'></i>
                            </div>
                        </div>

                        <div class="input_box">
                            <label for="image">Upload Image</label>
                            <div class="input">
                                <input type="file" name="user_image" id="image" required>
                                <i class='bx bx-image'></i>
                            </div>
                        </div>
                        <div class="input_box">
                            <label for="password">Create a Password</label>
                            <div class="input">
                                <input type="password" name="password" id="password" required>
                                <i class='bx bx-lock'></i>
                            </div>
                        </div>

                        <div class="input_grids">
                            <div class="input_box">
                                <label for="gender">Gender</label>
                                <div class="input">
                                    <select name="gender" id="gender" required>
                                        <option selected hidden></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input_box">
                                <label for="user_role">User Role</label>
                                <div class="input">
                                    <select name="user_role" id="user_role" required>
                                        <option selected hidden></option>
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                        <option value="Student">Student</option>
                                        <option value="Super User">Super User</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="phn_input">
                            <label for="contact_number">Contact Number</label>
                            <div class="phone_input">
                                <span class="country_code">+880</span>
                                <input type="text" name="contact_number" id="contact_number" class="phone_number" maxlength="10" required>
                            </div>
                        </div>

                        <div class="continue buton_mt">
                            <button type="submit">Continue to Register</button>
                        </div>
                    </div>

                </form>

                <div class="signup">
                    <span>Already you have an account? <a href="./login.php">Sign In</a></span>
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

    <script>
        document.querySelector('.phone_number').addEventListener('focus', function() {
            document.querySelector('.phone_input').classList.add('focused');
        });

        document.querySelector('.phone_number').addEventListener('blur', function() {
            document.querySelector('.phone_input').classList.remove('focused');
        });
    </script>

</body>

</html>