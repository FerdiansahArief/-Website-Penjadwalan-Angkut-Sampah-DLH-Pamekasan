<?php

if (isset($_POST['simpan'])) {

   include "koneksi.php";

   $petugas = $_POST['petugas'];

   if (empty($_POST['pengangkut1'])) {

      $pengangkut1 = "NULL";
   } else {

      $pengangkut1 = $_POST['pengangkut1'];
   }

   if (empty($_POST['pengangkut2'])) {

      $pengangkut2 = "NULL";
   } else {

      $pengangkut2 = $_POST['pengangkut2'];
   }

   if (empty($_POST['pengangkut3'])) {

      $pengangkut3 = "NULL";
   } else {

      $pengangkut3 = $_POST['pengangkut3'];
   }

   if (empty($_POST['pengangkut4'])) {

      $pengangkut4 = "NULL";
   } else {

      $pengangkut4 = $_POST['pengangkut4'];
   }



   $nama_rute = $_POST['nama_rute'];

   $jam = $_POST['jam'];

   $kendaraan = $_POST['kendaraan'];

   // // cek petugas
   // $cekpetugas = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE id_petugas = '$petugas' && status = 'aktif'");

   // foreach ($cekpetugas as $data) {
   //    var_dump($data['id_petugas']);
   // }


   cekrute
   $cekpengangkut = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_pengangkut = '$pengangkut1' || id_pengangkut = '$pengangkut2' || id_pengangkut = '$pengangkut3'|| id_pengangkut = '$pengangkut4' ");
   while ($did_jadwal = mysqli_fetch_array($cekpengangkut)) {
      $id_jadwal = $did_jadwal['id_jadwal'];
      echo $id_jadwal;
   }
   $cekrute = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE nama_rute = '$nama_rute' && status = 'aktif'");

   $prosescek = mysqli_num_rows($cekrute);

   if ($prosescek == 0) {
      //cekidjadwal
      $cekid = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE id_jadwal = '$id_jadwal' && status = 'aktif'");
      $prosescekid = mysqli_num_rows($cekid);
      if ($prosescekid == 0) {

         $cek = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE id_kendaraan = '$kendaraan' && status = 'aktif'");

         $prosescek = mysqli_num_rows($cek);

         if ($prosescek == 0) {

            $sqll = mysqli_query($koneksi, "INSERT INTO jadwal values (null,'$petugas','$nama_rute','$jam','$kendaraan','aktif');");



            if ($sqll) {



               $sql2 = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE id_petugas='$petugas' && status = 'aktif'");

               var_dump($sql2);

               $id_jadwal;
               while ($dataang = mysqli_fetch_array($sql2)) {
                  $id_jadwal = $dataang['id_jadwal'];
               }


               @$sqlls = mysqli_query($koneksi, "INSERT INTO jadwal_history values (null,'$id_jadwal','$petugas','$nama_rute','$jam','$kendaraan','$status');");

               $sql3 = mysqli_query($koneksi, "INSERT INTO anggota (id_petugas, id_pengangkut, id_jadwal) values ('$petugas','$pengangkut1','$id_jadwal'),('$petugas','$pengangkut2','$id_jadwal'),('$petugas','$pengangkut3','$id_jadwal'),('$petugas','$pengangkut4','$id_jadwal');");

               $sql4 = mysqli_query($koneksi, "INSERT INTO anggota_history (id_petugas, id_pengangkut, id_jadwal) values ('$petugas','$pengangkut1','$id_jadwal'),('$petugas','$pengangkut2','$id_jadwal'),('$petugas','$pengangkut3','$id_jadwal'),('$petugas','$pengangkut4','$id_jadwal');");
            }

            if ($sql2) {

               echo '<script>

       window.onload = function(){

            alert("Data jadwal berhasil disimpan");

            location.href = "inputjadwal.php"
            }

           </script>';
            }
         } else {

            echo '<script>

        window.onload = function(){

            alert("Kendaraan dipakai");

            location.href = "inputjadwal.php"

            }

            </script>';
         }
      } else {
         echo '<script>

        window.onload = function(){

            alert("petugas sudah dipilih");

            location.href = "inputjadwal.php"

            }

            </script>';
      }
   } else {

      echo '<script>

        window.onload = function(){

            alert("Rute sudah dipilih");

            location.href = "inputjadwal.php"

            }

            </script>';
   }
}
