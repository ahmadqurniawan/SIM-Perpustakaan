<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota Form</title>
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
                <a class="nav-link active" aria-current="page" href="anggota-form.php">Data Anggota</a>
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
        $query = "SELECT * FROM anggota WHERE id_anggota = '$id'";
        $anggota = mysqli_fetch_array(mysqli_query($koneksi, $query));
        }
    
        ?>

        <form action="anggota_act.php" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name= "nama" value="<?=@$anggota['nama_anggota']?>" placeholder="masukan nama anda">
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="alamat" class="form-control" id="alamat" name="alamat" value="<?=@$anggota['alamat']?>" placeholder="Masukkan alamat Anda">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?=@$anggota['email']?>" placeholder="Masukkan alamat email Anda">
          </div>
          <div class="mb-3">
            <label for="telp" class="form-label">Telepon</label>
            <input type="tel" class="form-control" id="telp" name="telepon" value="<?=@$anggota['tlp']?>" placeholder="Masukkan nomor telepon Anda">
          </div>
          <div class="mb-3">
            <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenisKelamin" name="jenis_kelamin">
              <option selected disabled>Pilih jenis kelamin</option>
              <option value="Laki-laki" <?= (@$anggota['jenis_kelamin'] == 'Laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
              <option value="perempuan" <?= (@$anggota['jenis_kelamin'] == 'perempuan') ? 'selected' : '' ?>>Perempuan</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <input type="hidden" class="form-control" id="id_anggota" name= "id_anggota" value="<?=@$anggota['id_anggota']?>" placeholder="masukan nama anda">
        </form>
      </div>

    
    
    <script src="bootstrap/assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>