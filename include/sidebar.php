
<!DOCTYPE html>
<html lang="en">
<title>Dashboard || CodeChums</title>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeChums || Dashboard</title>

    <!-- link custom css files -->
    <link rel="stylesheet" href="./css/style.min.css">


    <!-- favicon image -->
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">

    <!-- boxicons cdn -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

<!-- ---
     sidebar start -->
     <section class="sidebar">
        <aside>
            <!-- --
             user -->
            <div class="user">
                <img src="./user/user.png" alt="Profile">
                <div class="user_about">
                    <span>

                        <!-- ---
                     php sesion -->
                        <?php

                        if (isset($_SESSION['email'])) {
                            echo $_SESSION['name'];
                        } else {
                            header('location:./php/login.php');
                        }

                        ?>
                        <!-- ---
                     php sesion -->

                        <i class='bx bxs-badge-check'></i>
                    </span>
                    <p>
                        <!-- ---
                     php sesion -->
                        <?php

                        if (isset($_SESSION['email'])) {
                            echo $_SESSION['role'];
                        } else {
                            header('location:./php/login.php');
                        }

                        ?>
                        <!-- ---
                    php sesion -->
                    </p>
                </div>
            </div>
            <!-- --
             user -->


            <!-- ---
              list items -->
            <div class="menu_items">
                <ul class="item_content">
                    <li>
                        <a href="index.php" class="icon_flex active_link"><i class='bx bx-store'></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="./allstudents.php" class="icon_flex"><i class='bx bx-user'></i> All Students</a>
                    </li>
                    <li>
                        <a href="./add_student.php" class="icon_flex"><i class='bx bx-user-plus'></i> Add New Student</a>
                    </li>
                    <li>
                        <a href="classes.php" class="icon_flex"><i class='bx bx-calendar-edit'></i> Classes</a>
                    </li>
                    <li>
                        <a href="results.php" class="icon_flex"><i class='bx bx-notepad'></i> Results</a>
                    </li>
                    <li>
                        <a href="payments.php" class="icon_flex"><i class='bx bx-credit-card'></i> Fees/Payments</a>
                    </li>
                    <li>
                        <a href="reports.php" class="icon_flex"><i class='bx bx-printer'></i> Reports</a>
                    </li>
                    <li>
                        <a href="user.manage.php" class="icon_flex"><i class='bx bx-male-female'></i> User Managment</a>
                    </li>
                </ul>
            </div>
            <!-- ---
              list items -->

            <!-- ---
               logout -->
            <div class="logout_setion">
                <ul>
                    <li>
                        <a href="./php/logout.php" class="icon_flex"><i class='bx bx-log-out'></i> Logout</a>
                    </li>
                </ul>
            </div>
            <!-- ---
               logout -->

        </aside>
    </section>
    <!-- ---
     sidebar start -->


