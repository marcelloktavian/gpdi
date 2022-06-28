<?php 
 
$koneksi = mysqli_connect("localhost","gpdi","!Leuwigajah103","db_gpdi");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>