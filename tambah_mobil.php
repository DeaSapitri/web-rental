<?php
session_start();
include 'koneksi.php';


if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
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
        <a href="tambah_transaksi.php">Data Transaksi</a>
        <a href="logout.php" onclick="confirmLogout(event)">Logout</a>
    </div>

    <div class="content">
        <div class="navbar">
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="datamobil.php">Mobil</a>
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
        <!--  konten admin -->
        <h1>Tambah Mobil</h1>
        <div class="container">
            <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
                <label for="nama_mobil">Merk</label>
                <input type="text" id="nama_mobil" name="nama_mobil" required>

                <label for="warna">Warna</label>
                <input type="text" id="warna" name="warna" required>

                <label for="tahun">Tahun</label>
                <input type="number" id="tahun" name="tahun" required>

                <label for="id_kategori">Jenis</label>
                <select id="id_kategori" name="id_kategori" required>
                    <?php
                    include 'koneksi.php';
                    $sql = "SELECT id_kategori, nama_kategori FROM kategori";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['id_kategori'] . '">' . $row['nama_kategori'] . '</option>';
                        }
                    } else {
                        echo '<option value="">Tidak ada jenis tersedia</option>';
                    }
                    $conn->close();
                    ?>
                </select>

                <label for="harga">Harga</label>
                <input type="number" name="harga" id="harga" required>

                <input type="submit" value="Tambah">
            </form>
            <br>
            <a class="btn-back" href="dashboard.php">Kembali</a>
        </div>
    </div>
    <form method="post" action="">
        Nama Mobil: 
        <select name="id_mobil">
            <?php while($row = $result_mobil->fetch_assoc()) { ?>
                <option value="<?php echo $row['id_mobil']; ?>"><?php echo $row['nama_mobil']; ?></option>
            <?php } ?>
        </select><br>
        
        Nama costumer: 
        <select name="id_costumer">
            <?php while($row = $result_costumer->fetch_assoc()) { ?>
                <option value="<?php echo $row['id_costumer']; ?>"><?php echo $row['nama_costumer']; ?></option>
            <?php } ?>
        </select><br>

        Tanggal Sewa: <input type="date" name="tgl_sewa"><br>
        Tanggal Kembali: <input type="date" name="tgl_kembali"><br>
        <input type="submit" value="Tambah Transaksi">
    </form> 
    </div>

    <script>
        function confirmLogout(event) {
            event.preventDefault();
            var confirmLogout = confirm("Apakah Anda yakin ingin logout?");
            if (confirmLogout) {
                window.location.href = event.target.href;
            }
        }
    </script>
</body>

</html>