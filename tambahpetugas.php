<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Petugas</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" >
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Tambah Petugas</h3> 
					</div>
					<div class="panel-body">
						<form method="post" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-md-3">Email</label>
								<div class="col-md-7">
									<input type="text" name="email" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Password</label>
								<div class="col-md-7">
									<input type="text" name="password" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">username</label>
								<div class="col-md-7">
									<input type="text" name="username" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">nama lengkap</label>
								<div class="col-md-7">
									<input type="text" name="nama_lengkap" class="form-control" required>
								</div>
							</div>
							</div>
							<div class="form-group">
								<div class="col-md-7 col-md-offset-3">
									<br><br>
									<button class="btn btn-primary" name="daftar">Daftar</button>
								</div>
								
							</div>
							
						</form>
						<?php
						if (isset($_POST["daftar"])) 
						{
							//mengambil isian
							$email=$_POST["email"];
							$password=$_POST["password"];
							$username=$_POST["username"];
							$nama_lengkap=$_POST["nama_lengkap"];

							//validasi apakah email sudah digunakan
							$ambil=$koneksi->query("SELECT * FROM admin WHERE id_admin='$id_admin'");
							$yangcocok=$ambil->num_rows;
							if ($yangcocok==1) 
							{
								echo "<script>alert('Pendaftaran gagal, email sudah digunakan')</script>";
								echo "<script>location='index3.php?halaman=tambahpetugas&id='</script>";
							}
							else
							{
								//query insert pelanggan
								$koneksi->query("INSERT INTO admin (email, password, username, nama_lengkap) VALUES ('$email','$password','$username', '$nama_lengkap') ");

								echo "<script>alert('Pendaftaran Sukses')</script>";
								echo "<meta http-equiv='refresh' content='1;url=index3.php?halaman=petugas'>";
							}


						}
						?>
						
					</div>

					
				</div>
			</div>
		</div>
	</div>

</body>
</html>