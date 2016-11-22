<?php
	include_once 'config.php';

	$SQL = 'SELECT * FROM pegawai';
	$result = mysql_query($SQL);

	echo "<ul>";
		while ($data = mysql_fetch_array($result)) {echo "<li>\"" .$data['nama'] ."\"</li>";
		            }
	echo "</ul>";
?>