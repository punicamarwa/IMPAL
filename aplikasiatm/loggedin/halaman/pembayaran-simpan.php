<?php

    $notagihan = $_POST['notagihan'];
    $nama = $_POST['nama'];
    $kodeperusahaan = $_POST['kodeperusahaan'];
    $atm = $_SESSION['atm'];
    $rekening = $_SESSION['nasabah'];

    $tgl = date("y-m-d");

    $sql = "SELECT kode_perusahaan FROM perusahaan WHERE kode_perusahaan = $kodeperusahaan;";
    $que = mysqli_query($sambungan, $sql); //menjalankan query
    $cek = mysqli_num_rows($que);

    $sql0 = "SELECT PE.nama_perusahaan, J.nama_jenis, P.kode_perusahaan, T.no_tagihan, T.jumlah_tagihan, T.status_pembayaran FROM perusahaan PE JOIN perusahaan_jenis P ON PE.kode_perusahaan = P.kode_perusahaan JOIN jenis_tagihan J ON P.jenis_tagihan=J.nama_jenis JOIN tagihan T ON T.nama_jenis = J.nama_jenis WHERE P.kode_perusahaan = '$kodeperusahaan' AND T.status_pembayaran != 'lunas';";
    $que0 = mysqli_query($sambungan, $sql0); //menjalankan query
    $cek0 = mysqli_num_rows($que0);
    while($data=mysqli_fetch_array($que0)){
        $jumlahtagihan = $data['jumlah_tagihan'];
        $status = $data['status_pembayaran'];
        $namaperusahaan = $data['nama_perusahaan'];
        $namajenis = $data['nama_jenis'];
    }

    $sql1 = "SELECT saldo FROM nasabah WHERE rekening = $rekening;";
    $que1 = mysqli_query($sambungan, $sql1); //menjalankan query
    while($data=mysqli_fetch_array($que1)){
        $jumlah_uang_nasabah = $data['saldo'];
    }

    if ((float)$jumlah_uang_nasabah < (float)$jumlahtagihan || $cek==0 || $cek0==0 || $status == "lunas" ) {
        echo
        "
        <script>
            window.location='?hal=transaksi-gagal';
        </script>
        ";
    }
    else{
            echo
            "
            <script>
                window.location='?hal=pembayaran-konfirmasi&jumlahtagihan=$jumlahtagihan&saldo=$jumlah_uang_nasabah&kodeperusahaan=$kodeperusahaan&notagihan=$notagihan&nama=$nama&namaperusahaan=$namaperusahaan&namajenis=$namajenis';
            </script>
            ";
    }

?>