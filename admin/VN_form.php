<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h2 class="m-0 font-weight-bold text-primary">Vietnamese Student Registered Medical Form</h2>
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

    $query = "SELECT * FROM vn_student";
    $query_run = mysqli_query($connect,$query);

     ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Họ Tên</th>
            <th>MSSV</th>
            <th>Khoa</th>
            <th>Giới Tính</th>
            <th>Email</th>
            <th>Địa chỉ </th>
            <th>Ngày Sinh</th>
            <th>Số điện thoại</th>
            <th>Có đi đến vùng dịch trong vòng 14 ngày</th>
            <th>Triệu chứng trong vòng 14 ngày</th>
            <th>Tiếp xúc f0, f1 trong vòng 14 ngày</th>
            <th>Đã tiêm vaccine COVID bao nhiêu lần?</th>
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
                <td><?php echo $row['ho_ten']; ?></td>
                <td><?php echo $row['MSSV']; ?></td>
                <td><?php echo $row['khoa']; ?></td>
                <td><?php echo $row['gioi_tinh']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['dia_chi']; ?></td>
                <td><?php echo $row['ngay_sinh']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['du_lich_14ngay']; ?></td>
                <td><?php echo $row['dau_hieu_14ngay']; ?></td>
                <td><?php echo $row['tiep_xuc_gan_14ngay']; ?></td>
                <td><?php echo $row['da_tiem_vaccine']; ?></td>
                <td>
                  <form action="VN_form_edit.php" method="POST">
                    <input type="hidden" name="edit-id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit-btn" class="btn btn-success"> EDIT</button>
                  </form>
                </td>
                <td>
                  <form action="code.php" method="POST">
                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="VN-delete-btn" class="btn btn-danger"> DELETE</button>
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
