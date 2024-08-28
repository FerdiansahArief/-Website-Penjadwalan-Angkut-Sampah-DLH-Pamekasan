<!DOCTYPE html>
<html lang="en">
<?php 
include "atas.php"
?>
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Halaman Tambah Kendaraan</h6>
                </div>
                <div class="card-body">
                <form autocomplete = "off" action="prosestambahkendaraan.php" method="GET" >
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor Polisi</label>
                      <input type="text" class="form-control" name="nmr" required>
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kendaraan</label>
                      <select class="form-control" name="jns" id="exampleFormControlSelect1">
                      <option >---pilih Jenis Kendaraan---</option readonly>  
                      <option value="Roda 3">Roda 3</option>
                      <option value="Roda 4">Roda 4</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </div>
                  </form>
                </div>
<?php 
include "bawah.php";
?>
