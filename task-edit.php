<?php

  include('database.php');

if(isset($_POST['id'])) {
  $task_name = $_POST['name']; 
  $task_description = $_POST['description'];
  $task_ingreso = $_POST['ingreso'];
  $id = $_POST['id'];
  $query = "UPDATE task SET name = '$task_name', description = '$task_description', fechaIngreso = '$task_ingreso' WHERE id = '$id'";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }
  echo "Task Update Successfully";  

}

?>
