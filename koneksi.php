<?php
$host = "localhost";	//nama host
$user = "root";	//username phpMyAdmin
$pass = "";	//password phpMyAdmin
$name = "sekolah_nama";	//nama database

$koneksi = mysqli_connect($host, $user, $pass, $name) or die("Koneksi ke database gagal!");
//mysqli_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>
