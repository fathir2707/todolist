<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>

</head>
<body>

  <div style="padding-left:20px">

  <h1 style="text-align:center">Form Registrasi</h1>

      <form method="post" action="proses_pendaftaran.php" enctype="multipart/form-data">
          <table cellpadding="8">

          <center style="padding-left:450px">Foto<br><br>
          <input type="file" name="foto"></center>

          <tr>
            <td>NISN</td>
            <td><input type="text" name="nisn"></td>
          </tr>

          <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
          </tr>

          <tr>
            <td>Tempat Tanggal Lahir</td>
            <td><input type="text" name="ttl"></td>
          </tr>

          <tr>
            <td>Jenis Kelamin</td>
            <td>
            <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
            </td>
          </tr>


          <tr>
            <td>Asal Sekolah</td>
            <td>
              <select class="form-dropdown" name="asal">

              <?php
              include "config.php";

              $q = "SELECT nama_sekolah FROM smp_cirebon";
              $s = mysqli_query($con,$q);

              while($row = mysqli_fetch_array($s)){
                $data=$row['nama_sekolah'];
                echo "<option> $data </option>";
              }
              ?>
              </select>
            </td>
          </tr>
          
          <tr>
            <td>NEM</td>
            <td><input type="text" name="nem"></td>
          </tr>

          <tr>
            <td>E-Mail</td>
            <td><input type="text" name="email"></td>
          </tr>

          <tr>
            <td>Telepon</td>
            <td><input type="text" name="telp"></td>
          </tr>

          <tr>
            <td>Agama</td>
            <td>
            <select name="agama">
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
            <td><textarea name="alamat"></textarea></td>
          </tr>

          <tr>
            <td>Password</td>
            <td><input type="text" name="password"></td>
          </tr>

          <tr>
            <td>Persetujuan</td>
            <td><input type="checkbox" name="role" value="user">Setuju dengan semua data diatas?</td>
          </tr>

          </table>
        <br>

      <input type="submit" value="Simpan">
      <a href="index.php"><input type="button" value="Batal"></a>
      </form>
</div>
</body>
</html>