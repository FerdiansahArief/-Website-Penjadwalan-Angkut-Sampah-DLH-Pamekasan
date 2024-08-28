<!DOCTYPE html>
<html lang="en">
<?php 
include "atas.php"
?>
            <!-- Datatables -->
            <div class="col-lg-12">

              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Admin - Data Jadwal</h6>
                </div>
                <div class="col-sm-10">
                        <a href="inputjadwal.php"><button type="submit" class="btn btn-primary">+ Tambah Jadwal</button></a>
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
							<th>Hapus</th>
						</tr>
                    </thead>
					<?php 
                        include "koneksi.php";
                        $no =1;
						$query_mysql = mysqli_query($koneksi, "SELECT jadwal.id_jadwal, jadwal.id_petugas, jadwal.nama_rute, tbl_user.nama, jadwal.shift, kendaraan.jenis, kendaraan.no_polisi FROM jadwal LEFT JOIN tbl_user ON jadwal.id_petugas=tbl_user.id_user LEFT JOIN kendaraan ON jadwal.id_kendaraan=kendaraan.id_kendaraan");	
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
								$query_anggota= mysqli_query($koneksi, "SELECT anggota.id_anggota, anggota.id_pengangkut, tb_pengangkut.nama_pengangkut FROM anggota LEFT JOIN tb_pengangkut ON anggota.id_pengangkut=tb_pengangkut.id_pengangkut WHERE id_jadwal='$id_jadwal' && id_petugas='$id_petugas'");
								while($data2 = mysqli_fetch_array($query_anggota)){
								echo $i++,". ";
								echo $data2['nama_pengangkut'];
								echo "<br></br>";
								}
								?>
							</td>
							<td><a href="detail_rute.php?id=<?php echo $data['nama_rute']?>"><?php echo $data['nama_rute'];?></a></td>
							<td rowspan="4"><?php echo $data['shift'];?></td>
							<td rowspan="4"><?php echo $data['jenis'];?></td>
							<td rowspan="4"><?php echo $data['no_polisi'];?></td>
							<td rowspan="4"><a onclick="return confirm('yakin akan menghapus')" href="hapusjadwal.php?id=<?php echo $data['id_jadwal']?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
							</td>
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
