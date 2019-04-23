<?php

    error_reporting(0);
    $hal=$_GET['hal'];

    if (empty($hal)) {
        include 'halaman/pin.php';
    } else {
        include 'halaman/'.$hal.'.php';
    }
    

?>