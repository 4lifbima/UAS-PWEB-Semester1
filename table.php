<?php include "koneksi.php";?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KELOMPOK 3 | PWEB</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        /* Styling untuk tabel */
        table {
            border-collapse: collapse;
            width: 95%; /* Bisa diubah sesuai kebutuhan */
            margin: 20px auto; /* Memposisikan tabel di tengah */
            border-radius: 8px; /* Membuat sudut tabel melengkung */
            overflow: hidden; /* Menyembunyikan elemen yang melampaui batas */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); /* Memberikan efek bayangan yang lebih jelas */
            background-color: #e6f7ff; /* Latar belakang tabel biru muda */
        }

        table, th, td {
            border: 1px solid white; /* Garis hitam untuk tabel */
            padding: 12px; /* Padding yang lebih besar untuk tampil lebih rapi */
            text-align: center; /* Memusatkan teks di dalam sel */
        }

        th {
            background-color: #8a8a9252; /* Latar belakang biru tua yang lebih gelap */
            color: white; /* Teks putih */
            font-weight: bold; /* Menebalkan teks */
        }

        td {
            background-color: #8a8a9252; /* Warna biru muda untuk sel */
            color: #000;
        }

        tr:nth-child(even) {
            background-color: #fff; /* Warna selang-seling */
        }

        tr:hover {
            background-color: #b3d7ff; /* Warna saat di-hover */
        }
        thead{
            background-color: blue;
            color: white;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
    <div class="navbar">
        <div class="logo">
            <a href="#">PENGADUAN</a>
        </div>
        <div class="hamburger" onclick="toggleMenu()">
            <i class="fa fa-bars"></i>
        </div>
        <div class="menu">
            <a href="#"><i class="fa fa-home"></i> Beranda</a>
            <a href="#tentang"><i class="fa fa-info-circle"></i> Tentang</a>
            <a href="form.php"><i class="fa fa-bullhorn"></i> Pengaduan</a>
            <a href="table.php"><i class="fa fa-table"></i> Table</a>
        </div>
    </div>
    </header>
        <!-- Table -->
        <table class="tabel" data-aos="zoom-in" data-aos-duration="1000">
            <thead>
            <tr>
                <td>No.</td>
                <td>Nama Pengadu</td>
                <td>Judul Pengaduan</td>
                <td>Deskripsi Pengaduan</td>
                <td>Tanggal</td>
                <td>Foto</td>
            </tr>
            </thead>
        <?php
        $no = 1;
        $data_pengaduan = mysqli_query($conn, "SELECT * FROM pengaduan ORDER BY tanggal ASC"); 
        while ($row = mysqli_fetch_array($data_pengaduan)) {
        ?>
        <tr>
            <td><?= $no++; ?>.</td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['judul']; ?></td>
            <td><?= $row['deskripsi']; ?></td>
            <td><?= $row['tanggal']; ?></td>
            <td><img src="upload/<?= $row['foto']; ?>" width="90" alt=""></td>
        </tr>
    <?php } ?>
</table>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>  
</body>
</html>