  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

  <!--Alert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <?php
  if (isset($_SESSION['status']) && $_SESSION['status'] != '')
  {
    ?>
    <script>
    swal({
      title: "<?php echo $_SESSION['status']; ?>",
      //text: "You clicked the button!",
      icon: "<?php echo  $_SESSION['status_code']; ?>",
      button: "All Done!",
    });
    </script>
    <?php
    unset($_SESSION['status']);
  }
?>

<!-- <script>
  $(document).ready(function(){

    $('.delete-btn-script').click(function(e){
      e.preventDefault();
      var deleteid = $(this).closest("tr").find('.delete_id_value').val();
      swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this data!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {

          $.ajax({
            type: "POST",
            url:"code.php",
            data:{
              "delete_btn_set": 1,
              "delete_id": deleteid,
            },
            success: function(response){
              swal("Data Deleted Successfully!", {
                icon: "success",
              }).then((result) => {
                location.reload();
              });

            }
          });

      } else {
        swal("Your Data is safe!");
      }
    });

  });
  })
</script> -->
  <!--Custom-->
  <script src="js/custom.js"></script>
