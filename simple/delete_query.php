<?php
	require_once 'conn.php';
	
	if($_GET['task_id']){
		$task_id = $_GET['task_id'];
		
		$conn->query("DELETE FROM task WHERE task.task_id = '.$task_id.'") or die('Error: ' .mysqli_error($conn));
		header("location: index.php");
	}	
?>