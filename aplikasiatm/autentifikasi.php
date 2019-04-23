<?php

    include 'tool/koneksi.php';
    
    $no_mesin = $_POST['nomesin'];
    $rekening = $_POST['rekening'];

    $sql = "SELECT rekening FROM nasabah WHERE rekening='$rekening';";
    $que= mysqli_query($sambungan, $sql);
    $cek = mysqli_num_rows($que);

    if ($cek>0) {
        //session
        session_start();
        while ($data=mysqli_fetch_array($que)) {
            //deklarasi session
            $_SESSION['nasabah'] = $data['rekening'];
            $_SESSION['atm'] = $no_mesin;
        }
        //session
        echo
        "
        <script>
            alert('autentifikasi berhasil');
            window.location='loggedin/index.php';
        </script>
        ";
    } else {
        echo
        "
        <script>
            alert('autentifikasi gagal');
            window.location='index.php';
        </script>
        ";
    }
    
?>