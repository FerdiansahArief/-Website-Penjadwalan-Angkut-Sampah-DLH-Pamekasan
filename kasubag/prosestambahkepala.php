<?php
if(isset($_GET['simpan']))
{
include "koneksi.php";
$nik=$_GET['nik'];
$nama=$_GET['nama'];
$alamat=$_GET['alamat'];
$agama=$_GET['agama'];
$gender=$_GET['gender'];
$pwd=$_GET['pwd'];
$nohp=$_GET['nohp'];
$level="Kepala";
    $sqll=mysqli_query($koneksi, "INSERT INTO tbl_user values ('$nik','$nama','$alamat','$agama','$gender','$pwd','$nohp','$level');");
    if($sqll)
    {
        echo '<script>
        window.onload = function(){
            alert("Data Jadwal berhasil disimpan");
            location.href = "data_kepala.php"
            }
            </script>';
    }
    else
    {
        echo "<script>alert('Data Petugas Gagal di masukkan');</script>".mysqli_error($koneksi);
    }
}
?>