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
                        <a href="cetak.php" target="_blank"><button type="submit" class="btn btn-primary">Cetak</button></a>
                        <a href="history.php"><button type="submit" class="btn btn-primary">History</button></a>
                      </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
						<tr>
							<th>NO</th>
							<th>Nama Petugas (Sopir)</th>
							<th>Rute</th>
							<th>Tanggal</th>
							<th>Waktu</th>
							<th>Jenis Kendaraan</th>
							<th>Nomor Polisi</th>
							<th>STATUS</th>
						</tr>
                    </thead>
					<?php 
                        include "koneksi.php";
                        $no =1;
						$dt1=date("Y-m-d");
						$query_mysql = mysqli_query($koneksi, "SELECT jadwal.id_jadwal, tbl_user.nama, jadwal.nama_rute, jadwal.shift, kendaraan.jenis, kendaraan.no_polisi, tb_status.status, tb_status.tanggal FROM jadwal LEFT JOIN tbl_user ON jadwal.id_petugas=tbl_user.id_user LEFT JOIN kendaraan ON jadwal.id_kendaraan=kendaraan.id_kendaraan LEFT JOIN tb_status ON jadwal.id_jadwal=tb_status.id_jadwal WHERE tb_status.tanggal = '$dt1'");	
						while($data = mysqli_fetch_array($query_mysql)){
					?>			
					<tbody>
						<tr>
							<td><?php echo $no++;?></td>
							<td><?php echo $data['nama'];?></td>
							<td><?php echo $data['nama_rute'];?></td>
							<td><?php echo $data['tanggal'];?></td>
							<td><?php echo $data['shift'];?></td>
							<td><?php echo $data['jenis'];?></td>
							<td><?php echo $data['no_polisi'];?></td>
							<td><?php echo $data['status'];?></td>
							<?php
						}
							?>
						</tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
<?php 
include "bawah.php";
?>
