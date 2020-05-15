<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
 <div class="Wrapper">
 <!-- Content Wrapper. Contains page content -->
<div class="col-md-12">
    <div>
<div class="card" style="padding: 10px 10px 10px 10px"> 
  <p></p>
  <h2>Data Client (Petugas)</h2>
<table id="example" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>no</th>
			<th>email</th>
			<th>password</th>
			<th>username</th>
			<th>nama lengkap</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil=$koneksi->query("SELECT * FROM admin ORDER BY id_admin DESC"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['email']; ?></td>
			<td>*</td>
			<td><?php echo $pecah['username']; ?></td>
			<td><?php echo $pecah['nama_lengkap']; ?></td>
			<td>
				<a href="index3.php?halaman=hapususer&id=<?php echo $pecah['id_admin']; ?>" class="btn btn-danger">hapus</a>
				<a href="index3.php?halaman=ubahpetugas&id=<?php echo $pecah['id_admin']; ?>" class="btn btn-success">Ubah</a>
			</td>
		</tr>
		<?php $nomor++;?>
		<?php }; ?>
	</tbody>
</table>
<a href="index3.php?halaman=tambahpetugas&id=<?php echo $pecah['id_admin']; ?>" class="btn btn-primary">Tambah</a>
</div>
  </div>
</div>
</div>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> 
</body>
</html>