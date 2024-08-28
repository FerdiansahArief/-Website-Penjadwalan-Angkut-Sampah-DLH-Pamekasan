<?php 

include 'koneksi.php';

$id = $_GET["id"];
$cekap = mysqli_query($koneksi,"select * from anggota where id_pengangkut = $id");
if(mysqli_num_rows($cekap)==0){
$hapus=mysqli_query($koneksi, "delete from tb_pengangkut where id_pengangkut='$id'");

if($hapus)

{

	echo '<script>

   	window.onload = function(){

   	alert("Data pengangkut Berhasil Dihapus");

   	location.href = "data_pengangkut.php"

   	}

   	</script>';

}

else

{

	echo '<script>

   	window.onload = function(){

   	alert("Data petugas Gagal Dihapus");

   	location.href = "data_pengangkut.php"

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