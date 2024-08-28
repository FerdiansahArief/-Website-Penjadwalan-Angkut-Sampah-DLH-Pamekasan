<!DOCTYPE html>
<html lang="en">
<?php 
include "atas.php"
?>
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Jadwal</h6>
                </div>
                <div class="col-sm-10">
                        <a href="inputjadwal.php"><button type="submit" class="btn btn-primary">+ Tambah Jadwal</button></a>
                      </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Rute</th>
                        <th>Waktu</th>
                        <th>Jenis Kendaraan</th>
                        <th>Hapus</th>
                      </tr>
                    </thead>
                    <tfoot>
                     
                    </tfoot>
                    <tbody>
                    <?php 
                                include "koneksi.php";
                                $no =1;
                                $query_mysql = mysqli_query($koneksi, "SELECT * FROM jadwal where nama=petugas")or die(mysql_error());
                            while($data = mysqli_fetch_array($query_mysql)){
                            ?>
                      <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data ['nama'];?></td>
                        <td><?php echo $data ['rute'];?></td>
                        <td><?php echo $data ['shift'];?></td>
                        <td><?php echo $data ['kendaraan'];?></td>
                        <td>
                        <a onclick="return confirm('yakin akan menghapus')" href="hapusjadwal.php?id=<?php echo $data['id_jadwal']?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
