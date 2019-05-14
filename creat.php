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
         <div class="panel-heading">
	<br>Menambahkan Data<br>
</div>
<div class="panel-body">
 	<form method="POST" action="actioncreat.php">
 		<input type="hidden" name="waktu">
 		<label class="title">Nama Pengirim	: </label>
		<input type="text" name="nama" class="form-control" placeholder="Nama Pengirim">
	</div>


	<div class="panel-body">
		<label class="title">Dikirim Dari	:  </label>
		<input type="text" name="ketbayar" class="form-control" placeholder="Dikirim Dari">
		</div>
		<div class="panel-body">
			<label class="title">Status Pengiriman	: </label>
		<textarea name="catatan" class="form-control" placeholder="Text Artikel"> </textarea>
		</div>
		<div class="modal-footer">
                                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> submit</button>
 	</form>
</body>
</html>