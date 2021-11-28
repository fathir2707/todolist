<html>
<head>
  <title>HOME USER</title>
</head>
<body>

  
  <h1 style="text-align:center">Data Siswa</h1>
  
  
  <a href="user_pdf.php" target="new">
    <input class="button" type="button" value="Print Bukti Pendaftaran"></a><br>
  <p> Proses Pengecekkan data memerlukan waktu 1 - 7 hari </p><br>
  <table border="1" width="100%">
  <tr aligment="center">
    <th>Foto</th>
    <th>NISN</th>
    <th>Nama</th>
    <th>Tempat Tanggal Lahir</th>
    <th>Jenis Kelamin</th>
    <th>Asal Sekolah</th>
    <th>NEM</th>
    <th>Agama</th>
    <th>Alamat</th>
    <th>Keterangan</th>
    <th colspan=2>Aksi</th>
    

  <?php
  include "config.php";
  $id = $_SESSION['nisn'];
  $query = "SELECT * FROM daftar WHERE nisn='".$id."'"; 
  $sql = mysqli_query($con, $query); 
  
  while($data = mysqli_fetch_array($sql)){ 
    echo "<tr>";
    echo "<td><img src='files/".$data['foto']."' width='100' height='100'></td>";
    echo "<td>".$data['nisn']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['ttl']."</td>";
    echo "<td>".$data['jenis_kelamin']."</td>";
    echo "<td>".$data['asal_sekolah']."</td>";
    echo "<td>".$data['nem']."</td>";
    echo "<td>".$data['agama']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td>".$data['keterangan']."</td>";
    echo "<td><a href='form_ubah_user.php?nisn=".$data['nisn']."'><input type='button' value='Ubah'></a></td>";
    echo "<td><a href='berkas_user.php?nisn=".$data['nisn']."'><input type='button' value='Berkas'></a></td>";
   
    echo "</tr>";
  }
  
  ?>
  </tr>
  </table><br><br><br><br><br><br>
</body>
</html>