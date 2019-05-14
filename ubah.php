<?php 
	require 'koneksi.php';
	session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }

	$id = $_GET["id"];

	$ubah = query("SELECT * FROM blog WHERE id = $id")[0];


	if (isset($_POST["submit"])) {
		if (ubah ($_POST) > 0){
			echo "data berhasil diubah ✅";
			echo "<br>";
			echo "klik 👉 ";
			echo "<a href='admin.php'>disini</a>";
			echo " untuk melihat hasil";
		}
		else{
			echo "data gagal diubah";
			echo "<br>";
			echo "klik ";
			echo "<a href='creat.php'>disini</a>";
			echo " bray";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>
	<div class="row">
        <div class="container-fuild">
            <div class="row">
                <br>
                <br>
                <div class="col-md-8 col-md-offset-2">
                    <a href="#" class="btn btn-warning" onclick="history.back(-1)"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
                    <br>
                    <br>
                    <div class="panel panel-default">
	<center>
		<div class="panel-heading">
	<span class="title"><b>FORM EDIT <span class="text text-danger"></span></b></span>
                        </div>
	<?php $waktu = date_default_timezone_set('Asia/Jakarta');  ?>
	
	<div class="panel-body">
 	<form method="POST" action="">
 		<div class="form-group">
 			<label class="title">Nama Pengirim</label>
 				<input type="hidden" name="id" value="<?= $ubah["id"]?>"> 
					<input type="text" name="nama" class="form-control" value="<?= $ubah["nama"]?>">
		</div>
		<div class="form-group">
			<label class="title">Dikirim Dari</label>
				<input type="text" name="ketbayar" class="form-control" value="<?= $ubah["ketbayar"]?>">
		</div>
		<div class="form-group">
		<label class="title">Status Pengiriman</label>
		<textarea name="catatan" class="form-control" value="<?= $ubah["catatan"]?>"></textarea>
		<br><br>
		<input type="submit" name="submit"">
 	</form>
 </center>
</body>
</html>