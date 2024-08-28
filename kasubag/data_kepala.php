<!DOCTYPE html>
<html lang="en">
<?php 
include "atas.php"
?>
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Kepala DInas</h6>
                </div>
                
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                      <th>NO</th>
                        <th>NIK</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>AGAMA</th>
                        <th>Gender</th>
                        <th>Password</th>
                        <th>NO HP</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                    <?php 
                                include "koneksi.php";
                                $no =1;
                                $id = "kepala";
                                $query_mysql = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE level='$id'")or die(mysql_error());
                            while($data = mysqli_fetch_array($query_mysql)){
                            ?>
                      <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data ['nik'];?></td>
                        <td><?php echo $data ['nama'];?></td>
                        <td><?php echo $data ['alamat'];?></td>
                        <td><?php echo $data ['agama'];?></td>
                        <td><?php echo $data ['gender'];?></td>
						<td><?php echo $data ['password'];?></td>
                        <td><?php echo $data ['no_hp'];?></td>
                        <td>
                        <a href="edit_kepala.php?nik=<?php echo $data['nik']?>" class="btn btn-primary btn-sm">Edit</a>
                                                </td>
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
