<!DOCTYPE HTML>
<html>
<head>
	<title> Menciptakan Tabel</title>
</head>
<body>
	<?php
	require_once 'koneksi/koneksi.php';
	$db ='proweb';
	$res = mysql_query('CREATE TABLE mahasiswa' . $db);
	if($res){
		echo "Database" .$db. 'Created';
		mysql_close($res);
	}else
	{
		echo mysql_error();
	}
	?>
	<h4> Koneksi Berhasil</h4>
</body>
</html>
