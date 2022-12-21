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


require '../nav/navsiswa.php'; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css ">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
    body{
        background-image: linear-gradient(#E7E9EB, #E7E9EB, #FFFFFF);
    }
    .kimsak{
        box-shadow:  -8px -10px 0.5px 5px #96dfaa;
    }
    h6{
        transition: 0.5s;
    }
    h6:hover{
        color: blue;
    }
    a{
        text-decoration: none;
        color: grey;
    }
    footer{
        width: 100%;
        height: 30px;
        text-align: center;
        margin-top: 50px;
        background-color: #96dfaa;
    }
    a{
        display: block;
    }
</style> 
</head>
<body>
<i class="fa-brands fa-instagram"></i>
<i class="fa-brands fa-square-facebook"></i>
<i class="fa-brands fa-square-twitter"></i>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <br><br><br>
                    <h1>Our teams</h1>
                    <p class="text-secondary">Website Ini Dibuat Oleh Kelompok V </p>
                </div>
            </div>
            <div class="row dflex justify-content-center">
                <div class="col-10 col-md-4 col-lg-4 pt-5">
                    <img src="../foto/luffy.jfif" class="kimsak rounded-circle w-80 offset-md-2 pb-3" alt="">
                    <h3>Aditya rizky</h3>
                    <h5>Programmer</h5>
                    <p class="text-secondary">aku adalah seorang kapiten mempunyai pedang panjangasdahbsdjahahbsdsbjabhsdjbh</p>
                    <a href="https://www.instagram.com/rokujm/"><h6><i class="fa-brands fa-facebook"></i> Aditya rizky</h6></a>
                </div>
                <div class="col-10 col-md-4 col-lg-4 pt-5">
                    <img src="../foto/luffy.jfif" class="kimsak rounded-circle w-80 offset-md-2 pb-3"  alt="">
                    <h3>Jevon Moreno</h3>
                    <h5>Programmer</h5>
                    <p class="text-secondary">aku adalah seorang kapiten mempunyai pedang panjangasdahbsdjahahbsdsbjabhsdjbh</p>
                    <a href="https://www.instagram.com/rokujm/"><h6><i class="fa-brands fa-instagram"></i> Jevon_gemink</h6></a>
                </div>
                <div class="col-10 col-md-4 col-lg-4 pt-5">
                    <img src="../foto/luffy.jfif" class="kimsak rounded-circle w-80 offset-md-2 pb-3" alt="">
                    <h3>Nadila Aprilla</h3>
                    <h5>Programmer</h5>
                    <p class="text-secondary">aku adalah seorang programmer pemula</p>
                    <a href="https://www.instagram.com/ndylnoretr_007i/"><h6><i class="fa-brands fa-instagram"></i>ndylnoretr_007i</h6></a>
                </div>
            </div><br><br><br>
            <div class="row dflex justify-content-center">
            <div class="col-10 col-md-4 col-lg-4 pt-5">
                    <img src="../foto/luffy.jfif" class="kimsak rounded-circle w-80 offset-md-2 pb-3"  alt="">
                    <h3>Excel Violano G</h3>
                    <h5>Programmer</h5>
                    <p class="text-secondary">aku adalah seorang programmer pemula</p>
                    <a href="https://www.instagram.com/ryn_12888/"><h6><i class="fa-brands fa-instagram"></i> ryn_12888</h6></a>
                </div>
                <div class="col-10 col-md-4 col-lg-4 pt-5">
                    <img src="../foto/luffy.jfif" class="kimsak rounded-circle w-80 offset-md-2 pb-3"  alt="">
                    <h3>Euroski yudisetyo</h3>
                    <h5>Desainer</h5>
                    <p class="text-secondary">aku adalah desainer profesional</p>
                    <a href="https://www.instagram.com/rokujm/"><h6><i class="fa-brands fa-instagram"></i>yourosqi</h6></a>
                </div>
                <div class="col-10 col-md-4 col-lg-4 pt-5">
                    <img src="../foto/luffy.jfif" class="kimsak rounded-circle w-80 offset-md-2 pb-3" alt="">
                    <h3>Fathir Hafiyyan</h3>
                    <h5>Programmer</h5>
                    <p class="text-secondary">aku adalah programer pemuka</p>
                    <a href="https://www.instagram.com/fthryan12/"><h6><i class="fa-brands fa-instagram"></i>fthryan12</h6></a>
                </div>
            </div>
        </div>
    </div>
    <footer class="bottom" >
    <p><i><b>Created by group5</b></i></p>
</footer>
</body>
</html>

