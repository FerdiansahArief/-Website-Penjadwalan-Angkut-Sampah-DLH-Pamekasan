<?php 
include 'koneksi.php';
$hapus=mysqli_query($koneksi, "delete from tb_status WHERE status='belum konfirmasi'");
if($hapus)
{
	$hapush=mysqli_query($koneksi, "delete from history WHERE status='belum konfirmasi'");
	header('location: pelaksanaan.php');
}
else
{
	echo '<script>
   	window.onload = function(){
   	alert("Gagal");
   	location.href = "pelaksanaan.php"
   	}
  	</script>'.mysqli_error($koneksi);
}
?>