<?php
ini_set('date.timezone', 'Asia/Jakarta');
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$nik = $_POST['nik'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from tbl_user where nik='$nik' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

   $data = mysqli_fetch_assoc($login);

   // cek jika user login sebagai super admin
   if ($data['level'] == "super") {

      // buat session login dan username
      $_SESSION['nik'] = $nik;
      $_SESSION['level'] = "super";
      // alihkan ke halaman dashboard admin
      header("location:../../kasubag/profile.php");

      // cek jika user login sebagai admin
   } else if ($data['level'] == "admin") {
      // buat session login dan username
      $_SESSION['nik'] = $nik;
      $_SESSION['level'] = "admin";
      // alihkan ke halaman dashboard pegawai
      header("location:../admin/index.php");

      // cek jika user login sebagai petugas
   } else if ($data['level'] == "petugas") {
      // buat session login dan username
      $_SESSION['nik'] = $nik;
      $_SESSION['iduser'] = $id_user;
      $_SESSION['level'] = "petugas";
      // alihkan ke halaman dashboard pengurus
      header("location:../petugas/profile.php");
   } else if ($data['level'] == "kepala") {
      // buat session login dan username
      $_SESSION['nik'] = $nik;
      $_SESSION['level'] = "kepala";
      // alihkan ke halaman dashboard pengurus
      header("location:../kepala/profile.php");
   }
} else {

   // alihkan ke halaman login kembali
   header("location:login.php?pesan=gagal");
}
