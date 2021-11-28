<?php

include "config.php";

$id   = $_GET['nisn'];

$name = $_POST['nama'];
$jk   = $_POST['jenis_kelamin'];
$nem  = $_POST['nem'];
$mail = $_POST['email'];
$telp = $_POST['telp'];
$agm  = $_POST['agama'];
$adrs = $_POST['alamat'];
$pass = $_POST['pass'];
$keter= $_POST['ket'];


$query  = "UPDATE daftar SET nama='".$name."', jenis_kelamin='".$jk."', nem='".$nem."', email='".$mail."', no_hp='".$telp."', agama='".$agm."', alamat='".$adrs."', keterangan='".$keter."', pass='".$pass."' WHERE nisn='".$id."'";
$sql    = mysqli_query($con, $query);

  if($sql){
    header('location:index_admin.php?page=data');
  }else{?>
    <script>
      alert('error while uploading file');
        window.location.href='index_admin.php';
    </script><?php
    }  
?>