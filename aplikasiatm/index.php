<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATM</title>
    <link rel="icon" href="gambar/atmicon.png">

    <link rel="stylesheet" href="style/css/bootstrap.min.css">

    <!--CSS tambahan-->
    <link rel="stylesheet" href="style/style-awal.css">

</head>
<body>
    <?php
        include 'tool/koneksi.php';
    ?>
    
        <div class="container">
            <div class="row">
                <h1>Pilih Mesin ATM</h1>
            </div>
            <div class="row">
                <?php
                    $sql = "SELECT no_mesin FROM atm";
                    $que = mysqli_query($sambungan, $sql); //menjalankan query
                    $cek = mysqli_num_rows($que); //menghitung jumlah data di database
                    //jika data kosong
                    if ($cek==0) {
                        echo
                        "
                            <div class='col-12'>
                                <div class='alert alert-danger' role='alert'>
                                    Tidak ada MESIN ATM !!
                                </div>
                            </div>
                        ";
                    }
                    else{
                        $i = 1;
                        while ($data=mysqli_fetch_array($que)) {
                            $no_mesin = $data['no_mesin']; 
                            echo
                            "
                                <!-- Modal -->
                                <form action='autentifikasi.php' method='POST'>
                                <div class='modal fade' id='atm_$no_mesin' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
                                <div class='modal-dialog modal-dialog-centered' role='document'>
                                    <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='exampleModalLongTitle'><img src='gambar/cardicon.png' class='cardicon'>ATM $i - $no_mesin</h5>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                    <div class='modal-body'>
                                        <p>Rekening : <br>
                                        <input type='text' name='rekening' placeholder='masukkan rekening' class='inputrek'>
                                        <input type='hidden' name='nomesin' value='$no_mesin'>
                                        </p>
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                        <input type='submit' class='btn btn-primary' value='Submit'>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                </form>

                                <div class='col-lg-2'>
                                    <a href='#' class='pilihan' data-toggle='modal' data-target='#atm_$no_mesin'>
                                        <img src='gambar/atmicon.png' alt='$no_mesin' class='atmicon'>
                                        <p class='namaatm'>ATM $i</p>
                                    </a>
                                </div>
                            ";
                            $i++;
                        }
                    }
                ?>
                
            </div>
        </div>
    

    <!--file script-->
    <script src="style/jquery.js"></script>
    <script src="style/popper.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
</body>
</html>