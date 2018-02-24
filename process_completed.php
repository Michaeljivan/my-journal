<?php 
include "base.php";
if(isset($_POST['mark'])){
                   foreach ($_POST['check'] as $value){
                        $sql = "UPDATE tasks SET completed = '1' WHERE task_desc = '".$value."'"; //write this query according to your table schema
                    
                        if(mysqli_query($con, $sql)){
                            header("Location: todo.php");
                        }else{
                        	
                        	 echo "" .mysqli_error($con);
                        }
                    }
 }
?>