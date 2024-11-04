<?php
$koneksi = mysqli_connect("localhost", "root", "", "formulir");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>