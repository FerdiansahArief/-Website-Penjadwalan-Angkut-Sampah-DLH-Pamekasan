<!DOCTYPE html>
<html lang="en">
<?php
include "atas.php"
?>
<!-- Datatables -->
<div class="col-lg-12">
   <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary">Data Rute</h6>
      </div>
      <div class="col-sm-10">
         <a href="inputrutex.php"><button type="submit" class="btn btn-primary">+ Tambah Rute</button></a>
      </div>
      <div class="table-responsive p-3">
         <table class="table align-items-center table-flush" id="dataTable">
            <thead class="thead-light">
               <tr>
                  <th>No</th>
                  <th>Nama Rute</th>
                  <th>Aksi</th>
               </tr>
            </thead>
            <tfoot>
               <tr>
                  <th>No</th>
                  <th>NAMA Rute</th>
                  <th>Aksi</th>
               </tr>
            </tfoot>
            <tbody>
               <?php
               include "koneksi.php";
               $no = 1;
               $query_mysql = mysqli_query($koneksi, "SELECT nama_rute FROM rute_rute GROUP BY nama_rute") or die(mysqli_error());
               while ($data = mysqli_fetch_array($query_mysql)) {
               ?>
                  <tr>
                     <td><?php echo $no++; ?></td>
                     <td><?php echo $data['nama_rute']; ?></td>
                     <td>
                        <a href="detail_rute.php?id=<?php echo $data['nama_rute'] ?>" class="btn btn-primary btn-sm">View</a>
                        <a onclick="return confirm('yakin akan menghapus')" href="hapusrutex.php?id=<?php echo $data['nama_rute'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
<?php
include "bawah.php";
?>