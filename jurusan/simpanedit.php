<?php
	include ('koneksi.php');

	$id		= $_POST['id'];
	$nama	= $_POST['nama'];
	$nl		= $_POST['nl'];

	$edit	= "UPDATE jurusan SET nama='$nama', nilai_lulus='$nl' WHERE id='$id'";

	mysqli_query ($koneksi, $edit);
	header ('location:lihatdata.php');
?>