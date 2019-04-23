    <div class="col-2 tombol">
        <?php
            $sql = "SELECT * FROM kategori_Tagihan WHERE nama!='lainnya' ORDER BY nama LIMIT 3;";
            $que = mysqli_query($sambungan, $sql); //menjalankan query

            while($data=mysqli_fetch_array($que)){
                $nama = $data['nama'];

                echo
                "
                <a href='?hal=pembayaran-02&nama=$nama'><button>></button></a>
                ";
            }
        ?>
        <a href="?hal=opsitransaksi"><button>></button></a>
    </div>
    <div class="col-8 badan">
        <div class="row">
            <div class="col-12 judul">
                <h3>MENU PEMBAYARAN <br>
                SILAKAN PILIH KATEGORI TAGIHAN</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-6 menukiri">
                <?php
                    $sql = "SELECT * FROM kategori_Tagihan WHERE nama!='lainnya' ORDER BY nama LIMIT 3;";
                    $que = mysqli_query($sambungan, $sql); //menjalankan query

                    while($data=mysqli_fetch_array($que)){
                        $nama = $data['nama'];

                        echo
                        "
                        <br><br>
                        <h3><--- $nama</h3>
                        ";
                    }
                ?>
                
                <br>
                <h4><--- MENU SEBELUMNYA</h4>
            </div>
            <div class="col-6 menukanan">
                <?php
                    $sql = "SELECT * FROM kategori_Tagihan WHERE nama!='lainnya' ORDER BY nama DESC LIMIT 3;";
                    $que = mysqli_query($sambungan, $sql); //menjalankan query

                    while($data=mysqli_fetch_array($que)){
                        $nama = $data['nama'];

                        echo
                        "
                        <br><br>
                        <h3>$nama ---></h3>
                        ";
                    }
                ?>
                
                <br>
                <h3>LAINNYA ---></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 footer">
                
                <h3>TEKAN CANCEL UNTUK PEMBATALAN</h3>
            </div>
        </div>
    </div>
    <div class="col-2 tombol">
        <?php
            $sql = "SELECT * FROM kategori_Tagihan WHERE nama!='lainnya' ORDER BY nama DESC LIMIT 3;";
            $que = mysqli_query($sambungan, $sql); //menjalankan query

            while($data=mysqli_fetch_array($que)){
                $nama = $data['nama'];

                echo
                "
                <a href='?hal=pembayaran-02&nama=$nama'><button><</button></a>
                ";
            }
        ?>
        <a href="?hal=pembayaran-02&nama=Lainnya"><button><</button></a>
    </div>