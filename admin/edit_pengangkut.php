<!DOCTYPE html>
<html lang="en">
<?php 
include "atas.php"
?>
     <?php
						include 'koneksi.php';
						$nik       = @$_GET['nik'];
						$db  = mysqli_query($koneksi, "select * from tb_pengangkut where nik_pengangkut='$nik'");
						$row        = mysqli_fetch_array($db); 
				  ?>	
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Halaman Edit Sopir Petugas Kebersihan</h6>
                </div>
                <div class="card-body">
                <form autocomplete = "off" method ="GET" action="proseseditpengangkut.php" >
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIK</label>
                      <input type="number" class="form-control" value ="<?php echo $row['nik_pengangkut']; ?>" name="nik"  required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama</label>
                      <input type="text" class="form-control" value ="<?php echo $row['nama_pengangkut']; ?>" name="nama" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Alamat</label>
                      <input type="text" class="form-control" value ="<?php echo $row['alamat']; ?>" name="alamat" required>
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Agama</label>
                      <select class="form-control" id="exampleFormControlSelect1" name = "agama"required>
                      <option><?php echo $row['agama']; ?></option>  
                      <option value="Islam">Islam</option>
                      <option value="Katolik">Katolik</option>
                      <option value="Protestan">Protestan</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Buda">Buda</option>
                      <option value="Konghucu">Konghucu</option>
                      </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Gender</label>
                      <select class="form-control" name="gender" id="exampleFormControlSelect1">
                      <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>  
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                    
                
                      <input type="hidden" value ="" name="password">
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">no hp</label>
                      <input type="text" class="form-control" value ="<?php echo $row['no_hp']; ?>" name="nohp" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
<?php 
include "bawah.php";
?>
