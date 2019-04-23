<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "atm";

    $sambungan = mysqli_connect($server, $username, $password, $database);

    if(!$sambungan){
        echo"<h2>Sambungan gagal</h2>";
    }

?>