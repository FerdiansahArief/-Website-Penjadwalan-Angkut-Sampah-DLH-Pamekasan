<!DOCTYPE html>
<html lang="en">
<?php 
include "atas.php"
?>
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">History</h6>
                </div>
                <div class="col-sm-10">
                        <a href="history_all.php"><button type="submit" class="btn btn-primary">semua history</button></a>
                      </div>
                <div class="table-responsive p-3">
				<form autocomplete = "off" method="GET" action="history_user.php">
                  <div class="form-group">
                      
                    <label for="exampleInputEmail1">Petugas (Sopir)</label>
                       <select class="form-control" id="exampleFormControlSelect1" name= "petugas" >
					   <option disabled selected value> -- pilih petugas -- </option>
                      <?php 
                                include "koneksi.php";
                                $no =1;
                                $query_mysql = mysqli_query($koneksi, "SELECT * FROM tbl_user where level='petugas' ")or die(mysql_error());
                            while($data = mysqli_fetch_array($query_mysql)){
                            ?>
							
                      <option value="<?php echo $data['id_user'] ?>"><?php echo $data['nama'] ;}?></option>
                     
                    </select>
					
					
                    </div>
					                  <div class="form-group">
                      
                    <label for="exampleInputEmail1">Tanggal</label>
                       <select class="form-control" id="exampleFormControlSelect1" name= "tanggal" >
					   <option disabled selected value> -- pilih tanggal -- </option>
                      <?php 
                            $tanggal=date("Y-m-d"); 
							$tanggal2=date("Y-m-d",strtotime("-1 days"));
							$tanggal3=date("Y-m-d",strtotime("-2 days"));
							$tanggal4=date("Y-m-d",strtotime("-3 days"));
							$tanggal5=date("Y-m-d",strtotime("-4 days"));
							$tanggal6=date("Y-m-d",strtotime("-5 days"));
							$tanggal7=date("Y-m-d",strtotime("-6 days"));
                            ?>
							
                      <option value="<?php echo $tanggal ?>"><?php echo $tanggal ;?></option>
					  <option value="<?php echo $tanggal2 ?>"><?php echo $tanggal2 ;?></option>
					  <option value="<?php echo $tanggal3 ?>"><?php echo $tanggal3 ;?></option>
					  <option value="<?php echo $tanggal4 ?>"><?php echo $tanggal4 ;?></option>
					  <option value="<?php echo $tanggal5 ?>"><?php echo $tanggal5 ;?></option>
					  <option value="<?php echo $tanggal6 ?>"><?php echo $tanggal6 ;?></option>
					  <option value="<?php echo $tanggal7 ?>"><?php echo $tanggal7 ;?></option>
                     
                    </select>
					
					
                    </div>
					<button type="submit" class="btn btn-primary" name = "cek">CEK</button>
					</form>
                </div>
              </div>
            </div>
<?php 
include "bawah.php";
?>
