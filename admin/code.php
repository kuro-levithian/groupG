<?php
include('security.php');

//Add new admin(Register)
if(isset($_POST['register-btn'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirmpassword'];

  $user_query =  "SELECT * FROM admin where username = '$username'";
  $user_query_run = mysqli_query($connect,$user_query);
  if(mysqli_num_rows($user_query_run) > 0){
    $_SESSION['status'] = "Username Already Existed. Please Try Another one.";
    $_SESSION['status_code'] = "error";
    header('Location: register.php');
  }
  else {
    if ($password === $confirm_password) {

      $query = "INSERT INTO admin(username,email,password) VALUES ('$username','$email','$password')";
      $query_run = mysqli_query($connect,$query);

      if($query_run){
        $_SESSION['status'] = "Admin profile Added";
        $_SESSION['status_code'] = "success";
        header('Location: register.php');
      }
      else {
        $_SESSION['status'] = "Admin profile Not Added";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');
      }
    }
    else {
    $_SESSION['status'] = "Password Does not Match";
    $_SESSION['status_code'] = "warning";
    header('Location: register.php');
    }
  }
}

//Update admin
if(isset($_POST['update-btn'])){
  $id = $_POST['edit_id'];
  $username = $_POST['edit_username'];
  $email = $_POST['edit_email'];
  $password = $_POST['edit_password'];

  $user_query =  "SELECT * FROM admin where username = '$username'";
  $user_query_run = mysqli_query($connect,$user_query);

  if(mysqli_num_rows($user_query_run) > 0){
    $_SESSION['status'] = "Username Already Existed. Please Try Another one.";
    $_SESSION['status_code'] = "error";
    header('Location: register.php');
  }

    $query = "UPDATE admin SET username = '$username', email = '$email', password = '$password' WHERE id = '$id'";
    $query_run = mysqli_query($connect,$query);

    if($query_run){
      $_SESSION['status'] = "Admin profile Updated";
      $_SESSION['status_code'] = "success";
      header('Location: register.php');
    }
    else {
      $_SESSION['status'] = "Admin profile Update Failed";
      $_SESSION['status_code'] = "error";
      header('Location: register.php');
    }

}

//Delete admin
if(isset($_POST['delete-btn'])){
  $id = $_POST['delete_id'];

  if($connect->connect_error){
      die('Could not connect to the database.');
  }
  else {
    $query = "DELETE FROM admin where id = '$id'";
    $query_run = mysqli_query($connect,$query);

    if($query_run){
      $_SESSION['status'] = "Admin profile Deleted";
      $_SESSION['status_code'] = "success";
      header('Location: register.php');
    }
    else {
      $_SESSION['status'] = "Admin profile Delete Failed";
      $_SESSION['status_code'] = "error";
      header('Location: register.php');
    }
  }
}

//Admin login
if(isset($_POST['login-btn'])){

  $username_login = $_POST['login-username'];
  $password_login = $_POST['login-password'];

  $query = "SELECT * FROM admin where username = '$username_login' and password = '$password_login'";
  $query_run = mysqli_query($connect,$query);

  if(mysqli_fetch_array($query_run)){
    $_SESSION['username'] = $username_login;
    $_SESSION['status_code'] = "success";
    header('Location: index.php');
  }
  else {
    $_SESSION['status'] = 'Email or Password is Invalid';
    header('Location: login.php');
  }

}


//Update VN students form
if(isset($_POST['VNForm-update-btn'])){
  $id = $_POST['edit_id'];
  $username  = $_POST['edit_username'];
  $MSSV = $_POST['edit_MSSV'];
  $khoa = $_POST['edit_khoa'];
  $gender = $_POST['edit_gender'];
  $email = $_POST['edit_email'];
  $address = $_POST['edit_address'];
  $date = $_POST['edit_date'];
  $phone = $_POST['edit_phone'];
  $travel = $_POST['edit_travel'];
  $symptom = $_POST['edit_symp'];
  $contact = $_POST['edit_contact'];
  $vaccine = $_POST['edit_vaccine'];

  $query = "UPDATE vn_student SET ho_ten = '$username', MSSV = '$MSSV', khoa = '$khoa', gioi_tinh ='$gender',
  email = '$email', dia_chi = '$address', ngay_sinh = '$date', phone = '$phone' , du_lich_14ngay = '$travel',
  dau_hieu_14ngay = '$symptom', tiep_xuc_gan_14ngay = '$contact' , da_tiem_vaccine = $vaccine WHERE id = '$id'";

  $query_run = mysqli_query($connect,$query);
  if($query_run){
    $_SESSION['status'] = "Student Form Updated";
    $_SESSION['status_code'] = "success";
    header('Location: VN_form.php');
  }
  else {
    $_SESSION['status'] = "Student Form Update Failed";
    $_SESSION['status_code'] = "error";
    header('Location: VN_form_edit.php');
  }
}

//Delete VN form
if(isset($_POST['VN-delete-btn'])){
  $id = $_POST['delete_id'];

  $query = "DELETE FROM vn_student where id = '$id'";
  $query_run = mysqli_query($connect,$query);

  if($query_run){
    $_SESSION['status'] = "Student Form Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: VN_form.php');
  }
  else {
    $_SESSION['status'] = "Student Form Delete Failed";
    $_SESSION['status_code'] = "error";
    header('Location: VN_form.php');
  }
}


//Update Foreign students form
if(isset($_POST['Foreign-form-update-btn'])){
  $id = $_POST['edit_id'];
  $username  = $_POST['edit_username'];
  $nation = $_POST['edit_nation'];
  $stu_id = $_POST['edit_studentid'];
  $subject = $_POST['edit_sub'];
  $gender = $_POST['edit_gender'];
  $email = $_POST['edit_email'];
  $address = $_POST['edit_address'];
  $date = $_POST['edit_date'];
  $phone = $_POST['edit_phone'];
  $travel = $_POST['edit_travel'];
  $symptom = $_POST['edit_symp'];
  $contact = $_POST['edit_contact'];
  $vaccine = $_POST['edit_vaccine'];

  $query = "UPDATE foreign_student SET full_name = '$username', nation = '$nation', student_id = '$stu_id', subject = '$subject', gender ='$gender',
  email = '$email', address = '$address', birthday = '$date', phone_number = '$phone' , travel_from = '$travel',
  symptom = '$symptom', contact_with_infected = '$contact', vaccine = $vaccine WHERE id = '$id'";

  $query_run = mysqli_query($connect,$query);
  if($query_run){
    $_SESSION['status'] = "Student Form Updated";
    $_SESSION['status_code'] = "success";
    header('Location:Foreign_form.php');
  }
  else {
    $_SESSION['status'] = "Student Form Update Failed";
    $_SESSION['status_code'] = "error";
    header('Location: Foreign_form_edit.php');
  }
}

//Delete Foreigner form
if(isset($_POST['foreign-delete-btn'])){
  $id = $_POST['delete_id'];

  $query = "DELETE FROM foreign_student where id = '$id'";
  $query_run = mysqli_query($connect,$query);

  if($query_run){
    $_SESSION['status'] = "Student Form Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: Foreign_form.php');
  }
  else {
    $_SESSION['status'] = "Student Form Delete Failed";
    $_SESSION['status_code'] = "error";
    header('Location: Foreign_form.php');
  }
}

//Contact delete
if(isset($_POST['contact_delete'])){
  $id = $_POST['contact_id'];

  $query = "DELETE FROM contact where id = '$id'";
  $query_run = mysqli_query($connect,$query);

  if($query_run){
    $_SESSION['status'] = "Contact Message Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: contact_message.php');
  }
  else {
    $_SESSION['status'] = "Contact Message Delete Failed";
    $_SESSION['status_code'] = "error";
    header('Location: contact_message.php');
  }
}

//Accesory
if(isset($_POST['check_submit_btn'])){
  $user = $_POST['user_id'];

  $user_query =  "SELECT * FROM admin where username = '$user'";
  $user_query_run = mysqli_query($connect,$user_query);
  if(mysqli_num_rows($user_query_run) > 0){
    echo "Username Already Exists. Please try another ";
  }
  else {
    echo "";
  }

}

// if(isset($_POST['delete_btn_set'])){
//   $id = $_POST['delete_id'];
//
//   $user_query =  "DELETE * FROM admin where id = '$id'";
//   $user_query_run = mysqli_query($connect,$user_query);
//
// }
 ?>
