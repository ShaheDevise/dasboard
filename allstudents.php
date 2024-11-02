<?php

session_start();

require_once('./php/config.php');
require_once('./include/sidebar.php');

$query = "SELECT * FROM `students`";

$run_que = mysqli_query($conn, $query);

?>

<style>
    .allstudent {
        margin: 2rem auto 2rem auto;
        width: max-content;
        padding: 1rem;
        background: #fff;
    }

    table {
        border-collapse: collapse;
    }

    table th,
    td {
        padding: 1rem;
    }

    table th {
        background: #ddd;
    }

    table td {
        text-align: center;
        padding: 1.5rem 1rem 1.5rem 1rem;
    }

    table tbody tr:nth-of-type(2n) {
        background: rgba(0, 0, 0, 0.060);
    }

    table td.manage a {
        padding: 0.7rem 1rem;
        background: #000;
        color: #fff;
        border-radius: 0.5rem;
        transition: 0.2s ease;
    }

    table td.manage a:is(:hover, :focus-visible) {
        background: #222;
    }
</style>

<main>

    <?php

    require_once('./include/nav.php');

    ?>

    <section class="allstudent">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Class</th>
                    <th>Manage</th>
                </tr>
            </thead>

            <tbody>

                <?php

                while ($alldata = mysqli_fetch_assoc($run_que)) {

                ?>

                    <tr>
                        <td>
                            <?php echo $alldata['id']; ?>
                        </td>
                        <td>
                            <?php echo $alldata['name']; ?>
                        </td>
                        <td>
                            <?php echo $alldata['email']; ?>
                        </td>
                        <td>
                            <?php echo $alldata['gender']; ?>
                        </td>
                        <td>
                            <?php echo $alldata['class']; ?>
                        </td>
                        <td class="manage">
                            <a href="./edit.php?slug=<?php echo $alldata['slug']; ?>" title="Edit <?php echo $alldata['name']; ?>"><i class='bx bx-edit'></i></a>

                            <a href="./php/delete.action.php?slug=<?php echo $alldata['slug']; ?>" title="Delete <?php echo $alldata['name']; ?>"><i class='bx bx-trash'></i></a>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
    </section>

</main>