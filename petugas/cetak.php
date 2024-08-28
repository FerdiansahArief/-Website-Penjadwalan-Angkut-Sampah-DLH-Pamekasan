<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
 <style type="text/css">
 body{
  font-family: sans-serif;
 }
 table{
  margin: 20px auto;
  border-collapse: collapse;
 }
 table th,
 table td{
  border: 1px solid #3c3c3c;
  padding: 3px 8px;

 }
 a{
  background: blue;
  color: #fff;
  padding: 8px 10px;
  text-decoration: none;
  border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
 <center> <h4> Dinas Lingkungan Hidup Pamekasan</h4></center>
 <table>
  <tr>
					    <th>NO</th>
                        <th>NAMA</th>
                        <th>RUTE</th>
                        <th>WAKTU</th>
                        <th>KENDARAAN</th>
						<th>Aksi</th>
                      </tr>
  <?php 
  // koneksi database
  include "koneksi.php";

  // menampilkan data Buku
  $nomer=1;
  $data = mysqli_query($koneksi,"select * from jadwal");
  while($d = mysqli_fetch_array($data)){
  ?>
  <tr>
   <td style='text-align: center;'><?php echo $nomer?></td>
   <td><?php echo $d['id_jadwal']; ?></td>
   <td><?php echo $d['nama']; ?></td>
   <td align="center"><?php echo $d['rute']; ?></td>
   <td><?php echo $d['shift']; ?></td>
   <td><?php echo $d['kendaraan']; ?></td>
  </tr>
  <?php
  $nomer++; 
  }
  ?>
    </table>
    <script>
  window.print();
  
 </script>
</body>
</html>