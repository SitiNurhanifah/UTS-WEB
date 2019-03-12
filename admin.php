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

<body style="background color:blue">
  
  <title>index</title>
<div align='center'>
  <font color=black>
  <h2 style="text-align: center; font-family: sans-serif; color: white;"><font color= black>Selamat Datang</font> <?php echo $level;?> <b><?php echo $username;?></b> <br>jika sudah selesai silahkan anda </br> <a href="logout.php"><b><font color=black>Logout</font></b></a>
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






<center>
<br><br>
    <h2>Data Pembayaran Uang Kas</h2>
  <br><br>
    <table border="1" cellpadding="10" cellspacing="0" width="50%" >
  <tr>
   
     <th>no</th>
    <th>Nama Mahasiswa 👩‍🎓👨‍🎓</th>
    <th>keterangan  💸</th>
    <th>Catatan  📑</th>
    <th>terkhir di update ⏱</th>
    <th>opsi</th>
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
      <center><button><a href="ubah.php?id=<?= $x["id"]?>">ubah</a></button> || <button><a href="hapus.php?id=<?= $x["id"]?>" onclick =" return confirm ('apakah anda yakin?');">hapus</a></button></center>
    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

<br>
<center>
  <br>
<a href="creat.php">Tambah ✅</a><br><br>
<a href="logout.php">Logout ❌ </a></br></br>
</center>
  </body>
</html>
