<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cetak Jadwal</title>
</head>
<style type="text/css">
 body{
  font-family: sans-serif;
 }
 table{
  margin: 20px auto;
  border-collapse: collapse;
 }
 table th,
 table td{
  border: 1px solid #3c3c3c;
  padding: 3px 8px;

 }
 a{
  background: blue;
  color: #fff;
  padding: 8px 10px;
  text-decoration: none;
  border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
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
						ini_set('date.timezone', 'Asia/Jakarta');
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
				<script>
		window.print();
	</script>
</body>
</html>