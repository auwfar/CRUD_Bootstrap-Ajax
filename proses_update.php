<?php
	include 'config.php';

	$id = $_POST['id'];
	$nama = mysql_escape_string($_POST['nama']);
	$telp = $_POST['telp'];
	$kota = $_POST['kota'];
	$jk = $_POST['jk'];
	$posisi = $_POST['posisi'];

	$sql = "UPDATE pegawai SET nama='$nama', telp='$telp', id_kota=$kota, id_kelamin=$jk, id_posisi=$posisi WHERE id='$id'";

	$result = mysql_query($sql);

	if ($result) {
		header('location: home.php');
	}
?>