<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Hasil</title>

	<link href="/UTS/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">SMK Assalaam</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="home.php">Home</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/UTS/kepsek/lihatdata.php">Kepala Sekolah</a></li>
					<li><a href="/UTS/penguji/lihatdata.php">Penguji</a></li>
					<li><a href="/UTS/jurusan/lihatdata.php">Jurusan</a></li>
					<li><a href="/UTS/pendaftar/lihatdata.php">Pendaftar</a></li>
					<li class="active"><a href="/UTS/hasil/lihatdata.php">Hasil</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<center><a href="tambah.php">&plus; Tambah Data</a></center>
		<br>
		<center>
			<div class="panel panel-primary">
				<div class="panel-heading"><center>Data Hasil</center></div>
				<div class="panel-body">
					<table class="table table-bordered">
						<th>Nomor</th>
						<th>Nama Pendaftar</th>
						<th>Nama Jurusan</th>
						<th>Nilai TPA</th>
						<th>Nilai Wawancara</th>
						<th>Nilai UAN</th>
						<th>Nilai Minat</th>
						<th>Nilai Rata</th>
						<th>Tahun Ajaran</th>
						<th>Keterangan</th>
						<th colspan="2">Action</th>
						<?php
						include ('koneksi.php');
						$hsl = mysqli_query ($koneksi, "SELECT hasil.id, hasil.nilai_tpa, hasil.nilai_wawancara, hasil.nilai_uan, hasil.nilai_minat, hasil.nilai_rata, hasil.tahun_ajaran,hasil.keterangan, pendaftar.nama as nama_pendaftar, jurusan.nama as nama_jurusan, penguji.nama as nama_penguji FROM hasil JOIN pendaftar on pendaftar.id = hasil.pendaftar_id JOIN jurusan on jurusan.id = hasil.jurusan_id JOIN penguji on penguji.id = hasil.penguji_id");
						$no = 1;
						foreach ($hsl as $data) {
							echo "<tr>
							<td>$no</td>
							<td>".$data['nama_pendaftar']."</td>
							<td>".$data['nama_jurusan']."</td>
							<td>".$data['nilai_tpa']."</td>
							<td>".$data['nilai_wawancara']."</td>
							<td>".$data['nilai_uan']."</td>
							<td>".$data['nilai_minat']."</td>
							<td>".$data['nilai_rata']."</td>
							<td>".$data['tahun_ajaran']."</td>
							<td>".$data['keterangan']."</td>
							<td><a href='edit.php?id=$data[id]'>Ubah</td>
							<td><a href='delete.php?id=$data[id]'>Hapus</td>
							</tr>";
							$no ++;
						}
						?>
					</table>
				</div>
			</div>
		</center>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/UTS/dist/js/bootstrap.min.js"></script>
</body>
</html>