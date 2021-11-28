<html>
<head>
  <title>Form Ubah Data</title>
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
  <h1 style="text-align:center">Ubah Data</h1>

  <?php
  
  include "config.php";
  
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id = $_GET['nisn'];
  
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM daftar WHERE nisn='".$id."'";
  $sql = mysqli_query($con, $query);  
  $data = mysqli_fetch_array($sql); 
  ?>
  
  <form method="post" action="proses_ubah_user.php?nisn=<?php echo $id; ?>" enctype="multipart/form-data">
  <table cellpadding="8"><br>

  
  <center style="padding-left:450px">Foto<br><br>
  <input type="file" name="foto" value="<?php echo['foto'];?>"><br><br>
  <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto</center>


  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
  </tr>

  <tr>
    <td>Tempat Tanggal Lahir</td>
    <td><input type="text" name="ttl" value="<?php echo $data['ttl']; ?>"></td>
  </tr>

  <tr>
    <td>Jenis Kelamin</td>
    <td>
    <?php
    if($data['jenis_kelamin'] == "laki-laki"){
      echo "<input type='radio' name='jenis_kelamin' value='laki-laki' checked='checked'> Laki-laki";
      echo "<input type='radio' name='jenis_kelamin' value='perempuan'> Perempuan";
    }else{
      echo "<input type='radio' name='jenis_kelamin' value='laki-laki'> Laki-laki";
      echo "<input type='radio' name='jenis_kelamin' value='perempuan' checked='checked'> Perempuan";
    }
    ?>
    </td>
  </tr>

  <tr>
          <td>Asal Sekolah</td>
            <td>
              <select class="form-dropdown" name="asal" value="<?php echo $data['asal_sekolah']; ?>">

              <?php
            

              $q = "SELECT nama_sekolah FROM smp_cirebon";
              $s = mysqli_query($con,$q);

              while($row = mysqli_fetch_array($s)){ 
                $nilai=$row['nama_sekolah'];
                echo "<option> $nilai </option>";
              }
              ?>
              </select>
            </td>
          </tr>
  
  <tr>
    <td>NEM</td>
    <td><input type="text" name="nem" value="<?php echo $data['nem']; ?>"></td>
  </tr>

  <tr>
    <td>E-Mail</td>
    <td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
  </tr>

  <tr>
    <td>Telepon</td>
    <td><input type="text" name="telp" value="<?php echo $data['no_hp']; ?>"></td>
  </tr>

  <tr>
            <td>Agama</td>
            <td>
            <select name="agama" value="<?php echo $data['agama']; ?>">
              <option value="">-pilih-</option>
              <option value="islam">Islam</option>
              <option value="protestan">Kristen Protestan</option>
              <option value="katolik">Katolik</option>
              <option value="hindu">Hindu</option>
              <option value="buddha">Buddha</option>          
            </select>
            </td>
          </tr>

  <tr>
    <td>Alamat</td>
    <td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
  </tr>

  <tr>
    <td>Password</td>
    <td><input type="text" name="pass" value="<?php echo $data['pass']; ?>"></td>
  </tr>
  
  </table><br>
  
  <input type="submit" value="Ubah" name="ubah">
  <a href="index_user.php?page=data"><input type="button" value="Batal"></a>
  </form>
  </div>
</div>
</body>
</html>