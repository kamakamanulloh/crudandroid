<?php


 $id = $_GET['id'];


 require_once('koneksi.php');

 $sql = "DELETE FROM mahasiswa WHERE id=$id;";

 if(mysqli_query($con,$sql)){
 echo 'Berhasil Menghapus ';
 }else{
 echo 'Gagal Menghapus ';
 }

 mysqli_close($con);
 ?>
