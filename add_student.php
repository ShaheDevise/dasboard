<?php

session_start();

require_once('./php/config.php');
require_once('./include/sidebar.php');

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

    form .add_new_input_group{
        margin-bottom: 1rem;
    }

    form .add_new_input_group label{
        display: block;
        margin-bottom: 0.5rem;
    }

    form .add_new_input_group input,
    form .add_new_input_group select{
        width: 100%;
        height: 50px;
        border: 1px solid #6b6c6b;
        border-radius: 0.3rem;
        outline: none;
        font-size: 1rem;
        padding: 0 1.5rem;
    }

    form .add_new_input_group select{
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
    }

    .submit_btn {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .submit_btn button{
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

    .submit_btn button:is(:hover, :focus-visible){
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
                <strong>Add New Student</strong>
            </div>

            <hr>

            <form action="./php/add.new.submit.php" method="POST" class="pd1">
                <div class="add_newinput_grids">
                    <div class="add_new_input_group">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div class="add_new_input_group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="add_new_input_group">
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
                    <div class="add_new_input_group">
                        <label for="class">Class</label>
                        <div class="input">
                            <select name="class" id="class" required>
                                <option selected hidden></option>
                                <option value="Six">Six</option>
                                <option value="Seven">Seven</option>
                                <option value="Eight">Eight</option>
                                <option value="Nine">Nine</option>
                                <option value="Ten">Ten</option>
                                <option value="Eleven">Eleven</option>
                                <option value="Twelve">Twelve</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="submit_btn pd1">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </section>


</main>
<!-- ---
      main content -->