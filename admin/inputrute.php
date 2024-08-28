<!DOCTYPE html>
<html lang="en">
<?php 
include "atas.php"
?>
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Halaman Rute</h6>
                </div>
                <div class="card-body">
                <form autocomplete = "off" method="GET" action="prosestambahrute.php">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Rute</label>
                      <input type="text" class="form-control" name="rute" required >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Batas Armada</label>
                      <input type="text" class="form-control" name="batas" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </div>
                  </form>
                </div>
<?php 
include "bawah.php";
?>
