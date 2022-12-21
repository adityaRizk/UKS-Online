<?php
require 'function.php';

$id = $_GET["id"];

    if(hapusObat($id) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data gagal dihapus');
            window.location = 'obat.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data  berhasi dihpus');
            window.location = 'obat.php';
        </script>
    ";
    }

?>