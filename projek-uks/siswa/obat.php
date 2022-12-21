<?php 
require '../nav/navsiswa.php'; 
require 'function.php';

$produk = query("SELECT * FROM data_obat");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <style>
      .data {
        padding-top: 100px;
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
    <div class="container data">
      <div class="row">
        <?php foreach($produk as $data) : ?>
        <div class="col-5">
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
                  <a href="ambilObat.php?id=<?= $data["id_obat"]; ?>" class="btn btn-primary">Ambil</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <footer class="bottom" >
    <p><i><b>Created by group5</b></i></p>
</footer>
  </body>
</html>
