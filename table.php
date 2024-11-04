<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Formulir</title>
    <link rel="stylesheet" href="styles.css"> <!-- Menghubungkan file CSS eksternal -->
</head>
<?php
include "koneksi.php";

if (isset($_POST['proses'])) {
   
    // Menggabungkan hobi menjadi string
    $hobi = implode(", ", $_POST['hobi']);

    // Menyusun query INSERT dengan tabel yang benar
    $query = "INSERT INTO formulir (nama, judul_pengaduan, deskripsi_pengaduan, tanggal, foto) 
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
        <td>Nama Mahasiswa</td>
        <td>Email</td>
        <td>NIM</td>
        <td>Jurusan</td>
        <td>Jenis Kelamin</td>
        <td>Hobi</td>
        <td>Tanggal Lahir</td>
        <td>Keterangan</td>
    </tr>
    <?php
    $no = 1;
    $data_mhs = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY nama ASC"); 
    while ($tampil_mhs = mysqli_fetch_array($data_mhs)) {
        ?>
        <tr>
            <td><?= $no++; ?>.</td>
            <td><?= $tampil_mhs['nama']; ?></td>
            <td><?= $tampil_mhs['surel']; ?></td>
            <td><?= $tampil_mhs['nim']; ?></td>
            <td><?= $tampil_mhs['jurusan']; ?></td>
            <td><?= $tampil_mhs['jenis_kelamin']; ?></td>
            <td><?= $tampil_mhs['hobi']; ?></td>
            <td><?= $tampil_mhs['tanggal_lahir']; ?></td>
            <td><?= $tampil_mhs['pesan']; ?></td>
        </tr>
    <?php } ?>
</table>
</html>