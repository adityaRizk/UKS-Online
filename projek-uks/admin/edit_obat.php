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
$obat = query("SELECT * FROM data_obat WHERE id_obat = '$id'")[0];


if(isset($_POST["submit"])){
    if(editobat($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data obat berhasil diubah');
            window.location = 'obat.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data obat gagal diubah');
            window.location = 'obat.php';
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
                        <h3>Edit obat</h3>
                
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_obat" value="<?= $obat["id_obat"]; ?>">

                            <label for="nama_obat">nama obat</label><br>
                            <input type="text" name="nama_obat" id="nama_obat" class="form-control" value="<?= $obat["nama_obat"]; ?>"><br>
                
                            <label for="foto">foto</label><br>
                            <input type="file" name="foto" id="foto" class="form-control" value="<?= $obat["foto"]; ?>"><br>
                
                            <label for="deskripsi">deskripsi</label><br>
                            <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="<?= $obat["deskripsi"]; ?>"><br>

                            <label for="stok">stok</label><br>
                            <input type="text" name="stok" id="stok" class="form-control" value="<?= $obat["stok"]; ?>"><br>
                
                            <label for="jenis">jenis</label><br>
                            <select name="jenis" class="form-control" value="<?= $obat["jenis"]; ?>">
                                <option value="kapsul">kapsul</option>
                                <option value="tablet">tablet</option>
                                <option value="sirup">sirup</option>
                            </select><br>
                
                            <button type="submit" name="submit" class="btn btn-success" >kirim</button>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    
</body>
</html>