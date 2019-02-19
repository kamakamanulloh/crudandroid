<?php


	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
	
		require_once('koneksi.php');

	
		$sql = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim' WHERE id = $id;";

		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update';
		}else{
			echo 'Gagal Update';
		}

		mysqli_close($con);
	}
?>
