<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = "simperpus_vsga2024";
$koneksi = mysqli_connect($host, $username, $password, $db);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
?>
