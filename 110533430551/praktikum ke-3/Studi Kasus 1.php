<!-- memudahkan browser untuk menampilkan suatu halam web dengan benar -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transiional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>	<!-- menyatakan informasi mengenai dokumen HTML -->
	<title>Studi Kasus 1</title>	<!-- menambahkan title di title bar browser -->
</head>
<body>

	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	 Kegemaran
	 <select name="kegemaran">
		<option value="Menyanyi"
		<?php
		if($_POST['kegemaran'] == 'Menyanyi'){
		echo 'selected="seleted"';
	}
	?>
	/>Menyanyi
		<option value="Olahraga"
		<?php
		if($_POST['kegemaran'] == 'Olahraga'){
		echo 'selected="seleted"';
	}
	?>
	/>Olahraga
		<option value="Membaca"
		<?php
		if($_POST['kegemaran'] == 'Membaca'){
		echo 'selected="seleted"';
	}
	?>
	/>Membaca
	 </select> <br />
	 
	 <input type="submit" value="OK" >
</form>

<?php
if(isset($_POST['kegemaran'])){
	echo $_POST['kegemaran'];
}
?>

</body>
</html>