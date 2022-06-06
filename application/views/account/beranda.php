<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>
     Hotel Mulya
  </title>
</head>
<body>
  <h1>Selamat Datang di Hotel Mulya.</h1>
  <p>  
  Silakan klik link
  </br>
  <?php echo anchor('login','Masuk'); ?>
  untuk masuk ke dalam sistem
  </br>
  <?php echo anchor('register','Daftar'); ?>
  untuk mendaftar
  </br>
  <?php echo anchor('hotel/inputForm','Data Baru'); ?>
  untuk memasukan room baru.
  </p>      
</body>
</html>