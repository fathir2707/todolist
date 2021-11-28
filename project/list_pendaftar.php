<html>
<head>
  <title>HOME USER</title>
</head>
<body>
  <center><h1>Data Siswa Pendaftar</h1>
 <?php
    include "config.php";

    $q="SELECT COUNT(*) FROM daftar WHERE role='user'";
    $sql=mysqli_query($con,$q);
    $row=mysqli_fetch_row($sql);

    echo "Jumlah Pendaftar : ".$row[0]." Siswa";
?>
  <div align="center">
  <table border="1" width="70%">
  <tr aligment="center">
    <th>No</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Asal Sekolah</th>

  <?php

  $no_urut = 0;

  $query = "SELECT nomer,nama,jenis_kelamin,asal_sekolah FROM daftar WHERE role='user'"; 
  $sql2 = mysqli_query($con, $query); 
  
  while($data = mysqli_fetch_array($sql2)){ 
    $no_urut ++;
    
    echo "<tr>
    <td>$no_urut</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['jenis_kelamin']."</td>";
    echo "<td>".$data['asal_sekolah']."</td>";
    echo "</tr>";
  }
  
  ?>
  </tr>
  </table><br>
</div>
</body>
</html>