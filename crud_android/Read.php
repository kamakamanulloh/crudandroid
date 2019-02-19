<?php

	
	require_once('koneksi.php');

	
	$sql = "SELECT * FROM mahasiswa ORDER BY nim";

	
	$r = mysqli_query($con,$sql);

	
	$result = array();

	while($row = mysqli_fetch_array($r)){

	
		array_push($result,array(
			"nim"=>$row['nim'],
			"id"=>$row['id'],
			"nama"=>$row['nama']
		));
	}

	
	echo json_encode(array('result'=>$result));

	mysqli_close($con);
?>
