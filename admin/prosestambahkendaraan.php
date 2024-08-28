<?php
if (isset($_GET['simpan'])) {
   include "koneksi.php";
   $nmr = $_GET['nmr'];
   $jenis = $_GET['jns'];
   $cek = mysqli_query($koneksi, ("SELECT * FROM kendaraan WHERE no_polisi = '$nmr'"));
   $prosescek = mysqli_num_rows($cek);
   if ($prosescek == 0) {
      $query = "INSERT INTO kendaraan (no_polisi, jenis) VALUES ('$nmr','$jenis')";
      $sql = mysqli_query($koneksi, $query);
      if ($sql) {
         echo '<script>
        window.onload = function(){
            alert("Data kendaraan berhasil disimpan");
            location.href = "data_kendaraan.php"
            }
            </script>';
      } else {
         echo "<script>alert('Data kendaraan Gagal di update');</script>" . mysqli_error($koneksi);
      }
   } else {
      echo '<script>
        window.onload = function(){
            alert("Data kendaraan sudah ada");
            location.href = "inputkendaraan.php"
            }
            </script>';
   }
}
