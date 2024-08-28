<?php
if(isset($_POST['simpan']))
{
include "koneksi.php";
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$agama=$_POST['agama'];
$gender=$_POST['gender'];
$nohp=$_POST['nohp'];

$cek = mysqli_query($koneksi, ("SELECT * FROM tb_pengangkut WHERE nik_pengangkut = '$nik'"));
$prosescek = mysqli_num_rows($cek);
if ($prosescek == 0){
	$cek2 = mysqli_query($koneksi, ("SELECT * FROM tb_pengangkut WHERE no_hp = '$nohp'"));
	$prosescek2 = mysqli_num_rows($cek2);
	if ($prosescek2 == 0){
    $sqll=mysqli_query($koneksi, "INSERT INTO tb_pengangkut values ('','$nik','$nama','$alamat','$agama','$gender','$nohp','aktif');");
    if($sqll)
    {
        echo '<script>
        window.onload = function(){
            alert("Data Petugas berhasil disimpan");
            location.href = "data_pengangkut.php"
            }
            </script>';
    }
    else
    {
        echo "<script>alert('Data Petugas Gagal di masukkan');</script>".mysqli_error($koneksi);
    }
	}else{
		echo '<script>
			window.onload = function(){
            alert("nomor hp sudah ada");
            location.href = "inputpengangkut.php"
            }
            </script>';
		}
}else{
		echo '<script>
			window.onload = function(){
            alert("NIK sudah ada");
            location.href = "inputpengangkut.php"
            }
            </script>';
		}
}
?>