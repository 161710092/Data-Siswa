<?php
	include ('koneksi.php');

	$nama	= $_POST['nama'];
	$nl		= $_POST['nl'];
	
	$tambah	= "INSERT INTO jurusan SET nama='$nama', nilai_lulus='$nl'";

	mysqli_query ($koneksi, $tambah);
	header ('location:lihatdata.php');
?>