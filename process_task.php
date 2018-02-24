<?php
	include "base.php";
	//$description = mysql_connect();
	$time = date("h:i:sa");
	if(!empty($_POST['desc']))
	{
		$description = mysqli_real_escape_string($con, $_POST['desc']);

		$sql = "INSERT INTO tasks (task_id, task_desc, completed, created) VALUES (0, '".$description."', 0, '".$time."')";
		$insert_sql = mysqli_query($con, $sql);

		if($insert_sql){
			header("Location: todo.php");
		}else{
			echo "sql error not found";
			header("Location: index.php");
		}


	}else{
		echo "no data was inserted into the form!";
		header("Location: index.php");

	}
?>