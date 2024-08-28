<?php 

include 'koneksi.php';

$id = $_GET["id"];
$cekaj = mysqli_query($koneksi, "select * from jadwal where id_petugas = $id");
if(mysqli_num_rows($cekaj)==0){
$hapus=mysqli_query($koneksi, "delete from tbl_user where id_user='$id'");

if($hapus)

{

	echo '<script>

   	window.onload = function(){

   	alert("Data petugas Berhasil Dihapus");

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
}else{
    echo '<script>

   	window.onload = function(){

   	alert("Data petugas yang sudah terdaftar di jadwal tidak dapat dihapus, nonaktifkan saja");

   	location.href = "data_petugas.php"

   	}
   	</script>';
}

?>