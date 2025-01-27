<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Ambil data mobil dari database
$sql = "SELECT m.id_mobil, m.nama_mobil, m.warna, m.tahun, m.gambar, m.harga, j.nama_kategori 
        FROM mobil m 
        JOIN kategori j ON m.id_kategori = j.id_kategori ORDER BY id_mobil";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mobil</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn {
            padding: 10px 15px;
            background-color: #b6895b;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }

        .action-btn {
            background-color: darkcyan;
            text-decoration: none;
            color: white;
            border: 1px solid blue;
            border-radius: 5px;
            padding: 5px;
            margin-top: 10px;
        }

        .actioan-btn:delete {
            background-color: darkcyan;
            text-decoration: none;
            color: white;
            border: 1px solid blue;
            border-radius: 5px;
            padding: 5px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <a href="dashboard.php">Dashboard</a>
        <a href="datamobil.php">Data Mobil</a>
        <a href="#customer">Data Customer</a>
        <a href="transaksi.php">Data Transaksi</a>
        <a href="logout.php" onclick="confirmLogout(event)">Logout</a>
    </div>

    <div class="content">
        <div class="navbar">
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="index.php">Mobil</a>
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
        <h1>Data Mobil</h1>
        <a class="btn" href="tambah_mobil.php">+ Tambah Data Mobil</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Mobil</th>
                    <th>Warna</th>
                    <th>Tahun</th>
                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                        <td>" . $row["id_mobil"] . "</td>
                        <td>" . $row["nama_mobil"] . "</td>
                        <td>" . $row["warna"] . "</td>
                        <td>" . $row["tahun"] . "</td>
                        <td>" . $row["harga"] . "</td>
                        <td>" . $row["nama_kategori"] . "</td>
                        <td>
                        <a class='action-btn' href='edit_mobil.php?id="  . $row['id_mobil'] . "'>Edit</a>
                        <a class='action-btn delete' href='hapus_mobil.php?id=" . $row['id_mobil']  . $row['id_mobil'] . "' onclick='return confirm(\"Yakin ingin menghapus data ini?\");'>Hapus</a>
                        </td>
                    </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>Tidak ada data mobil yang ditemukan</td></tr>";
                }
                ?>
            </tbody>
        </table>
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

</html