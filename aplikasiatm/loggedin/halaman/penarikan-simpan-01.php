<?php
    $value = $_GET['value'];
    $atm = $_SESSION['atm'];
    $rekening = $_SESSION['nasabah'];
    $tgl = date("y-m-d");
    //cek isi ATM
    $sql = "SELECT jumlah_uang FROM atm WHERE no_mesin = $atm;";
    $que = mysqli_query($sambungan, $sql); //menjalankan query
    while($data=mysqli_fetch_array($que)){
        $jumlah_uang_atm = $data['jumlah_uang'];
    }

    $sql1 = "SELECT saldo FROM nasabah WHERE rekening = $rekening;";
    $que1 = mysqli_query($sambungan, $sql1); //menjalankan query
    while($data=mysqli_fetch_array($que1)){
        $jumlah_uang_nasabah = $data['saldo'];
    }

    if ((float)$jumlah_uang_atm < (float)$value || (float)$jumlah_uang_nasabah < (float)$value) {
        echo
        "
        <script>
            window.location='?hal=transaksi-gagal';
        </script>
        ";
    }
    else{
        $sql2 = "INSERT INTO transaksi VALUES('','tarik tunai', '$rekening', '$tgl');";
        $que2 = mysqli_query($sambungan, $sql2); //menjalankan query

        if ($que2) {
            echo
            "
            <script>
                window.location='?hal=penarikan-simpantarik&value=$value&saldo=$jumlah_uang_nasabah&uangatm=$jumlah_uang_atm';
            </script>
            ";
        }
    }
?>