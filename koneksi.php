<?php 
	
	$conn = mysqli_connect("sql100.epizy.com","epiz_23904698","6jlwTQQ5","epiz_23904698_nama");

	function query ($query){
		global $conn;
		$result = mysqli_query ($conn,$query);
		$rows = [];

		while ($mhs = mysqli_fetch_assoc($result)) {
			$rows[]=$mhs;
		}
		return $rows;
	}

	function hapus ($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM blog WHERE id = $id");
		return mysqli_affected_rows($conn); 
	}


	function ubah($data)
	{
		global $conn;

		$id = $data["id"];
		$nama = htmlspecialchars($data["nama"]);
		$ketbayar = htmlspecialchars($data["ketbayar"]);
		$catatan = htmlspecialchars($data["catatan"]);

		$query = "UPDATE blog SET nama = '$nama', ketbayar = '$ketbayar', catatan = '$catatan' WHERE id = $id";

		mysqli_query ($conn, $query);
		return mysqli_affected_rows ($conn);
	}

	// function creat ($data){
	// 	global $conn;

	// 	$judul = $data["judul"];
	// 	$isi = $data["isi"];

	// 	$query = "INSERT INTO blog VALUES ('','$judul', '$isi')";

	// 	mysql_query($conn, $query);

	// 	return mysqli_affected_rows($conn);



	
 ?>