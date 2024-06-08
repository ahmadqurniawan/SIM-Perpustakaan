<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Buku</title>
    <link rel="stylesheet" href="bootstrap/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="beranda.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="anggota_read.php">Data Anggota</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buku_read.php">Data Buku</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transaksi_read.php">Data Transaksi</a>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        <div class="container mt-5">
        <h1>Form Isi Data</h1>

        <?php
        if(@$_GET['id']){
          include "simperpus/koneksi.php";
        $id =$_GET['id'];
        $query = "SELECT * FROM buku WHERE id_buku = '$id'";
        $buku = mysqli_fetch_array(mysqli_query($koneksi, $query));
        }
        ?>
          <form action="buku_act.php" method="post">
          <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name= "judul" value="<?=@$buku['judul_buku']?>" placeholder="masukan judul buku">
          </div>
          <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="tahun" class="form-control" id="tahun" name="tahun" value="<?=@$buku['tahun']?>" placeholder="Masukkan tahun terbit">
          </div>
          <div class="mb-3">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input type="pengarang" class="form-control" id="pengarang" name="pengarang" value="<?=@$buku['pengarang']?>" placeholder="Masukkan pengarang buku">
          </div>
          <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="penerbit" class="form-control" id="penerbit" name="penerbit" value="<?=@$buku['penerbit']?>" placeholder="Masukkan penerbit buku">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <input type="hidden" class="form-control" id="id_buku" name= "id_buku" value="<?=@$buku['id_buku']?>" placeholder="masukan nama anda">
        </form>
      </div>

    
    <script src="bootstrap/assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>