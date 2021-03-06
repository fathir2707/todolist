<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>

	<?php
        include 'configDB.php';

        $qflow = mysqli_query($conn, "SELECT max(task_id) as task_id FROM task");
        $fetch = $qflow->fetch_array();
        $cID = $fetch['task_id'];

        $urut = (int) substr($cID, 3);

        $urut++;

        $str = "TSK";
        $cID = $str . sprintf("%s", $urut);
        
    ?>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Simple things</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">To-Do-List App</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		
		<div class="col-md-8">
			<center>
				<form method="POST" class="form-inline" action="query_add.php">
					<input type="text" class="form-control" name="codeID" value="<?php echo $cID; ?>" required readonly/>
					<br />
					<input type="text" class="form-control" name="task1" required/>
					<br />
					<button class="btn btn-primary form-control" name="add">Add Task</button>
				</form>
			</center>
		</div>

		<br /><br />
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Task</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'configDB.php';
					$query = $conn->query("SELECT * FROM task ORDER BY task_id ASC");
					$count = 1;
					while($fetch = $query->fetch_array()){
				?>
				<tr>
					<td><?php echo $count++?></td>
					<td><?php echo $fetch['task_desc']?></td>
					<td><?php echo $fetch['status_task']?></td>
					<td colspan="2">
						<center>
							<?php
								if($fetch['status_task'] != "DONE"){
									echo 
									'<a href="query_update.php?task_id='.$fetch['task_id'].'" class="btn btn-success"><span class="glyphicon glyphicon-check"></span></a> |';	
								}
							?>
									<a href="query_delete.php?task_id=<?php echo $fetch['task_id']?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
						</center>
					</td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>