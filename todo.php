<?php
  include 'base.php';
  $tasks_query = "SELECT * FROM tasks WHERE completed = 0";
  $task_data = mysqli_query($con, $tasks_query);
  $i=1;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Completed Tasks</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
      <body>
        <a href="index.php">Home</a>
        <p style="color: white;"><?php echo "Today is " .date("m/d/y") ?></p>
     
    <form action="process_completed.php" method="post">
      <table class="flat-table">
        <tbody>
          <tr>
            <th>Task Description</th>
            <th>Create Time</th>
            <th>Mark Complete</th>
          </tr>
          
            <?php
              while($data = mysqli_fetch_array($task_data)){
                echo "<tr>
                        <td>{$data['task_desc']}</td>
                        <td>{$data['created']}</td>                        
                        <td><input type='checkbox' name='check[$i]' value='".$data['task_desc']."'></td>
                     </tr>";                
                $i++;
              } 
            ?>
        </tbody>
      </table>        
      <input style="float: left;" class="flat-table" type="submit" value="Mark Complete!" name="mark">
    </form>
        
      </body>
</html>
