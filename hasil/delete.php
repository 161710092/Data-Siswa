<?php
	include ('koneksi.php');

	$id = $_GET['id'];
	$delete = "DELETE FROM hasil WHERE id='$id'";

	mysqli_query ($koneksi, $delete);
	header ('location:lihatdata.php');
?>