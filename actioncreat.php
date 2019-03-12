<?php 
	require 'koneksi.php';


	session_start();
	$nama = $_POST['nama'];
	$ketbayar = $_POST['ketbayar'];
	$catatan = $_POST['catatan'];
	$waktu = $_POST['waktu'];
	
	

	$tambah = mysqli_query($conn,"INSERT INTO blog VALUES(null,'$nama','$ketbayar','$catatan', null)");

		if ($tambah>0) {
			echo "data berhasil ditambahkan ✅";
			echo "<br>";
			echo "klik 👉 ";
			echo "<a href='admin.php'>disini</a>";
			echo " untuk melihat hasil";
		}
		else {
			echo "data gagal ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='creat.php'>disini</a>";
		echo " bray";

		}
	

 ?>