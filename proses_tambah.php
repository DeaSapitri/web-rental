<?php
include 'koneksi.php';

$id_mobil = $_POST['id_mobil'];
$nama_mobil = $_POST['nama_mobil'];
$tahun = $_POST['tahun'];
$warna = $_POST['warna'];
$harga = $_POST['harga'];

$sql = "INSERT INTO mobil (id_mobil, nama_mobil, tahun, warna, harga) VALUES ('$id_mobil', '$nama_mobil', '$tahun', $warna, $harga)";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan. <a href='index.php'>Kembali</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>