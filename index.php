<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KELOMPOK 3 | PWEB</title>
    <link rel="shortcut icon" href="img/megaphone.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
    <div class="navbar">
        <div class="logo">
            <a href="#"> <i class="fa fa-bullhorn" aria-hidden="true"></i> PENGADUAN</a>
        </div>
        <div class="hamburger" onclick="toggleMenu()">
            <i class="fa fa-bars"></i>
        </div>
        <div class="menu">
            <a href="#" class="active"><i class="fa fa-home"></i> Beranda</a>
            <a href="#tentang"><i class="fa fa-users"></i> Myteam</a>
            <a href="form.php"><i class="fa fa-file-text"></i> Pengaduan</a>
            <a href="table.php"><i class="fa fa-table"></i> Table</a>
        </div>
    </div>
    </header>

    <!-- Herro SECTION -->
     <section class="herro" id="home">
        <div class="herro-text" data-aos="fade-right" data-aos-duration="1500">
            <h1>Selamat Datang di Pengaduan Masyarakat</h1>
            <p> Pengaduan masyarakat adalah laporan dari masyarakat mengenai adanya indikasi terjadinya penyimpangan, korupsi, kolusi dan nepotisme yang dilakukan aparat pemerintah daerah dalam penyelenggaraan pemerintahan.</p>
        </div>
        <div class="herro-image" data-aos="fade-up" data-aos-duration="1500">
            <img src="img/hero1.png" alt="Gambar Hero" />
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="about" id="tentang">
        <h1 class="section-title" style="text-align:center; color: #ffffff;">My-team</h1>
        <div class="about-cards">
            <!-- Card 1 -->
            <div class="about-card" data-aos="fade-up" data-aos-duration="1000">
                <img src="img/pakrahmat.png" alt="Member Image">
                <h3>Rahmat Taufik R.I Bau, M.Kom.</h3>
                <p>Dosen Pengampu</p>
            </div>
            <!-- Card 2 -->
            <div class="about-card" data-aos="fade-up" data-aos-duration="1500">
                <img src="img/alif.png" alt="Member Image">
                <h3>Alif Bima Pradana</h3>
                <p>Backend Developer</p>
            </div>
            <!-- Card 3 -->
            <div class="about-card" data-aos="fade-up" data-aos-duration="2000">
                <img src="img/indah.png" alt="Member Image">
                <h3>Indah Belastri Sibran</h3>
                <p>Frontend Developer</p>
            </div>
            <!-- Card 4 -->
            <div class="about-card" data-aos="fade-up" data-aos-duration="2500">
                <img src="img/dhimaz.png" alt="Member Image">
                <h3>Dhimaz Pramudya Lasabang</h3>
                <p>Frontend Developer</p>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <p>&copy; 2024 Kelompok 3 - Pengaduan Masyarakat.</p>
        <p>Hak Cipta Dilindungi Oleh Undang-undang
        </p>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
