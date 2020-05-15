<?php 
include 'koneksi.php';

$koneksi->query("DELETE FROM admin WHERE id_admin='$_GET[id]'");

echo "<script>alert('User Terhapus');</script>";
echo "<script>location='index3.php?halaman=petugas';</script>";
?>