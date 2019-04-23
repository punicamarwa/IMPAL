<?php
    $pin = $_POST['pin'];

    $sql = "SELECT pin FROM nasabah WHERE pin='$pin';";
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