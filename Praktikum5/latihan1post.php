<?php 
if (empty($_POST['nama'])) {
	header("Location:latihan1kosong.php");
	}
elseif (empty($_POST['email'])) {
	header("Location:latihan1kosong.php");
	} 
elseif (empty($_POST['jeniskelamin'])) {
	header("Location:latihan1kosong.php");
	} 
elseif (empty($_POST['kota'])) {
	header("Location:latihan1kosong.php");
	} 
elseif (empty($_POST['Universitas'])) {
	header("Location:latihan1kosong.php");
	} 
elseif (empty($_POST['Jurusan'])) {
	header("Location:latihan1kosong.php");
	} 
else
	{
include "99.Latihan1.php";
	echo "<center>Nama Lengkap : <br>".$_POST['nama']."<center><br>";
	echo "<center>Email : <br>".$_POST['email']."<center><br>";
	echo "<center>Jenis Kelamin : <br>".$_POST['jeniskelamin']."<center><br>";
	echo "<center>Asal Kota : <br>".$_POST['kota']."<center><br>";
	echo "<center>Universitas : <br>".$_POST['Universitas']."<center><br>";
	echo "<center>Jurusan : <br>".$_POST['Jurusan']."<center><br>";
	
	date_default_timezone_set('Asia/jakarta');
	echo date("d-F-Y, g:i:s a"); 
	}
 ?>