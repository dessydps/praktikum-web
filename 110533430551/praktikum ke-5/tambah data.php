<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Tambah Data</title>
</head>

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<!--membuat tabel-->
<table>
	<tr>
		<td>NIM</td>	<!-- kolom NIM -->
		<td><input type="text" name="nim" /></td>
	</tr>
	<tr>
		<td>Nama</td>	<!-- kolom nama -->
		<td><input type="text" name="nama" size=40 /></td>
	</tr>
	<tr>
		<td>Alamat</td>	<!-- kolom alamat -->
		<td><input type="text" name="alamat" size=60/></td>
	</tr>
	<tr>
		<!-- tombol untuk menyimpan data -->
		<td><input type="submit" value="Simpan" /></td>
	</tr>
</table>
</form>

<?php
require_once './koneksi.php';

//Jika field nim dan nama diisi lalu disubmit
if(isset($_POST['nim']) && isset($_POST['nama'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	
	//Tambahkan data baru ke tabel
	$sql = "INSERT INTO mahasiswa
			VALUES('" .$nim. "', '" .$nama. "', '" .$alamat. "')";
	
	$res = mysql_query($sql);
	if($res){	//Jika berhasil, maka muncul pesan data berhasil ditemukan
		echo 'Data Berhasil ditemukan';
		mysql_close($res);
	} 
	else {	//jika tidak berhasil, maka muncul pesan gagal menambahkan data
		echo 'Gagal Menambahkan Data <br />';
	}
}

echo '<hr />';	//membuat garis horizontal
//Memanfaatkan script pengambilan data untuk menampilkan hasil
require_once './seleksi.php';
?>

</body>
</html>