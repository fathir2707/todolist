<?php
    require_once 'connect.php';

    if($_GET['task_id']){
        $a = $_GET['task_id'];

        $conn->query("DELETE FROM 'task' WHERE 'task_id' = $a") or die(mysqli_errno());
        header("location: index.php");
    }
?>