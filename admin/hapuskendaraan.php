<?php 
include 'koneksi.php';
$id = $_GET["id"];
$hapus=mysqli_query($koneksi, "delete from kendaraan where id_kendaraan='$id'");
if($hapus)
{
	echo '<script>
   	window.onload = function(){
   	alert("Data kendaraan Berhasil Dihapus");
   	location.href = "data_kendaraan.php"
   	}
   	</script>';
}
else
{
	echo '<script>
   	window.onload = function(){
   	alert("Data kendaraan Gagal Dihapus");
   	location.href = "data_kendaraan.php"
   	}
  	</script>'.mysqli_error($koneksi);
}
?>