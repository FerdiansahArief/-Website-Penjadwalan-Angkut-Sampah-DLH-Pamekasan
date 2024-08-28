 <div class="table-responsive p-3">
    <table class="table align-items-center table-flush" id="dataTable">
       <thead class="thead-light">
          <tr>
             <th>NO</th>
             <th>Nama Petugas (Sopir)</th>
             <th>Rute</th>
             <th>Waktu</th>
             <th>Jenis Kendaraan</th>
             <th>Nomor Polisi</th>
             <th>STATUS</th>
             <th>AKSI</th>
          </tr>
       </thead>
       <?php
         include "koneksi.php";
         $nik = $_SESSION['nik'];
         $no = 1;
         $dt1 = date("Y-m-d");
         $query_mysql = mysqli_query($koneksi, "SELECT jadwal.id_jadwal, tbl_user.id_user, tbl_user.nama, tbl_user.nik, jadwal.nama_rute, jadwal.shift, kendaraan.jenis, kendaraan.no_polisi, tb_status.status FROM jadwal LEFT JOIN tbl_user ON jadwal.id_petugas=tbl_user.id_user LEFT JOIN kendaraan ON jadwal.id_kendaraan=kendaraan.id_kendaraan LEFT JOIN tb_status ON jadwal.id_jadwal=tb_status.id_jadwal WHERE nik = '$nik' && tb_status.status = 'belum konfirmasi'");




         while ($data = mysqli_fetch_array($query_mysql)) {
         ?>
          <tbody>
             <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['nama_rute']; ?></td>
                <td><?php echo $data['shift']; ?></td>
                <td><?php echo $data['jenis']; ?></td>
                <td><?php echo $data['no_polisi']; ?></td>
                <td><?php echo $data['status']; ?></td>
                <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter<?php $data['id_jadwal']; ?>"
                      id="#modalCenter">KONFIRMASI</button></td>

             </tr>
          </tbody>
    </table>
 </div>

 <!-- Modal Center -->
 <div class="modal fade" id="exampleModalCenter<?php $data['id_jadwal']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModalCenterTitle">Upload Bukti Kegiatan</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body">

             <form class="form-group" action="konfirmasi.php" method="post" enctype="multipart/form-data">
                <div class="form-group d-flex justify-content-center">
                   <img style="width: 120px; height: 120px; object-fit: cover;" id="imgPreview" class="img-preview" src="../img/bukti/thumbnail.png" alt="Pratinjau Gambar">

                   <input type="hidden" name="id_jadwal" value="<?php echo $data['id_jadwal']; ?>">
                   <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
                   <input type="hidden" name="petugas" value="<?php echo $data['nama']; ?>">
                </div>
                <div class="custom-file">
                   <input type="file" name="bukti" accept="image/*" class="custom-file-input" id="formFile" onchange="previewImage(event)" required>
                   <label class=" custom-file-label" for="customFile">Choose file</label>
                </div>


          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
             <button type="submit" name="submit" class="btn btn-primary">Konfirmasi</button>
          </div>
          </form>
       </div>
    </div>
 </div>

 <?php
         }
   ?>