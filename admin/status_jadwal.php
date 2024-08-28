<?php 
include 'koneksi.php';
$id = $_GET["id"];
$gntstatus=mysqli_query($koneksi, "UPDATE jadwal SET status = 'nonaktif' where id_jadwal='$id'");
if($gntstatus)
{
	echo '<script>
   	window.onload = function(){
   	alert("Data jadwal nonaktif");
   	location.href = "data_jadwal.php"
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