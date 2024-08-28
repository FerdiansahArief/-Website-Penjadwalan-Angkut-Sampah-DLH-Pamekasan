<?php 
include 'koneksi.php';
$id = $_GET["id"];
$gntstatus=mysqli_query($koneksi, "UPDATE tb_pengangkut SET status = 'nonaktif' where nik_pengangkut='$id'");
if($gntstatus)
{
	echo '<script>
   	window.onload = function(){
   	alert("Data pengangkut nonaktif");
   	location.href = "data_pengangkut.php"
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