<html>
<head>
    <title>HOME SCREEN</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    
</head>
<body>

<div class="content">
	<header>
		<center>
		<img src="files/sman7.JPG" width="120dp">
		<h1>Selamat Datang</h1>
		</center>
	</header>
		
    <div class="menu" >
		<ul>
			<li><a href="index.php?page=home" >SMAN 7</a></li>
			<li><a href="index.php?page=login">LOGIN</a></li>
			<li><a href="index.php?page=daftar">DAFTAR</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "sman7.php";
				break;
			case 'login':
				include "login.php";
				break;
			case 'daftar':
				include "form_pendaftaran.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "sman7.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>