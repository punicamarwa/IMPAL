
    <div class="col-2 tombol">
        <a href="#"><button>></button></a>
        <a href="#"><button>></button></a>
        <a href="#"><button>></button></a>
        <a href="?hal=opsitransaksi"><button>></button></a>
    </div>
    <div class="col-8 badan">
        <div class="row">
            <div class="col-12 judul">
                <h3>
                RIWAYAT TRANSAKSI <br>
                4 TRANSAKSI TERAKHIR ANDA :
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <br>
                <?php
                    $rekening = $_SESSION['nasabah'];
                    echo"<h3>REK : $rekening</h3>";

                    $sql = "SELECT no_transaksi, tanggal, jenis_transaksi FROM transaksi WHERE rekening=$rekening ORDER BY no_transaksi DESC LIMIT 4;";
                    $que = mysqli_query($sambungan, $sql); //menjalankan query
                    $cek = mysqli_num_rows($que);

                    echo
                    "
                    <table>
                    ";

                    while($data=mysqli_fetch_array($que)){
                        $notransaksi = $data['no_transaksi'];
                        $tgl = $data['tanggal'];
                        $jenis = $data['jenis_transaksi'];

                        if ($jenis == 'tarik tunai') {
                            $sql1 = "SELECT jumlah FROM penarikan_uang WHERE no_transaksi = $notransaksi;";
                            $que1 = mysqli_query($sambungan, $sql1); //menjalankan query
                            while($data1=mysqli_fetch_array($que1)){
                                $jumlah = $data1['jumlah'];

                                echo
                                "
                                <tr>
                                    <td><h5>$tgl</h5></td>
                                    <td><h5>$notransaksi</h5></td>
                                    <td><h5>$jenis</h5></td>
                                    <td></td>
                                    <td><h5>Rp.$jumlah,00</h5></td>
                                </tr>
                                ";
                            }

                        }
                        elseif ($jenis == 'transfer') {
                            $sql2 = "SELECT jumlah, rekening_tujuan FROM transfer WHERE no_transaksi = $notransaksi;";
                            $que2 = mysqli_query($sambungan, $sql2); //menjalankan query
                            while($data2=mysqli_fetch_array($que2)){
                                $jumlah = $data2['jumlah'];
                                $rektujuan = $data2['rekening_tujuan'];

                                echo
                                "
                                <tr>
                                    <td><h5>$tgl</h5></td>
                                    <td><h5>$notransaksi</h5></td>
                                    <td><h5>$jenis</h5></td>
                                    <td><h5>$rektujuan</h5></td>
                                    <td><h5>Rp.$jumlah,00</h5></td>
                                </tr>
                                ";
                            }
                        }
                        else {
                            $sql3 = "SELECT jumlah_tagihan, no_tagihan FROM tagihan WHERE no_transaksi = $notransaksi AND status_pembayaran = 'lunas';";
                            $que3 = mysqli_query($sambungan, $sql3); //menjalankan query
                            while($data3=mysqli_fetch_array($que3)){
                                $jumlah = $data3['jumlah_tagihan'];
                                $notagihan = $data3['no_tagihan'];

                                echo
                                "
                                <tr>
                                    <td><h5>$tgl</h5></td>
                                    <td><h5>$notransaksi</h5></td>
                                    <td><h5>$jenis</h5></td>   
                                    <td><h5>$notagihan</h5></td>
                                    <td><h5>Rp.$jumlah,00</h5></td>
                                </tr>
                                ";
                            }
                        }


                    }
                    echo
                    "
                    </table>
                    ";

                    if ($cek == 0) {
                        echo"<br><br><br><br><br><br>";
                    }
                    elseif ($cek == 1) {
                        echo"<br><br><br><br>";
                    }
                    elseif ($cek== 2) {
                        echo"<br><br><br>";
                    }
                    elseif ($cek == 3) {
                        echo"<br><br>";
                    }
                    

                ?>
               
            </div>
        </div>
        <div class="row">
            <div class="col-6 menukiri">
                <br><br><br><br>
                <h4><--- MENU SEBELUMNYA</h4>
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
        <a href="#"><button><</button></a>
    </div>