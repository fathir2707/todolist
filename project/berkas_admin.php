<?php
include "index_admin.php";

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Data Berkas</title>
</head>

<body>

<div id="wrapper">
  <div class="badan">
    <center>
      <h1>Data Berkas Siswa</h1>
        <a href="index_admin.php?page=data"><input type="button" value="Kembali"></a><br><br>
      
        <table border="1">
        <tr  aligment="center">
          <th width='100' style='text-align:center'>ID</th>
          <th width='200' style='text-align:center'>NAMA BERKAS</th>
          <th width='100' style='text-align:center'>NISN</th>
          <th colspan = 2 style='text-align:center'>Aksi</th>

        <?php
        include "config.php";

        $id = $_GET['nisn'];
        
        $query = "SELECT * FROM files WHERE nisn='$id'"; 
        $sql = mysqli_query($con, $query); 
        
        while($data = mysqli_fetch_array($sql)){ 
          echo "<tr>";
          echo "<td style='text-align:center'>".$data['id']."</td>";
          echo "<td><img src='files/".$data['nama']."' width='100' height='100'></td>";
          echo "<td style='text-align:center'>".$data['nisn']."</td>";?>
          <td><a href="files/<?php echo $data['nama'] ?>" target="new"><input type="button" value="View"></a></td><?php
          echo "<td><a href='hapus.php?id=".$data['id']."'><input type='button' value='Hapus'></a></td>";
          ?>
          </tr>
          <?php
        } 
        ?>
          <?php  
          $query2 = "SELECT * FROM pembayaran WHERE nisn='$id'";
          $sql2   = mysqli_query($con,$query2);

          while($row = mysqli_fetch_array($sql2)){
            echo "<tr>";
            echo "<td style='text-align:center'>".$row['id_bayar']."</td>";
            echo "<td><img src='files/".$row['name_data']."' width='100' height='100'></td>";
            echo "<td style='text-align:center'>".$row['nisn']."</td>";?>
            <td><a href="files/<?php echo $row['name_data'] ?>" target="new"><input type="button" value="View"></a></td><?php
            ?>
            </tr>
            <?php
          }
          ?>
          </tr>
          </tabel>
    </center>
  </div>
</div><!-- /#wrapper -->
</body>
</html>