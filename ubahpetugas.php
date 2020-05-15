<?php 
include 'koneksi.php'; 
$ambil=$koneksi->query("SELECT * FROM admin WHERE id_admin='$_GET[id]'"); 
$pecah=$ambil->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Petugas</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" >
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Ubah Data Petugas</h3> 
					</div>
					<div class="panel-body">
						<form method="post" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-md-3">Email</label>
								<div class="col-md-7">
									<input type="text" name="email" class="form-control" value="<?php echo $pecah['email']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">password</label>
								<div class="col-md-7">
									<input type="text" name="password" class="form-control" value="<?php echo $pecah['password']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">username</label>
								<div class="col-md-7">
									<input type="text" name="username" class="form-control" value="<?php echo $pecah['username']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">nama lengkap</label>
								<div class="col-md-7">
									<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $pecah['nama_lengkap']; ?>">
								</div>
							</div>
							
							</div>
							<div class="form-group">
								<div class="col-md-7 col-md-offset-3">
									<br><br>
									<button class="btn btn-primary" name="ubah">Ubah</button>
								</div>
								
							</div>
							
						</form>
						<?php
						if (isset($_POST["ubah"])) 
						{
							//mengambil isian
							$email=$_POST["email"];
							$password=$_POST["password"];
							$jabatan=$_POST["username"];
							$jenis_kelamin=$_POST["nama_lengkap"];

							$koneksi->query("UPDATE user SET email='$email', password='$password', username='$username', nama_lengkap='$nama_lengkap' WHERE id_admin='$_GET[id]'");

								echo "<script>alert('Data Telah di Ubah')</script>";
								echo "<meta http-equiv='refresh' content='1;url=index3.php?halaman=petugas'>";
							


						}
						?>
						
					</div>

					
				</div>
			</div>
		</div>
	</div>

</body>
</html>