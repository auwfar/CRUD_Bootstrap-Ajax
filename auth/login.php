<?php 
	session_start();
	include '../config.php';

	$user = $_POST['username'];
	$pass = md5($_POST['password']);

	$SQL = "SELECT * FROM admin WHERE username = '{$user}'";
	$result = mysql_query($SQL);

	if (mysql_num_rows($result) == 1) {
		$data =mysql_fetch_array($result);

		if($pass == $data['password']) {
			$_SESSION['userdata'] = $data;
			header("location: ../home.php");
		} else {
			header("location: ../index.php");
		}
	} else {
		header("location: ../index.php");
	}
?>