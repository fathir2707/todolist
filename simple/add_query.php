<?php
	require_once 'conn.php';
	if(isset($_POST['add'])){
		if($_POST['task1'] !=""){
			$task = $_POST['task_desc'];
			$codeID = $_POST['codeID'];

			$conn->query("INSERT INTO `task` VALUES('$codeID', '$task', '')");
			header('location:index.php');
		}
	}
?>