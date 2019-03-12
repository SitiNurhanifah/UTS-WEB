<?php 
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>Menambahkan Data<br>
 	<form method="POST" action="actioncreat.php">
 		<input type="hidden" name="waktu">
 		Nama Mahasiswa	: 
		<input type="text" name="nama" placeholder="Nama Mahasiswa">
		<br>
		<br>
		Keterangan	: 
		<input type="text" name="ketbayar" placeholder="Lunas/Belum">
		<br>
		<br>
		Catatan	:
		<textarea name="catatan" placeholder="Text Artikel"> </textarea>
		<br><br>
		<input type="submit" name="submit">
 	</form>
</body>
</html>