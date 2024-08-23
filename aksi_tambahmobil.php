<?php
	include "koneksi.php";
	$id=$_POST['mobil_id'];
	$merk=$_POST['mobil_nama'];
	$plat=$_POST['mobil_tahun'];
	$warna=$_POST['mobil_warna'];
	$tahun=$_POST['mobil_harga'];
	$sql="insert into kendaraan(mobil_id,mobil_nama,mobil_tahun,mobil_warna,mobil_harga)
	values('$id','$merk','$plat','$warna','$tahun','$status')";
	$query =mysqli_query($db_link,$sql);
	if ($query)
	{
	header ('location:datamobil.php');
	}
	else
	{
	echo "Gagal Disimpan --> <a href='tambah.php'> Kembali Ke Input Data";
	}
	?>