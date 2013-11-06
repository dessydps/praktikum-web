<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
        <title>Tugas Praktikum</title>
</head>

<body>
<?php 
	define("VALID", 1);
	require_once("validasi.php");

	init_login();
	validate();

	require_once("../koneksi.php");
	require_once("data_handler.php");

	define("MHS", "mahasiswa");
	data_handler("?m=data");
?>

</body>

</html>