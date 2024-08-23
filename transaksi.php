<?php
include 'koneksi.php';

$sql = "SELECT transaksi.id_transaksi, mobil.nama_mobil, customer.nama, transaksi.tgl_sewa, transaksi.tgl_kembali
        FROM transaksi
        JOIN mobil ON transaksi.id_mobil = mobil.id_mobil
        JOIN customer ON transaksi.id_customer = customer.id_customer";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID Transaksi</th><th>Merk_mobil</th><th>Nama Customer</th><th>Tanggal Sewa</th><th>Tanggal Kembali</th><th>Aksi</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["id_transaksi"]."</td>
        <td>".$row["nama_mobil"]."</td>
        <td>".$row["nama"]."</td>
        <td>".$row["tgl_sewa"]."</td>
        <td>".$row["tgl_kembali"]."</td>
        <td><a href='edit_transaksi.php?id=".$row["id_transaksi"]."'>Edit</a> | <a href='hapus_transaksi.php?id=".$row["id_transaksi"]."'>Hapus</a></td>
        </tr>";

    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

    
