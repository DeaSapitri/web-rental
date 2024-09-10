<?php
include 'koneksi.php'; //Menghubungkan ke database
//mengecek apakah ID mobil diterima dari URL
if (isset($_GET['id'])) {
    $id_mobil = $_GET['id']; //mengambil IDmobil dari URL

    //mengambil data mobil berdasarkan ID dari database
    $sql = "SELECT * FROM mobil WHERE id_mobil = $id_mobil";
    $result = $conn->query($sql);
    $mobil = $result->fetch_assoc();


    //mengecek apakah form telah dikirim
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //mengambil data yang diinputkan pengguna dari form
        $nama_mobil = $_POST['nama_mobil'];
        $warna = $_POST['warna'];
        $tahun = $_POST['tahun'];
        $harga = $_POST['harga'];
        $id_kategori = $_POST['id_kategori'];

        //mengupdate data mobil dari database berdasarkan input dari form
        $sql = "UPDATE mobil SET
        nama_mobil='$nama_mobil',
        warna='$warna',
        tahun='$tahun',
        harga='$harga',
        id_kategori='$id_kategori'
        WHERE id_mobil=$id_mobil";

        //mengecek apakah proses update berhasil
        if ($conn->query($sql) === TRUE) {
            header("Location: datamobil.php"); 
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
    <title>Edit Data Mobil</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #4b7da3;
            padding-top: 20px;
            overflow-x: hidden;
        }

        .sidebar a {
            padding: 15px 25px;
            text-decoration: none;
            font-size: 18px;
            color: #f2f2f2;
            display: block;
        }

        .sidebar a:hover {
            background-color: #ddd;
            color: black;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #4b7da3;
            padding-top: 20px;
            overflow-x: hidden;
        }

        .sidebar a {
            padding: 15px 25px;
            text-decoration: none;
            font-size: 18px;
            color: #f2f2f2;
            display: block;
        }

        .sidebar a:hover {
            background-color: #ddd;
            color: black;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .container {
            text-align: left;
            padding: 16px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type=text],
        input[type=number],
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin-top: 8px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .btn-back {
            background-color: #555555;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 4px;
            display: inline-block;
            margin-top: 16px;
        }

        body {
                font-family: Arial, Helvetica, sans-serif;
            }
            .container {
                padding: 16px;
            }
            input[type=text], input[type=number], select {
                width: 100%;
                padding: 12px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type=submit] {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            input[type=submit]:hover {
                background-color: #45a049;
            }
    </style>
</head>
<body>
<div class="sidebar">
        <a href="dashboard.php">Dashboard</a>
        <a href="datamobil.php">Data Mobil</a>
        <a href="datacostumer.html">Data Customer</a>
        <a href="transaksi.php">Data Transaksi</a>
        <a href="logout.php" onclick="confirmLogout(event)">Logout</a>
    </div>

    <div class="content">
        <div class="navbar">
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="datamobil2.php">Mobil</a>
                <a href="about.php">About</a>
            </div>
            <div class="user-actions">
                <div class="username">
                    <?php
                    if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                        echo 'Hai, ' . $_SESSION['username'];
                    }
                    ?>
                </div>
            </div>
        </div>
    <h2>Edit Data Mobil</h2>
    <form method="POST">
        <!--menampilkan form dengan data mobil-->
        Nama Mobil: <input type="text" name="nama_mobil" value="<?php echo $mobil['nama_mobil']; ?>"><br>
        Warna: <input type="text" name="warna" value="<?php echo $mobil['warna']; ?>"><br>
        Tahun: <input type="text" name="tahun" value="<?php echo $mobil['tahun']; ?>"><br>
        Harga: <input type="text" name="harga" value="<?php echo $mobil['harga']; ?>"><br>
        Kategori: <input type="text" name="id_kategori" value="<?php echo $mobil['id_kategori']; ?>"><br>


        <!--tombol untuk perubahan-->
        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>