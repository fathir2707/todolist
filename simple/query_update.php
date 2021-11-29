<?php
	require_once 'configDB.php';
	
	if($_GET['task_id'] != ""){
		$cID = $_GET['task_id'];		
		$conn->query("UPDATE task SET status_task = 'DONE' WHERE task_id = '".$cID."'") or die('Error: '.mysqli_error($conn));
		
		header("location: index.php");
	}
?>