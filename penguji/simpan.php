<?php
include ('koneksi.php');

$nama		= $_POST['nama'];
$jabatan	= $_POST['jabatan'];

$tambah		= "INSERT INTO penguji SET nama='$nama', jabatan='$jabatan'";

mysqli_query ($koneksi, $tambah);
header ('location:lihatdata.php');
?>