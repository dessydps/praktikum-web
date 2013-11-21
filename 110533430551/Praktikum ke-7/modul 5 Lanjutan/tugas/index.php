<!DOCTYPE html>
<html>
  <head>
    <title>Tugas Praktikum </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" href="">

  </head>
  <body>

  <!-- Script untuk membuat tabel dengan nama data-->

	<?php
	error_reporting(0);
	require_once 'koneksi.php';
	$sql = 'CREATE TABLE data
	(
		nim VARCHAR (12) NOT NULL,
		nama VARCHAR (40) NOT NULL,
		alamat VARCHAR (100),
		PRIMARY KEY (nim)
		)ENGINE=MyISAM;';
	?>
    <div class="container">
      <form class="form-signin" action="data_han.php">
        <legend>Tambah Data</legend>
          <label class="control-label" for="inputNim">NIM</label>
            <input type="text" name="nim" id="inputNim" class="input-block-level">
          <label class="control-group" for="nama"> Nama Lengkap</label>
          <input type="text" name="nama" id="nama" class="input-block-level">
          <label class="control-group" for="alamat"> Alamat Lengkap</label>
          <textarea rows="3" value="alamat" id="alamat" placeholder="Alamat Lengkap"> </textarea>
          <br> <br>
          <button class="btn btn-primary" name="submit" type="button">Submit</button>       
      </form>
    </div>
    


  <?php
    ini_set('display_errors',1);
   require_once 'data_handler.php';
    
    // Konstanta nama tabel
    define('DT', 'data');
    // Memanggil fungsi data handler
    data_handler('?m=data');
  ?>


  	<!-- Link untuk bootstrap  -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
  </body>
</html>