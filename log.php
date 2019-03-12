<?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD</title>
   <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<center>
  <br>
    <h2>Data Pembayaran Uang Kas</h2>
  <br><br>
   <table class="table-striped"  cellpadding="10" cellspacing="0" width="50%">
  <tr>
   
    <th>no</th>
    <th>Nama Mahasiswa 👩‍🎓👨‍🎓</th>
    <th>keterangan  💸</th>
    <th>Catatan  📑</th>
    <th>terkhir di update ⏱</th>
    
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
<a href="logout.php">Logout ▶</a>
</br>
</br>
</center>
  </body>
</html>
