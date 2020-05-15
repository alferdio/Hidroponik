<?php 
include 'koneksi.php';
    session_start();
    if($_SESSION['login'] == false){
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>SIMPENIK</title>

 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script/bootbox.min.js"></script>
<script type="text/javascript" src="script/deleteRecords.js"></script> -->
  <style>
    .page-item.active .page-link{
      background-color: black;
      border-color: grey;
    }
    .page-link{
      color: grey;
    }
  </style>
  <!-- <style>
    
    @media screen and (min-width: 425px){
      iframe{display: none;}
    }
  </style> -->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.php" class="nav-link">Website Monitoring Tanaman</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <a class="nav-link" href="index.php">
          <i></i>
          <span class="badge badge-danger navbar-badge">Keluar</span>
        </a>

    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: black">
    <!-- Brand Logo -->
    <a href="index3.php" class="brand-link">
      <img src="dist/img/AdminLTELogo1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIMPENIK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                          <li class="nav-item">
                            <a href="index3.php" class="nav-link">
                              <i class="nav-icon fas fa-tachometer-alt"></i>
                              <p>Dashboard</p>
                            </a>
                          </li>
          <li class="nav-item">
            <a href="index3.php?halaman=data" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Sensor
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index3.php?halaman=petugas" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Petugas
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index3.php?halaman=komentar" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Komentar
                
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Grafik
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index3.php?halaman=cobachart" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sensor pH</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index3.php?halaman=charttds" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sensor TDS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index3.php?halaman=chartjarak" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sensor Ultrasonik</p>
                </a>
              </li>
            </ul>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<?php
                if (isset($_GET['halaman'])) {
                    if ($_GET['halaman']=="data")
                    {
                        include 'data.php';
                    }
                elseif ($_GET['halaman']=='hapusdata') 
                    {
                        include 'hapusdata.php';
                    }
                elseif ($_GET['halaman']=='petugas') 
                    {
                        include 'petugas.php';
                    }
                elseif ($_GET['halaman']=='cobachart') 
                    {
                        include 'cobachart.php';
                    }
                elseif ($_GET['halaman']=='charttds') 
                    {
                        include 'charttds.php';
                    }
                elseif ($_GET['halaman']=='chartjarak') 
                    {
                        include 'chartjarak.php';
                    }
                elseif ($_GET['halaman']=='tambahpetugas') 
                    {
                        include 'tambahpetugas.php';
                    }
                elseif ($_GET['halaman']=='ubahpetugas') 
                    {
                        include 'ubahpetugas.php';
                    }
                elseif ($_GET['halaman']=='hapususer') 
                    {
                        include 'hapususer.php';
                    }
                elseif ($_GET['halaman']=='indexdatapetugas') 
                    {
                        include 'indexdatapetugas.php';
                    }
                elseif ($_GET['halaman']=='logout') 
                    {
                        include 'logout.php';
                    }
                elseif ($_GET['halaman']=='komentar') 
                    {
                        include 'komentar.php';
                    }

                }
            else
            {
                include 'home.php';
            }

                ?>

</div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright 2020 <a href="http://Hidroponik.dsitd.ipb.ac.id">Hidroponik.dsitd.ipb.ac.id</a>.</strong>
   
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

<!-- <script src="plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<!-- <script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script> -->
<!-- <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script> -->
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>

