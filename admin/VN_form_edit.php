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
      if (isset($_POST['edit-btn'])) {
        $id = $_POST['edit-id'];

        $query = "SELECT * FROM vn_student WHERE id = '$id' ";
        $query_run = mysqli_query($connect,$query);

        foreach ($query_run as $row){
          ?>
          <form action="code.php" method="POST">
            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
            <div class="form-group">
                <label> Họ và Tên </label>
                <input type="text" name="edit_username" value="<?php echo $row['ho_ten'] ?>" class="form-control" placeholder="Nhập Họ Tên">
            </div>
            <div class="form-group">
                <label> MSSV </label>
                <input type="text" name="edit_MSSV" value="<?php echo $row['MSSV'] ?>" class="form-control" placeholder="Nhập MSSV">
            </div>
            <div class="form-group">
                <label> Khoa </label>
                <input type="text" name="edit_khoa" value="<?php echo $row['khoa'] ?>" class="form-control" placeholder="Nhập Khoa">
            </div>
            <div class="form-group">
                <label> Giới Tính </label>
                <input type="text" name="edit_gender" value="<?php echo $row['gioi_tinh'] ?>" class="form-control" placeholder="Nhập Giới Tính">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Nhập Email">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" name="edit_address" value="<?php echo $row['dia_chi'] ?>" class="form-control" placeholder="Nhập Địa Chỉ">
            </div>
            <div class="form-group">
                <label>Ngày Sinh</label>
                <input type="text" name="edit_date" value="<?php echo $row['ngay_sinh'] ?>" class="form-control" placeholder="Nhập Ngày Sinh">
            </div>
            <div class="form-group">
                <label>Điện Thoại</label>
                <input type="text" name="edit_phone" value="<?php echo $row['phone'] ?>" class="form-control" placeholder="Nhập SĐT">
            </div>

            <div class="form-group">
                <label>Có đi đến vùng dịch trong vòng 14 ngày(Có/Không)?</label>
                <input type="text" name="edit_travel" value="<?php echo $row['du_lich_14ngay'] ?>" class="form-control" placeholder="Có/Không">
            </div>

            <div class="form-group">
                <label>Triệu chứng trong vòng 14 ngày(Ho,Sốt,Đau đầu, Khó thở, Mệt mỏi,.....)</label>
                <input type="text" name="edit_symp" value="<?php echo $row['dau_hieu_14ngay'] ?>" class="form-control" placeholder="Triệu chứng">
            </div>

            <div class="form-group">
                <label>Có tiếp xúc gần f0, f1 trong vòng 14 ngày(Có/Không)?</label>
                <input type="text" name="edit_contact" value="<?php echo $row['tiep_xuc_gan_14ngay'] ?>" class="form-control" placeholder="Có/Không">
            </div>

            <div class="form-group">
                <label>Đã tiêm vaccine COVID bao nhiêu lần?</label>
                <input type="text" name="edit_vaccine" value="<?php echo $row['da_tiem_vaccine'] ?>" class="form-control" placeholder="Có/Không">
            </div>

            <a href="VN_form.php" class="btn btn-danger"> CANCEL </a>
            <button type="submit" name="VNForm-update-btn" class="btn btn-primary">Update</button>

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
