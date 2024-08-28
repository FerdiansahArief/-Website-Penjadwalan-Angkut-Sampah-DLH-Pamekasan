<!DOCTYPE html>
<html lang="en">
<?php 
include "atas.php"
?>
<?php  
	?>
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Profile Super Admin</h6>
                </div>
                <div class="table-responsive p-3">
				<?php 
                                include "koneksi.php";
                                $no =1;
                                $id = "super";
                                $query_mysql = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE level='$id'")or die(mysql_error());
                            while($data = mysqli_fetch_array($query_mysql)){
                            ?>
				 <form autocomplete = "off" action="proseseditprofile.php" required>
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIK  :  </label>
                      <class="form-control" name="nik"  required>
					  <?php echo $data ['nik'];?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama  :  </label>
                      <class="form-control" name="nama" required>
					  <?php echo $data ['nama'];?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Alamat  :  </label>
                      <class="form-control" name="alamat" required>
					  <?php echo $data ['alamat'];?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Agama  :  </label>
                      <class="form-control" name="agama" required>
					  <?php echo $data ['agama'];?>
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword1">Gender  :  </label>
                      <class="form-control" name="gender" required>
					   <?php echo $data ['gender'];?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Password  :  </label>
                      <class="form-control" name="pwd" required>
					  <?php echo $data ['password'];?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">no hp  :  </label>
					  <?php echo $data ['no_hp'];?>
                      <class="form-control" name="nohp" required>
                    </div>
					<div class="form-group">
					<a href="edit_profile.php?nik=<?php echo $data['nik']?>" class="btn btn-primary btn-sm">Edit</a>
                    </div>
                    <tbody>
                      <?php 
                                }
                        ?>
                        </tbody>
                  </form>
                </div>
              </div>
            </div>
<?php 
include "bawah.php";
?>
