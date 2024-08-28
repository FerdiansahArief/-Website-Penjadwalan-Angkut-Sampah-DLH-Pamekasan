<!DOCTYPE html>
<html lang="en">
<?php 
include "atas.php"
?>
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>NAMA</th>
                        <th>RUTE</th>
                        <th>WAKTU</th>
                        <th>KENDARAAN</th>
                        <th>STATUS</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                                include "koneksi.php";
                                $no =1;
                                $id = "petugas";
                                $query_mysql = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE level='$id'")or die(mysql_error());
                            while($data = mysqli_fetch_array($query_mysql)){
                            ?>
                      <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data ['nama'];?></td>
                        <td><?php echo $data ['rute'];?></td>
                        <td><?php echo $data ['shift'];?></td>
                        <td><?php echo $data ['kendaraan'];?></td>
                        <td><?php echo $data ['status'];?></td>
                        <td>
                        <a href="#" class="btn btn-primary btn-sm">konfirmasi</a>
                        <a href="#" class="btn btn-danger btn-sm"></a>
                        </td>
                      </tr>
					  <a href="#" class="btn btn-danger btn-sm">cetak</a>
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
