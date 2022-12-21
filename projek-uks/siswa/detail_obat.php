<?php
    session_start();
    require '../nav/navsiswa.php'; 
    require 'function.php';
    require '../koneksi.php';

    if(!isset($_SESSION["username"])){
        echo "
        <script type='text/javascript'>
            alert('Silahkan login terlebih dahulu')
            window.location = '../login/index.php';
        </script>
        ";
    }

    $id = $_GET["id"];
    $data = query("SELECT * FROM data_obat WHERE id_obat = '$id'")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .stok{
            background-color: #96dfaa;
            padding: 7px 15px;
            width: 130px;
            border-radius: 13px;
            margin: -12px 0 0 0;
        }
       .b{
        margin-top: 100px;
       }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 b col-lg-4 offset-md-4">
                    <h3><?= $data['nama_obat'] ?></h3>
                    <img src="../foto/<?= $data['foto'] ?>" width="100%" alt="">
                    <h4 class="stok">Stok: <?= $data['stok'] ?></h4>
                    <h5><?= $data['deskripsi'] ?></h5>
                    <h5>Obat : pusing</h5>
            </div>
        </div>
    </div>
</body>
</html>