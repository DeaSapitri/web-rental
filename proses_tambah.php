<?php
include 'koneksi.php';

$nama_mobil = isset($_POST['nama_mobil']) ? $_POST['nama_mobil'] : '';
$warna = isset($_POST['warna']) ? $_POST['warna'] : '';
$tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
$id_kategori = isset($_POST['id_kategori']) ? $_POST['id_kategori'] : '';
$harga = isset($_POST['harga']) ? $_POST['harga'] : '';
$gambar = '';
{
    $sql = "INSERT INTO mobil (nama_mobil, warna, tahun, id_kategori, harga, gambar) 
            VALUES ('$nama_mobil', '$warna', $tahun, $id_kategori, $harga, '$gambar')";

    if ($conn->query($sql) === TRUE) {
        header("Location: datamobil.php"); 
        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>