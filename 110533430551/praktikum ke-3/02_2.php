<!-- memudahkan browser untuk menampilkan suatu halam web dengan benar -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transiional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>	<!-- menyatakan informasi mengenai dokumen HTML -->
	<title>Prefilling Text Field</title>	<!-- menambahkan title di title bar browser -->
</head>

<body>	<!-- melingkupi semua teks yang terdapat di halaman HTML -->
<!-- Membuat form
	*action berisi URL yang dituju ketika form dikirim 
	*atribut method yang digunakan adalah post
	*$_SERVER['PHP_SELF'] menyatakan bahwa form ditangani oleh current script
-->
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Nama
		<input type="text" name="nama" 
			value="<?php
			echo isset($_POST['nama']) ? $_POST['nama'] : '';
			?>"
			/> <br />
		<input type="submit" value="OK" />
	</form>

	<!-- isset: mengecek form yang dikirimkan -->
	<?php
		if(isset($_POST['nama'])) {
			echo $_POST['nama'];
		}
	?>

</body>
</html>