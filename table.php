<?php include "koneksi.php";?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KELOMPOK 3 | PWEB</title>
    <link rel="shortcut icon" href="img/megaphone.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href="asset/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        /* Styling untuk tabel */
        table {
            border-collapse: collapse;
            width: 95%; /* Bisa diubah sesuai kebutuhan */
            margin: 20px auto; /* Memposisikan tabel di tengah */
            border-radius: 5px; /* Membuat sudut tabel melengkung */
            overflow: hidden; /* Menyembunyikan elemen yang melampaui batas */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); /* Memberikan efek bayangan yang lebih jelas */
            background-color: #e6f7ff; /* Latar belakang tabel biru muda */
        }

        table, th, td {
            border: 1px solid #000; /* Garis hitam untuk tabel */
            padding: 12px; /* Padding yang lebih besar untuk tampil lebih rapi */
            text-align: center; /* Memusatkan teks di dalam sel */
        }

        th {
            background-color: #8a8a9252; /* Latar belakang biru tua yang lebih gelap */
            color: white; /* Teks putih */
            font-weight: bold; /* Menebalkan teks */
        }

        td {
            background-color: #ffffff34; /* Warna biru muda untuk sel */
            color: #000;
        }

        tr:nth-child(even) {
            background-color: #ffffff34; /* Warna selang-seling */
        }

        tr:hover {
            background-color: #b3d7ff; /* Warna saat di-hover */
        }
        thead{
            background-color: #494a4d;
            color: white;
        }
        /* modal */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; 
            z-index: 100; 
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            background-color: rgba(0, 0, 0, 0.8); 
        }
        .modal-content {
            display: block;
            margin: auto;
            max-width: 80%;
        }
        .close {
            position: absolute;
            top: 20px;
            right: 35px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }
        /* item gallery glitch */
        .gallery-item {
        overflow: hidden;
        border-right: 3px solid var(--background-color);
        border-bottom: 3px solid var(--background-color);
        }

        .gallery-item img {
        transition: all ease-in-out 0.4s;
        }

        .gallery-item:hover img {
        transform: scale(1.1);
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
    <div class="navbar">
        <div class="logo">
            <a href="#"> <i class="fa fa-bullhorn"></i> PENGADUAN</a>
        </div>
        <div class="hamburger" onclick="toggleMenu()">
            <i class="fa fa-bars"></i>
        </div>
        <div class="menu">
            <a href="#"><i class="fa fa-home"></i> Beranda</a>
            <a href="index.php#tentang"><i class="fa fa-info-circle"></i> Tentang</a>
            <a href="form.php"><i class="fa fa-file-text"></i> Pengaduan</a>
            <a href="table.php"><i class="fa fa-table"></i> Table</a>
        </div>
    </div>
    </header>
    <div>
        <h2 align="center" style="color: white;"> Table Pengaduan</h2>
    </div>
        <!-- Table -->
        <table class="tabel" data-aos="zoom-in" data-aos-duration="1000">
            <thead>
            <tr>
                <td>No.</td>
                <td>Nama Pengadu</td>
                <td>Judul Pengaduan</td>
                <td>Deskripsi Pengaduan</td>
                <td>Foto</td>
            </tr>
            </thead>
        <?php
        $no = 1;
        $data_pengaduan = mysqli_query($conn, "SELECT * FROM pengaduan ORDER BY id_pengaduan ASC"); 
        while ($row = mysqli_fetch_array($data_pengaduan)) {
        ?>
        <tr>
            <td><?= $no++; ?>.</td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['judul']; ?></td>
            <td><?= $row['deskripsi']; ?></td>
            <td>
                <div class="gallery-item">
            <a href="upload/<?= $row['foto'];?>" class="glightbox" data-gallery="images-gallery">
                <img src="upload/<?= $row['foto'];?>" alt="" class="img-fluid" width="80">
              </a> </div></td>
        </tr>
    <?php } ?>
</table>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="asset/glightbox/js/glightbox.min.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
        const glightbox = GLightbox({
    selector: '.glightbox'
  });
    </script>
</body>
</html>