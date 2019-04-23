
    <div class="col-2 tombol">
        <a href="#"><button>></button></a>
        <a href="#"><button>></button></a>
        <a href="#"><button>></button></a>
        <a href="#"><button>></button></a>
    </div>
    <div class="col-8 badan">
        <div class="row">
            <div class="col-12 judul">
                <h3>
                TRANSAKSI BERHASIL <br>
                TRANSAKSI BERHASIL DILAKUKAN, APAKAH ANDA INGIN MELAKUKAN TRANSAKSI LAGI?
                </h3>
            </div>
        </div>
        <div class="row">
            <?php
                $rekening = $_SESSION['nasabah'];
                $sql = "SELECT saldo FROM nasabah WHERE rekening = $rekening;";
                $que = mysqli_query($sambungan, $sql); //menjalankan query
                $cek = mysqli_num_rows($que); //menghitung jumlah data di database
                
                //jika data ada
                if($cek!=0) {
                    while ($data=mysqli_fetch_array($que)) {
                        $saldo = $data['saldo'];
                        
                        echo
                        "
                        <div class='col-12 text-center'>
                            <br><br><br><br>
                            <h3>Sisa Saldo Anda Sebesar :</h3>
                            <h3>Rp.$saldo,00</h3>
                        </div>
                        ";
                    }
                }
            ?>
        </div>
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6 menukanan">
                <h3>YA ----></h3>
                <br><br>
                <h3>TIDAK ----></h3>
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
        <a href="?hal=opsitransaksi"><button><</button></a>
        <a href="?hal=pin"><button><</button></a>
    </div>