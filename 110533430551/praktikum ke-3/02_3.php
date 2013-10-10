<!-- memudahkan browser untuk menampilkan suatu halam web dengan benar -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transiional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>	<!-- menyatakan informasi mengenai dokumen HTML -->
	<title>Data Radio Button</title>	<!-- menambahkan title di title bar browser -->
</head>

<body>	<!-- melingkupi semua teks yang terdapat di halaman HTML -->
<!-- Membuat form
	*action berisi URL yang dituju ketika form dikirim 
	*atribut method yang digunakan adalah get
	*$_SERVER['PHP_SELF'] menyatakan bahwa form ditangani oleh current script
-->
	<form action="<?php $_SERVER['PHP SELF'];?>" method="post">
		Jenis Kelamin
		<input type="radio" name="sex" value="Pria" />Pria
		//pilihan 
		<input type="radio" name="sex" value="Wanita" />Wanita <br />
		<!-- membuat tombol penanda form siap dikirim dengan nilai OK -->
		<input type="submit" value="ok" />
	</form>

	<!-- isset: mengecek form yang dikirimkan -->
	<?php
		if(isset($_POST['sex'])) {
			echo $_POST['sex'];
		}
	?>

</body>
</html>