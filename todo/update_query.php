<?php
    require_once 'connect.php';

    if($_GET['task_id'] !=""){
        $a = $_GET['task_id'];

        $conn->query("UPDATE 'task' SET 'status_task' = 'DONE' WHERE 'task_id' = $a") or die(mysqli_errno());
    }
?>