<?php
if(isset($_POST['contact-submit'])){
    if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){

      $username = $_POST['name'];
      $phone_number = $_POST['phone'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $host = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbName = "simple_web";

      $conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);

      if($conn->connect_error){
          die('Could not connect to the database.');
      }
      else {
        $query = "INSERT INTO contact(name,phone,email,subject,message) VALUES ('$username','$phone_number','$email', '$subject', '$message')";
        $query_run = mysqli_query($conn,$query);

        if($query_run){
          header('Location: ../thank_you.php');
        }
        else {
          echo "Insert failed";
          header('Location: contact_run.php');
        }
      }
    }
  }
 ?>
