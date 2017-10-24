<?php
	include ('koneksi.php');

	$id		= $_POST['id'];
	$nama	= $_POST['nama'];
	$tl		= $_POST['tl'];
	$tgl	= $_POST['tgl'];
	$jk		= $_POST['jk'];
	$agama	= $_POST['agama'];
	$nt		= $_POST['nt'];
	
	$edit	= "UPDATE pendaftar SET nama='$nama', tempat_lahir='$tl', tanggal_lahir='$tgl', jenis_kelamin='$jk', agama='$agama', phone='$nt'";
	
	mysqli_query ($koneksi, $edit);
	header ('location:lihatdata.php');
?>