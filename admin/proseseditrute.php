<?php
if(isset($_GET['simpan']))
{
include "koneksi.php";
$id_jalan=$_GET['id_jalan'];
$jalan=$_GET['nama_jalan'];
$armada=$_GET['batas_armada'];
$query="UPDATE rute SET nama_jalan ='$jalan',batas_armada='$armada' WHERE id_jalan= '$id_jalan'" ;
$sql=mysqli_query($koneksi, $query);
    if($sql)
    {
        echo '<script>
        window.onload = function(){
            alert("Data Rute berhasil disimpan");
            location.href = "data_rute.php"
            }
            </script>';
    }
    else
    {
        echo "<script>alert('Data Rute Gagal di update');</script>".mysqli_error($koneksi);
    }
}
?>