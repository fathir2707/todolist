<html>
<head>
  <title>HOME USER</title>
  <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

<div class="content">
	<header>
  <center>
		<img src="files/sman7.JPG" width="120dp">
		<h1>Selamat Datang</h1></center>
		
	</header>

    <div class="menu" >
		<ul>
			<li><a href="index_user.php?page=list" >HOME</a></li>
			<li><a href="index_user.php?page=data">DATA DIRI</a></li>
			<li><a href="index_user.php?page=ortu">DATA ORANG TUA</a></li>
			<li><a href="index_user.php?page=nilai">DATA NILAI</a></li>
			<li><a href="index_user.php?page=bayar">PEMBAYARAN</a></li>
			<li><a href="index_user.php?page=daftar">DAFTAR SISWA LULUS</a></li>	
		</ul>
	  </div>
    
  <div class="badan">
  <h1 style="text-align:center">Data Berkas Siswa</h1>
  <br>
  <center>
  <a href="index_user.php?page=data"><input type="button" value="Kembali"></a><br><br>
  
  <table border="1">
  <tr aligment="center">
    <th width='100'>ID</th>
    <th width='200'>NAMA BERKAS</th>
    <th width='100'>NISN</th>

  <?php
  session_start();
  include "config.php";
  $id = $_SESSION['nisn'];
  $query = "SELECT * FROM files WHERE nisn='".$id."'"; 
  $sql = mysqli_query($con, $query); 
  
  while($data = mysqli_fetch_array($sql)){ 
    echo "<tr>";
    echo "<td style='text-align:center'>".$data['id']."</td>";
    echo "<td><img src='files/".$data['nama']."' width='100' height='100'></td>";
    echo "<td style='text-align:center'>".$data['nisn']."</td>";
    echo "</tr>";
  }
  
  ?>
  </tr>
  </table><br>
  </center>
  </div>
</div>
</body>
</html>