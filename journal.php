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
  
        <div class="container">
          <form action="process_task.php" method="post">
            
            <div class="row">
              <div class="col-25">
                <label for="subject">What needs to be done?</label>
              </div>
              <div class="col-75">
                <textarea id="subject" name="desc" placeholder="Write something.." style="height:200px"></textarea>
              </div>
            </div>
            <div class="row">
              <input type="submit" value="Create Task">
            </div>
          </form>
        </div>
      </body>
</html>
