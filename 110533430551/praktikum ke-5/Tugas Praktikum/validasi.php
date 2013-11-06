<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
        <title></title>
</head>

<body>

<?php 
defined("VALID") or die("not allowed");

function init_login()
{
        $nama="root";
        $pass="*1des93#";

        if (isset($_POST['nama'])&&isset($_POST['pass'])) {
                $n=trim($_POST['nama']);
                $p=trim($_POST['pass']);

                if ($n==$nama&&$p==$pass) {
                        setcookie("login", $n);
                        setcookie("time", time());
                        ?>
                        <script type="text/javascript">
                        document.location.href="./";
                        </script>
                        <?php
                }
                else
                {
                        echo "Nama atau Password yang Anda Masukkan Tidak Cocok";
                        return false;
                }
        }
}

function validate() {
	if (!isset($_COOKIE['nlogin'])&&!isset($_COOKIE['time'])) {
	?>
       <div class="inner">
		<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" >
              <table border="1" cellpadding=5 >
              	<tr>
                     	<td>Nama</td>
                            <td><input type="text" name="nama" /></td>
                    	</tr>
                     <tr>
                            <td>Password</td>
                     	<td><input type="password" name="pass" /></td>
                     </tr>
                     <tr>
                            <td></td>
                            <td><input type="submit" name="login" value="LOGIN" /></td>
                     </tr>
            	</table>
              </form>
        </div>
        <?php
        exit();
	}

	if(isset($_GET['m']) && $_GET['m']=='logout'){
       	if (isset($_COOKIE['nlogin'])) {
              	setcookie('nlogin', '', time()-3*3600);
              }
              if (isset($_COOKIE['time'])) {
	              setcookie('time', '', time()-3*3600);
              }
	       ?>
       	<script type="text/javascript">
              	document.location.href="./";
             	</script>
              <?php
     	}
}
?>

</body>

</html>