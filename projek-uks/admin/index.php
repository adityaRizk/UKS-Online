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
require '../nav/navbar.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        body{
            background: url("../foto/back.jpg") no-repeat ;
            
        }
        .shad{
            background-color: rgba(0,0,0,0.5);
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: -5;
        }
        .kot{
             margin-top: 300px;
        }
        p,h1{
            color: white;
        }
      
        
        
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
    <div class="col-12 text-center">
        <div class="shad"></div>
        <div class="kot">
            <h1>Welcome to RPL Healtcare</h1>
            <p>Ini adalah website yang dibuat oleh anak-anak RPL  </p>
        </div>
        
        </div>
        
    </div>
    </div>

</body>
</html>