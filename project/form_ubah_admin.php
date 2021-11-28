<?php
  include "index_admin.php";
?>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Form Ubah Data</title>
</head>

<body>
<center>
<h1>Ubah Data Siswa</h1>

  <div class="badan">
    <?php  
    $id = $_GET['nisn'];
  
    $query = "SELECT * FROM daftar WHERE nisn='".$id."'";
    $sql = mysqli_query($con, $query);  
    $data = mysqli_fetch_array($sql);?>
    
    <form method="post" action="proses_ubah_admin.php?nisn=<?php echo $id; ?>" enctype="multipart/form-data">
      <table cellpadding="8" border='1'><br><br>

        <tr>
          <td>Nama</td>
            <td>
              <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
            </td>
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
              }?>
            </td>
        </tr>

        <tr>
          <td>NEM</td>
            <td>
              <input type="text" name="nem" value="<?php echo $data['nem']; ?>">
            </td>
        </tr>

        <tr>
          <td>E-Mail</td>
            <td>
              <input type="text" name="email" value="<?php echo $data['email']; ?>">
            </td>
        </tr>

        <tr>
          <td>Telepon</td>
            <td>
              <input type="text" name="telp" value="<?php echo $data['no_hp']; ?>">
            </td>
        </tr>

        <tr>
          <td>Agama</td>
            <td>
              <select name="agama">
                <option value="<?php echo $data['agama']; ?>"><?php echo $data['agama']; ?></option>
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
            <td>
              <textarea name="alamat"><?php echo $data['alamat']; ?></textarea>
            </td>
        </tr>

        <tr>
          <td>Password</td>
            <td>
              <input type="password" name="pass" value="<?php echo $data['pass']; ?>">
            </td>
        </tr>

        <tr>
          <td>Keterangan</td>
            <td>
              <select name="ket">
                <option value="<?php echo $data['keterangan']; ?>"></option>
                <option value="LULUS">Lulus</option>
                <option value="DITERIMA">Diterima</option>
              </select>
            </td>
        </tr>
        
      </table>
          <input type="submit" value="Ubah" name="ubah">
              <input type="button" value="Batal">
          </a>
          </center>
    </form>
  </div><!-- Badan -->
</div><!-- Wrapper -->
</body>
</html>