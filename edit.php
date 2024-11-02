<?php

session_start();

require_once('./php/config.php');
require_once('./include/sidebar.php');

$slug = $_GET['slug'];

$query = "SELECT * FROM `students` WHERE `slug` = '$slug'";

$run_que = mysqli_query($conn, $query);

$alldata = mysqli_fetch_assoc($run_que);

?>



<!-- ---
      main content -->

<style>
    .pd1 {
        padding: 1rem;
    }

    .add_new_form {
        max-width: 450px;
        border-radius: 0.5rem;
        background: #fff;
        box-shadow: var(--box_shadow_two);
        margin: 2rem auto 2rem auto;
    }

    form .add_new_input_group {
        margin-bottom: 1rem;
    }

    form .add_new_input_group label {
        display: block;
        margin-bottom: 0.5rem;
    }

    form .add_new_input_group input,
    form .add_new_input_group select {
        width: 100%;
        height: 50px;
        border: 1px solid #6b6c6b;
        border-radius: 0.3rem;
        outline: none;
        font-size: 1rem;
        padding: 0 1.5rem;
    }

    form .add_new_input_group select {
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
    }

    .submit_btn {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .submit_btn button {
        padding: 0.7rem 1rem;
        font-size: 1rem;
        border: none;
        outline: none;
        border-radius: 0.3rem;
        background: var(--admin_badge);
        color: #fff;
        cursor: pointer;
        transition: 0.2s ease;
    }

    .submit_btn button:is(:hover, :focus-visible) {
        background: var(--button_bg);
    }
</style>

<main>

    <?php

    require_once('./include/nav.php');

    ?>

    <section class="add_new">
        <div class="add_new_form">
            <div class="ad_new_title pd1">
                <strong>Edit <?php echo $alldata['name']; ?></strong>
            </div>

            <hr>

            <form action="./php/edit.action.php" method="POST" class="pd1">
                <div class="add_newinput_grids">
                    <div class="add_new_input_group">
                        <input type="hidden" name="id" id="name" value="<?php echo $alldata['id']; ?>" required>
                    </div>
                    <div class="add_new_input_group">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" value="<?php echo $alldata['name']; ?>" required>
                    </div>
                    <div class="add_new_input_group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" value="<?php echo $alldata['email']; ?>" required>
                    </div>
                    <div class="add_new_input_group">
                        <label for="gender">Gender</label>
                        <div class="input">
                            <select name="gender" id="gender" required>
                                <option selected hidden></option>
                                <option value="Male" <?php if($alldata['gender'] == 'Male') echo 'selected'; ?> >Male</option>
                                <option value="Female" <?php if($alldata['gender'] == 'Female') echo 'selected'; ?> >Female</option>
                                <option value="Other" <?php if($alldata['gender'] == 'Other') echo 'selected'; ?> >Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="add_new_input_group">
                        <label for="class">Class</label>
                        <div class="input">
                            <select name="class" id="class" required>
                                <option selected hidden></option>
                                <option value="Six" <?php if($alldata['class'] == 'Six') echo 'selected'; ?> >Six</option>
                                <option value="Seven" <?php if($alldata['class'] == 'Seven') echo 'selected'; ?> >Seven</option>
                                <option value="Eight" <?php if($alldata['class'] == 'Eight') echo 'selected'; ?> >Eight</option>
                                <option value="Nine" <?php if($alldata['class'] == 'Nine') echo 'selected'; ?> >Nine</option>
                                <option value="Ten" <?php if($alldata['class'] == 'Ten') echo 'selected'; ?> >Ten</option>
                                <option value="Eleven" <?php if($alldata['class'] == 'Eleven') echo 'selected'; ?> >Eleven</option>
                                <option value="Twelve" <?php if($alldata['class'] == 'Twelve') echo 'selected'; ?> >Twelve</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="submit_btn pd1">
                    <button type="submit">Save & Changes</button>
                </div>
            </form>
        </div>
    </section>


</main>
<!-- ---
      main content -->