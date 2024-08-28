<?php
ob_start();
//memulai session yang disimpan pada browser

SESSION_START();

ini_set('date.timezone', 'Asia/Jakarta');

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login

if ($_SESSION['status'] != "sudah_login") {

   //melakukan pengalihan

   header("location:../index.php");
} ?>
<!DOCTYPE html>

<html lang="en">

<?php

include "koneksi.php";

include "atas.php"





?>





<!-- Datatables -->

<div class="col-lg-12">

   <div class="card mb-4">

      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

         <h6 class="m-0 font-weight-bold text-primary">Jadwal Harian Petugas</h6>

      </div>

      <div class="col-sm-10">

         <?php
         include "koneksi.php";
         $nik = $_SESSION['nik'];
         $login = mysqli_query($koneksi, "select * from tbl_user where nik='$nik'");
         $data = mysqli_fetch_array($login);
         ?>
         <a href="cetak_jadwal.php" target="_blank"><button type="submit" class="btn btn-primary" target="_blank">Cetak Jadwal</button></a>

         <a href="history_user.php?petugas=<?php echo $data['id_user'] ?>" target="_blank"><button type="submit" class="btn btn-primary" target="_blank">History</button></a>

      </div>

      <div class="table-responsive p-3">

         <table class="table align-items-center table-flush" id="dataTable">

            <thead class="thead-light">

               <tr>

                  <th>NO</th>

                  <th>Nama Petugas (Sopir)</th>

                  <th>Anggota (Pengangkut)</th>

                  <th>Rute</th>

                  <th>Waktu</th>

                  <th>Jenis Kendaraan</th>

                  <th>Nomor Polisi</th>



               </tr>

            </thead>

            <?php

            include "koneksi.php";

            $nik = $_SESSION['nik'];

            $no = 1;

            $query_mysql = mysqli_query($koneksi, "SELECT jadwal.id_jadwal, jadwal.id_petugas, tbl_user.nama, jadwal.nama_rute, jadwal.shift, kendaraan.jenis, kendaraan.no_polisi FROM jadwal LEFT JOIN tbl_user ON jadwal.id_petugas=tbl_user.id_user LEFT JOIN kendaraan ON jadwal.id_kendaraan=kendaraan.id_kendaraan WHERE nik = '$nik' && jadwal.status = 'aktif'");

            while ($data = mysqli_fetch_array($query_mysql)) {



            ?>

               <tbody>

                  <tr>

                     <td rowspan="4"><?php echo $no++; ?></td>

                     <td rowspan="4"><?php echo $data['nama']; ?></td>

                     <td><?php

                           $i = "1";

                           $id_jadwal = $data['id_jadwal'];

                           $id_petugas = $data['id_petugas'];

                           $query_anggota = mysqli_query($koneksi, "SELECT anggota.id_anggota, anggota.id_pengangkut, tb_pengangkut.nama_pengangkut FROM anggota LEFT JOIN tb_pengangkut ON anggota.id_pengangkut=tb_pengangkut.id_pengangkut WHERE id_jadwal='$id_jadwal' && id_petugas='$id_petugas'");

                           while ($data2 = mysqli_fetch_array($query_anggota)) {

                              echo $i++, ". ";

                              echo $data2['nama_pengangkut'];

                              echo "<br></br>";
                           }

                           ?>

                     </td>

                     <td><a href="detail_rute.php?id=<?php echo $data['nama_rute'] ?>"><?php echo $data['nama_rute']; ?></a></td>

                     <td rowspan="4"><?php echo $data['shift']; ?></td>

                     <td rowspan="4"><?php echo $data['jenis']; ?></td>

                     <td rowspan="4"><?php echo $data['no_polisi']; ?></td>

                  <?php

               }

                  ?>

                  </tr>

               </tbody>

         </table>

      </div>

   </div>

   <div class="card mb-4">

      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

         <h6 class="m-0 font-weight-bold text-primary">Konfirmasi Jadwal</h6>

      </div>

      <?php

      $nik = $_SESSION['nik'];

      $dt1 = date("Y-m-d");

      $no = 1;

      $cek = mysqli_query($koneksi, "SELECT jadwal.id_jadwal, tbl_user.id_user, tbl_user.nik, tb_status.status FROM jadwal LEFT JOIN tbl_user ON jadwal.id_petugas=tbl_user.id_user LEFT JOIN tb_status ON jadwal.id_jadwal=tb_status.id_jadwal WHERE nik = '$nik' && jadwal.status='aktif'");

      $cekrow = mysqli_num_rows($cek);


      if ($cekrow !== 0) {

         $data1 = mysqli_fetch_assoc($cek);

         $cek_status = "dikonfirmasi";

         if ($data1['status'] == $cek_status) {

            echo "<h3>Sudah Konfirmasi</h3>";
         } else {
            include "tabel_konfirmasi.php";
         }
      }

      ?>

   </div>

</div>

<!-- Script untuk Preview Gambar -->
<script>
   function previewImage(event) {
      const input = event.target;
      const reader = new FileReader();

      reader.onload = function() {
         const imgPreview = document.getElementById('imgPreview');
         imgPreview.src = reader.result;
         imgPreview.style.display = 'block';
      };

      if (input.files && input.files[0]) {
         reader.readAsDataURL(input.files[0]);
      }
   }
</script>

<?php

include "bawah.php";

?>