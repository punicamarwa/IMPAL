<?php
    $pin = $_POST['pin'];
    $rekening = $_SESSION['nasabah'];

    $sql = "SELECT pin FROM nasabah WHERE pin='$pin' AND rekening = '$rekening';";
    $que= mysqli_query($sambungan, $sql);
    $cek = mysqli_num_rows($que);

    if ($cek>0) {
        echo
        "
        <script>
            window.location ='?hal=opsitransaksi';
        </script>
        ";
    } else {
        echo
        "
        <script>
            alert('pin salah');
            window.location ='?hal=exit';
        </script>
        ";
    }
    
?>