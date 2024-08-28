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
						$query_mysql = mysqli_query($koneksi, "SELECT history.tanggal, history.status, history.jam, tbl_user.nama FROM history LEFT JOIN tbl_user ON history.petugas=tbl_user.id_user WHERE history.petugas='$petugas' && history.tanggal='$tanggal'");
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