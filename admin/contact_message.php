<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h2 class="m-0 font-weight-bold text-primary">Messages</h2>
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

    $query = "SELECT * FROM contact";
    $query_run = mysqli_query($connect,$query);

     ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>DELETE</th>
          </tr>
        </thead>
        <tbody>
          <?php

          if (mysqli_num_rows($query_run) > 0) {
            while($row = mysqli_fetch_assoc($query_run)){
              ?>
              <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['subject']; ?></td>
                <td><?php echo $row['message']; ?></td>
                <td>
                  <form action="code.php" method="POST">
                    <input type="hidden" name="contact_id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="contact_delete" class="btn btn-danger"> DELETE</button>
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
