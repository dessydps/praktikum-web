<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<html>
<head>	<!-- menyatakan informasi mengenai dokumen HTML -->
   <title>Form Login</title>	<!-- menambahkan title di title bar browser -->
</head>

<body onLoad="document.form1.user.focus();"> 
	
	<!-- javascript
		* jika anda belum mengisikan Username dan Password akan muncul peringatan.
		* pengisian input diurutkan yakni 	-pembacaan Username terlebih dahulu kemudian pembacaan password
											-jika username anda inputkan dan password tidak anda inputkan akan tampil peringatan
		* Secara otomatis kursor akan menuju text field yang belum anda isi. 
		  jika anda menginputkan berupa Angka ataupun kode-kode lain selain huruf pada saat menekan akan otomatis muncul peringatan 
		-->
	<script type="text/javascript">
		// Fungsi check digunakan untuk mengecheck kosong atau tidaknya username dan password
		function check()
		{
			if(form1.user.value == "")
			{
				alert('Masukkan Username');
				document.form1.user.focus();
				return false;
			}
			else if(form1.pass.value=="")
			{    
				alert('Masukkan Password');
				document.form1.pass.focus();
				return false;
			}    
		return true;
		}

		// Fungsi Huruf digunakan untuk mengecheck penggunaan selain huruf tidak diperbolehkan
		function Huruf(evt) 
		{
			evt = (evt) ? evt : window.event	//sama seperti pernyataan if, jika evt bernilai NULL, windows.event akan dijalankan
			var charCode = (evt.which) ? evt.which : evt.keyCode
			if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
				alert('Username dan Password Harus Berupa Huruf ');
				return false;
			}
			return true;
		}
	</script>

<!-- definisi css yang digunakan untukmempercantik tampilan form login -->
<style type="text/css">
#apDiv1 {
    position:absolute;
    width:373px;
    height:330px;
    z-index:1;
    left: 441px;
    top: 62px;
    background-color: #FFFFFF;
    border: 2px solid Green;
}
#apDiv3 {
    position:absolute;
    width:80px;
    height:25px;
    z-index:2;
    left: 289px;
    top: 274px;
}
.style3 {
    font-size: 10px;
    font-weight: bold;
}
#apDiv2 {
    position:absolute;
    width:412px;
    height:115px;
    z-index:2;
    top: 0px;
    left: 2px;
}
#header{
    width:373px;
    height:98px;  
}
#footer{
    width:373px;
    height:40px;
}
body {
    background-color: #99CCCC;
}
#apDiv4 {
    position:absolute;
    width:409px;
    height:221px;
    z-index:2;
    left: 426px;
    top: 411px;
}
</style>

<form name="form1" action="<?php $_SERVER['PHP_SELF'];?>"  method="post" onsubmit="return check(this)">
<div id="apDiv1">
  <div id="header">
    <br>
  </div>
  <div>
    <div align="center"><strong><br>Username :</strong>    
    <br>
    <input type="text" name="user" size="35" value="" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    <br>
    <strong>Password : </strong>  
    <br>
    <input type="password" name="pass" size="35" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    <br>
    </div>
  </div>
  <br>
    <div id="apDiv3">
     <input type="submit" name="submit" value="LOG IN" >
    </div>
     <br>
  </div>
</form>

<div id="apDiv4">

<!-- kode PHP
	* Pada kode php ini jika masukan anda bernilai benar dengan variabel yang tertulis pada code php
	* Jika masukan yang anda ketikkan bernilai salah atau tidak sama dengan nilai variabel, akan muncul peringatan
	* Jika tekan OK, secara otomatis kursor akan aktif di text field yang sudah kosong dan diharapkan anda mengisikan kembali.
-->
<?php
// digunakan untuk pengecheckkan apakah isi dari inputan user dan password berupa string dan apakah sudah benar atau tidak
if(is_string($_POST['user']) AND ($_POST['pass'])) 
{    
    if (($_POST['user']=='dessy')AND($_POST['pass']=='dessydwi'))	// Jika user dan pasword bernilai 'dessy' berhasil dimasukkan
    {	// maka akan menampilkan output seperti berikut
        echo 'Anda Telah Berhasil Login Saudara: '.$_POST['user'];
        echo '<br><br>Selamat Datang Saudara ' . $_POST['user'];
    }
    else 	// Jika salah memasukkan username dan password
    {	// maka akan menampilkan output seperti berikut
        echo "<script>alert ('Maaf Username dan Password Anda tidak sesuai');</script>";
    }
}

?>
</div>

</body>
</html>