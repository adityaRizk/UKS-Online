<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        nav{
      background-color: #96dfaa;
      width: 100%;
      z-index: 99999;
    }
        body{
            background: url("foto/back.jpg") no-repeat ;
            
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
        h6,h1{
            color: white;
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
          <a class="nav-link active" onClick="confirm('Silahkan login terlebih dahulu')" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" onClick="confirm('Silahkan login terlebih dahulu')" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onClick="confirm('Silahkan login terlebih dahulu')" href="#">Form kunjungan</a>
        </li>
        <li class="nav-item">
          <?php if(isset($_SESSION["username"])) : ?>
              <li class="nav-item">
                <a href="#" class="btn px-4 py-2 me-3">welcome<?= $_SESSION["nama_lengkap"]; ?></a>
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
    <div class="container">
        <div class="row">
    <div class="col-12 text-center">
        <div class="shad"></div>
        <div class="kot">
            <h1>Welcome to RPL Healtcare</h1>
            <h6>Ini adalah website yang dibuat oleh anak-anak RPL, Sebelum mask silahkan login terlebih dahulu : ) </p>
        </div>
        
        </div>
        
    </div>
    </div>

</body>
</html>