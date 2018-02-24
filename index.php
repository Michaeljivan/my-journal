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
         
          <div class="content">
             <div class="journal">
                <a href="journal.php">Write something in my journal</a>
             </div>
               <div class="todo">
                  <a href="todo.php">What I have to do</a>
               </div>
             <div class="tasks">
                <a href="tasks.php">Completed Tasks</a>
             </div>
          </div>
      </body>
      <p style="color: white;"><?php echo "Welcome Ruby, Today is " .date("m/d/y") ?></p>
</html>