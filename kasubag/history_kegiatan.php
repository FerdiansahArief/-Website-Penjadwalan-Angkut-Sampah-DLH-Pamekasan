<!DOCTYPE html>
<html lang="en">
<?php
include "atas.php"
?>
<!-- Datatables -->
<div class="col-lg-12">
   <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary">Riwayat Kinerja Petugas</h6>
      </div>
      <!-- <div class="col-sm-10">
         <a href="input_admin.php"><button type="submit" class="btn btn-primary">+ Tambah Admin</button></a>
      </div> -->
      <div class="table-responsive p-3">
         <table class="table align-items-center table-flush" id="dataTable">
            <thead class="thead-light">
               <tr>
                  <th>No.</th>
                  <th>Petugas</th>
                  <th>Rute</th>
                  <th>Kendaraan</th>
                  <th>Jam Shift</th>
                  <th>status</th>
                  <th>Tgl Konfirmasi</th>
                  <th>Bukti Kegiatan</th>
               </tr>
            </thead>
            <tbody>
               <?php
               include "koneksi.php";
               $no = 1;
               $id = "admin";
               $query_mysql = mysqli_query($koneksi, "SELECT 
                  tbl_user.nama AS nama_user, 
                  kendaraan.no_polisi, 
                  kendaraan.jenis,
                  jadwal.id_jadwal, 
                  jadwal.nama_rute, 
                  jadwal.shift, 
                  history.petugas,
                  history.tanggal, 
                  history.jam, 
                  history.status AS status_kegiatan, 
                  history.gambar,
                  jadwal.status AS status_jadwal
               FROM 
                  history
               JOIN 
                  tbl_user ON history.petugas = tbl_user.id_user
               JOIN 
                  jadwal ON history.id_jadwal = jadwal.id_jadwal
               JOIN 
                  kendaraan ON jadwal.id_kendaraan = kendaraan.id_kendaraan
               ORDER BY 
                  history.tanggal DESC, 
                  history.jam DESC;
               ") or die(mysqli_error($koneksi));

               while ($data = mysqli_fetch_array($query_mysql)) {
                  $anggota =
                     mysqli_query($koneksi, "SELECT anggota.id_anggota, anggota.id_pengangkut, tb_pengangkut.nama_pengangkut FROM anggota LEFT JOIN tb_pengangkut ON anggota.id_pengangkut=tb_pengangkut.id_pengangkut WHERE id_jadwal='$data[id_jadwal]' && id_petugas='$data[petugas]'") or die($koneksi->error);
               ?>
                  <tr>
                     <td><?php echo $no++; ?></td>
                     <td><b class="font-bold""><?php echo $data['nama_user']; ?> </b><br>
                        <?php
                        while ($row = mysqli_fetch_array($anggota)) {
                           echo "- " . $row['nama_pengangkut'] . "<br>";
                        }
                        ?></td>
                     <td><?php echo $data['nama_rute']; ?></td>
                     <td><?php echo $data['no_polisi']; ?><br><?php echo $data['jenis']; ?></td>
                     <td><?php echo $data['shift']; ?></td>
                     <td><span class=" badge badge-success p-2" style="font-size: 1rem;"><?php echo $data['status_kegiatan']; ?></span></td>
                     <td><?php echo $data['tanggal']; ?> <?php echo $data['jam']; ?></td>
                     <td>
                        <?php if (!empty($data['gambar'])): ?>
                           <img style=" width: 100px; height: 100px; object-fit: cover; object-position: center; cursor: pointer" src="../img/bukti/<?= htmlspecialchars($data['gambar']); ?>" alt="Bukti Gambar"
                              class="img-thumbnail"
                              width="100"
                              data-toggle="modal"
                              data-target="#imageModal"
                              onclick="showImage('../img/bukti/<?= htmlspecialchars($data['gambar']); ?>')">
                        <?php else: ?>
                           Tidak ada gambar
                        <?php endif; ?>
                     </td>
                  </tr>
               <?php
               }
               ?>
            </tbody>
         </table>
      </div>
   </div>
</div>

<!-- Modal Bootstrap untuk Gambar -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="imageModalLabel">Preview Gambar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body text-center">
            <img id="modalImage" src="" alt="Gambar Preview" class="img-fluid">
         </div>
      </div>
   </div>
</div>

<script>
   // Function untuk menampilkan gambar di dalam modal
   function showImage(src) {
      document.getElementById('modalImage').src = src;
   }
</script>
<?php
include "bawah.php";
?>