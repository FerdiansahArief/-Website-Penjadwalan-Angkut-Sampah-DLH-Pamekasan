<?php 
include 'koneksi.php';
$nik = $_GET["nik"];
$hapus=mysqli_query($koneksi, "delete from tbl_user where nik='$nik'");
if($hapus)
{
	echo '<script>
   	window.onload = function(){
   	alert("Data Jadwal Berhasil Dihapus");
   	location.href = "data_admin.php"
   	}
   	</script>';
}
else
{
	echo '<script>
   	window.onload = function(){
   	alert("Data Jadwal Gagal Dihapus");
   	location.href = "data_admin.php"
   	}
  	</script>'.mysqli_error($koneksi);
}
?>