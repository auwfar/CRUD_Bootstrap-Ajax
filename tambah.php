<?php
	session_start();
	include 'config.php';

	if (isset($_SESSION['userdata'])) {
		?>
		<!DOCTYPE html>
		<html>
			<head>
				<title>Tambah Data Pegawai</title>
				<link rel="stylesheet" href="assets/css/bootstrap.min.css">
			</head>
			<body style="background: palegreen;">
				<?php
					$SQL_kota = "SELECT * FROM kota";
					$result_kota = mysql_query($SQL_kota);

					$SQL_posisi = "SELECT * FROM posisi";
					$result_posisi = mysql_query($SQL_posisi);
				?>

				<div class="container" style="margin-top: 120px;">
					<div class="row">
						<div class="col-md-offset-3 col-md-6 well" style="text-align: center;">
							<h1>Tambah Data Pegawai</h1>
							<form action="proses_tambah.php" method="POST">
								<div class="input-group form-group">
								  <span class="input-group-addon" id="sizing-addon2">
								  	<i class="glyphicon glyphicon-user"></i>
								  </span>
								  <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2">
								</div>
								<div class="input-group form-group">
								  <span class="input-group-addon" id="sizing-addon2">
								  	<i class="glyphicon glyphicon-phone-alt"></i>
								  </span>
								  <input type="text" class="form-control" placeholder="Nomor Telepon" name="telp" aria-describedby="sizing-addon2">
								</div>
								<div class="input-group form-group">
								  <span class="input-group-addon" id="sizing-addon2">
								  	<i class="glyphicon glyphicon-home"></i>
								  </span>
								  <select name="kota" class="form-control"  aria-describedby="sizing-addon2">
										<?php
										while ($data_kota = mysql_fetch_array($result_kota)) {
											?>
											<option value="<?php echo $data_kota['id']; ?>"><?php echo $data_kota['nama']; ?></option>
											<?php
										}
										?>
								  </select>
								</div>
								<div class="input-group form-group" style="display: inline-block;">
								  <span class="input-group-addon" id="sizing-addon2">
								  <i class="glyphicon glyphicon-tag"></i>
								  </span>
								  <span class="input-group-addon">
							        <input type="radio" name="jk" value="1" id="laki">
									<label for="laki">Laki-laki</label>
							      </span>
							      <span class="input-group-addon">
							        <input type="radio" name="jk" value="2" id="perempuan"> 
									<label for="perempuan">Perempuan</label>
							      </span>
								</div>
								<div class="input-group form-group">
								  <span class="input-group-addon" id="sizing-addon2">
								  	<i class="glyphicon glyphicon-briefcase"></i>
								  </span>
								  <select name="posisi" class="form-control"  aria-describedby="sizing-addon2">
										<?php
										while ($data_posisi = mysql_fetch_array($result_posisi)) {
											?>
											<option value="<?php echo $data_posisi['id']; ?>"><?php echo $data_posisi['nama']; ?></option>
											<?php
										}
										?>
								  </select>
								</div>
								<div class="form-group">
									<div class="col-md-6">
										  <a href="home.php">
										  	<div class="form-control btn btn-danger"> <i class="glyphicon glyphicon-chevron-left"></i> Kembali</div>
										  </a>
									</div>
									<div class="col-md-6">
										  <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
									</div>
								</div>
							</form>
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