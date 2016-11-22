<?php
	include 'config.php';
	$SQL = "SELECT
				pegawai.id AS id,
				pegawai.nama AS pegawai,
				pegawai.telp AS telp,
				kota.nama AS kota,
				kelamin.nama AS kelamin,
				posisi.nama AS posisi
			FROM
				pegawai, kelamin, kota, posisi
			WHERE
				pegawai.id_posisi = posisi.id
				AND 
				pegawai.id_kelamin = kelamin.id
				AND
				pegawai.id_kota = kota.id";


	if ($_POST['search'] != "") {
		$SQL .= " AND
					(pegawai.nama
				  LIKE 
					'%" .$_POST['search'] ."%'
				  OR
				  	kota.nama
				  LIKE 
					'%" .$_POST['search'] ."%'
				  )";
	}

	$result = mysql_query($SQL);
	while ($data = mysql_fetch_array($result)) {
		?>
		<tr>
			<td><?php echo $data['pegawai']; ?></td>
			<td><?php echo $data['telp']; ?></td>
			<td><?php echo $data['kota']; ?></td>
			<td><?php echo $data['kelamin']; ?></td>
			<td><?php echo $data['posisi']; ?></td>
			<td style="text-align: center;">
				<a href="update.php?id=<?php echo $data['id'] ?>">
					<button class="btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Update</button>
				</a>
				<button class="btn btn-danger hapus-data" data-id="<?php echo $data['id'] ?>" onclick="return confirm('Anda yakin menghapus ID ini?')"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
				<a href="detail.php?id=<?php echo $data['id'] ?>">
					<button class="btn btn-info"><i class="glyphicon glyphicon-info-sign"></i> Detail</button>
				</a>
			</td>
		</tr>
		<?php
	}
?>