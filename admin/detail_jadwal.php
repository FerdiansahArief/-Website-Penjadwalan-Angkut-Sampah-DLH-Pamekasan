<!DOCTYPE html>
<html lang="en">
<?php 
include "atas.php"
?>
            <!-- Datatables -->
            <div class="col-lg-12">

              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Admin - View Jadwal</h6>
                </div>
                <div class="col-sm-10">
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
                        $no =1;
                        $id_jadwal = $_GET['id'];

						$query_mysql = mysqli_query($koneksi, "SELECT jadwal_history.id_jadwal, jadwal_history.id_petugas, jadwal_history.nama_rute, tbl_user.nama, jadwal_history.shift, kendaraan.jenis, kendaraan.no_polisi FROM jadwal_history LEFT JOIN tbl_user ON jadwal_history.id_petugas=tbl_user.id_user LEFT JOIN kendaraan ON jadwal_history.id_kendaraan=kendaraan.id_kendaraan WHERE jadwal_history.id_petugas='$id_jadwal'");	
						while($data = mysqli_fetch_array($query_mysql)){
							
					?>			
					<tbody>
						<tr>
							<td rowspan="4"><?php echo $no++;?></td>
							<td rowspan="4"><?php echo $data['nama'];?></td>
							<td><?php
								$i="1";
								$id_jadwal=$data['id_jadwal'];
								$id_petugas=$data['id_petugas'];
								$query_anggota= mysqli_query($koneksi, "SELECT anggota_history.id_anggota, anggota_history.id_pengangkut, tb_pengangkut.nama_pengangkut FROM anggota_history LEFT JOIN tb_pengangkut ON anggota_history.id_pengangkut=tb_pengangkut.id_pengangkut WHERE id_jadwal='$id_jadwal' && id_petugas='$id_petugas'");
								while($data2 = mysqli_fetch_array($query_anggota)){
								echo $i,". ";
								echo $data2['nama_pengangkut'];
								echo "<br></br>";
								$i++;
								}
								?>
							</td>
							<td><a href="detail_rute.php?id=<?php echo $data['nama_rute']?>"><?php echo $data['nama_rute'];?></a></td>
							<td rowspan="4"><?php echo $data['shift'];?></td>
							<td rowspan="4"><?php echo $data['jenis'];?></td>
							<td rowspan="4"><?php echo $data['no_polisi'];?></td>
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
