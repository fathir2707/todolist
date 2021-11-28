<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    

  <title>HOME ADMIN</title>

</head>

<body>

<section class="content">
  <div class="inner">

  <center><h1>Data Siswa</h1></center>
  
  <table border="1" width="101%" height="250" style="text-align:center">
  <tr >
    <th style="text-align:center">Foto</th>
    <th style="text-align:center">NISN</th>
    <th style="text-align:center">Nama</th>
    <th style="text-align:center">Tempat Tanggal Lahir</th>
    <th style="text-align:center">Jenis Kelamin</th>
    <th style="text-align:center">Asal Sekolah</th>
    <th style="text-align:center" width="5%">NEM</th>
    <th style="text-align:center" width="5%">E-Mail</th>
    <th style="text-align:center" width="9%">Telepon</th>
    <th style="text-align:center" width="6%">Agama</th>
    <th style="text-align:center">Alamat</th>
    <th style="text-align:center">Keterangan</th>
    <th style="text-align:center" colspan=3 width="8%">Aksi</th>
  </tr>


<?php
  
$id = $_SESSION['nisn'];

include "config.php";
  
  $query = "SELECT * FROM daftar WHERE role='user'"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($con, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      $row = $data['nisn'];

    echo "<tr>";
    echo "<td><img src='files/".$data['foto']."' width='100' height='100'></td>";
    echo "<td>".$data['nisn']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['ttl']."</td>";
    echo "<td>".$data['jenis_kelamin']."</td>";
    echo "<td>".$data['asal_sekolah']."</td>";
    echo "<td>".$data['nem']."</td>";
    echo "<td>".$data['email']."</td>";
    echo "<td>".$data['no_hp']."</td>";
    echo "<td>".$data['agama']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td>".$data['keterangan']."</td>";
    echo "<td><a href='form_ubah_admin.php?nisn=".$data['nisn']."'>
      <input type='button' value='Ubah'></a></td>";
    echo "<td><a href='berkas_admin.php?nisn=".$data['nisn']."'  target='new'>
      <input type='button' value='Berkas'></a></td>";
    echo "<td><a href='data_nilai_admin.php?nisn=".$data['nisn']."'  target='new'>
      <input type='button' value='Nilai'></a></td>";
    echo "</tr>";
  }
  ?>      
        </table>
      </section>
    </div>
</body>
</html>