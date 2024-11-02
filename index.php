<?php

session_start();

// connect config file
require_once('./php/config.php');
require_once('./include/sidebar.php');

$show_sql = "SELECT * FROM `register`";

$run_sql_query = mysqli_query($conn, $show_sql);

?>



    <!-- ---
      main content -->
    <main>

    <?php
    
    require_once('./include/nav.php');
    
    ?>

        <!-- ---
          welcome banner -->
        <div class="welcome_banner">
            <div class="welcome_msg">
                <span>Welcome Back</span> <br>
                <span class="user_name">
                    <!-- ---
                     php sesion -->
                    <?php

                    if (isset($_SESSION['email'])) {
                        echo $_SESSION['name'] . ' 👋';
                    } else {
                        header('location:./php/login.php');
                    }

                    ?>
                    <!-- ---
                php sesion -->

                </span>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi doloremque animi quibusdam deserunt accusamus provident quaerat praesentium. Dicta, quidem autem!
                </p>

                <div class="view_profile_button">
                    <a href="#">My Profile</a>
                </div>
            </div>
            <div class="welcomeimage"><img src="./assets/welcome.png" alt="Welcome" class="welcome"></div>
        </div>
        <!-- ---
          welcome banner -->


        <!-- ---
          dashboard page -->
        <div class="dashboard">

            <h3>Dashboard</h3>
            <!-- ---
             card -->
            <div class="value">

                <div class="value_card">
                    <img src="./assets/values/student.png" alt="Students">
                    <div class="value_count">
                        <span>530</span>
                        <p>Total Students</p>
                    </div>
                </div>

                <div class="value_card">
                    <img src="./assets/values/classes.png" alt="Classes">
                    <div class="value_count">
                        <span>5</span>
                        <p>All Classes</p>
                    </div>
                </div>

                <div class="value_card">
                    <img src="./assets/values/result.png" alt="Result">
                    <div class="value_count">
                        <span>76%</span>
                        <p>Result</p>
                    </div>
                </div>

                <div class="value_card">
                    <img src="./assets/values/users.png" alt="Users">
                    <div class="value_count">
                        <span>46</span>
                        <p>Total Users</p>
                    </div>
                </div>

            </div>
            <!-- ---
             card -->
        </div>
        <!-- ---
          dashboard page -->


        <!-- ----
           table -->
        <div class="table_container">
            <table>
                <div class="table_head">
                    <span>All User List</span>
                    <a href="#">See All</a>
                </div>
                <thead>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>User Role</th>
                    <th>Mobile Number</th>
                </thead>

                <?php

                while ($set_data = mysqli_fetch_assoc($run_sql_query)) {

                ?>
                    <tbody>
                        <td>
                            <?php echo $set_data['id']; ?>
                        </td>
                        <td>
                            <?php echo $set_data['fullname']; ?>
                        </td>
                        <td>
                            <?php echo $set_data['email']; ?>
                        </td>
                        <td class="user_role">
                            <p>
                                <?php echo $set_data['user_role']; ?>
                            </p>
                        </td>
                        <td>
                            <?php echo $set_data['contact_number']; ?>
                        </td>
                    </tbody>
                <?php

                }

                ?>

            </table>
        </div>
        <!-- ----
           table -->
    </main>
    <!-- ---
      main content -->

</body>

</html>