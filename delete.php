<?php
	include_once('config.php');

	$POST = $_POST;
	$ID = $POST['id'];

	$SQL = "DELETE FROM pegawai WHERE id='" .$ID ."'";
	$result = mysql_query($SQL);
	// if ($result) {
	// 	header("location:index.php");
	// }
?>