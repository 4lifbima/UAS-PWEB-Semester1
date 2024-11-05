<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KELOMPOK 3 | PWEB</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            font-family: "Quicksand", serif;
        }
        .form-pengaduan {
            max-width: 950px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
        }

        .form-pengaduan h2 {
            text-align: center;
            color: #ffffff;
        }

        .form-pengaduan label {
            display: block;
            margin-top: 10px;
            color: #ffffff;
            font-weight: bold;
        }

        .form-pengaduan input[type="text"],
        .form-pengaduan textarea,
        .form-pengaduan input[type="date"],
        .form-pengaduan input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #cccccc2c;
            background-color: #ffffff17;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-pengaduan textarea::-webkit-input-placeholder{
            color: #ffffff;
        }
        .form-pengaduan input,::-webkit-input-placeholder{
            color: #ffffff;
        }

        .form-pengaduan textarea {
            resize: vertical;
        }

        .form-pengaduan button {
            width: 100%;
            padding: 12px;
            background-color: #110253;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            
        }

        .form-pengaduan button:hover {
            background-color: #12288a;
        }
    </style>
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
            <a href="/"><i class="fa fa-home"></i> Beranda</a>
            <a href="index.php#tentang"><i class="fa fa-info-circle"></i> Tentang</a>
            <a href="form.html"><i class="fa fa-bullhorn"></i> Pengaduan</a>
            <a href="table.html"><i class="fa fa-table"></i> Table</a>
        </div>
    </div>
    </header>

    <!-- Section Form Pengaduan -->
    <section class="form-pengaduan" data-aos="zoom-out" data-aos-duration="1000">
        <h2>Form Pengaduan</h2>
        <form action="aksi_pengaduan.php" method="POST" enctype="multipart/form-data">
            <label for="judul">Nama Pengadu:</label>
            <input type="text" id="nama" name="nama" required placeholder="Nama Pengadu">

            <label for="judul">Judul Pengaduan:</label>
            <input type="text" id="judul" name="judul" required placeholder="Masukkan judul pengaduan">

            <label for="deskripsi">Deskripsi Pengaduan:</label>
            <textarea id="deskripsi" name="deskripsi" rows="4" required placeholder="Masukkan deskripsi pengaduan"></textarea>

            <label for="tanggal">Tanggal Pengaduan:</label>
            <input type="date" id="tanggal" name="tanggal" required>

            <label for="foto">Foto Pengaduan:</label>
            <input type="file" id="foto" name="foto" accept="image/*">

            <button type="submit" name="tambah">Kirim </button>
        </form>
    </section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>