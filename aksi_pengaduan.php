<?php
    include "koneksi.php";

    $nama= $_POST['nama'];
    $judul= $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $nomor= $_POST['no_telp'];
    $foto =$_FILES['foto']['name'];
    $dir ="upload/";
    $tmpFile = $_FILES['foto']['tmp_name'];

    // memngirim foto ke folder tujuan yang telah di inputkan pada form
    move_uploaded_file($tmpFile, $dir.$foto);

    $query = "INSERT INTO pengaduan(nama, judul, deskripsi, notelp, foto) VALUES('$nama', '$judul', '$deskripsi', '$nomor', '$foto')";
    $sql = mysqli_query($conn, $query);
            if($sql){
                header("location: table.php");
            }else{
                echo "Data gagal disimpan:(" . mysqli_error($koneksi);
            }


?>