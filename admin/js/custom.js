$(document).ready(function(){
  $('.checking-username').keyup(function(e){

    var username = $('.checking-username').val();
    $.ajax({
      type: "POST",
      url:"code.php",
      data:{
        "check_submit_btn": 1,
        "user_id": username,
      },
      success: function(response){
        $('.error_user').text(response);
      }
    });

  });
});
