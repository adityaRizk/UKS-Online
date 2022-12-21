<?php
require '../koneksi.php';


$id = $_GET["id"];
$query = mysqli_query($conn, "UPDATE data_pengambilan_obat SET status='tertolak' WHERE id_pengambilan='$id'");


    if($query){
        echo "
        <script type='text/javascript'>
            alert('Data obat berhasil ditolak');
            window.location = 'pengambilan_obat.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data obat gagal ditolak');
            window.location = 'pengambilan_obat.php';
        </script>
    ";
    }

?>