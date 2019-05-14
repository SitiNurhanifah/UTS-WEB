<?php 
require 'koneksi.php';
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }
  $tampil = query ("SELECT * FROM blog");
  
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("<H1><font color=red><U>Silahkan Anda Log In Kembali</U></font></H1>");//jika belum login jangan lanjut

}
//cek level user
if($_SESSION['level']!="admin"){
  header('location:manager.php');
    // die("Anda bukan manager");
    //jika bukan admin jangan lanjut
}else{
  $username = $_SESSION['username']; 
  $level=$_SESSION['level'];
}
?>
<head>
  <title>index</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  </head>
<body style="background color:blue">
  
  
<div align='center'>
  <font color=black>
  <h2 style="text-align: center; font-family: sans-serif; color: white;"><font color= black>Selamat Datang</font> <?php echo $level;?> <b><?php echo $username;?></b> 
  </font>
</div></h2> 
<!-- <?php
// echo "<h2>Your Input:</h2>";
// echo "Nama : ";
// echo $password;
// echo "<br>";
// echo "Nim : ";
// echo $nim;
// echo "<br>";
// echo "E-mail : ";
// echo $email;
// echo "<br>";
// echo "jurusan : ";
// echo $jurusan;
// echo "<br>";
// echo "Gender : ";
// echo $gender;
// echo "<br>";
// echo "Usia : ";
// echo $usia;
// echo "<br>";
// echo "Website : ";
// echo $website;
// echo "<br>";
// echo "Biografi : ";
// echo $biografi;
// echo "<br>";
// echo $tgl = date("d/m/Y h:i:sa");
// echo "<br>";
?>

<?php
// $result=mysqli_query($connect,'SELECT * FROM user');
// $row=mysqli_fetch_row($result);
// echo "$row[0] $row[1] $row[2] $row[3]";
?> -->
    <div class="row">
        <div class="container-fuild">
            <div class="row">
                <br>
                <br>
                <div class="col-md-8 col-md-offset-2">
                    <a href="creat.php" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a><br></br>
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
    <th>Opsi</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["nama"] ?></td>
    <td><?= $x["ketbayar"] ?></td>
    <td><?= $x["catatan"];  ?></td>
    <td><?= $x["waktu"];  ?></td>
    <td>
       <a href="ubah.php?id=<?= $x["id"]?>"  class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil"></i> Edit</a> <br></br>
      <a href="hapus.php?id=<?= $x["id"]?>"onclick="return confirm('Yakin mau di hapus?');"" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Hapus</a>

    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

<br>
<center>
  <br>
<div class="col-md-8 col-md-offset-2">
                    <a href="logout.php" class="btn btn-primary"><i class=" glyphicon glyphicon-log-out "></i> Logout</a><br></br>
                    
</center>
  </body>
</html>
