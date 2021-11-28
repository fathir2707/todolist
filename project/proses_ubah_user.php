<?php

include "config.php";


$id   = $_GET['nisn'];

$name = $_POST['nama'];
$ttl  = $_POST['ttl'];
$jk   = $_POST['jenis_kelamin'];
$asal = $_POST['asal'];
$nem  = $_POST['nem'];
$mail = $_POST['email'];
$telp = $_POST['telp'];
$agm  = $_POST['agama'];
$adrs = $_POST['alamat'];
$pass = $_POST['pass'];

if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $foto  = $_FILES['foto']['name'];
  $tmp   = $_FILES['foto']['tmp_name'];
 
    $fotobaru = date('dmY').$foto;

    $path = "files/".$fotobaru;

  if(move_uploaded_file($tmp, $path)){ 

    if(is_file("files/".$data['foto'])) // Jika foto ada
        unlink("files/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images

        $query  = "UPDATE daftar SET foto='".$fotobaru."', nama='".$name."', ttl='".$ttl."',jenis_kelamin='".$jk."', asal_sekolah='".$asal."', nem='".$nem."', email='".$mail."', no_hp='".$telp."', agama='".$agm."', alamat='".$adrs."', pass='".$pass."' WHERE nisn='".$id."'";
        $sql    = mysqli_query($con, $query);

          if($sql){
            header('location:index_user.php?page=data');
          }
    }else{?>
      <script>
          alert('error while uploading file');
              window.location.href='index_user.php';
      </script>
    <?php
    }
  }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
    // Proses ubah data ke Database
    $query = "UPDATE daftar SET nama='".$name."', ttl='".$ttl."',jenis_kelamin='".$jk."', asal_sekolah='".$asal."', nem='".$nem."', email='".$mail."', no_hp='".$telp."', agama='".$agm."', alamat='".$adrs."', pass='".$pass."' WHERE nisn='".$id."'";
    $sql = mysqli_query($con, $query); // Eksekusi/ Jalankan query dari variabel $query

      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: index_user.php?page=data"); // Redirect ke halaman index.php
  }
}
?>