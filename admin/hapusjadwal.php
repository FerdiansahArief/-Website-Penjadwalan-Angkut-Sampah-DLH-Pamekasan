<?php 
include 'koneksi.php';
$id = $_GET["id"];

$hapus=mysqli_query($koneksi, "delete from jadwal where id_jadwal='$id'");
$hapusa=mysqli_query($koneksi, "delete from anggota where id_jadwal='$id'");
if($hapusa)
{
   echo '<script>
      window.onload = function(){
      alert("Data Jadwal Berhasil Dihapus");
      location.href = "data_jadwal.php"
      }
      </script>';
}
else
{
   echo '<script>
      window.onload = function(){
      alert("Data Jadwal Gagal Dihapus");
      location.href = "data_jadwal.php"
      }
   </script>'.mysqli_error($koneksi);
}
?>