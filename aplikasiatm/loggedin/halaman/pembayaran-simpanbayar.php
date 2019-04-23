<?php

    $jumlahtagihan = $_GET['jumlahtagihan'];
    $jumlah_uang_nasabah = $_GET['saldo'];
    $kodeperusahaan = $_GET['kodeperusahaan'];
    $notagihan = $_GET['notagihan'];
    $nama = $_GET['nama'];
    $atm = $_SESSION['atm'];
    $rekening = $_SESSION['nasabah'];
    $tgl = date("y-m-d");
    $waktu = date("H:i:s");

    $saldo = (float)$jumlah_uang_nasabah-(float)$jumlahtagihan;

    $sql = "SELECT no_transaksi FROM tagihan WHERE no_tagihan = $notagihan;";
    $que = mysqli_query($sambungan, $sql); //menjalankan query

    while($data=mysqli_fetch_array($que)){
        $no_transaksi = $data['no_transaksi'];
    }
    echo"$no_transaksi";

    $sql1 = "INSERT INTO membayar VALUES('$tgl', '$waktu', '$no_transaksi', '$rekening', '$atm', '$notagihan');";
    $que1 = mysqli_query($sambungan, $sql1); //menjalankan query

    $sql2 = "UPDATE nasabah SET saldo = '$saldo' WHERE rekening = $rekening";
    $que2 = mysqli_query($sambungan, $sql2); //menjalankan query

    $sql3 = "UPDATE tagihan SET status_pembayaran = 'lunas' WHERE no_tagihan = $notagihan";
    $que3 = mysqli_query($sambungan, $sql3); //menjalankan query

    if ($que1 && $que2 && $que3) {
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