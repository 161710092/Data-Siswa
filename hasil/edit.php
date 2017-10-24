<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Data Hasil</title>

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

    <?php
		include ('koneksi.php');
		$id = $_GET['id'];
		$hsl = mysqli_query ($koneksi, "SELECT * FROM hasil WHERE id='$id'");
		$data = mysqli_fetch_array ($hsl);
	?>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading"><center>Ubah Data Hasil</center></div>
			<div class="panel-body">
				<form action="simpanedit.php" method="post">
					<input type="hidden" name="id" value="<?php echo $data['id'];?>">
					<p>
						<label>Nama Pendaftar</label><br>
							<?php
							include ('koneksi.php');
							$pend = mysqli_query ($koneksi, "SELECT * FROM pendaftar");
							?>
							<select name="nama_pendaftar" class="form-control">
								<?php
								foreach ($pend as $datapnd) {
									?>
									<option value="<?php echo $datapnd['id']; ?>">
										<?php echo $datapnd['nama']; ?>
									</option>
									<?php
								}
								?>
							</select>
					</p>
					<p>
						<label>Nama Jurusan</label> <br>
							<?php
							include ('koneksi.php');
							$ju = mysqli_query ($koneksi, "SELECT * FROM jurusan");
							?>
							<select name="nama_jurusan" class="form-control">
								<?php
								foreach ($ju as $datajrs) {
									?>
									<option value="<?php echo $datajrs['id']; ?>">
										<?php echo $datajrs['nama']; ?>
									</option>
									<?php
								}
								?>
							</select>
					</p>
					<p>
						<label>Nilai TPA</label> <br>
						<input type="text" class="form-control" name="nilai_tpa" value="<?php echo $data['nilai_tpa'];?>">
					</p>
					<p>
						<label>Nilai Wawancara</label> <br>
						<input type="text" class="form-control" name="nilai_wawancara" value="<?php echo $data['nilai_wawancara'];?>">
					</p>
					<p>
						<label>Nilai UAN</label> <br>
						<input type="text" class="form-control" name="nilai_uan" value="<?php echo $data['nilai_uan'];?>">
					</p>
					<p>
						<label>Nilai Minat</label> <br>
						<input type="text" class="form-control" name="nilai_minat" value="<?php echo $data['nilai_minat'];?>">
					</p>
					<p>
						<input type="hidden" class="form-control" name="nilai_rata" value="<?php echo $data['nilai_rata'];?>">
					</p>
					<P>
						<label>Penguji</label> <br>
							<?php
							include ('koneksi.php');
							$pen = mysqli_query ($koneksi, "SELECT * FROM penguji");
							?>
							<select name="nama_penguji" class="form-control">
								<?php
								foreach ($pen as $datapng) {
									?>
									<option value="<?php echo $datapng['id'];?>">
										<?php echo $datapng['nama']?>
									</option>
									<?php
								}
								?>
							</select>
					</P>
					<p>
						<label>Tahun Ajaran</label> <br>
						<input type="text" class="form-control" name="tahun_ajaran" value="<?php echo $data['tahun_ajaran'];?>">
					</p>
					<p>
						<input type="hidden" class="form-control" name="keterangan" value="<?php echo $data['keterangan'];?>">
					</p>
					<p>
						<input type="submit" value="Simpan" class="btn btn-info">
					</p>
				</form>
			</div>
		</div>
	</div>
	<br>
	<center><a href="lihatdata.php">&lt; Table Jurusan</a></center>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/UTS/dist/js/bootstrap.min.js"></script>
</body>
</html>