<!DOCTYPE html>
<html lang="en">
<?php 
include "atas.php"
?>
     <?php
						include 'koneksi.php';
						$idjalan       = @$_GET['id'];
						$db  = mysqli_query($koneksi, "select * from rute where id_jalan='$idjalan'");
						$row        = mysqli_fetch_array($db); 
				  ?>	
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Halaman Edit Rute</h6>
                </div>
                <div class="card-body">
                <form autocomplete = "off" method ="GET" action="proseseditrute.php" >
                    <div class="form-group">
					<input type="hidden" value ="<?php echo $row['id_jalan']; ?>" name="id_jalan">
                      <label for="exampleInputEmail1">Nama Jalan</label>
                      <input type="text" class="form-control" value ="<?php echo $row['nama_jalan']; ?>" name="nama_jalan"  required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Batas Armada</label>
                      <input type="number" class="form-control" value ="<?php echo $row['batas_armada']; ?>" name="batas_armada" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
<?php 
include "bawah.php";
?>
