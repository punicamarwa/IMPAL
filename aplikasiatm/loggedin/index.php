

<?php

    //$_SESSION
    session_start();
    if (empty($_SESSION['atm']) || empty($_SESSION['nasabah'])) {//belum login
        header('Location: ../index.php'); 
    } 
    else {
        include 'first.php';
    }
    

?>