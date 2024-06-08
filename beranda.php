<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="bootstrap/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
        <div class="container">
          <a class="navbar-brand" href="beranda.php">SIM Perpustakaan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="anggota_read.php">Data Anggota</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buku_read.php">Data Buku</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transaksi_read.php">Data Transaksi</a>
              </li>
              </li>
            </ul>
            <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          </div>
        </div>
      </nav>

      <div class="container mb-5">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h1>Selamat Datang diPerpustakaan SIM</h1>
                    <br>
                    <p>
                    Sistem perpustakaan online adalah platform digital yang memungkinkan akses terhadap koleksi informasi, termasuk buku, jurnal, artikel, dan sumber daya lainnya, melalui internet. Dibandingkan dengan perpustakaan konvensional, sistem ini memanfaatkan teknologi untuk menyediakan akses yang lebih mudah, cepat, dan efisien bagi pengguna. Pengguna dapat melakukan pencarian, peminjaman, dan pengembalian secara online, tanpa harus mengunjungi fisik perpustakaan. Fitur pencarian canggih memungkinkan pengguna untuk menemukan materi yang mereka butuhkan dengan cepat, sementara peminjaman dan pengembalian digital meminimalkan waktu dan usaha yang diperlukan. Sistem perpustakaan online juga mendukung manajemen koleksi yang efisien, memungkinkan pengelola untuk melacak inventaris dengan lebih baik dan membuat keputusan pembelian yang lebih terinformasi. Melalui sistem ini, perpustakaan dapat menjadi sumber daya penting dalam mendukung pendidikan, penelitian, dan pengembangan masyarakat secara menyeluruh.
                    </p>
                </div>
            </div>
        </div>
      </div>

    <div class="container">
        <div class="row ">
            <div class="col-lg-3">
            <img src="img/img-1.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3">
            <img src="img/img-2.jpeg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3">
                <img src="img/img-3.jpg" alt="" class="img-fluid">
            </div>

            <div class="col-lg-3">
                <img src="img/img-4.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <?php
    include "footer.php";
    ?>

    <script src="bootstrap/assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>