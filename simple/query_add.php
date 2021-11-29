<?php
	require_once 'configDB.php';

	if(isset($_POST['add'])){
		if($_POST['task1'] !=""){
			$task = $_POST['task1'];
			$cID = $_POST['codeID'];
			$conn->query("INSERT INTO task VALUES('".$cID."', '".$task."', '')");
			
			header('location:index.php');
		}
	}
?>