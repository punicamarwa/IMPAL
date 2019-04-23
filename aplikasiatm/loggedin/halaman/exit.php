<?php

    session_start();
    unset($_SESSION['atm']);
    unset($_SESSION['nasabah']);
    session_unset();
    session_destroy();
    header('location:../index.php');

?>