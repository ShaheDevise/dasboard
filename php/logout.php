<?php

session_start();

// connect config file
require_once('./config.php');

session_destroy();

header('location:./login.php');

?>