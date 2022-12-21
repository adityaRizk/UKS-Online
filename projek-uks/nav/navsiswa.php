<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
    nav{
      background-color: #96dfaa;
      width: 100%;
      z-index: 99999;
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
          <a class="nav-link" href="kunjungan.php">Form kunjungan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="persetujuan.php">Persetujuan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>
        <li class="nav-item">
          <?php if(isset($_SESSION["username"])) : ?>
              <li class="nav-item">
                <a href="#" class="btn px-4 py-2 me-3">welcome <?= $_SESSION["nama_lengkap"]; ?></a>
              </li>
              <li class="nav-item">
                <a href="../logout.php" class="btn btn-outline-primary px-4 py-2 ">logout</a>
              </li>
              <?php endif; ?>

              <?php if(!isset($_SESSION["username"])) : ?>
              <li class="nav-item">
                <a href="../login/index.php" class="btn btn-primary px-4 py-2 me-3">login</a>
              </li>
              <li class="nav-item">
                <a href="../register/index.php" class="btn btn-outline-primary px-4 py-2 ">register</a>
              </li>
              <?php endif; ?>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>

</body>
</html>