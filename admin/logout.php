<?php
include('security.php');

if(isset($_POST['logout-btn'])){
  session_destroy();
  unset($_SESSION['username']);
  header('Location:login.php');
}
 ?>
