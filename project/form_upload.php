<html>
<head>
  <title>PAGE UPLOAD FILE</title>
  <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

<div class="content">
	<header>
  <center>
		<img src="files/sman7.JPG" width="120dp">
		<h1>Selamat Datang</h1></center>
		<h3 align="right">
        </header>

    <div class="menu" >
      <ul>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
		  </ul>
    </div>

    <div class="badan" height="100%">

      <h1 style="text-align:center" >Upload Berkas Pendaftaran</h1>

      <form action="proses_upload.php" method="post" enctype="multipart/form-data">
      <h3 style="text-align:center"> Maksimal Ukuran File 2 MB</h3><br>

      <table cellpadding="8">

        <tr>
          <td>Surat Keterangan Kelakuan Baik</td>
          <td><input type="file" name="fileku[]">(data berformat PNG,JPG,JPEG)</td>
        </tr>
        
        <tr>
          <td>Akte Kelahiran</td>
          <td><input type="file" name="fileku[]">(data berformat PNG,JPG,JPEG)</td>
        </tr>

        <tr>
          <td>Surat Keterangan Hasil Ujian Nasional</td>
          <td><input type="file" name="fileku[]">(data berformat PNG,JPG,JPEG)</td>
        </tr>

        <tr>
          <td>Ijazah</td>
          <td><input type="file" name="fileku[]">(data berformat PNG,JPG,JPEG)</td>
        </tr>

      </table><br>
      <center>
          <input type="submit" value="Send" />
          <a href ="index_user.php?page=list"><input type="button" value="batal"></a>
      </center>
      </form>
      </div>
</div>
</body>
</html>