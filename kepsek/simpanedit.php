<?php
include ('koneksi.php');

$id		= $_POST ['id'];
$nip	= $_POST ['nip'];
$nama	= $_POST ['nama'];

$edit	= "UPDATE kepsek SET nip='$nip', nama='$nama' WHERE id='$id'";

mysqli_query ($koneksi, $edit);
header ('location:lihatdata.php');
?>