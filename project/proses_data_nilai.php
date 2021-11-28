<?php
session_start();
include "config.php";
$id =   $_SESSION['nisn'];

$nilai1  =   $_POST['ipa1'];
$nilai2  =   $_POST['mtk1'];
$nilai3  =   $_POST['ing1'];
$nilai4  =   $_POST['ind1'];

$query  =   "INSERT INTO data_nilai VALUES('','".$nilai1."','".$nilai2."','".$nilai3."','".$nilai4."','".$id."')";
$sql    =   mysqli_query($con, $query);

if($sql){
    header('location:index_user.php?page=data');
}else{
    header('location:form_data_nilai.php');
}
?>