<!DOCTYPE html>
<html lang="en">
<?php 
include "atas.php"
?>
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Halaman Rute</h6>
                </div>
                <div class="card-body">
                <form autocomplete = "off" method="POST" action="prosestambahrutex.php">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Rute</label>
                      <input type="text" class="form-control" name="nama_rute" required >
                    </div>
                    <div class="form-group">
						<label for="select2SinglePlaceholder">Jalan 1</label>
						<select class="form-control" id="exampleFormControlSelect1" name= "jalan1" >
						<option disabled selected value> -- pilih jalan -- </option>
						<?php 
                                include "koneksi.php";
                                $no =1;
								$cekrute = mysqli_query($koneksi, "SELECT * FROM rute_rute");
								while($cek = mysqli_fetch_array($cekrute)){
									$ngecek[]=$cek['id_jalan'];
								}
								if(isset($ngecek)){
									$cek_id = implode(',',array_values($ngecek));
								}
								print_r ($cek_id);
                                $query_mysql = mysqli_query($koneksi, "SELECT * FROM rute WHERE id_jalan NOT IN (".$cek_id.")")or die(mysql_error());
                            while($data = mysqli_fetch_array($query_mysql)){
                            ?>
							<option value="<?php echo $data['id_jalan'] ?>"><?php echo $data['nama_jalan'] ;}?></option>
                     
						</select>
                    </div>
										<div class="form-group">
						<label for="select2SinglePlaceholder">Jalan 2</label>
						<select class="form-control" id="exampleFormControlSelect1" name= "jalan2" >
						<option disabled selected value> -- pilih jalan -- </option>
						<?php 
                                include "koneksi.php";
                                $no =1;
								$cekrute = mysqli_query($koneksi, "SELECT * FROM rute_rute ");
								while($cek = mysqli_fetch_array($cekrute)){
									$ngecek[]=$cek['id_jalan'];
								}
								if(isset($ngecek)){
									$cek_id = implode(',',array_values($ngecek));
								}
								
                                $query_mysql = mysqli_query($koneksi, "SELECT * FROM rute WHERE id_jalan NOT IN (".$cek_id.")")or die(mysql_error());
                            while($data = mysqli_fetch_array($query_mysql)){
                            ?>
							<option value="<?php echo $data['id_jalan'] ?>"><?php echo $data['nama_jalan'] ;}?></option>
                     
						</select>
                    </div>
										<div class="form-group">
						<label for="select2SinglePlaceholder">Jalan 3</label>
						<select class="form-control" id="exampleFormControlSelect1" name= "jalan3" >
						<option disabled selected value> -- pilih jalan -- </option>
						<?php 
                                include "koneksi.php";
                                $no =1;
								$cekrute = mysqli_query($koneksi, "SELECT * FROM rute_rute");
								while($cek = mysqli_fetch_array($cekrute)){
									$ngecek[]=$cek['id_jalan'];
								}
								if(isset($ngecek)){
									$cek_id = implode(',',array_values($ngecek));
								}
								
                                $query_mysql = mysqli_query($koneksi, "SELECT * FROM rute WHERE id_jalan NOT IN (".$cek_id.")")or die(mysql_error());
                            while($data = mysqli_fetch_array($query_mysql)){
                            ?>
							<option value="<?php echo $data['id_jalan'] ?>"><?php echo $data['nama_jalan'] ;}?></option>
                     
						</select>
                    </div>
										<div class="form-group">
						<label for="select2SinglePlaceholder">Jalan 4</label>
						<select class="form-control" id="exampleFormControlSelect1" name= "jalan4" >
						<option disabled selected value> -- pilih jalan -- </option>
						<?php 
                                include "koneksi.php";
                                $no =1;
								$cekrute = mysqli_query($koneksi, "SELECT * FROM rute_rute");
								while($cek = mysqli_fetch_array($cekrute)){
									$ngecek[]=$cek['id_jalan'];
								}
								if(isset($ngecek)){
									$cek_id = implode(',',array_values($ngecek));;
								}
								
                                $query_mysql = mysqli_query($koneksi, "SELECT * FROM rute WHERE id_jalan NOT IN (".$cek_id.")")or die(mysql_error());
                            while($data = mysqli_fetch_array($query_mysql)){
                            ?>
							<option value="<?php echo $data['id_jalan'] ?>"><?php echo $data['nama_jalan'] ;}?></option>
                     
						</select>
                    </div>
										<div class="form-group">
						<label for="select2SinglePlaceholder">Jalan 5</label>
						<select class="form-control" id="exampleFormControlSelect1" name= "jalan5" >
						<option disabled selected value> -- pilih jalan -- </option>
						<?php 
                                include "koneksi.php";
                                $no =1;
								$cekrute = mysqli_query($koneksi, "SELECT * FROM rute_rute");
								while($cek = mysqli_fetch_array($cekrute)){
									$ngecek[]=$cek['id_jalan'];
								}
								if(isset($ngecek)){
									$cek_id = implode(',',array_values($ngecek));
								}
								
                                $query_mysql = mysqli_query($koneksi, "SELECT * FROM rute WHERE id_jalan NOT IN (".$cek_id.")")or die(mysql_error());
                            while($data = mysqli_fetch_array($query_mysql)){
                            ?>
							<option value="<?php echo $data['id_jalan'] ?>"><?php echo $data['nama_jalan'] ;}?></option>
                     
						</select>
                    </div>
										<div class="form-group">
						<label for="select2SinglePlaceholder">Jalan 6</label>
						<select class="form-control" id="exampleFormControlSelect1" name= "jalan6" >
						<option disabled selected value> -- pilih jalan -- </option>
						<?php 
                                include "koneksi.php";
                                $no =1;
								$cekrute = mysqli_query($koneksi, "SELECT * FROM rute_rute");
								while($cek = mysqli_fetch_array($cekrute)){
									$ngecek[]=$cek['id_jalan'];
								}
								if(isset($ngecek)){
									$cek_id = implode(',',array_values($ngecek));
								}
								
                                $query_mysql = mysqli_query($koneksi, "SELECT * FROM rute WHERE id_jalan NOT IN (".$cek_id.")")or die(mysql_error());
                            while($data = mysqli_fetch_array($query_mysql)){
                            ?>
							<option value="<?php echo $data['id_jalan'] ?>"><?php echo $data['nama_jalan'] ;}?></option>
                     
						</select>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </div>
                  </form>
                </div>
<?php 
include "bawah.php";
?>
