<?php
$host = "localhost"; // atau bisa localhost jika server ada di mesin yang sama
$user = "root"; // nama pengguna MySQL
$pass = ""; // password MySQL
$db   = "login_system"; // nama database

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
