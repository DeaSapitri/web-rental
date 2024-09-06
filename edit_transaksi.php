<?php
include 'koneksi.php'; //Menghubungkan ke database
//mengecek apakah ID mobil diterima dari URL
if (isset($_GET['id'])) {
    $id_transaksi = $_GET['id']; //mengambil IDmobil dari URL

    //mengambil data mobil berdasarkan ID dari database
    $sql = "SELECT * FROM transaksi WHERE id_transaksi = $id_transaksi";
    $result = $conn->query($sql);
    $mobil = $result->fetch_assoc();


    //mengecek apakah form telah dikirim
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //mengambil data yang diinputkan pengguna dari form
        $merk_mobil = $_POST['merk_mobil'];
        $nama_costumer = $_POST['nama_costumer'];
        $tgl_sewa = $_POST['tgl_sewa'];
        $tgl_kembali = $_POST['tgl_kembali'];
        $id_mobil = $_POST['id_mobil'];

        //mengupdate data mobil dari database berdasarkan input dari form
        $sql = "UPDATE transaksi SET
        merk_mobil='$merk_mobil',
        nama_costumer='$nama_kostumer',
        tgl_sewa='$tahun',
        tgl_kembali='$harga',
        id_transaksi='$id_transaksi'
        WHERE id_mobil=$id_mobil";

        //mengecek apakah proses update berhasil
        if ($conn->query($sql) === TRUE) {
            header("Location: transaksi.php"); 
            exit;
        } else {
            //menampilkan pesan error jika gagal
            echo "Error updating record:" . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Transaksi</title>
</head>
<body>
    <h2>Edit Data Transaksi</h2>
    <form method="POST">
        <!--menampilkan form dengan data mobil-->
        Merk Mobil: <input type="text" name="merk_mobil" value="<?php echo $transaksi['merk_mobil']; ?>"><br>
        Nama Costumer: <input type="text" name="nama_costumer" value="<?php echo $transaksi['nama_costumer']; ?>"><br>
        Tanggal Sewa: <input type="text" name="tgl_sewa" value="<?php echo $transaksi['tgl_sewa']; ?>"><br>
        Tanggal Kembali: <input type="text" name="tgl_kembali" value="<?php echo $transaksi['tgl_kembali']; ?>"><br>
        ID Transaksi: <input type="text" name="id_mobil" value="<?php echo $transaksi['id_mobil']; ?>"><br>


        <!--tombol untuk perubahan-->
        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>