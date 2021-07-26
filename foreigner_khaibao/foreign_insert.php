<?php

if(isset($_POST['submit'])){
    if(isset($_POST['username']) && isset($_POST['nation']) && isset($_POST['subject']) && isset($_POST['email']) && isset($_POST['phone'])){


        $username = $_POST['username'];
        $nation = $_POST['nation'];
        $stu_id = $_POST['student_id'];
        $subject= $_POST['subject'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address= $_POST['address'];
        $date = $_POST['dob'];
        $travel = $_POST['travel'];
        $sym = $_POST['symptom'];
        $contact = $_POST['contact'];
        $vaccine = $_POST['vaccine'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "simple_web";

        $connect = new mysqli($host,$dbUsername,$dbPassword,$dbName);

        if($connect->connect_error){
            die('Could not connect to the database.');
        }
        else{
            $Insert = "INSERT INTO foreign_student(full_name, nation,student_id, subject, email, phone_number, address,birthday,gender,travel_from,symptom,contact_with_infected,vaccine)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $connect->prepare($Insert);
            $stmt->bind_param("ssissssssssss", $username, $nation, $stu_id, $subject, $email,$phone,$address,$date,$gender,$travel,$sym,$contact,$vaccine);

            if ($stmt->execute()) {
                header('Location: ../thank_you.php');
            }
            else {
                echo $stmt->error;
                header('Location: foreign_insert.php');
            }

            $stmt->close();
        }
     }
     else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}


?>
