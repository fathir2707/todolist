<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/bs.css">
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
        require_once 'connect.php';

        $qflow = $conn->query("SELECT max(task_id) as codeID FROM task");
        $take = $qflow->fetch_array();
        $codeID = $take['codeID'];

        $urut = (int) substr($codeID, 3, 3);

        $urut++;

        $str = "TSK";
        $codeID = $str . sprintf("%03s", $urut);
        echo $codeID;
    ?>


    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <h1 class="navbar-brand"> Small Project</h1>
        </div>
    </nav>
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h3 class="text=primary">To Do List Apps</h3>
        <hr style="border-top:1px dotted #ccc;"/>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <center>
                <form method="POST" class="form-inline" action="add_query.php">
                    <input type="text" class="form-control" name="task" required/>
                    <button class="btn btn-primary form-control" name="add">Add Task</button>
                </form>
            </center>
        </div>
        <br />
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
                    require_once 'connect.php';
                    $query = $conn->query("SELECT * FROM 'task' ORDER BY 'task_id' ASC");
                    $cnt   = 1;
                    while($fetch = $query->fetch_array()){
                        ?>
                        <tr>
                            <td><?php echo $cnt++?></td>
                            <td><?php echo $fetch['task']?></td>
                            <td><?php echo $fetch['status']?></td>
                            <td colspan="2">
                                <center>
                                    <?phpif($fetch['status'] != "DONE"){
                                        echo
                                        '<a href="update_task.php?task_id='.$fetch['task_id'].'" class="btn btn-success"><span class="glyphicon glyphicon-check"></span></a> |';
                                    }
                                    ?>
                                        <a href="delete_query.hp?task_id=<?php echo $fetch['task_id']?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
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
