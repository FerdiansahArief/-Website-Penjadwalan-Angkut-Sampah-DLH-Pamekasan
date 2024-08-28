<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cetak History</title>
</head>
	<body>
		<center>
			<h2>History Angkut Sampah<h2> 
			<h4>DLH PAMEKASAN<h4>
		</center>
		<table border="1" style="width: 100%">
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
            </div>
				<script>
		window.print();
	</script>
</body>
</html>