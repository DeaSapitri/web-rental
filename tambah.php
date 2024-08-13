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
      <label for="merk_mobil">nama_mobil</label>
      <input type="text" id="merk_mobil" name="merk_mobil" required>

      <label for="warna">tahun</label>
      <input type="text" id="warna" name="warna" required>

      <label for="plat">warna</label>
      <input type="text" id="plat" name="plat" required>

      <label for="cc">harga</label>
      <input type="number" id="cc" name="cc" required>

      <label for="id_mobil">id_mobil</label>
      <select id="id_mobil" name="id_mobil" required>
        <?php
        include 'koneksi.php';
        $sql = "SELECT id_mobil, nama_mobil FROM mobil";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<option value="'.$row['id_mobil'].'">'.$row['nama_mobil'].'</option>';
            }
        } else {
            echo '<option value="">Tidak ada jenis tersedia</option>';
        }
        $conn->close();
        ?>
      </select>

      <input type="submit" value="Tambah">
    </form>
    <a class="btn-back" href="index.php">Kembali</a>
  </div>
</body>

</html>