<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Mobil</title>
  <style>
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
    .btn-back {
      background-color: #555555;
      color: white;
      text-decoration: none;
      padding: 10px 15px;
      border-radius: 4px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Tambah Mobil</h2>
    <form action="proses_tambah.php" method="post">
      <label for="nama_mobil">Merk</label>
      <input type="text" id="nama_mobil" name="nama_mobil" required>

      <label for="warna">Warna</label>
      <input type="text" id="warna" name="warna" required>

      <label for="harga">harga</label>
      <input type="text" id="harga" name="harga" required>

      

      <label for="tahun">Tahun</label>
      <input type="number" id="tahun" name="tahun" required>

      <label for="id_kategori">Jenis</label>
      <select id="id_kategori" name="id_kategori" required>
        <?php
        include 'koneksi.php';
        $sql = "SELECT id_kategori, nama_kategori FROM kategori";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<option value="'.$row['id_kategori'].'">'.$row['nama_kategori'].'</option>';
            }
        } else {
            echo '<option value="">Tidak ada jenis tersedia</option>';
        }
        $conn->close();
        ?>
      </select>

      <input type="submit" value="Tambah">
    </form>
    <br>
    <a class="btn-back" href="index.php">Kembali</a>
  </div>
</body>

</html>