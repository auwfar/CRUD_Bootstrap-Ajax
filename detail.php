<?php
	session_start();
	include 'config.php';

	if (isset($_SESSION['userdata'])) {
		$GET = $_GET;
		$ID = $GET['id'];

		$SQL = "SELECT
					pegawai.nama AS nama_pegawai,
					pegawai.telp AS telp,
					kota.nama AS kota,
					kelamin.nama AS kelamin,
					posisi.nama AS posisi
				FROM
					pegawai, kota, kelamin, posisi
				WHERE
					pegawai.id_kota = kota.id AND
					pegawai.id_kelamin = kelamin.id AND
					pegawai.id_posisi = posisi.id AND
					pegawai.id = '{$ID}' ORDER BY pegawai.id";
					
		$result = mysql_query($SQL);
		$data = mysql_fetch_array($result);
		?>
		<!DOCTYPE html>
		<html>
			<head>
				<title>Detail Data Pegawai</title>
				<link rel="stylesheet" href="assets/css/bootstrap.min.css">
			</head>
			<body style="background: palegreen;">
				<div class="container" style="margin-top: 120px;">
					<div class="row">
						<div class="col-md-offset-3 col-md-6 well" style="text-align: center;">
							<h1>Detail Data Pegawai</h1>
							<div class="input-group form-group" style="display: inline-block;">
							  <span class="input-group-addon" id="sizing-addon2">
							  	<i class="glyphicon glyphicon-user"></i>
							  </span>
							  <p class="form-control"><?php echo $data['nama_pegawai']; ?></p>
							</div>
							<div class="input-group form-group" style="display: inline-block;">
							  <span class="input-group-addon" id="sizing-addon2">
							  	<i class="glyphicon glyphicon-phone-alt"></i>
							  </span>
							 <p class="form-control"><?php echo $data['telp']; ?></p>
							</div>
							<div class="input-group form-group" style="display: inline-block;">
							  <span class="input-group-addon" id="sizing-addon2">
							  	<i class="glyphicon glyphicon-home"></i>
							  </span>
							  <p class="form-control"><?php echo $data['kota']; ?></p>
							</div>
							<div class="input-group form-group" style="display: inline-block;">
							  <span class="input-group-addon" id="sizing-addon2">
							  	<i class="glyphicon glyphicon-tag"></i>
							  </span>
							  <p class="form-control"><?php echo $data['kelamin']; ?></p>
							</div>
							<div class="input-group form-group" style="display: inline-block;">
							  <span class="input-group-addon" id="sizing-addon2">
							  	<i class="glyphicon glyphicon-briefcase"></i>
							  </span>
							  <p class="form-control"><?php echo $data['posisi']; ?></p>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									  <a href="home.php">
									  	<button class="form-control btn btn-danger"> <i class="glyphicon glyphicon-chevron-left"></i> Kembali</button>
									  </a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<script src="assets/js/jquery-3.1.1.min.js"></script>
				<script src="assets/js/bootstrap.min.js"></script>
			</body>
		</html>
		<?php
	} else {
		header("location: index.php");
	}
?>