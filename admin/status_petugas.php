<?php 
include 'koneksi.php';
$id = $_GET["id"];
$gntstatus=mysqli_query($koneksi, "UPDATE tbl_user SET status = 'nonaktif' where NIK='$id'");
if($gntstatus)
{
	echo '<script>
   	window.onload = function(){
   	alert("Data petugas nonaktif");
   	location.href = "data_petugas.php"
   	}
   	</script>';
}
else
{
	echo '<script>
   	window.onload = function(){
   	alert("Data petugas Gagal Dihapus");
   	location.href = "data_petugas.php"
   	}
  	</script>'.mysqli_error($koneksi);
}
?>