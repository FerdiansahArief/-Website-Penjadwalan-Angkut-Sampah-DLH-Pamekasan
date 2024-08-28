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
$level="admin";
    $sqll=mysqli_query($koneksi, "INSERT INTO tbl_user values ('','$nik','$nama','$alamat','$agama','$gender','$pwd','$nohp','$level','aktif');");
    if($sqll)
    {
        echo '<script>
        window.onload = function(){
            alert("Data Petugas berhasil disimpan");
            location.href = "view_admin.php"
            }
            </script>';
    }
    else
    {
        echo "<script>alert('Data Petugas Gagal di masukkan');</script>".mysqli_error($koneksi);
    }
}
?>