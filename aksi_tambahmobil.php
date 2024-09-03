<?php
include 'koneksi.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id_mobil = isset($_POST['id_mobil']) ? $_POST['id_mobil'] : NULL;
        $nama_mobil = isset($_POST['nama_mobil']) ? $_POST['nama_mobil'] : '';
        $warna = isset($_POST['warna']) ? $_POST['warna'] : '';
        $tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
        $harga = isset($_POST['harga']) ? $_POST['harga'] : '';
        $nama_kategori = isset($_POST['nama_kategori']) ? $_POST['nama_kategori'] : date('Y-m-d H:i:s');
        // Update the record
        $stmt = $pdo->prepare('UPDATE mobil SET id_mobil = ?, nama_mobil = ?, warna = ?, tahun = ?, harga = ?, nama_kategori = ? WHERE id = ?');
        $stmt->execute([$id_mobil, $nama_mobil, $warna, $tahun, $harga, $nama_kategori, $_GET['id_mobil']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM mobil WHERE id_mobil = ?');
    $stmt->execute([$_GET['id_mobil']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$mobil) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>