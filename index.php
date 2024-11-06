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

    <!-- Herro SECTION -->
     <section class="herro" id="home">
        <div class="herro-text" data-aos="fade-right" data-aos-duration="1000">
            <h1>Selamat Datang di Pengaduan Masyarakat</h1>
            <p> Pengaduan masyarakat adalah laporan dari masyarakat mengenai adanya indikasi terjadinya penyimpangan, korupsi, kolusi dan nepotisme yang dilakukan aparat pemerintah daerah dalam penyelenggaraan pemerintahan.  Tatacara pengaduan masyarakat pada Pemerintah Kabupaten Tegal diatur dalam Peraturan Bupati No. 10 Tahun 2015 tentang Pedoman Pengelolaan Pengaduan Masyarakat di Lingkungan Pemerintah Kabupaten Tegal.</p>
        </div>
        <div class="herro-image" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/Logo.png" alt="Gambar Hero" />
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="about" id="tentang">
        <h1 class="section-title" style="text-align:center; color: #ffffff;">My-team</h1>
        <div class="about-cards">
            <!-- Card 1 -->
            <div class="about-card" data-aos="fade-up" data-aos-duration="900">
                <img src="img/pakrahmat.png" alt="Member Image">
                <h3>Rahmat Taufik R.L Bau</h3>
                <p>Dosen Pengampu</p>
            </div>
            <!-- Card 2 -->
            <div class="about-card" data-aos="fade-up" data-aos-duration="1000">
                <img src="img/alif.png" alt="Member Image">
                <h3>Alif Bima Pradana</h3>
                <p>Backend Developer</p>
            </div>
            <!-- Card 3 -->
            <div class="about-card" data-aos="fade-up" data-aos-duration="1100">
                <img src="img/indah.png" alt="Member Image">
                <h3>Indah Belastri Sibran</h3>
                <p>Frontend Developer</p>
            </div>
            <!-- Card 4 -->
            <div class="about-card" data-aos="fade-up" data-aos-duration="1200">
                <img src="img/dhimaz.png" alt="Member Image">
                <h3>Dhimaz Pramudya Lasabang</h3>
                <p>UI/UX Designer</p>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <p>&copy; 2024 Kelompok 3 | Pengaduan Masyarakat.</p>
        <p>Follow us on social media: 
            <a href="" style="color:#ffffffcc;"><i class="fa fa-facebook-square"></i></a> | 
            <a href="https://github.com/4lifbima/UAS-PWEB-Semester1" style="color:#ffffffcc;"><i class="fa fa-github"></i></a> | 
            <a href="https://www.instagram.com/alifbimapradana07" style="color:#ffffffcc;"><i class="fa fa-instagram"></i></a>
        </p>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
