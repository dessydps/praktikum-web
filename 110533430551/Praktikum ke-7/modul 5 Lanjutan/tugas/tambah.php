<?php
	error_reporting(0);
	//Digunakan untuk memilih tabel dalam database yang dituju
	$sql= mysql_query("SELECT * FROM data WHERE nama='$_SESSION(nama)'");
	$row=mysql_fetch_array($sql);

	// Memulai session
	session_start();
	include 'koneksi.php';

	if(isset($_REQUEST['submit']))
	{
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$alamat=$_POST['alamat'];

		if(!empty('$nama'))
		{
			mysql_query("INSERT INTO data (nim,nama,alamat) VALUES ($nim,$nama,$alamat)") ;

		}
		else
		{
			alert("Mohon diisikan ulang");
		}

	}
?>