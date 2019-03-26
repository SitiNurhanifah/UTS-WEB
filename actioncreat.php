<?php 
	require 'koneksi.php';


	session_start();
	$nama = $_POST['nama'];
	$ketbayar = $_POST['ketbayar'];
	$catatan = $_POST['catatan'];
	$waktu = $_POST['waktu'];
	
	

	$tambah = mysqli_query($conn,"INSERT INTO blog VALUES(null,'$nama','$ketbayar','$catatan', null)");

	if($tambah>0){
    echo "<script>alert('Data Berhasil Ditambah');document.location.href='admin.php'</script>";
       
}else{
    echo "<script>alert('Data Gagal Ditambah');document.location.href='creat.php'</script>";
       
}

		
	

 ?>