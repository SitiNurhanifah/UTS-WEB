<?php 
require 'koneksi.php';
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }

$id = $_GET["id"];

if(hapus($id)>0){
    echo "<script>alert('Data Berhasil dihapus');document.location.href='admin.php'</script>";
       
}else{
    echo "<script>alert('Data Gagal DiHapus');document.location.href='admin.php'</script>";
       
}


 ?>