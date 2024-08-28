<!DOCTYPE html>
<html lang="en">
<?php 
include "atas.php"
?>
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<?php $rute = $_GET['id']; ?>
                  <h6 class="m-0 font-weight-bold text-primary">Data <?php echo $rute?></h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Nama Jalan</th>
                        <th>Batas Armada</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <th>No</th>
                        <th>NAMA Jalan</th>
                        <th>Batas Armada</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    <?php 
                                include "koneksi.php";
                                $no =1;
								$rute = $_GET['id'];
                                $query_mysql = mysqli_query($koneksi, "SELECT rute_rute.id_rute, rute_rute.nama_rute, rute_rute.id_jalan, rute.nama_jalan, rute.batas_armada FROM rute_rute LEFT JOIN rute ON rute_rute.id_jalan = rute.id_jalan WHERE rute_rute.nama_rute = '$rute' ")or die(mysql_error());
                            while($data = mysqli_fetch_array($query_mysql)){
                            ?>
                      <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data ['nama_jalan'];?></td>
                        <td><?php echo $data ['batas_armada'];?></td>
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
