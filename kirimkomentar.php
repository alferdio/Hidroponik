<?php
	include "koneksi.php";
	$sql="INSERT INTO `komentar`( `nama`, `email`, `isi`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";
	$rslt=mysqli_query($koneksi,$sql);
	var_dump($rslt);
	header('location:contact.html #contact')
?>