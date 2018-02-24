<?php
  include 'base.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>My Journal</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
      <body>
        <a href="index.php">Home</a>
        <p style="color: white;"><?php echo "Today is " .date("m/d/y") ?></p>
      

        <form action="process_task.php" method="post">
          <label> Description</label><input type="text" name="desc">
          <br>
          <input type="submit" value="Create Task">
        </form>   
        
      </body>
</html>
