<!DOCTYPE html>
<html lang="en">
<?php 
include "atas.php"
?>
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Jalan</h6>
                </div>
                <div class="col-sm-10">
                        <a href="inputrute.php"><button type="submit" class="btn btn-primary">+ Tambah Jalan</button></a>
                      </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Nama Jalan</th>
                        <th>Batas Armada</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <th>No</th>
                        <th>NAMA Jalan</th>
                        <th>Batas Armada</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    <?php 
                                include "koneksi.php";
                                $no =1;
                                $query_mysql = mysqli_query($koneksi, "SELECT * FROM rute ")or die(mysql_error());
                            while($data = mysqli_fetch_array($query_mysql)){
                            ?>
                      <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data ['nama_jalan'];?></td>
                        <td><?php echo $data ['batas_armada'];?></td>
                        <td>
                        <a href="editrute.php?id=<?php echo $data['id_jalan']?>" class="btn btn-primary btn-sm">edit</a>
                        <a onclick="return confirm('yakin akan menghapus')" href="hapusrute.php?id=<?php echo $data['id_jalan']?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
