 <div class="Wrapper">
 <!-- Content Wrapper. Contains page content -->
<div class="col-md-12">
    <div>
<div class="card" style="padding: 10px 10px 10px 10px">  
  <p></p>
<h2>Data Komentar Petugas</h2>

<table id="example" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>email</th>
			<th>isi komentar</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil=$koneksi->query("SELECT * FROM komentar"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td><?php echo $pecah['email']; ?></td>
			<td><?php echo $pecah['isi']; ?></td>
			<td>
				<a href="index3.php?halaman=hapusdata&id=<?php echo $pecah['id_nilai']; ?>" class="btn-danger btn">hapus</a>
			</td>
		</tr>
		<?php $nomor++;?>
		<?php }; ?>
	</tbody>
</table>
</div>
  </div>
</div>
</div>