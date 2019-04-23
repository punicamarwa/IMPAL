<?php
    $nama = $_POST['nama'];
    $kodeperusahaan = $_POST['kodeperusahaan'];
?>
    <div class="col-2 tombol">
        <a href="#"><button>></button></a>
        <a href="#"><button>></button></a>
        <a href="#"><button>></button></a>
        <?php
            echo"<a href='?hal=pembayaran-02&nama=$nama'><button>></button></a>"
        ?>
    </div>
    <div class="col-8 badan">
        <div class="row">
            <div class="col-12 judul">
                <h3>MENU PEMBAYARAN</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <h3>MASUKKAN NO. TAGIHAN :</h3>
                <input type="text" name="notagihan" id="input" required autofocus autocomplete="off" class="inputrektransfer" form="formpembayaran-03">
                <input type="hidden" name="nama" value="<?php echo"$nama";?>" form="formpembayaran-03">
                <input type="hidden" name="kodeperusahaan" value="<?php echo"$kodeperusahaan";?>" form="formpembayaran-03">
            </div>
        </div>
        <div class="row">
            <div class="col-6 menukiri">
                <br><br><br><br><br><br><br><br><br>
                <h4><--- MENU SEBELUMNYA</h4>
            </div>
            <div class="col-6 menukanan">
                <br><br><br><br><br><br><br><br><br>
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
        <form action="?hal=pembayaran-simpan" method="POST" id="formpembayaran-03">
            <a href="#"><button><</button></a>
        </form>
    </div>