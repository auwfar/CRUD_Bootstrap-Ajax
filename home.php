<?php
	session_start();

	if (isset($_SESSION['userdata'])) {
		?>
		<!DOCTYPE html>
		<html>
			<head>
				<title>Document</title>
				<meta charset="utf-8">

				<link rel="stylesheet" href="assets/css/bootstrap.min.css">
			</head>
			<body onload="tampil()">
				<div class="row">
					<div class="container-fluid well">
						<div class="col-md-6">
							<h4><i class="glyphicon glyphicon-home"></i> <small>Selamat Datang Admin</small> <u><?php echo $_SESSION['userdata']['username']; ?></u></h4>
						</div>
						<div class="col-md-6" style="text-align:right;">
							<a href="auth/logout.php">
								<button class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Logout</button>
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="container">
						<div class="col-md-12">
							<h1>Data Pegawai</h1>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-4" style="padding: 0;">
							<a href="tambah.php">
								<button class="form-control btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
							</a>
						</div>
						<div class="col-md-4"></div>
						<div class="col-md-4" style="text-align:right; padding:0;">
							<!-- <form action="index.php" method="GET" class="form-inline"> -->
							<div class="form-inline">
								<div class="input-group form-group">
								  <span class="input-group-addon" id="sizing-addon2">
								  	<i class="glyphicon glyphicon-search"></i>
								  </span>
								  <input type="text" class="form-control" placeholder="Search" name="search" aria-describedby="sizing-addon2" id="search">
								</div>
								<!-- <input type="submit" class="btn btn-info" value="Cari"> -->
							</div>
							<!-- </form> -->
						</div>
					</div>

					<div class="row" style="margin-top: 10px;">
						<table class="table table-bordered table-striped table-hover">
							<thead style="text-align: center;">
								<tr>
									<th>Nama</th>
									<th>No Telp</th>
									<th>Asal kota</th>
									<th>Jenis Kelamin</th>
									<th>Posisi</th>
									<th style="text-align: center;">Aksi</th>
								</tr>
							</thead>
							<tbody id="data">
								
							</tbody>
						</table>	
					</div>
				</div>

				<script src="assets/js/jquery-3.1.1.min.js"></script>
				<script src="assets/js/bootstrap.min.js"></script>
				<script src="assets/js/ajax.js"></script>
			</body>
		</html>
		<?php
	} else {
		header("location: index.php");
	}
?>