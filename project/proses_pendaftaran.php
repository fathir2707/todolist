<?php
// Load file koneksi.php
include "config.php";

// Ambil Data yang Dikirim dari Form
$id         = $_POST['nisn'];

$name       = $_POST['nama'];
$ttl        = $_POST['ttl'];
$jk         = $_POST['jenis_kelamin'];
$asal_sklh  = $_POST['asal'];
$nem        = $_POST['nem'];
$mail       = $_POST['email'];
$no_hp      = $_POST['telp'];
$agm        = $_POST['agama'];
$adrs       = $_POST['alamat'];
$pass       = $_POST['password'];
$role       = $_POST['role'];
$foto       = $_FILES['foto']['name'];
$tmp        = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmY').$foto;

$path = "files/".$fotobaru;

if(move_uploaded_file($tmp, $path)){ 
// Proses upload
  $query = "INSERT INTO daftar VALUES('', '".$fotobaru."','".$id."', '".$name."', '".$ttl."', '".$jk."', '".$asal_sklh."', '".$nem."', '".$mail."', '".$no_hp."','".$agm."', '".$adrs."', '".$pass."', '".$role."')";
  $sql = mysqli_query($con, $query); 
  if($sql){
    // Jika Sukses, Lakukan :
    header("location: index.php?page=login"); 
  }else{
    // Jika Gagal, Lakukan :
    ?>
    <script>
		alert('error while uploading file');
        window.location.href='index.php?page=daftar';
        </script>
        <?php
  }
}else{
  echo "Maaf, Gambar gagal untuk diupload.";
}
?>