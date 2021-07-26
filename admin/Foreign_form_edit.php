<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">EDIT Student form</h6>
    </div>

    <div class="card-body">
      <?php
      if (isset($_POST['foreign-edit-btn'])) {
        $id = $_POST['edit-id'];

        $query = "SELECT * FROM foreign_student WHERE id = '$id' ";
        $query_run = mysqli_query($connect,$query);

        foreach ($query_run as $row){
          ?>
          <form action="code.php" method="POST">
            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
            <div class="form-group">
                <label> Full name</label>
                <input type="text" name="edit_username" value="<?php echo $row['full_name'] ?>" class="form-control" placeholder="Student 's Fullname">
            </div>
            <div class="form-group">
                <label> Nationality </label>
                <input type="text" name="edit_nation" value="<?php echo $row['nation'] ?>" class="form-control" placeholder="Student 's Nationality">
            </div>
            <div class="form-group">
                <label> Student Id </label>
                <input type="text" name="edit_studentid" value="<?php echo $row['student_id'] ?>" class="form-control" placeholder="Student 's Id in Vietnam">
            </div>
            <div class="form-group">
                <label> Subject </label>
                <input type="text" name="edit_sub" value="<?php echo $row['subject'] ?>" class="form-control" placeholder="Student 's Subject">
            </div>
            <div class="form-group">
                <label> Gender </label>
                <input type="text" name="edit_gender" value="<?php echo $row['gender'] ?>" class="form-control" placeholder="Student 's Gender">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Student 's Email">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="edit_address" value="<?php echo $row['address'] ?>" class="form-control" placeholder="Student 's Address">
            </div>
            <div class="form-group">
                <label>Birthday</label>
                <input type="text" name="edit_date" value="<?php echo $row['birthday'] ?>" class="form-control" placeholder="Student 's Date of Birth">
            </div>
            <div class="form-group">
                <label>Phone number</label>
                <input type="text" name="edit_phone" value="<?php echo $row['phone_number'] ?>" class="form-control" placeholder="Student 's Phone number">
            </div>

            <div class="form-group">
                <label>For the past 14 days, Did you travel to any epidemic area(Yes/No)?</label>
                <input type="text" name="edit_travel" value="<?php echo $row['travel_from'] ?>" class="form-control" placeholder="Yes or No (pick one)">
            </div>

            <div class="form-group">
                <label>For the past 14 days, Did you have any COVID-19 symptom?</label>
                <input type="text" name="edit_symp" value="<?php echo $row['symptom'] ?>" class="form-control" placeholder="Pick one symptom(Heavy Cough,Fever,Heavy Breath,Headache,...)">
            </div>

            <div class="form-group">
                <label>For the past 14 days,Did you contact with any infected people(Yes/No)?</label>
                <input type="text" name="edit_contact" value="<?php echo $row['contact_with_infected'] ?>" class="form-control" placeholder="Yes or No (pick one)">
            </div>

            <div class="form-group">
                <label>Have you been vaccinated with COVID vaccines</label>
                <input type="text" name="edit_vaccine" value="<?php echo $row['vaccine'] ?>" class="form-control" placeholder="Yes or No (pick one)">
            </div>

            <a href="VN_form.php" class="btn btn-danger"> CANCEL </a>
            <button type="submit" name="Foreign-form-update-btn" class="btn btn-primary">Update</button>

          </form>
          <?php
        }
      }
      ?>

    </div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
