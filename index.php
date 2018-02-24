<?php
  include 'base.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>My Journal</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
      <body>
         
          <div class="content">
             <div class="journal"><i class="fa fa-pencil" style="font-size:48px;"></i>
                <a href="journal.php">Create Task in my journal</a>
             </div>
               <div class="todo"><i class="fa fa-list-alt" style="font-size:48px;"></i>
                  <a href="todo.php">To Do</a>
               </div>
             <div class="tasks"><i class="fa fa-check" style="font-size:48px;"></i>
                <a href="completed.php">Completed Tasks</a>
             </div>
          </div>
      </body>
      <p style="color: white;"><?php echo "Welcome Ruby, Today is " .date("m/d/y") ?></p>
</html>