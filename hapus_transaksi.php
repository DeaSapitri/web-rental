<?php
include 'koneksi.php'; //koneksi database
//Cek jika ID transaksi diterima dari URL
if (isset($_GET['id'])) {
    $id_transaksi = $_GET['id'];
    //Query untuk menghapus data transaksi
    $sql = "DELETE FROM transaksi WHERE id_transaksi = $id_transaksi";
    if ($conn->query($sql) === TRUE) {
        header("Location: transaksi.php"); // Redirect setelah
        exit;
    } else {
        echo "Gagal menghapus: ".$conn->error;
    }
}
?>