<?php
  include 'base.php';
  $tasks_query = "SELECT * FROM tasks WHERE completed = 1";
  $task_data = mysqli_query($con, $tasks_query);
  
?>
<!DOCTYPE html>
<html>
<head>
  <title>Completed</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
      <body>
        <a href="index.php">Home</a>
        <p style="color: white;"><?php echo "Today is " .date("m/d/y") ?></p>
  
    	<form>
	      <table class="flat-table">
	        <tbody>
	          <tr>
	          	<th>Subject</th>
	            <th>Task Description</th>
	            <th>Completed Time</th>
	            
	          </tr>
	          
	            <?php
	              while($data = mysqli_fetch_array($task_data)){
	                echo "<tr>
	                		<td>{$data['subject']}</td>
	                        <td>{$data['task_desc']}</td>
	                        <td>{$data['created']}</td>                        
	                        
	                     </tr>";                
	              } 
	            ?>
	        </tbody>
	      </table>        
    	</form>
      </body>
</html>
