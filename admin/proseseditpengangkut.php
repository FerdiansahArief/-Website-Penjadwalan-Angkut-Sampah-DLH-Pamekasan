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
$query="UPDATE tb_pengangkut SET nik_pengangkut ='$nik',nama_pengangkut='$nama',alamat='$alamat',agama='$agama',gender='$gender',no_hp='$nohp' WHERE nik_pengangkut='$nik'" ;
$sql=mysqli_query($koneksi, $query);
    if($sql)
    {
        echo '<script>
        window.onload = function(){
            alert("Data petugas berhasil disimpan");
           location.href = "data_pengangkut.php"
            }
           </script>';
    }
    else
    {
        echo "<script>alert('Data Sopir Gagal di masukkan');</script>".mysqli_error($koneksi);
    }
}
?>