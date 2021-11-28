<?php
	$conn = new mysqli("localhost", "root", "", "db_todo");
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>