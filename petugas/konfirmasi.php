<?php

ini_set('date.timezone', 'Asia/Jakarta');

include "koneksi.php";

if (isset($_POST['submit'])) {
   $id_jadwal = $_POST['id_jadwal'];
   $id_user = $_POST['id_user'];
   $petugas = $_POST['petugas'];
   $tgl = date("Y-m-d H-i-s");
   $imageName = basename($_FILES["bukti"]["name"]);
   $imgExt = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
   $newImageName = $tgl . '_' . $petugas . '.' . $imgExt;
   $target_file = "../img/bukti/" . $newImageName;
   $check = getimagesize($_FILES["bukti"]["tmp_name"]);

   if ($check !== false) {
      if (move_uploaded_file($_FILES["bukti"]["tmp_name"], $target_file)) {

         $time = date("H:i:s");

         $dt1 = date("Y-m-d");

         $query = "UPDATE tb_status SET id_user='$id_user', jam='$time', status='dikonfirmasi' WHERE id_jadwal='$id_jadwal'";

         $sql = mysqli_query($koneksi, $query);

         if ($sql) {

            $inhistory = mysqli_query($koneksi, "INSERT INTO history VALUES(null,'$id_jadwal','$id_user','$dt1','$time','dikonfirmasi', '$newImageName');");

            echo '<script>

               window.onload = function(){

                  alert("Jadwal telah dikonfirmasi");

                  location.href = "jadwal_patugas.php"

               }

            </script>';
         } else {

            echo "<script>alert('Gagal');</script>" . mysqli_error($koneksi);
         }
      } else {
         echo "<script>alert('Gagal Upload Gambar');</script>";
      }
   } else {
      echo "<script>alert('File yang diupload bukan gambar');</script>";
      $uploadOk = 0;
   }
}
