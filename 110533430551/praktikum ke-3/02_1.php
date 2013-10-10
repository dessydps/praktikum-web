<!-- memudahkan browser untuk menampilkan suatu halam web dengan benar -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transiional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>	<!-- menyatakan informasi mengenai dokumen HTML -->
	<title>Metode GET</title>	<!-- menambahkan title di title bar browser -->
</head>

<body>	<!-- melingkupi semua teks yang terdapat di halaman HTML -->
<!-- Membuat form
	*action berisi URL yang dituju ketika form dikirim 
	*atribut method yang digunakan adalah get
	*$_SERVER['PHP_SELF'] menyatakan bahwa form ditangani oleh current script
-->
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
		Nama	<!-- menampilkan kata nama yang tidak bernilai -->
		<input type="text" name="nama" /> 	<!-- membuat satu baris input yang diisi pengguna dengan nilai nama -->
		<br />	<!-- membuat baris baru  -->
		<input type="submit" value="OK" />	<!-- membuat tombol penanda form siap dikirim dengan nilai OK -->
	</form>

<!-- isset: mengecek form yang dikirimkan -->
	<?php
		if(isset($_GET['nama'])) {
			<!-- menampilkan data string pada browser -->
			echo 'Hallo, ' .$_GET['nama'];
		}
	?>

</body>
</html>