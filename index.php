<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <link href="img/logo/logo.png" rel="icon">
   <title>Login DLH</title>
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
   <!-- Login Content -->
   <div class="container-login mt-4">
      <div class="row justify-content-center m-auto">
         <div class="col-xl-6 col-lg-12 col-md-9">
            <div class="card shadow-sm my-5">
               <div class="card-body p-0">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="login-form">
                           <div class="text-center">
                              <h3 class="h4 mb-5">SISTEM INFORMASI PENDJADWALAN ANGKUT SAMPAH DLH PAMEKASAN</h3>
                              <h1 class="h4 text-gray-900 mb-4 mt-5">Login</h1>
                           </div>
                           <form action="" method="post">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="nik" placeholder="NIK">
                              </div>
                              <div class="form-group">
                                 <input type="password" class="form-control" name="password" placeholder="Password">
                              </div>
                              <div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-block" name="LOGIN" value="LOGIN">
                                 <?php
                                 if (isset($_POST['LOGIN'])) {
                                    include "koneksi.php";
                                    $nik = $_POST['nik'];
                                    $password = $_POST['password'];
                                    $cek = mysqli_query($koneksi, "select * from tbl_user where nik='$nik' and password='$password'");
                                    $result   = mysqli_num_rows($cek);

                                    if ($result > 0) {
                                       $data = mysqli_fetch_assoc($cek);

                                       //proses session
                                       // cek jika user login sebagai admin
                                       if ($data['level'] == "admin") {

                                          // buat session login dan username
                                          $_SESSION['nik'] = $nik;
                                          $_SESSION['level'] = "admin";
                                          $_SESSION['status'] = "sudah_login";
                                          // alihkan ke halaman dashboard admin
                                          header('Location: admin/index.php');
                                          // cek jika user login sebagai pegawai
                                       } else if ($data['level'] == "super") {
                                          // buat session login dan username
                                          $_SESSION['nik'] = $nik;
                                          $_SESSION['level'] = "super";
                                          $_SESSION['status'] = "sudah_login";
                                          // alihkan ke halaman dashboard super
                                          header("location:kasubag/profile.php");
                                       } else if ($data['level'] == "petugas") {
                                          // buat session login dan username
                                          $_SESSION['nik'] = $nik;
                                          $_SESSION['pwd'] = $password;
                                          $_SESSION['level'] = "petugas";
                                          $_SESSION['status'] = "sudah_login";
                                          // alihkan ke halaman dashboard super
                                          header("location:petugas/profile.php");
                                       } else {
                                          if ($data['level'] == "kepala") {
                                             // buat session login dan username
                                             $_SESSION['nik'] = $nik;
                                             $_SESSION['pwd'] = $password;
                                             $_SESSION['level'] = "kepala";
                                             $_SESSION['status'] = "sudah_login";
                                             // alihkan ke halaman dashboard super
                                             header("location:kepala/profile.php");
                                          } else {
                                             header("location:index.php?pesan=gagal");
                                          }
                                       }
                                    }
                                 }
                                 ?>
                              </div>
                           </form>
                           <div class="text-center">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Login Content -->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   <script src="js/ruang-admin.min.js"></script>
</body>

</html>