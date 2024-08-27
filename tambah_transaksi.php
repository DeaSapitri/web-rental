<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_mobil = $_POST['id_mobil'];
    $id_costumer = $_POST['id_costumer'];
    $tgl_sewa = $_POST['tgl_sewa'];
    $tgl_kembali = $_POST['tgl_kembali'];

    $sql = "INSERT INTO transaksi (id_mobil, id_costumer, tgl_sewa, tgl_kembali) VALUES ('$id_mobil', '$id_costumer', '$tgl_sewa', '$tgl_kembali')";

    if ($conn->query($sql) === TRUE) {
        echo "Transaksi berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$sql_mobil = "SELECT id_mobil, nama_mobil FROM mobil";
$result_mobil = $conn->query($sql_mobil);

$sql_costumer = "SELECT id_costumer, nama_costumer FROM costumer";
$result_costumer = $conn->query($sql_costumer);
?>
<html>
    <head>
        <title>Tambah Transaksi</title>
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
        </style>
    </head>
    <body>
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
    </body>
</html>

<?php
$conn->close();
?>