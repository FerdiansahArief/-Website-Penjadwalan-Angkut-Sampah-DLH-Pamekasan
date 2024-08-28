<!DOCTYPE html>

<html lang="en">

<?php

include "atas.php"

?>

<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

   <h6 class="m-0 font-weight-bold text-primary">Halaman Tambah Jadwal Petugas</h6>

</div>

<div class="card-body">

   <form autocomplete="off" method="post" action="prosestambahjadwal.php">

      <div class="form-group">



         <label for="exampleInputEmail1">Petugas (Sopir)</label>

         <select class="form-control" id="exampleFormControlSelect1" name="petugas">

            <option disabled selected value> -- pilih petugas -- </option>

            <?php

            include "koneksi.php";

            $no = 1;

            $query_mysql = mysqli_query($koneksi, "SELECT * FROM tbl_user where level='petugas' ") or die(mysql_error());

            while ($data = mysqli_fetch_array($query_mysql)) {

            ?>



               <option value="<?php echo $data['id_user'] ?>"><?php echo $data['nama'];
                                                            } ?></option>



         </select>

      </div>

      <div class="form-group">



         <label for="exampleInputEmail1">Anggota 1 (Pengangkut)</label>

         <select class="form-control" id="exampleFormControlSelect1" name="pengangkut1">

            <option disabled selected value> -- pilih anggota -- </option>

            <?php

            include "koneksi.php";

            $no = 1;
            $cekidj = array(0, 0, 0);
            $ngcekj = array();
            $cekjadwal = implode(',', array_values($cekidj));
            $queryidj = mysqli_query($koneksi, "SELECT id_jadwal FROM jadwal WHERE status ='aktif'");
            while ($dataj = mysqli_fetch_array($queryidj)) {
               $ngcekj[] = $dataj['id_jadwal'];
            }
            if (isset($ngcekj)) {
               $cekjadwal = implode(',', array_values($ngcekj));
            }

            $cekq = array(0, 0, 0);

            $cek_id = implode(',', array_values($cekq));

            $cekanggota = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_jadwal IN ('.$cekjadwal.')");

            while ($cek = mysqli_fetch_array($cekanggota)) {

               $ngecek[] = $cek['id_pengangkut'];
            }

            if (isset($ngecek)) {

               $cek_id = implode(',', array_values($ngecek));
            }

            $query_mysql = mysqli_query($koneksi, "SELECT * FROM tb_pengangkut WHERE id_pengangkut NOT IN (" . $cek_id . ")") or die(mysql_error());

            while ($data = mysqli_fetch_array($query_mysql)) {

            ?>



               <option value="<?php echo $data['id_pengangkut'] ?>"><?php echo $data['nama_pengangkut'];
                                                                  } ?></option>



         </select>

      </div>

      <div class="form-group">



         <label for="exampleInputEmail1">Anggota 2 (Pengangkut)</label>

         <select class="form-control" id="exampleFormControlSelect1" name="pengangkut2">

            <option disabled selected value> -- pilih anggota -- </option>

            <?php

            include "koneksi.php";

            $no = 1;

            $cekq = array(0, 0, 0);

            $cek_id = implode(',', array_values($cekq));

            $cekanggota = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_jadwal IN ('.$cekjadwal.')");

            while ($cek = mysqli_fetch_array($cekanggota)) {

               $ngecek[] = $cek['id_pengangkut'];
            }

            if (isset($ngecek)) {

               $cek_id = implode(',', array_values($ngecek));
            }

            $query_mysql = mysqli_query($koneksi, "SELECT * FROM tb_pengangkut WHERE id_pengangkut NOT IN (" . $cek_id . ")") or die(mysql_error());



            while ($data = mysqli_fetch_array($query_mysql)) {

            ?>



               <option value="<?php echo $data['id_pengangkut'] ?>"><?php echo $data['nama_pengangkut'];
                                                                  } ?></option>



         </select>

      </div>

      <div class="form-group">



         <label for="exampleInputEmail1">Anggota 3 (Pengangkut)</label>

         <select class="form-control" id="exampleFormControlSelect1" name="pengangkut3">

            <option disabled selected value> -- pilih anggota -- </option>

            <?php

            include "koneksi.php";

            $no = 1;

            $cekq = array(0, 0, 0);

            $cek_id = implode(',', array_values($cekq));

            $cekanggota = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_jadwal IN ('.$cekjadwal.')");

            while ($cek = mysqli_fetch_array($cekanggota)) {

               $ngecek[] = $cek['id_pengangkut'];
            }

            if (isset($ngecek)) {

               $cek_id = implode(',', array_values($ngecek));
            }

            $query_mysql = mysqli_query($koneksi, "SELECT * FROM tb_pengangkut WHERE id_pengangkut NOT IN (" . $cek_id . ")") or die(mysql_error());



            while ($data = mysqli_fetch_array($query_mysql)) {

            ?>



               <option value="<?php echo $data['id_pengangkut'] ?>"><?php echo $data['nama_pengangkut'];
                                                                  } ?></option>



         </select>

      </div>

      <div class="form-group">



         <label for="exampleInputEmail1">Anggota 4 (Pengangkut)</label>

         <select class="form-control" id="exampleFormControlSelect1" name="pengangkut4">

            <option disabled selected value> -- pilih anggota -- </option>

            <?php

            include "koneksi.php";

            $no = 1;

            $cekq = array(0, 0, 0);

            $cek_id = implode(',', array_values($cekq));

            $cekanggota = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_jadwal IN ('.$cekjadwal.')");

            while ($cek = mysqli_fetch_array($cekanggota)) {

               $ngecek[] = $cek['id_pengangkut'];
            }

            if (isset($ngecek)) {

               $cek_id = implode(',', array_values($ngecek));
            }

            $query_mysql = mysqli_query($koneksi, "SELECT * FROM tb_pengangkut WHERE id_pengangkut NOT IN (" . $cek_id . ")") or die(mysql_error());



            while ($data = mysqli_fetch_array($query_mysql)) {

            ?>



               <option value="<?php echo $data['id_pengangkut'] ?>"><?php echo $data['nama_pengangkut'];
                                                                  } ?></option>



         </select>

      </div>

      <div class="form-group">

         <label for="select2SinglePlaceholder">Rute</label>

         <select class="form-control" id="exampleFormControlSelect1" name="nama_rute" required>

            <option disabled selected value> -- pilih rute -- </option>

            <?php

            include "koneksi.php";

            $no = 1;

            $cekq = array('satu', 'dua', 'tiga');

            $cek_k = implode(',', array_values($cekq));

            $cekrute = mysqli_query($koneksi, "SELECT nama_rute FROM jadwal WHERE status = 'aktif'");

            if ($cekrute->num_rows > 0) {
               echo 'ada';
            }

            while ($cekrt = mysqli_fetch_array($cekrute)) {

               $ngecekrt[] = $cek['nama_rute'];
            }

            if (isset($ngecekrt)) {

               $cek_rt = implode(',', array_values($ngecekrt));
            }

            $query_mysql = mysqli_query($koneksi, "SELECT nama_rute FROM rute_rute  GROUP BY nama_rute ") or die(mysqli_error());

            while ($data = mysqli_fetch_array($query_mysql)) {

            ?>

               <option value="<?php echo $data['nama_rute'] ?>"><?php echo $data['nama_rute'];
                                                                  ?></option>

            <?php } ?>

         </select>

      </div>



      <div class="form-group">

         <label for="exampleFormControlSelect1">Jam</label>

         <select class="form-control" id="exampleFormControlSelect1" name="jam" required>

            <option disabled selected value> -- pilih jam -- </option>

            <option value="06.00-09.00">06.00-09.00</option>

            <option value="09.00-12.00">09.00-12.00</option>

            <option value="13.00-16.00">13.00-16.00</option>

            <option value="16.00-20.00">16.00-20.00</option>

         </select>

      </div>

      <div class="form-group">



         <label for="exampleInputEmail1">Pilih Kendaraan</label>

         <select class="form-control" id="exampleFormControlSelect1" name="kendaraan" required>

            <option disabled selected value> -- pilih kendaraan -- </option>

            <?php

            include "koneksi.php";

            $no = 1;

            $cekq = array(0, 0, 0);

            $cek_ken = implode(',', array_values($cekq));

            $cekkendaraan = mysqli_query($koneksi, "SELECT id_kendaraan FROM jadwal  WHERE status = 'aktif'");

            while ($cekk = mysqli_fetch_array($cekkendaraan)) {

               $ngecekk[] = $cekk['id_kendaraan'];
            }

            if (isset($ngecekk)) {

               $cek_ken = implode(',', array_values($ngecekk));
            }



            $query_mysql = mysqli_query($koneksi, "SELECT * FROM kendaraan WHERE id_kendaraan NOT IN (" . $cek_ken . ")") or die(mysql_error());

            while ($data = mysqli_fetch_array($query_mysql)) {

            ?>

               <option value="<?php echo $data['id_kendaraan']; ?>"><?php echo $data['no_polisi'], ", ", $data['jenis'];
                                                                  } ?></option>



         </select>

      </div>

      <div class="form-group">

         <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>

      </div>

   </form>

</div>

<?php include "autocomplete.php"; ?>

<?php

include "bawah.php";

?>