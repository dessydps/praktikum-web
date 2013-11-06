<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Menciptakan Database</title>
</head>

<body>

<?php
require_once './koneksi.php';
//nama database adalah myweb
$db = 'myweb';
//menciptakan database
$res = mysql_query('CREATE DATABASE ' . $db);
if($res){	//jika ya, maka database ditambahkan
	echo 'Database ' .$db. 'Created';
	mysql_close($res);	//database mysql ditutup
}
else{	//jika tidak, maka mysql eror
	echo mysql_error();
}
?>

</body>

</html>