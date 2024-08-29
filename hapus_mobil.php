<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_transaksi'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from kendaraan where id='$id_transaksi'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>