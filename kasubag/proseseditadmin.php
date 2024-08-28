<?php
if(isset($_GET['simpan']))
{
include "koneksi.php";
$nik=$_GET['nik'];
$nama=$_GET['nama'];
$alamat=$_GET['alamat'];
$agama=$_GET['agama'];
$gender=$_GET['gender'];
$pwd=$_GET['password'];
$nohp=$_GET['nohp'];
$query="UPDATE tbl_user SET nik ='$nik',nama='$nama',alamat='$alamat',agama='$agama',gender='$gender',password='$pwd',no_hp='$nohp' WHERE NIK='$nik'" ;
$sql=mysqli_query($koneksi, $query);
    if($sql)
    {
        echo '<script>
        window.onload = function(){
            alert("Data petugas berhasil disimpan");
            location.href = "view_admin.php"
            }
            </script>';
    }
    else
    {
        echo "<script>alert('Data Kepala Gagal di masukkan');</script>".mysqli_error($koneksi);
    }
}
?>