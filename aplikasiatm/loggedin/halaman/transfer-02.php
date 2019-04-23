<?php
    $rektujuan = $_POST['rektujuan'];
?>

    <div class="col-2 tombol">
        <a href="#"><button>></button></a>
        <a href="#"><button>></button></a>
        <a href="#"><button>></button></a>
        <a href="?hal=transfer-01"><button>></button></a>
    </div>
    <div class="col-8 badan">
        <div class="row">
            <div class="col-12 judul">
                <h3>MENU TRANSFER</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <h3>MASUKKAN JUMLAH UANG :</h3>
                <input type="text" name="value" id="input" required autofocus autocomplete="off" class="input" form="formtransfer02">
                <input type="hidden" name="rektujuan" value="<?php echo"$rektujuan";?>" form="formtransfer02">
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
        <form action="?hal=transfer-simpan" method="POST" id="formtransfer02">
            <a href="#" type="submit"><button><</button></a>
        </form>
    </div>