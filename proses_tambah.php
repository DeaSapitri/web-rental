<?php
include 'koneksi.php';

$nama_mobil = isset($_POST['nama_mobil']) ? $_POST['nama_mobil'] : '';
$warna = isset($_POST['warna']) ? $_POST['warna'] : '';
$tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
$id_kategori = isset($_POST['id_kategori']) ? $_POST['id_kategori'] : '';
$harga = isset($_POST['harga']) ? $_POST['harga'] : '';
$gambar = '';

if (empty($nama_mobil) || empty($warna) || empty($tahun) || empty($id_kategori) || empty($harga)) {
    echo "Semua field harus diisi. <a href='index.php'>Kembali</a>";
} else {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check === false) {
        $uploadOk = 0;
        echo "File bukan gambar. <a href='index.php'>Kembali</a>";
    }

    if (file_exists($target_file)) {
        $uploadOk = 0;
        echo "File sudah ada. <a href='index.php'>Kembali</a>";
    }

    if ($_FILES["gambar"]["size"] > 5000000) {
        $uploadOk = 0;
        echo "Ukuran file terlalu besar. <a href='index.php'>Kembali</a>";
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $uploadOk = 0;
        echo "Hanya format JPG, JPEG, PNG, & GIF yang diperbolehkan. <a href='index.php'>Kembali</a>";
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            $gambar = $target_file;
        } else {
            echo "Terjadi kesalahan saat mengunggah file. <a href='index.php'>Kembali</a>";
            exit();
        }
    } else {
        exit();
    }

    $sql = "INSERT INTO mobil (nama_mobil, warna, tahun, id_kategori, harga, gambar) 
            VALUES ('$nama_mobil', '$warna', $tahun, $id_kategori, $harga, '$gambar')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); 
        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>