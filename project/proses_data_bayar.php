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

            $query  = "INSERT INTO pembayaran VALUES('','$name','$id')";
            $sql    = mysqli_query($con,$query);

            if($sql){?>
                
                <script>
                    alert('Data Berhasil di Simpan');
                        window.location.href='index_user.php?page=bayar';
                </script>
                <?php
            }else{?>
                <script>
                    alert('error while uploading file');
                        window.location.href='form_pembayaran.php';
                </script><?php
            }
        }
    }
}
?>