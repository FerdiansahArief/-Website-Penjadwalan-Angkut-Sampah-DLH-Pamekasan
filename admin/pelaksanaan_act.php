<?php
ini_set('date.timezone', 'Asia/Jakarta');
include "koneksi.php";
$dt1=date("Y-m-d");
$dt2=date("H:i:s");
$cekkonfirm = mysqli_query($koneksi, "SELECT id_status FROM tb_status WHERE tanggal = '$dt1'")or die(mysql_error());
$data = mysqli_fetch_array($cekkonfirm);
$cek = mysqli_num_rows($cekkonfirm);
		if($cek>0){
			echo "data tambah";
		}else{
			echo "data kosong";
			$ambil_jadwal = mysqli_query($koneksi, "SELECT id_jadwal FROM jadwal");
			while($data_jadwal = mysqli_fetch_array($ambil_jadwal)){
				$id_jadwal=$data_jadwal['id_jadwal'];
				$sqll=mysqli_query($koneksi, "INSERT INTO tb_status values ('','$id_jadwal','none','$dt2','belum konfirmasi');");
				if($sqll)
    {
        echo '<script>
        window.onload = function(){
            alert("Data Jadwal berhasil disimpan");
            }
            </script>';
    }
    else
    {
        echo "<script>alert('Data Jadwal Gagal di masukkan');</script>".mysqli_error($koneksi);
    }
			}
		}
					

?>				