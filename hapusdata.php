<?php 
include 'koneksi.php';
//$id_jarak = $_GET['id'];
$koneksi->query("DELETE FROM data WHERE id_nilai='$_GET[id]'");
?>
