<?php
session_start();
include "config.php";

$id = $_SESSION['nisn'];

$direktori = "files";

foreach ($_FILES["fileku"]["error"] as $key => $error) {

    if ($error == UPLOAD_ERR_OK) {

        $tmp_name = $_FILES["fileku"]["tmp_name"][$key];
        $name = $_FILES["fileku"]["name"][$key];

        if(move_uploaded_file($tmp_name, $direktori."/".$name)){

            $query  = "INSERT INTO files VALUES('','$name','$id')";
            $sql    = mysqli_query($con,$query);

            if($sql){
                echo "Data Berhasil Disimpan";
                header('location:index_user.php?page=list');
            }else{
                echo"data gagal disimpan";
                header('location:form_upload.php');
            }
        }
    }
}
?>