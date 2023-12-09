<?php

  include('database.php');

if(isset($_POST['name'])) {
  # echo $_POST['name'] . ', ' . $_POST['description'];
  $task_name = $_POST['name'];
  $task_description = $_POST['description'];
  $task_ingreso = $_POST['ingreso'];
  $query = "INSERT into task(name, description, fechaIngreso) VALUES ('$task_name', '$task_description', '$task_ingreso')";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }

  echo "Task Added Successfully";  

}

?>
