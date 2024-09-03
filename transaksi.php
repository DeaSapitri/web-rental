<?php
include 'koneksi.php';

$sql = "SELECT transaksi.id_transaksi, mobil.nama_mobil, costumer.nama_costumer, transaksi.tgl_sewa, transaksi.tgl_kembali
        FROM transaksi
        JOIN mobil ON transaksi.id_mobil = mobil.id_mobil
        JOIN costumer ON transaksi.id_costumer = costumer.id_costumer";

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
        <a class="btn" href="tambah_transaksi.php">+ Tambah Data Transaksi</a>
        <table>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    echo "<table border='1'><tr><th>ID Transaksi</th><th>Merk Mobil</th><th>Nama costumer</th><th>Tanggal Sewa</th><th>Tanggal Kembali</th><th>Aksi</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
            <td>" . $row["id_transaksi"] . "</td>
            <td>" . $row["nama_mobil"] . "</td>
            <td>" . $row["nama_costumer"] . "</td>
            <td>" . $row["tgl_sewa"] . "</td>
            <td>" . $row["tgl_kembali"] . "</td>
            <td><a href='edit_transaksi.php?id=" . $row["id_transaksi"] . "'>Edit</a> | <a href='hapus_transaksi.php?id=" . $row["id_transaksi"] . "'>Hapus</a></td>
        </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
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
$conn->close();
?>