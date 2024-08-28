<!DOCTYPE html>
<html>
<head>
	<title>Cetak Jadwal</title>
</head>
	<body>
		<center>
			<h2>Jadwal Angkut Sampah<h2> 
			<h4>DLH PAMEKASAN<h4>
		</center>
		<table border="1" style="width: 100%">
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
						session_start();
                        include "koneksi.php";
						$nik = $_SESSION['nik'];
                        $no =1;
						$query_mysql = mysqli_query($koneksi, "SELECT jadwal.id_jadwal, jadwal.id_petugas, tbl_user.nama, jadwal.nama_rute, jadwal.shift, kendaraan.jenis, kendaraan.no_polisi FROM jadwal LEFT JOIN tbl_user ON jadwal.id_petugas=tbl_user.id_user LEFT JOIN kendaraan ON jadwal.id_kendaraan=kendaraan.id_kendaraan WHERE nik = '$nik'");	
						while($data = mysqli_fetch_array($query_mysql)){
							
					?>			
					<tbody>
						<tr>
							<td rowspan="4"><?php echo $no++;?></td>
							<td rowspan="4"><?php echo $data['nama'];?></td>
							<td ><?php
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
							<td rowspan="4"><?php echo $data['nama_rute'];?></td>
							<td rowspan="4"><?php echo $data['shift'];?></td>
							<td rowspan="4"><?php echo $data['jenis'];?></td>
							<td rowspan="4"><?php echo $data['no_polisi'];?></td>
							<?php
						}
							?>
						</tr>
                    </tbody>
                  </table> 
	<script>
		window.print();
	</script>
	</body>
</html>