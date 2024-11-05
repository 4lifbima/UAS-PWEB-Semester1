<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pengaduan masyarakat</title>
    <!-- <link rel="stylesheet" href="style.css"> Menghubungkan file CSS eksternal -->
    <style>
    /* Styling untuk seluruh halaman */
body {
    background-color: #003366; /* Latar belakang biru tua */
    color: white; /* Teks berwarna putih untuk kontras yang baik */
    font-family: Arial, sans-serif; /* Menetapkan font yang lebih baik */
}

/* Styling untuk tabel */
table {
    border-collapse: collapse;
    width: 60%; /* Bisa diubah sesuai kebutuhan */
    margin: 20px auto; /* Memposisikan tabel di tengah */
    border-radius: 8px; /* Membuat sudut tabel melengkung */
    overflow: hidden; /* Menyembunyikan elemen yang melampaui batas */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); /* Memberikan efek bayangan yang lebih jelas */
    background-color: #e6f7ff; /* Latar belakang tabel biru muda */
}

table, th, td {
    border: 1px solid black; /* Garis hitam untuk tabel */
    padding: 12px; /* Padding yang lebih besar untuk tampil lebih rapi */
    text-align: center; /* Memusatkan teks di dalam sel */
}

th {
    background-color: #0000FF; /* Latar belakang biru tua yang lebih gelap */
    color: white; /* Teks putih */
    font-weight: bold; /* Menebalkan teks */
}

td {
    background-color: #0000FF; /* Warna biru muda untuk sel */
}

tr:nth-child(even) {
    background-color: #d1e9ff; /* Warna selang-seling */
}

tr:hover {
    background-color: #b3d7ff; /* Warna saat di-hover */
}

    </style>
</head>
<?php
include "koneksi.php";

if (isset($_POST['proses'])) {
   
    // Menggabungkan hobi menjadi string
    $hobi = implode(", ", $_POST['hobi']);

    // Menyusun query INSERT dengan tabel yang benar
    $query = "INSERT INTO masyarakat (nama, judul_pengaduan, deskripsi_pengaduan, tanggal, foto) 
              VALUES (
                  '$_POST[nama]', 
                  '$_POST[judul_pengaduan]',  
                  '$_POST[deskripsi_pengaduan]', 
                  '$_POST[tanggal]', 
                  '$_POST[foto]', 
              )";

    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil disimpan!";
         header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Data gagal disimpan:(" . mysqli_error($koneksi);
    }
}
?>

<link rel="stylesheet" href="styles.css">
<table class="tabel">
    <tr>
        <td>No.</td>
        <td>Judul Pengaduan</td>
        <td>Deskripsi Pengaduan</td>
        <td>Tanggal</td>
        <td>Foto</td>
    </tr>
    <?php
    $no = 1;
    $data_pengaduan = mysqli_query($koneksi, "SELECT * FROM masyarakat ORDER BY tanggal ASC"); 
    while ($tampil_pengaduan = mysqli_fetch_array($data_pengaduan)) {
        ?>
        <tr>
            <td><?= $no++; ?>.</td>
            <td><?= $tampil_pengaduan['nama']; ?></td>
            <td><?= $tampil_pengaduan['judul_pengaduan']; ?></td>
            <td><?= $tampil_pengaduan['deskripsi_pengaduan']; ?></td>
            <td><?= $tampil_pengaduan['tanggal']; ?></td>
            <td><?= $tampil_pengaduan['foto']; ?></td>
        </tr>
    <?php } ?>
</table>
</html>