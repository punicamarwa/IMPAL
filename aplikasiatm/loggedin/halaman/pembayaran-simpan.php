<?php

    $notagihan = $_POST['notagihan'];
    $nama = $_POST['nama'];
    $kodeperusahaan = $_POST['kodeperusahaan'];
    $atm = $_SESSION['atm'];
    $rekening = $_SESSION['nasabah'];

    $tgl = date("y-m-d");

    $sql0 = "SELECT P.nama_perusahaan, P.kode_perusahaan, T.status_pembayaran, T.jumlah_tagihan, T.no_tagihan, T.nama_jenis FROM perusahaan P JOIN tagihan T ON P.kode_perusahaan = T.kode_perusahaan JOIN jenis_tagihan J ON J.nama_jenis = T.nama_jenis WHERE T.no_tagihan = $notagihan AND P.kode_perusahaan = $kodeperusahaan AND T.status_pembayaran != 'lunas' AND J.nama_kategori = '$nama' AND T.rekening = $rekening";
    $que0 = mysqli_query($sambungan, $sql0); //menjalankan query
    $cek0 = mysqli_num_rows($que0);
    while($data=mysqli_fetch_array($que0)){
        $jumlahtagihan = $data['jumlah_tagihan'];
        $status = $data['status_pembayaran'];
        $namaperusahaan = $data['nama_perusahaan'];
        $namajenis = $data['nama_jenis'];
    }

    $sql1 = "SELECT saldo, Nama_nasabah FROM nasabah WHERE rekening = $rekening;";
    $que1 = mysqli_query($sambungan, $sql1); //menjalankan query
    while($data=mysqli_fetch_array($que1)){
        $jumlah_uang_nasabah = $data['saldo'];
        $nama_nasabah = $data['Nama_nasabah'];
    }

    if ((float)$jumlah_uang_nasabah < (float)$jumlahtagihan || $cek0==0 || $status == "lunas" ) {
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
                window.location='?hal=pembayaran-konfirmasi&jumlahtagihan=$jumlahtagihan&saldo=$jumlah_uang_nasabah&kodeperusahaan=$kodeperusahaan&notagihan=$notagihan&nama=$nama_nasabah&namaperusahaan=$namaperusahaan&namajenis=$namajenis&namakategori=$nama';
            </script>
            ";
    }

?>