<?php
// Ambil konfigurasi database dari environment variables
$host     = getenv('MYSQLHOST');
$user     = getenv('MYSQLUSER');
$password = getenv('MYSQLPASSWORD');
$dbname   = getenv('MYSQLDATABASE');

// Buat koneksi menggunakan mysqli
$koneksi = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
