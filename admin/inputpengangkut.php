<!DOCTYPE html>
<html lang="en">
<?php 
include "atas.php"
?>
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Halaman Tambah Pengangkut</h6>
                </div>
                <div class="card-body">
                <form method="post" autocomplete = "off" action="prosestambahpengangkut.php" required>
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIK</label>
                      <input type="number" class="form-control" name="nik"  required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama</label>
                      <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Alamat</label>
                      <input type="text" class="form-control" name="alamat" required>
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Agama</label>
                      <select class="form-control" id="exampleFormControlSelect1" name = "agama"required>
                      <option>-pilih Agama-</option>  
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
                      <option>-Pilih Gender-</option>  
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">no hp</label>
                      <input type="text" class="form-control" name="nohp" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
<?php 
include "bawah.php";
?>
