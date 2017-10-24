<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubah Data Kepala Sekolah</title>

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
					<li class="active"><a href="/UTS/kepsek/lihatdata.php">Kepala Sekolah</a></li>
					<li><a href="/UTS/penguji/lihatdata.php">Penguji</a></li>
					<li><a href="/UTS/jurusan/lihatdata.php">Jurusan</a></li>
					<li><a href="/UTS/pendaftar/lihatdata.php">Pendaftar</a></li>
					<li><a href="/UTS/hasil/lihatdata.php">Hasil</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<?php
		include ('koneksi.php');
		$id= $_GET['id'];
		$kep = mysqli_query ($koneksi, "SELECT * FROM kepsek WHERE id='$id'");
		$data = mysqli_fetch_array ($kep);
	?>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading"><center>Ubah Kepala Sekolah</center></div>
			<div class="panel-body">
				<form action="simpanedit.php" method="post">
					<input type="hidden" name="id" value="<?php echo $data['id'];?>">
					<p>
						<label>NIP</label> <br>
						<input type="text" name="nip" class="form-control" value="<?php echo $data['nip'];?>">
					</p>
					<p>
						<label>Nama</label> <br>
						<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>">
					</p>
					<p>
						<input type="submit" value="Ubah" class="btn btn-info">
					</p>
				</form>
			</div>
		</div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/UTS/dist/js/bootstrap.min.js"></script>
    <center><a href="lihatdata.php">&lt; Table Kepala Sekolah</a></center>
  </body>
</html>