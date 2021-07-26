<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h2 class="m-0 font-weight-bold text-primary">Foreign Student Registered Medical Form</h2>
  </div>

  <div class="card-body">

    <?php
    if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
      echo '<h2>' .$_SESSION['success']. '</h2>';
      unset($_SESSION['success']);
    }

    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
      echo '<h2 class="bg-info">' .$_SESSION['status']. '</h2>';
      unset($_SESSION['status']);
    }
     ?>

    <div class="table-responsive">

    <?php

    $connect = new mysqli("localhost","root","","simple_web");

    $query = "SELECT * FROM foreign_student";
    $query_run = mysqli_query($connect,$query);

     ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Full Name</th>
            <th>Nation</th>
            <th>Student Id</th>
            <th>Subject</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Address</th>
            <th>Birthday</th>
            <th>Phone Number</th>
            <th>Travelling to any epidemic area for the past 14 days</th>
            <th>Having any COVID-19 symptoms for the past 14 days</th>
            <th>Contacting with any infected people for the past 14 days</th>
            <th>Have been vaccinated with any COVID vaccine ?</th>
            <th>EDIT</th>
            <th>DELETE</th>
          </tr>
        </thead>
        <tbody>
          <?php

          if (mysqli_num_rows($query_run) > 0) {
            while($row = mysqli_fetch_assoc($query_run)){
              ?>
              <tr>
                <td><?php echo $row['full_name']; ?></td>
                <td><?php echo $row['nation']; ?></td>
                <td><?php echo $row['student_id']; ?></td>
                <td><?php echo $row['subject']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['birthday']; ?></td>
                <td><?php echo $row['phone_number']; ?></td>
                <td><?php echo $row['travel_from']; ?></td>
                <td><?php echo $row['symptom']; ?></td>
                <td><?php echo $row['contact_with_infected']; ?></td>
                <td><?php echo $row['vaccine']; ?></td>
                <td>
                  <form action="Foreign_form_edit.php" method="POST">
                    <input type="hidden" name="edit-id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="foreign-edit-btn" class="btn btn-success"> EDIT</button>
                  </form>
                </td>
                <td>
                  <form action="code.php" method="POST">
                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="foreign-delete-btn" class="btn btn-danger"> DELETE</button>
                  </form>
                </td>
              </tr>
              <?php
            }
          }
          else {
            echo "No record found";
          }
          ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
