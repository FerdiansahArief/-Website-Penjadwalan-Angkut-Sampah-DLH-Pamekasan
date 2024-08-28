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
						$petugas = $_GET['petugas'];
						$tanggal = $_GET['tanggal'];
                        include "koneksi.php";
                        $no =1;
						$query_mysql = mysqli_query($koneksi, "SELECT tb_status.tanggal, tb_status.status, tb_status.jam, tbl_user.nama FROM tb_status LEFT JOIN tbl_user ON tb_status.id_user=tbl_user.id_user WHERE tb_status.id_user='$petugas' && tb_status.tanggal='$tanggal'");
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