<!DOCTYPE html>
<html lang="en">
<?php 
include "atas.php"
?>
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">History</h6>
                </div>
                <div class="col-sm-10">
                        <a href="cetak_history.php" target="_blank"><button type="submit" class="btn btn-primary">Cetak history</button></a>
                </div>
                <div class="table-responsive p-3">
				<table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
					<tr>
							<th>Tgl</th>
							<th>Status</th>
							<th>waktu konfirmasi</th>
							<th>petugas (yg konfirmasi)</th>
						</tr>
                    </thead>
					<?php 
                        include "koneksi.php";
                        $no =1;
						$query_mysql = mysqli_query($koneksi, "SELECT tb_status.tanggal, tb_status.status, tb_status.jam, tbl_user.nama FROM tb_status LEFT JOIN tbl_user ON tb_status.id_user=tbl_user.id_user");
						while($data = mysqli_fetch_array($query_mysql)){
					?>			
					<tbody>
						<tr>
							<td><?php echo $data['tanggal'];?></td>
							<td><?php echo $data['status'];?></td>
							<td><?php echo $data['jam'];?></td>
							<td><?php echo $data['nama'];?></td>
							<?php
						}
							?>
						</tr>
						  </tbody>
                  </table>
              </div>
            </div>
<?php 
include "bawah.php";
?>
