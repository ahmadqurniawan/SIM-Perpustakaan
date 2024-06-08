<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Data Buku</title>
    <link rel="stylesheet" href="bootstrap/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body>
<?php
    include "nav/nav.php";
    ?>
   
    <div class="container">
    <a href="buku.php">Tambah Data</a>
    <h1>Data Buku Perpustakaan - VSGA Magelang</h1>
    <?php
    include "simperpus/koneksi.php";
    $buku = mysqli_query($koneksi, "SELECT * FROM buku");
    ?>

<table class="table table-hover">
  <thead>
    <!-- Judul tabel anggota -->
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Judul</th>
      <th scope="col">Tahun</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Menu</th>

    </tr>

    <!-- Data Buku -->
    <?php
    foreach ($buku as $key => $value) {
      # code...
      $no = $key + 1;
    ?>
    <tr>
      <td><?= $no ?></td>
      <td><?= $value['judul_buku']?></td>
      <td><?= $value['tahun']?></td>
      <td><?= $value['pengarang']?></td>
      <td><?= $value['penerbit']?></td>
      <td>
        <div class="btn-group">
          <a href="buku.php?id=<?= $value['id_buku']?>" class="btn btn-warning">Edit</a>
        </div>
        <div class="btn-group">
          <a href="buku_act.php?id=<?= $value['id_buku']?>" class="btn btn-danger">Delete</a>
        </div>
      </td>
    </tr>
    <?php
    }
    ?>
  </thead>
  <script src="bootstrap/assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>