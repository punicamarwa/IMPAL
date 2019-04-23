<?php

    $rektujuan = $_POST['rektujuan'];
    $value = $_POST['value'];
    $atm = $_SESSION['atm'];
    $rekening = $_SESSION['nasabah'];

    $tgl = date("y-m-d");

    $sql = "SELECT rekening, saldo FROM nasabah WHERE rekening = $rektujuan;";
    $que = mysqli_query($sambungan, $sql); //menjalankan query
    $cek = mysqli_num_rows($que);
    while($data=mysqli_fetch_array($que)){
        $jumlah_uang_penerima = $data['saldo'];
    }

    $sql1 = "SELECT saldo FROM nasabah WHERE rekening = $rekening;";
    $que1 = mysqli_query($sambungan, $sql1); //menjalankan query
    while($data=mysqli_fetch_array($que1)){
        $jumlah_uang_nasabah = $data['saldo'];
    }

    if ((float)$jumlah_uang_nasabah < (float)$value || $cek==0 || $rekening==$rektujuan ) {
        echo
        "
        <script>
            window.location='?hal=transaksi-gagal';
        </script>
        ";
    }
    else{
        $sql2 = "INSERT INTO transaksi VALUES('','transfer', '$rekening', '$tgl');";
        $que2 = mysqli_query($sambungan, $sql2); //menjalankan query

        if ($que2) {
            echo
            "
            <script>
                window.location='?hal=transfer-simpankirim&value=$value&saldo=$jumlah_uang_nasabah&rektujuan=$rektujuan&saldopenerima=$jumlah_uang_penerima';
            </script>
            ";
        }
    }

?>