<?php
session_start();
include "config.php";
$id = $_SESSION['nisn'];
?>

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
		<h3 align="right">

    <?php 
              
      $q="SELECT * FROM daftar WHERE nisn='$id'";
      $get=mysqli_query($con,$q);

        while($row=mysqli_fetch_array($get)){
					?>
					<td><?php echo $row['nama']?></td><td> : </td>
					<?php
					echo $row['nisn'];
      }
		?>
		<a href="logout.php"><input type='button' class="button button4" value='Logout'></a>
		</h3>
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

    <div class="badan" height="100%">
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'list':
				include "list_pendaftar.php";
				break;
			case 'data':
				include "data_user.php";
				break;
			case 'ortu':
				include "form_data_ortu.php";
				break;
			case 'nilai':
				include "data_nilai_user.php";
				break;
			case 'bayar':
				include "form_pembayaran.php";
				break;
			case 'daftar':
				include "data_kelulusan.php";
				break;
				
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan</h3></center>";
				break;
		}
    }
	 ?>
 
	</div>
</div>
</body>
</html>