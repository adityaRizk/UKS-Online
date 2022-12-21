<?php
require 'function.php';

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

$kunjungan = query("SELECT * FROM data_kunjungan");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main{
            padding:75px 0;
        }
        table{
            width:1250px;
        }
    </style>
</head>
<body>
<?php require '../nav/navbar.php'?>
<div class="container">
    <div class="row">
        <div class="col-12">
                <div class="main">
                <h3>Data kunjungan</h3><br>
                <table>
                    <tr>
                        <th>no</th>
                        <th>nama lengkap</th>
                        <th>kelas</th>
                        <th>tanggal</th>
                        <th>keperluan</th>
                        <th>aksi</th>
                    </tr>

                    <?php $i = 1; ?>
                    <?php foreach($kunjungan as $data) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $data["nama_lengkap"] ?></td>
                            <td><?= $data["kelas"] ?></td>
                            <td><?= $data["tanggal"] ?></td>
                            <td><?= $data["keperluan"] ?></td>
                            <td>
                                <a href="edit_kunjungan.php?id=<?= $data["id_kunjungan"]; ?>" class="btn btn-primary">Edit</a>
                                <a href="hapus_kunjungan.php?id=<?= $data["id_kunjungan"]; ?>" class="btn btn-danger" onClick="return confirm('anda yakin ingin menghapus?')">hapus</a>
                            </td>                
                        </tr>
                    <?php $i++;?>
                    <?php endforeach; ?>
                </table>
            </div>     
        </div>
    </div>
</div>

</body>
</html>