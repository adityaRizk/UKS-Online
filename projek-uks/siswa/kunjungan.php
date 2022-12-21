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
require '../nav/navsiswa.php';

if(isset($_POST["submit"])){
    if(tambahKunjungan($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('form kunjungan berhasil dikirim');
            window.location = 'siswa.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('form kunjungan gagal dikirim');
            window.location = 'siswa.php';
        </script>
    ";
    }
}
$date = new DateTime('now');

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
        .box{
            padding:75px 0;
        }
        footer{
        width: 100%;
        height: 30px;
        text-align: center;
        margin-top: 50px;
        background-color: #96dfaa;
      }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="box">
                        <h3>Data kunjungan</h3>
                    
                        <form action="" method="POST" enctype="multipart/form-data">
                            <label for="nama_lengkap">nama lengkap</label><br>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required><br>
                    
                            <label for="kelas">kelas</label><br>
                            <input type="text" name="kelas" id="kelas" class="form-control" required><br>
                    
                            <label for="tanggal">tanggal</label><br>
                            <input type="text" name="tanggal" id="tanggal" class="form-control" required readonly value="<?php echo $date->format('d-m-Y : H:i:s'); // 21-01-2017 05:13:03 ?>"><br>

                            <label for="keperluan">keperluan</label><br>
                            <input type="text" name="keperluan" id="keperluan" class="form-control" required><br>
                    
                            <button type="submit" name="submit" class="btn btn-success" >kirim</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
    <footer class="bottom" >
    <p><i><b>Created by group5</b></i></p>
</footer>
</body>
</html>