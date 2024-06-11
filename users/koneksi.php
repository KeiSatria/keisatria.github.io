<?php
// Koneksi ke database
$host="localhost";
$user="kei";
$password="sepuluhdansebelas";
$db="tabungan_siswa_kei";
$config = mysqli_connect($host,$user,$password,$db);
if (!$config){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>

