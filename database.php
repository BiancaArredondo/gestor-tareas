<?php

$connection = mysqli_connect(
  'localhost', 'root', 'Contra.01', 'tasks-database'
);

// for testing connection
#if($connection) {
#  echo 'database is connected';
#}

?>
