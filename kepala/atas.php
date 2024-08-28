<!DOCTYPE html>
<html lang="en">
<?php 
//memulai session yang disimpan pada browser
session_start();
ini_set('date.timezone', 'Asia/Jakarta');
//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:../index.php");
} 
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../foto.png" rel="icon">
  <title>DLH Pamekasan</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../css/ruang-admin.min.css" rel="stylesheet">
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- Select2 -->
  <link href="../vendor/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap DatePicker -->  
  <link href="../vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" >
  <!-- Bootstrap Touchspin -->
  <link href="../vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet" >
  <!-- ClockPicker -->
  <link href="../vendor/clock-picker/clockpicker.css" rel="stylesheet">
  <!-- RuangAdmin CSS -->
  <link href="../css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <img src="../foto.png">
        </div>
        <div class="sidebar-brand-text mx-3">DLH Pamekasan</div>
      </a>
      <hr class="sidebar-divider my-0">
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Data
      </div>
	  <li class="nav-item">
        <a class="nav-link" href="profile.php">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>profile</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="jadwal_patugas.php">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Data Jadwal</span></a>
      </li>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link" href="../logout.php" role="button">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout
              </a>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->