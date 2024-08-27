<?php
	include "koneksi.php";
	$id=$_POST['transaksi_id'];
	$nama=$_POST['transaksi_karyawan'];
	$warna=$_POST['transaksi_mobil'];
	$tahun=$_POST['transaksi_tgl_kembali'];
	$status=$_POST['transaksi_tgl_pinjam'];
	$harga=$_POST['transaksi_harga'];
	$sql="insert into transaksi(transaksi_id,transaksi_karyawan,transaksi_kostumer,transaksi_mobil,transaksi_tgl_kembali,transaksi_tgl_pinjam,transaksi_harga)
	values('$id','$merk','$plat','$warna','$tahun','$status',$harga)";
	$query =mysqli_query($db_link,$sql);
	if ($query)
	{
	header ('location:datatransaksi.php');
	}
	else
	{
	echo "Gagal Disimpan --> <a href='tambahmobil.php'> Kembali Ke Input Data";
	}
	?>