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

// require '../nav/navsiswa.php';
require 'function.php';

$produk = query("SELECT * FROM data_obat");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    nav{
      background-color: #96dfaa;
      width: 100%;
      z-index: 99999;
    }
    h1{
            padding:65px 125px;
        }
    
      .slide{
          padding-top: 50px;
          
      }
      * {
        box-sizing: border-box;
        margin: 0;
      }

      

      .obat{
        padding-top: 200px;
        padding-bottom: 200px;
      }
      
      .card-container {
        display: flex;
      }

      .left {
        flex: 1;
        height: 480px;
        background-color: #96dfaa;
      }

      .right {
        display: flex;
        flex: 1;
        height: 460px;
        background-color: #ffffff;
        justify-content: center;
        align-items: center;
      }

      .left {
        display: flex;
        flex: 1;
        height: 522px;
        justify-content: center;
        align-items: center;
        color: #ffffff;
      }

      .left-container {
        height: 50%;
        width: 80%;
        text-align: center;
        line-height: 22px;
      }

      .left p {
        font-size: 0.9rem;
      }

      h2 {
        font-size: 2rem;
        margin-bottom: 1rem;
      }

      .right-container {
        width: 70%;
        height: 80%;
        text-align: center;
      }

      input,
      textarea {
        background-color: white;
        border: 1px solid black;
        padding: 12px 15px;
        margin: 8px 0;
        width: 100%;
        font-size: 0.8rem;
      }

      input:focus,
      textarea:focus {
        outline: 1px solid #ddbe0d;
      }

      button {
        border-radius: 20px;
        border: 1px solid #09e087;
        background-color: #09e087;
        color: #ffffff;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-out;
        cursor: pointer;
      }

      button:hover {
        opacity: 0.7;
      }

      textarea {
        height: 90px;
      }
      footer{
        width: 100%;
        height: 30px;
        text-align: center;
        margin-top: 50px;
        background-color: #96dfaa;
      }
      /* responsive */

      @media only screen and (max-width: 600px) {
        .left {
          display: none;
        }

        .lg-view {
          display: none;
        }
      }

      @media only screen and (min-width: 600px) {
        .sm-view {
          display: none;
        }
      }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light position-fixed">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="../foto/bck.png" width="50px" alt=""> UKS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="siswa.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#obat">Obat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kunjungan.php">Form kunjungan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="persetujuan.php"> persetujuan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>
        <li class="nav-item">
          <?php if(isset($_SESSION["username"])) : ?>
              <li class="nav-item">
                <a href="login/index.php" class="btn px-4 py-2 me-3">welcome <?= $_SESSION["nama_lengkap"]; ?></a>
              </li>
              <li class="nav-item">
                <a href="../logout.php" class="btn btn-outline-primary px-4 py-2 ">logout</a>
              </li>
              <?php endif; ?>

              <?php if(!isset($_SESSION["username"])) : ?>
              <li class="nav-item">
                <a href="login/index.php" class="btn btn-primary px-4 py-2 me-3">login</a>
              </li>
              <li class="nav-item">
                <a href="register/index.php" class="btn btn-outline-primary px-4 py-2 ">register</a>
              </li>
              <?php endif; ?>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

    

<section class="slide">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="../foto/awal.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="../foto/hospp.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="../foto/awal.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="obat" id="obat">
    <div class="container">
        <div class="row" >
              <?php foreach($produk as $data) : ?>
              <div class="col-6 mt-5" data-aos="fade-up" data-aos-duration="600" data-aos-easing="linear">
                <div class="card mb-3" style="max-width: 540px">
                  <div class="row g-0">
                    <div class="col-md-4 d-flex align-items-center bg-secondary">
                      <img src="../foto/<?= $data['foto'] ?>" class="img-fluid rounded-start" width="500px" alt="..." />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title"><?= $data['nama_obat'] ?></h5>
                        <p class="card-text">Stok: <?= $data['stok'] ?></p>
                        <p class="card-text"><small class="text-muted"><?= $data['deskripsi'] ?></small></p>
                        <a href="ambilObat.php?id=<?= $data["id_obat"]; ?>" class="btn btn-success">Ambil</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="contact" id="contact">

    <div class="container">
          <div class="card-container">
            <div class="left">
              <div class="left-container">
                <h2>UKS ONLINE</h2>
                <p>kesehatan anda adalah prioritas kami</p>
                <br />
                <p>isi data anda</p>
              </div>
            </div>
            <div class="right">
              <div class="right-container">
                <form action="">
                  <h2 class="lg-view">Hubungi Kami</h2>
                  <h2 class="sm-view">Hubungi Kami</h2>
                  <input type="text" placeholder="Nama" />
                  <input type="email" placeholder="Alamat Email" />
                  <input type="phone" placeholder="Telepone" autocomplete="off" />
                  <textarea rows="10" placeholder="Pesan"></textarea>
                  <button>Kirim</button>
                </form>
              </div>
            </div>
          </div>
        </div>
</section>
<footer class="bottom" >
    <p><i><b>Created by group5</b></i></p>
</footer>
<!-- JavaScript Bundle with Popper -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>