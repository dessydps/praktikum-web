<?php
//Catatan:
//Jika perlu, sesuaikan nama user dan password

$host = 'localhost';	//host=localhost
$user = 'root';	//nama pengguna=root
$pass = '*1des93#';	//password=*1des93#
$db = 'myweb';	//nama database=myweb

$cnn = mysql_connect($host, $user, $pass);
if(!$cnn){	//jika tidak terhubung, maka muncul pesan koneksi gagal
	exit('Koneksi Gagal');
}
$db = mysql_select_db($db);
if(!$db){
	exit('Gagal Memilih Database');
}

?>