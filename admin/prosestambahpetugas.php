<?php
if(isset($_POST['simpan']))
{
include "koneksi.php";
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$agama=$_POST['agama'];
$gender=$_POST['gender'];
$pwd=$_POST['pwd'];
$nohp=$_POST['nohp'];
$level="petugas";
$cek = mysqli_query($koneksi, ("SELECT * FROM tbl_user WHERE nik = '$nik'"));
$prosescek = mysqli_num_rows($cek);
if ($prosescek == 0){
	$cek2 = mysqli_query($koneksi, ("SELECT * FROM tbl_user WHERE no_hp = '$nohp'"));
	$prosescek2 = mysqli_num_rows($cek2);
	if ($prosescek2 == 0){
    $sqll=mysqli_query($koneksi, "INSERT INTO tbl_user values ('','$nik','$nama','$alamat','$agama','$gender','$pwd','$nohp','$level','aktif');");
    if($sqll)
    {
        echo '<script>
        window.onload = function(){
            alert("Data Petugas berhasil disimpan");
            location.href = "data_petugas.php"
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
            location.href = "inputpetugas.php"
            }
            </script>';
		}
}else{
		echo '<script>
			window.onload = function(){
            alert("NIK sudah ada");
            location.href = "inputpetugas.php"
            }
            </script>';
		}
}

?>