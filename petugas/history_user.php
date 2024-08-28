<!DOCTYPE html>
<html lang="en">
<?php 
include "atas.php"
?>
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">History Petugas</h6>
                </div>
                <div class="col-sm-10">
                        <a href="cetak_history.php" target="_blank"><button type="submit" class="btn btn-primary">Cetak history</button></a>
                </div>
                <div class="table-responsive p-3">
					<?php 
					include "tabel_history.php";
					?>
              </div>
            </div>
<?php 
include "bawah.php";
?>
