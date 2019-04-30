
    <div class="col-2 tombol">
        <a href="#"><button>></button></a>
        <a href="#"><button>></button></a>
        <a href="#"><button>></button></a>
        <a href="#"><button>></button></a>
    </div>
    <div class="col-8 badan">
        <div class="row">
            <div class="col-12 judul">
                <h3>MASUKKAN PIN ANDA</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img src="../gambar/inputpin.png" alt="input pin" class="gambarpin">
            </div>
            <div class="col-6 menukanan">
                <input type="password" name="pin" class="inputpin" onkeypress="return justNumber(event)" required autofocus form="formpin" id="input">
                <br>
                <h3>BENAR ----></h3>
                <br>
                <h4>DEMI KEAMANAN DAN KENYAMANAN BERSAMA MOHON GANTI PIN ANDA SECARA BERKALA</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12 footer">
                <br><br>
                <h3>TEKAN CANCEL UNTUK PEMBATALAN</h3>
            </div>
        </div>
    </div>
    <div class="col-2 tombol">
        <form action="?hal=pinprocess" method="POST" id="formpin">
            <a href="#" type="submit"><button><</button></a>
        </form>
        <a href="#"><button><</button></a>
        <a href="#"><button><</button></a>
        <a href="#"><button><</button></a>
    </div>