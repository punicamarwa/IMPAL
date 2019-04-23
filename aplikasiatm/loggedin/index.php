

<?php

    //$_SESSION
    session_start();
    if (empty($_SESSION['atm']) || empty($_SESSION['nasabah'])) {//belum login
        include '../';
    } 
    else {
        include 'first.php';
    }
    

?>