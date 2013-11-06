<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>menciptakan Tabel</title>
</head>

<body>

<?php
require_once './koneksi.php';

$sql = 'CREATE TABLE mahasiswa (
	nim VARCHAR(12) NOT NULL,
	nama VARCHAR(40) NOT NULL,
	alamat VARCHAR(100),
	PRIMARY KEY (nim)
	) ENGINE=MyISAM;';
//menciptakan tabel
$res = mysql_query($sql);
if($res){	//Jika iya, maka tabel tercipta
	echo 'Tabel Created';
	mysql_close($res);
}
else{	//jika tidak, maka tabel tidak dieksekusi
	echo mysql_error();
}
?>

</body>

</html>