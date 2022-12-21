<?php
session_start();
require 'function.php';
if(!isset($_SESSION["username"])){
    echo "
        <script type='text/javascript'>
            alert('silahkan login terlebih dahulu')
            window.location: '../login/index.php';
        </script>
    ";
}

if(isset($_POST["submit"])){
    if(tambahUser($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data user berhasil dikirim');
            window.location = 'user.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal dikirim');
            window.location = 'user.php';
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
    <style>
        .main{
            padding: 100px 0;
        }
    </style>
</head>
<body>
    
<div class="container">
        <div class="row">
            <div class="col-12">
            <div class="main">
                    <div class="box">
                        <h3>tambah user</h3>
                
                        <form action="" method="POST" enctype="multipart/form-data">
                            <label for="username">Username</label><br>
                            <input type="text" name="username" id="username" class="form-control"><br>
                
                            <label for="nama_lengkap">nama_lengkap</label><br>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"><br>
                
                            <label for="password">password</label><br>
                            <input type="text" name="password" id="password" class="form-control"><br>

                            <label for="roles">roles</label><br>
                            <select name="roles" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="guru">Guru</option>
                                <option value="siswa">Siswa</option>
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