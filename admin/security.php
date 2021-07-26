<?php
session_start();

include 'database/db_config.php';

if($connect){
  // echo "Database Connected";
}
else {
  header("Location: db_config.php");
}

if(!$_SESSION['username']){
  header("Location: login.php");
}


 ?>
