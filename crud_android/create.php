<?php



	if($_SERVER['REQUEST_METHOD']=='POST'){

		//Mendapatkan Nilai Variable
				$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		
		//Pembuatan Syntax SQL
					$sql = "INSERT INTO mahasiswa (nim,nama) VALUES ('$nim','$nama')";
		//Import File Koneksi database
		require_once('koneksi.php');

		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Data Berhasil D1ikirim';
		}else{
						echo 'Data Gagal Dikirim';
		}

		mysqli_close($con);
	}
	
	
	
?>
