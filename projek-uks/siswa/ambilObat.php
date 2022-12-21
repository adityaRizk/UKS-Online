<?php
session_start();

require 'function.php';
require '../nav/navsiswa.php';

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
$obat = query("SELECT * FROM data_obat WHERE id_obat = '$id'")[0];

if(isset($_POST["submit"])){
    if(ambilObat($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('permintaan anda berhasil dikirim, silahkan tunggu diverifikasi');
            window.location = 'obat.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('permintaan anda gagal dikirim, mohon ulangi pengambilan obat');
            window.location = 'obat.php';
        </script>
    ";
    }
}

    
date_default_timezone_set('Asia/Jakarta');

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
                <h3>Ambil obat</h3>
        
                <form action="" method="POST" enctype="multipart/form-data">

                    <label for="nama_lengkap">Nama lengkap</label><br>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"><br>
        
                    <label for="kelas">kelas</label><br>
                    <input type="text" name="kelas" id="kelas" class="form-control"><br>

                    <label for="nama_obat">Nama obat</label><br>
                    <input type="text" name="nama_obat" id="nama_obat" class="form-control" value="<?= $obat["nama_obat"]; ?>" readonly><br>
        
                    <label for="jenis_obat">Jenis obat</label><br>
                    <input type="text" name="jenis_obat" id="jenis_obat" class="form-control" value="<?= $obat["jenis"]; ?>" readonly><br>

                    <label for="jumlah_obat">Jumlah obat</label><br>
                    <input type="text" name="jumlah_obat" id="jumlah_obat" class="form-control"><br>

                    <label for="waktu_pengambilan">Waktu pengambilan</label><br>
                    <input type="text" name="waktu_pengambilan" id="waktu_pengambilan" class="form-control" readonly value="<?php echo $date->format('d-m-Y : H:i:s'); // 21-01-2017 05:13:03 ?>"><br>

                    <input type="hidden" name="status" id="status" value="proses" class="form-control"><br>

                    <button type="submit" name="submit" class="btn btn-success" >Kirim</button>
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