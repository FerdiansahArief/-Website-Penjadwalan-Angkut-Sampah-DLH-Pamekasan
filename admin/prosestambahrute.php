<?php
if(isset($_GET['simpan']))
{
include "koneksi.php";
$rute=$_GET['rute'];
$batas=$_GET['batas'];
    $sqll=mysqli_query($koneksi, "INSERT INTO rute values ('','$rute','$batas');");
    if($sqll)
    {
        echo '<script>
        window.onload = function(){
            alert("Rute berhasil ditambahkan");
            location.href = "inputrute.php"
            }
            </script>';
    }
    else
    {
        echo "<script>alert('Rute Gagal di masukkan');</script>".mysqli_error($koneksi);
    }
}							
?>