<?php
	include "base.php";
	
	if(!empty($_POST['desc']))
	{
		$description = mysqli_real_escape_string($con, $_POST['desc']);
		$sub = mysqli_real_escape_string($con, $_POST['subj']);

		$sql = "INSERT INTO tasks (task_id, subject, task_desc, completed, created) VALUES (0,'".$sub."', '".$description."', 0, NOW())";
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