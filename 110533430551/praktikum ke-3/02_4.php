<!-- memudahkan browser untuk menampilkan suatu halam web dengan benar -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transiional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>	<!-- menyatakan informasi mengenai dokumen HTML -->
	<title>Data Seleksi</title>	<!-- menambahkan title di title bar browser -->
</head>

<body>	<!-- melingkupi semua teks yang terdapat di halaman HTML -->
<!-- Membuat form
	*action berisi URL yang dituju ketika form dikirim 
	*atribut method yang digunakan adalah post
	*$_SERVER['PHP_SELF'] menyatakan bahwa form ditangani oleh current script
	*menggunakan tombol seleksi
-->
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Pekerjaan	<!-- menampilkan kata nama yang tidak bernilai -->
		<select name="job">	//menampilkan daftar yang bisa dipilih oleh pengguna
			<option value="Mahasiswa">Mahasiswa</option>	//item yang dipilih dengan nilai mahasiswa
			<option value="ABRI">ABRI</option>	//item yang dipilih dengan nilai ABRI
			<option value="PNS">PNS</option>	//item yang dipilih dengan nilai PNS
			<option value="Swasta">Swasta</option>	//item yang dipilih dengan nilai swasta
		</select> 
		<br />	<!-- membuat baris baru  -->
		<!-- tombol penanda form siap dikirim dengan nilai OK -->
		<input type="submit" value="ok" />
	</form>

	<!-- isset: mengecek form yang dikirimkan -->
	<?php
		if(isset($_POST['job'])) {
			echo $_POST['job'];
		}
	?>

</body>
</html>