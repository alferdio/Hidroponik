<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
    .page-item.active .page-link{
      background-color: black;
      border-color: grey;
    }
    .page-link{
      color: grey;
    }
  </style>
</head>
<body>
  <div class="Wrapper">
 <!-- Content Wrapper. Contains page content -->
<div class="col-md-12">
    <div>
<div class="card" style="padding: 10px 10px 10px 10px">  
  <h2>Data Nilai Sensor SIMPENIK</h2>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal & waktu</th>
                <th>Nilai pH</th>
                <th>Nilai TDS</th>
                <th>Ketinggian Air </th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM data ORDER BY id_nilai DESC" ); ?>
        <?php while ($pecah = $ambil->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['tanggalwaktu']; ?></td>
            <td><?php echo $pecah['nilai_pH']; ?></td>
            <td><?php echo $pecah['nilai_tds']; ?></td>
            <td><?php echo $pecah['nilai_jarak']; ?></td>
            <td>
                <a href="index3.php?halaman=hapusdata&id=<?php echo $pecah['id_nilai']; ?>" class="btn-danger btn">hapus</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
        </tbody>
    </table>
</div>
  </div>
</div>

</div>
  <!-- /.content-wrapper -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- AdminLTE -->
</body>
</html>

