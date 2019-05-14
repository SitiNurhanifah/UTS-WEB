<?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD</title>
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>

<center>
  <br>
    <div class="row">
        <div class="container-fuild">
            <div class="row">
                <br>
                <br>
                <div class="col-md-8 col-md-offset-2">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="title"><b>Data Pengiriman Paket</b></span>
                        </div>
                        <div class="panel-body">
                            <table class="table table-stripped" width="100%">
                                <thead>
                                    <tr>
   
     <th>No</th>
    <th>Nama Pengirim</th>
    <th>Di Kirim Dari</th>
    <th>Status Pengiriman  📑</th>
    <th>Terakhir di update ⏱</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["nama"] ?></td>
    <td><?= $x["ketbayar"] ?></td>
    <td><?= $x["catatan"];  ?></td>
    <td><?= $x["waktu"];  ?></td>

  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
<br>
<br>
<div class="col-md-8 col-md-offset-2">
                    <a href="logout.php" class="btn btn-primary"> LOGOUT   <i class=" glyphicon glyphicon-log-out "></i></a><br></br>
</br>
</br>
</center>
  </body>
</html>
