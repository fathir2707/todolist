<?php
session_start();
include "config.php";

$id = $_GET['id'];

$query2 = "DELETE FROM files WHERE id='".$id."'";
$sql2 = mysqli_query($con, $query2); 
if($sql2){ 
  
  header("location: index_admin.php"); 
}else{?>

  <script>
        alert('error delete');
            window.location.href='index_admin.php?page=data';
  </script>
<?php
}
?>