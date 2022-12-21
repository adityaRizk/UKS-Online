<?php
require 'function.php';

$id = $_GET["id"];

    if(hapusKunjugan($id) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data gagal dihapus');
            window.location = 'kunjungan.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data  berhasi dihpus');
            window.location = 'kunjungan.php';
        </script>
    ";
    }

?>