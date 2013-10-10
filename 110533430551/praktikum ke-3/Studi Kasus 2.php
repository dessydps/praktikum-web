<!-- memudahkan browser untuk menampilkan suatu halam web dengan benar -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transiional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>	<!-- menyatakan informasi mengenai dokumen HTML -->
	<title>Studi Kasus 2</title> <!-- menambahkan title di title bar browser -->
</head>

<body>

	<form action="<?php $_SERVER['PHP SELF'];?>" method="post">
	 Kegemaran
	 <input type="checkbox" name="kegemaran[]" value="Membaca"
	 <option value="Membaca"
		<?php
		if($_POST['kegemaran'] == 'Membaca'){
		echo 'selected="seleted"';
		}
	 ?>
	 />Membaca
	 
	 <input type="checkbox" name="kegemaran[]" value="Olahraga"
	 <option value="Olahraga"
		<?php
		if($_POST['kegemaran'] == 'Olahraga'){
		echo 'selected="seleted"';
		}
	 ?>
	 />Olahraga
	 
	 <input type="checkbox" name="kegemaran[]" value="Menyanyi"
	 <option value="Menyanyi"
		<?php
		if($_POST['kegemaran'] == 'Menyanyi'){
		echo 'selected="seleted"';
		}
	 ?>
	 />Menyanyi <br />
	 
	 <input type="submit" value="ok" >
</form>

<?php 
// Ekstraksi nilai 
if (isset($_POST['kegemaran'])) { 
  foreach ($_POST['kegemaran'] as $key => $val) { 
    echo $key . ' -> ' .$val . '<br />'; 
  } 
} 
?> 
 
</body> 
 
</html> 