<?php
	include 'base.php';
	$tasks_query = "SELECT * FROM tasks";
	$task_data = mysqli_query($con, $tasks_query);
	
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Tasks</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
      <body>
        <a href="index.php">Home</a>
        <p style="color: white;"><?php echo "Today is " .date("m/d/y") ?></p>
      

        <?php
        	while($data = mysqli_fetch_array($task_data)){
        		echo "{$data['task_desc']}";
        		echo "<br>";
        	}	
        ?>
        
        
      </body>
</html>
