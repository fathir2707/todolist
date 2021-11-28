<?php

session_start();
include "config.php";

$id     = $_SESSION['nisn'];

$nama   = $_POST['nama_ortu'];
$almt   = $_POST['alamat_ortu'];
$no_hp  = $_POST['no_hp_ortu'];
$pkrjn  = $_POST['pekerjaan'];
$gaji   = $_POST['gaji'];


$q="INSERT INTO data_orang_tua VALUES('','".$nama."','".$almt."','".$no_hp."','".$pkrjn."','".$gaji."','".$id."')";
$s= mysqli_query($con,$q);

if($s){
    header("location:index_user.php?page=list");
}else{
    echo "gagal insert";
}

?>