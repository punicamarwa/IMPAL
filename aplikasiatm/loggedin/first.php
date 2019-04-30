<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATM</title>
    <link rel="icon" href="../gambar/atmicon.png">
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
    
    <!--css tambahan-->
    <link rel="stylesheet" href="../style/style-loggedin.css">
</head>
<body>
    <?php
        include "../tool/koneksi.php";
    ?>
    <div class="container align-middle">
        <div class="row atm">
            <?php
                include "tool/panggil-halaman.php";
            ?>
        </div>
        <div class="row">
            <div class="col-12 tombolbawah">
                <br>
                <button class="clear" onclick="clearinput()"><img src="../gambar/clearicon.png"> clear</button>
                <a href="?hal=exit" class="cancel"><button><img src="../gambar/cancelicon.png"> cancel</button></a>               
            </div>
        </div>
    </div>

    <!--file script-->
    <script src="../style/jquery.js"></script>
    <script src="../style/popper.js"></script>
    <script src="../style/js/bootstrap.min.js"></script>
    <script>
        function clearinput() {
            document.getElementById("input").value = "";
            document.getElementById("input").focus();
        }
    </script>
</body>
</html>