<!DOCTYPE html>
<html lang="en">
<?php 
ini_set('date.timezone', 'Asia/Jakarta');
include "koneksi.php";
$dt1=date("Y-m-d");
$dt2=date("Y-m-d H:i:s");
$cekkonfirm = mysqli_query($koneksi, "SELECT id_status FROM tb_status WHERE tanggal = '$dt1'")or die(mysql_error());
$data = mysqli_fetch_array($cekkonfirm);
$cek = mysqli_num_rows($cekkonfirm);
		if($cek>0){
			echo "";
		}else{
			$ambil_jadwal = mysqli_query($koneksi, "SELECT id_jadwal FROM jadwal");
			while($data_jadwal = mysqli_fetch_array($ambil_jadwal)){
				$id_jadwal=$data_jadwal['id_jadwal'];
				$sqll=mysqli_query($koneksi, "INSERT INTO tb_status values ('','$id_jadwal','none','$dt1','','belum konfirmasi');");
				if($sqll)
    {
        echo '<script>
        window.onload = function(){
            alert("Status konfirmasi di reset");
            }
            </script>';
    }
    else
    {
        echo "<script>alert('Data Jadwal Gagal di masukkan');</script>".mysqli_error($koneksi);
    }
			}
		}
					

include "atas.php"
?>
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Kepala Kebersihan</h6>
                </div>
                <div class="table-responsive p-3">
				<?php 
                                include "koneksi.php";
                                $no =1;
                                $level = "kepala";
								 
                                $query_mysql = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE level='$level'")or die(mysql_error());
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
					<a href="edit_kepala.php?nik=<?php echo $data['nik']?>" class="btn btn-primary btn-sm">Edit</a>
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
