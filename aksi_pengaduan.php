<?php
    include "koneksi.php";

    $nama= $_POST['nama'];
    $judul= $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal= $_POST['tanggal'];
    $foto =$_FILES['foto']['name'];
    $dir ="upload/";
    $tmpFile = $_FILES['foto']['tmp_name'];

    // memngirim foto ke folder tujuan yang telah di inputkan pada form
    move_uploaded_file($tmpFile, $dir.$foto);

    $query = "INSERT INTO pengaduan(nama, judul, deskripsi, tanggal, foto) VALUES('$nama', '$judul', '$deskripsi', '$tanggal', '$foto')";
    $sql = mysqli_query($conn, $query);
            if($sql){
                header("location: index.php");
            }else{
                echo "Data gagal disimpan:(" . mysqli_error($koneksi);
            }


?>