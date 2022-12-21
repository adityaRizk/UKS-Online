<?php
session_start();
require '../koneksi.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}
require 'function.php';


$id = $_GET["id"];
$kunjungan = query("SELECT * FROM data_kunjungan WHERE id_kunjungan = '$id'")[0];


if(isset($_POST["submit"])){
    if(editKunjungan($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data kunjungan berhasil diubah');
            window.location = 'kunjungan.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data kunjungan gagal diubah');
            window.location = 'kunjungan.php';
        </script>
    ";
    }
}

require '../nav/navbar.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
    <style>
        .main{
            padding:75px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main">
                    <div class="box">
                        <h3>Edit kunjungan</h3>
                
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_kunjungan" value="<?= $kunjungan["id_kunjungan"]; ?>">

                            <label for="nama_lengkap">nama lengkap</label><br>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $kunjungan["nama_lengkap"]; ?>"><br>
                
                            <label for="kelas">kelas</label><br>
                            <input type="text" name="kelas" id="kelas" class="form-control" value="<?= $kunjungan["kelas"]; ?>"><br>

                            <label for="tanggal">tanggal</label><br>
                            <input type="text" name="tanggal" id="tanggal" class="form-control" value="<?= $kunjungan["tanggal"]; ?>"><br>
                
                            <label for="keperluan">keperluan</label><br>
                            <input type="text" name="keperluan" id="keperluan" class="form-control" value="<?= $kunjungan["keperluan"]; ?>"><br>
                
                            
                
                            <button type="submit" name="submit" class="btn btn-success" >kirim</button>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    
</body>
</html>