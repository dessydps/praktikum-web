<!-- memudahkan browser untuk menampilkan suatu halam web dengan benar -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transiional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>	<!-- menyatakan informasi mengenai dokumen HTML -->
	<title>Tugas Tambahan</title>	<!-- menambahkan title di title bar browser -->
</head>

<body>	<!-- melingkupi semua teks yang terdapat di halaman HTML -->
	<!-- Membuat form
		*action berisi URL yang dituju ketika form dikirim 
		*atribut method yang digunakan adalah post
		*$_SERVER['PHP_SELF'] menyatakan bahwa form ditangani oleh current script
	-->
	<form action="" method="post">  
		<h2>Kalkulator</h2>  <!--Judul-->
		<!--kolom memasukkan angka pertama-->
		<input type="number" name="angka1" size="5"
			value="<?php
			echo isset($_POST['angka1']) ? $_POST['angka1'] : '';
			?>"
		/>  
		<!-- kolom pilihan operasi aritmatika -->
		<select name="operasi">  
			<option value='+'<?php
				if($_POST['operasi'] == '+'){
					echo 'selected="seleted"';
				}
			?>/>+ 
			<option value='-'<?php
				if($_POST['operasi'] == '-'){
					echo 'selected="seleted"';
				}
			?>/>- 
			<option value='*'<?php
				if($_POST['operasi'] == '*'){
					echo 'selected="seleted"';
				}
			?>/>x 
			<option value='/'<?php
				if($_POST['operasi'] == '/'){
					echo 'selected="seleted"';
				}
			?>/>/
		</select>  
		<!--kolom memasukkan angka kedua-->
		<input type="number" name="angka2" size="5"
			value="<?php
			echo isset($_POST['angka2']) ? $_POST['angka2'] : '';
			?>"
		/>    
		
		<!-- isset: mengecek form yang dikirimkan -->
	<?php  
	if ($_POST['angka1'] && $_POST['angka2']) {       
		if ($_POST['operasi'] == '+') {            
			$hasil = $_POST['angka1']+$_POST['angka2']; 
		} 
		elseif ($_POST['operasi'] == '-') {            
			$hasil = $_POST['angka1']-$_POST['angka2'];  
		} 
		elseif ($_POST['operasi'] == '*') {            
			$hasil = $_POST['angka1']*$_POST['angka2']; 
		} 
		elseif ($_POST['operasi'] == '/') {            
			$hasil = $_POST['angka1']/$_POST['angka2']; 
		}  
	} 
	?>
	
		<!--tombol untuk melihat hasil perhitungan-->
		<input type="submit" value="="> 
		<!--kolom yang menampilkan hasil perhitungan-->
		<input type="number" name="hasil" size="5"
		value="<?php 
				echo $hasil;
			?>"
		/>    

	</form>  

</body>
</html>