<!-- memudahkan browser untuk menampilkan suatu halam web dengan benar -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transiional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>	<!-- menyatakan informasi mengenai dokumen HTML -->
	<title>Data Checkbox</title>	<!-- menambahkan title di title bar browser -->
</head>

<body>	<!-- melingkupi semua teks yang terdapat di halaman HTML -->
<!-- Membuat form
	*action berisi URL yang dituju ketika form dikirim 
	*atribut method yang digunakan adalah post
	*$_SERVER['PHP_SELF'] menyatakan bahwa form ditangani oleh current script
	*item checkbox bisa lebih dari 1
-->
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Hobi	<!-- menampilkan kata hobi yang tidak bernilai -->
		<!-- item checkbox hobi dengan nilai membaca -->
		<input type="checkbox" name="hobby[]" value="Membaca" />Membaca
		<!-- item checkbox hobi dengan nilai olahraga -->
		<input type="checkbox" name="hobby[]" value="Olahraga" />Olahraga
		<!-- item checkbox hobi dengan nilai menyanyi -->
		<input type="checkbox" name="hobby[]" value="Menyanyi" />Menyanyi
		<!-- tombol penanda form siap dikirim dengan nilai OK -->
		<input type="submit" value="ok" />
	</form>
	
	<!-- isset: mengecek form yang dikirimkan -->
	<?php
		//Ekstensi nilai
		if(isset($_POST['hobby'])) {
			foreach($_POST['hobby'] as $key => $val) {
				echo $key . ' -> ' .$val . '<br />';
			}
		}
	?>

</body>
</html>