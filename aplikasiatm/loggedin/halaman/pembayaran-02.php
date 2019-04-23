<?php
    $nama = $_GET['nama'];
?>
    <div class="col-2 tombol">
        <a href="#"><button>></button></a>
        <a href="#"><button>></button></a>
        <a href="#"><button>></button></a>
        <a href="?hal=pembayaran-01"><button>></button></a>
    </div>
    <div class="col-8 badan">
        <div class="row">
            <div class="col-12 judul">
                <h3>MENU PEMBAYARAN</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <h3>MASUKKAN KODE PERUSAHAAN :</h3>
                <input type="text" name="kodeperusahaan" id="input" required autofocus autocomplete="off" class="inputkodeperusahaan" form="formpembayaran-02">
                <input type="hidden" name="nama" value="<?php echo"$nama";?>" form="formpembayaran-02">
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
        <form action="?hal=pembayaran-03" method="POST" id="formpembayaran-02">
            <a href="#"><button><</button></a>
        </form>
    </div>