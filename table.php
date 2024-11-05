<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pengaduan masyarakat</title>
    <link rel="stylesheet" href="styles.css"> <!-- Menghubungkan file CSS eksternal -->
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