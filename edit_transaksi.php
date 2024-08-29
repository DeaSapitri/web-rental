<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
	<h3>EDIT DATA TRANSAKSI</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id_transaksi'];
	$data = mysqli_query($koneksi,"select * from kendaraan where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_transaksi.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id_transaksi" value="<?php echo $d['id_transaksi']; ?>">
						<input type="number" name="id_mobil" value="<?php echo $d['id_mobil']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="id_costumer" value="<?php echo $d['id_costumer']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="tgl_sewa" value="<?php echo $d['tgl_sewa']; ?>"></td>
				</tr>
                <tr>
					<td>Alamat</td>
					<td><input type="text" name="tgl_kembali" value="<?php echo $d['tgl_kembali']; ?>"></td>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>