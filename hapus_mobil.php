<?php
include 'koneksi.php'; //koneksi database
//Cek jika ID mobil diterima dari URL
if (isset($_GET['id'])) {
    $id_mobil = $_GET['id'];
    //Query untuk menghapus data mobil
    $sql = "DELETE FROM mobil WHERE id_mobil = $id_mobil";
    if ($conn->query($sql) === TRUE) {
        header("Location: datamobil.php"); // Redirect setelah
        exit;
    } else {
        echo "Gagal menghapus: ".$conn->error;
    }
}
?>