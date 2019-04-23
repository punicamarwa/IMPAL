<?php

    $value = $_GET['value'];
    $jumlah_uang_nasabah = $_GET['saldo'];
    $jumlah_uang_atm = $_GET['uangatm'];
    $atm = $_SESSION['atm'];
    $rekening = $_SESSION['nasabah'];
    $tgl = date("y-m-d");
    $waktu = date("H:i:s");

    $saldo = (float)$jumlah_uang_nasabah-(float)$value;
    $uangatm = (float)$jumlah_uang_atm-(float)$value;

    $sql = "SELECT no_transaksi FROM transaksi WHERE no_transaksi = (SELECT MAX(no_transaksi) FROM transaksi);";
    $que = mysqli_query($sambungan, $sql); //menjalankan query

    while($data=mysqli_fetch_array($que)){
        $no_transaksi = $data['no_transaksi'];
    }

    $sql1 = "INSERT INTO penarikan_uang VALUES('$value', '$no_transaksi', '$rekening');";
    $que1 = mysqli_query($sambungan, $sql1); //menjalankan query

    $sql2 = "INSERT INTO menarik_uang VALUES('$tgl', '$waktu', '$no_transaksi', '$atm', '$rekening');";
    $que2 = mysqli_query($sambungan, $sql2); //menjalankan query

    $sql3 = "UPDATE nasabah SET saldo = '$saldo' WHERE rekening = $rekening;";
    $que3 = mysqli_query($sambungan, $sql3); //menjalankan query

    $sql4 = "UPDATE atm SET jumlah_uang = '$uangatm' WHERE no_mesin = $atm;";
    $que4 = mysqli_query($sambungan, $sql4); //menjalankan query

    if ($que1 && $que2 && $que3 && $que4) {
        echo
        "
        <script>
            window.location='?hal=transaksi-sukses';
        </script>
        ";
    }
    else {
        echo
        "
        <script>
            window.location='?hal=transaksi-gagal';
        </script>
        ";
    }

?>