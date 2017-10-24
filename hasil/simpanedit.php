<?php
	include ('koneksi.php');

	$id					= $_POST['id'];
	$pendaftar			= $_POST['nama_pendaftar'];
	$jurusan			= $_POST['nama_jurusan'];
	$nilai_tpa			= $_POST['nilai_tpa'];
	$nilai_wawancara	= $_POST['nilai_wawancara'];
	$nilai_uan			= $_POST['nilai_uan'];
	$nilai_minat		= $_POST['nilai_minat'];
	$penguji			= $_POST['nama_penguji'];
	$tahun_ajaran		= $_POST['tahun_ajaran'];

	$keterangan;
	$rata = ($nilai_tpa + $nilai_minat + $nilai_wawancara + $nilai_uan)/4;
	if($rata >=75){
		$keterangan='Anda Lulus';
	}
	if($rata <=75){
		$keterangan='Anda Tidak Lulus';
	} 
	$edit = "UPDATE hasil SET pendaftar_id='$pendaftar', jurusan_id='$jurusan', nilai_tpa='$nilai_tpa', nilai_wawancara='$nilai_wawancara', nilai_uan='$nilai_uan', nilai_minat='$nilai_minat', nilai_rata='$rata', penguji_id='$penguji', tahun_ajaran='$tahun_ajaran', keterangan='$keterangan' WHERE id='$id'";

	mysqli_query ($koneksi, $edit);
	header ('location:lihatdata.php');
?>