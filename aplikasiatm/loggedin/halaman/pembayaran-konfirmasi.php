<?php

    $jumlahtagihan = $_GET['jumlahtagihan'];
    $jumlah_uang_nasabah = $_GET['saldo'];
    $kodeperusahaan = $_GET['kodeperusahaan'];
    $notagihan = $_GET['notagihan'];
    $nama = $_GET['nama'];
    $namaperusahaan = $_GET['namaperusahaan'];
    $namajenis = $_GET['namajenis'];
    $atm = $_SESSION['atm'];
    $rekening = $_SESSION['nasabah'];
    $tgl = date("y-m-d");
    $waktu = date("H:i:s");

?>

    <div class="col-2 tombol">
        <a href="#"><button>></button></a>
        <a href="#"><button>></button></a>
        <a href="#"><button>></button></a>
        <form action="?hal=pembayaran-03" method="POST">
            <input type="hidden" name="nama" value="<?php echo"$nama";?>">
            <input type="hidden" name="kodeperusahaan" value="<?php echo"$kodeperusahaan";?>">
            <a href="#" type="submit"><button>></button></a>
        </form>
    </div>
    <div class="col-8 badan">
        <div class="row">
            <div class="col-12 judul">
                <h3>
                MENU PEMBAYARAN <br>
                SILAKAN KONFIRMASI DATA PEMBAYARAN ANDA :
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table>
                    <tr>
                        <td><h5>NO. TAGIHAN</h5></td>
                        <td><h5>:</h5></td>
                        <td><h5><?php echo"$notagihan";?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>JENIS TAGIHAN</h5></td>
                        <td><h5>:</h5></td>
                        <td><h5><?php echo"$namajenis";?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>PERUSAHAAN/INSTITUSI</h5></td>
                        <td><h5>:</h5></td>
                        <td><h5><?php echo"$namaperusahaan";?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>ATAS NAMA</h5></td>
                        <td><h5>:</h5></td>
                        <td><h5><?php echo"$nama";?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>JUMLAH</h5></td>
                        <td><h5>:</h5></td>
                        <td><h5><?php echo"$jumlahtagihan";?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>WAKTU</h5></td>
                        <td><h5>:</h5></td>
                        <td><h5><?php echo"$waktu";?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>TANGGAL</h5></td>
                        <td><h5>:</h5></td>
                        <td><h5><?php echo"$tgl";?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>NO. ATM</h5></td>
                        <td><h5>:</h5></td>
                        <td><h5><?php echo"$atm";?></h5></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-6 menukiri">
                <h4><--- MENU SEBELUMNYA</h4>
            </div>
            <div class="col-6 menukanan">
                <h3>BENAR ---></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 footer">               
                <h3>TEKAN CANCEL UNTUK PEMBATALAN</h3>
            </div>
        </div>
        
    </div>
    <div class="col-2 tombol">
        <a href="#"><button><</button></a>
        <a href="#"><button><</button></a>
        <a href="#"><button><</button></a>
        <?php
            echo"<a href='?hal=pembayaran-simpanbayar&jumlahtagihan=$jumlahtagihan&saldo=$jumlah_uang_nasabah&kodeperusahaan=$kodeperusahaan&notagihan=$notagihan&nama=$nama'><button><</button></a>";
        ?>
    </div>