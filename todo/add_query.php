<?php
    require_once 'connect.php';
    if(isset($_POST['add'])){
        if($_POST['task'] !=""){
            $a = $_POST['task_desc'];

            $conn->query("INSERT INTO 'task' VALUES ('', '$a', '')");
            header('location:index.php');
        }
    }
?>