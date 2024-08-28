<?php 
include 'koneksi.php';
$nik = $_GET["nik"];
$hapus=mysqli_query($koneksi, "delete from tbl_user where NIK='$nik'");
if($hapus)
{
	echo '<script>
   	window.onload = function(){
   	alert("Data Kepala Berhasil Dihapus");
   	location.href = "data_kepala.php"
   	}
   	</script>';
}
else
{
	echo '<script>
   	window.onload = function(){
   	alert("Data Kepala Gagal Dihapus");
   	location.href = "data_kepala.php"
   	}
  	</script>'.mysqli_error($koneksi);
}
?>