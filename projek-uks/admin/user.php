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

$user = query("SELECT * FROM user")


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
            padding: 100px 0;
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
                <a href="tambah_user.php" class="btn btn-primary">tambah user</a>
                <h3>Data user</h3><br>
                <table>
                    <tr>
                        <th>no</th>
                        <th>username</th>
                        <th>nama lengkap</th>
                        <th>password</th>
                        <th>roles</th>
                        <th>aksi</th>
                    </tr>

                    <?php $i = 1; ?>
                    <?php foreach($user as $data) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $data["username"] ?></td>
                            <td><?= $data["nama_lengkap"] ?></td>
                            <td><?= $data["password"] ?></td>
                            <td><?= $data["roles"] ?></td>
                            <td>
                                <a href="edit_user.php?id=<?= $data["id_user"]; ?>" class="btn btn-primary">Edit</a>
                                <a href="hapus_user.php?id=<?= $data["id_user"]; ?>" class="btn btn-danger" onClick="return confirm('anda yakin ingin menghapus?')">hapus</a>
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