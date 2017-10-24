<?php
include ('koneksi.php');

$id			= $_POST['id'];
$nama		= $_POST['nama'];
$jabatan	= $_POST['jabatan'];

$edit		= "UPDATE pengujis SET nama='$nama', jabatan='$jabatan' WHERE id='$id'";

mysqli_query ($koneksi, $edit);
header ('location:lihatdata.php');
?>