<?php 
include 'koneksi.php';
$id = $_GET["id"];
$hapus=mysqli_query($koneksi, "delete from rute where id_jalan='$id'");
if($hapus)
{
	echo '<script>
   	window.onload = function(){
   	alert("Data rute Berhasil Dihapus");
   	location.href = "data_rute.php"
   	}
   	</script>';
}
else
{
	echo '<script>
   	window.onload = function(){
   	alert("Data rute Gagal Dihapus");
   	location.href = "data_rute.php"
   	}
  	</script>'.mysqli_error($koneksi);
}
?>