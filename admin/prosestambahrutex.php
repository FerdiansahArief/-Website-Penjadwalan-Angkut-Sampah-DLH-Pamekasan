<?php
if(isset($_POST['simpan']))
{
include "koneksi.php";
$nama_rute=$_POST['nama_rute'];
$jalan1=$_POST['jalan1'];
$jalan2=$_POST['jalan2'];
$jalan3=$_POST['jalan3'];
$jalan4=$_POST['jalan4'];
$jalan5=$_POST['jalan5'];
$jalan6=$_POST['jalan6'];
if($jalan1 > 0){
$cek=mysqli_query($koneksi, "SELECT * FROM rute_rute WHERE id_jalan = '$jalan1';");
$prosescek = mysqli_num_rows($cek);
	if ($prosescek == 0){
		$insert = mysqli_query($koneksi, "INSERT INTO rute_rute VALUES('','$nama_rute','$jalan1')");
	}else{
		echo '<script>
			window.onload = function(){
            alert("Jalan 1 sudah dipilih");
            }
            </script>';
	}
}
if($jalan2 > 0){
$cek=mysqli_query($koneksi, "SELECT * FROM rute_rute WHERE id_jalan = '$jalan2';");
$prosescek = mysqli_num_rows($cek);
	if ($prosescek == 0){
		$insert = mysqli_query($koneksi, "INSERT INTO rute_rute VALUES('','$nama_rute','$jalan2')");
	}else{
		echo '<script>
			window.onload = function(){
            alert("Jalan 2 sudah dipilih");
            }
            </script>';
	}
}
if($jalan3 > 0){
$cek=mysqli_query($koneksi, "SELECT * FROM rute_rute WHERE id_jalan = '$jalan3';");
$prosescek = mysqli_num_rows($cek);
	if ($prosescek == 0){
		$insert = mysqli_query($koneksi, "INSERT INTO rute_rute VALUES('','$nama_rute','$jalan3')");
	}else{
		echo '<script>
			window.onload = function(){
            alert("Jalan 3 sudah dipilih");
            }
            </script>';
	}
}
if($jalan4 > 0){
$cek=mysqli_query($koneksi, "SELECT * FROM rute_rute WHERE id_jalan = '$jalan4';");
$prosescek = mysqli_num_rows($cek);
	if ($prosescek == 0){
		$insert = mysqli_query($koneksi, "INSERT INTO rute_rute VALUES('','$nama_rute','$jalan4')");
	}else{
		echo '<script>
			window.onload = function(){
            alert("Jalan 4 sudah dipilih");
            }
            </script>';
	}
}
if($jalan5 > 0){
$cek=mysqli_query($koneksi, "SELECT * FROM rute_rute WHERE id_jalan = '$jalan5';");
$prosescek = mysqli_num_rows($cek);
	if ($prosescek == 0){
		$insert = mysqli_query($koneksi, "INSERT INTO rute_rute VALUES('','$nama_rute','$jalan5')");
	}else{
		echo '<script>
			window.onload = function(){
            alert("Jalan 5 sudah dipilih");
            }
            </script>';
	}
}
if($jalan6 > 0){
$cek=mysqli_query($koneksi, "SELECT * FROM rute_rute WHERE id_jalan = '$jalan6';");
$prosescek = mysqli_num_rows($cek);
	if ($prosescek == 0){
		$insert = mysqli_query($koneksi, "INSERT INTO rute_rute VALUES('','$nama_rute','$jalan6')");
	}else{
		echo '<script>
			window.onload = function(){
            alert("Jalan 6 sudah dipilih");
            }
            </script>';
	}
}
header('location:inputrutex.php');
}
?>