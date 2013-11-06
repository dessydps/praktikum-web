<?php
//File: seleksi.php
//koneksi
require_once './koneksi.php';
//seleksi data
$sql = 'SELECT * FROM mahasiswa';
$res = mysql_query($sql);
if($res) {	//jika ya, maka data yang diambil ditampilkan
	if(mysql_num_rows($res)) {?>
	<!--membuat tabel-->
	<table border=1 cellspacing=1 cellpadding=5>
	<tr>
		<th>#</th>	<!--kolom angka-->
		<th width=100>NIM</th>	<!--kolom NIM-->
		<th width=150>Nama</th>	<!--kolom nama-->
		<th>Alamat</th>	<!--kolom alamat-->
	</tr>
	<?php
		$i = 1;
		//pengambilan data
		while($row = mysql_fetch_row($res)) { ?>
		<tr>
			<td>
				<?php echo $i;?>
			</td>
			<td>
				<?php echo $row[0];?>
			</td>
			<td>
				<?php echo $row[1];?>
			</td>
			<td>
				<?php echo $row[2];?>
			</td>
		</tr>
		<?php
		$i++;	//melakukan perulangan
	}
	?>
	</table>
	
	<?php
	} else {	//jika tidak, maka muncul pesan data tidak ditemukan
		echo 'Data Tidak ditemukan';	
	}
	mysql_close($res);
}
?>