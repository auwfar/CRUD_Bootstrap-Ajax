<?php
	include 'config.php';

	$id = md5(date('ymdhms') .rand());
	$nama = $_POST['nama'];
	$telp = $_POST['telp'];
	$kota = $_POST['kota'];
	$jk = $_POST['jk'];
	$posisi = $_POST['posisi'];

	$SQL = "INSERT INTO pegawai VALUES('$id', '$nama', '$telp', $kota, $jk, $posisi, 1)";
	$result = mysql_query($SQL);
	// echo $SQL;

	header("location: home.php");
?>