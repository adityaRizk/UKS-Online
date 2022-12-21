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

$penagmbilan = query("SELECT * FROM data_pengambilan_obat");


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
            width:1200px;
        }
    </style>
</head>
<body>
<?php require '../nav/navbar.php'?>
<div class="container">
    <div class="row">
        <div class="col-12">
                <div class="main">
                <h3>Data pengambilan obat</h3><br>
                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Kelas</th>
                        <th>Jenis obat</th>
                        <th>Nama obat</th>
                        <th>jumlah obat</th>
                        <th>Waktu pengambilan</th>
                        <th>status</th>
                        <th>aksi</th>
                    </tr>

                    <?php $i = 1; ?>
                    <?php foreach($penagmbilan as $data) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $data["nama_lengkap"] ?></td>
                            <td><?= $data["kelas"] ?></td>
                            <td><?= $data["jenis_obat"] ?></td>
                            <td><?= $data["nama_obat"] ?></td>
                            <td><?= $data["jumlah_obat"] ?></td>
                            <td><?= $data["waktu_pengambilan"] ?></td>
                            <td><?= $data["status"] ?></td>
                            <td>
                                <a href="verifikasi.php?id=<?= $data["id_pengambilan"]; ?>" class="btn btn-success" onClick="return confirm('anda yakin ingin mengverifikasi?')">Verifikasi</a>
                                <a href="reject.php?id=<?= $data["id_pengambilan"]; ?>" class="btn btn-danger" onClick="return confirm('anda yakin ingin menolak permintaannya?')">Reject</a>
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