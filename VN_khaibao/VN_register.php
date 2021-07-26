<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Medical_register</title>
  </head>

  <body>
    <div class="wrapper">
      <div class="title">
        Mẫu khai báo y tế
      </div>

      <div id="fatal_message"></div>
      <br>
     <form  id="myform" action="insert.php" onsubmit="return validate();" method="POST">
       <div class="input-fields">
         <span class="details">Họ và Tên</span>
         <input type="text" id="name" name="username" required>
       </div>

       <div class="input-fields">
         <span class="details">Mã số sinh viên</span>
         <input type="text" id="student_id" name="MSSV" required>
       </div>

       <div class="input-fields">
         <span class="details">Khoa</span>
         <input type="text"id="subject" name="factor" required>
       </div>

       <div class="input-fields">
         <span class="details">Email</span>
         <input type="email" id="email" name="email" required>
       </div>

       <div class="input-fields">
         <span class="details">Số điện thoại</span>
         <input type="text" id="phone" name="phone" required>
       </div>

       <div class="input-fields">
         <span class="details">Địa chỉ</span>
         <input type="text" id="address" name="address" required>
       </div>

       <div class="input-fields">
         <span class="details">Năm sinh: </span>
         <input type="date" id="doB" name="date" required>
       </div>

       <div class="input-fields">
          <span class="details">Giới tính</span>
         <div class="custom-select">
           <select name="gender">
             <option value="nam">Nam</option>
             <option value="nu">Nữ</option>
           </select>
         </div>
       </div>

       <div class="input-fields">
         <span class="details">Có đi đến vùng dịch trong vòng 14 ngày</span>
         <div class="custom-select">
           <select name="travel">
             <option value="co">Có</option>
             <option value="khong">Không</option>
           </select>
         </div>
       </div>


       <div class="input-fields">
         <span class="details">Triệu chứng trong vòng 14 ngày</span>
         <div class="custom-select">
           <select name="symptom">
             <option value="ho">Ho</option>
             <option value="sot">Sốt</option>
             <option value="kho tho">Khó thở</option>
             <option value="dau dau">Đau đầu</option>
             <option value="met moi">Mệt mỏi</option>
             <option value="khong">Không</option>
           </select>
         </div>
       </div>



       <div class="input-fields">
         <span class="details">Tiếp xúc f0, f1 trong vòng 14 ngày</span>
         <div class="custom-select">
           <select name="contact">
             <option value="co">Có</option>
             <option value="khong">Không</option>
           </select>
         </div>
       </div>


       <div class="input-fields">
         <span class="details">Đã tiêm vaccine COVID ?</span>
         <div class="custom-select">
           <select name="vaccine">
             <option value="1 mui">1 mũi</option>
             <option value="2 mui">Tiêm đủ 2 mũi</option>
             <option value="khong">Chưa tiêm một mũi nào</option>
           </select>
         </div>
       </div>

       <div class="input-fields">
        <input type="submit" value="Submit" class="button" name="submit">
      </div>
     </form>
    </div>

    <script type="text/javascript">

    function validate(){
      var name = document.getElementById("name").value;
      var student_id = document.getElementById("student_id").value;
      var subject = document.getElementById("subject").value;
      var phone = document.getElementById("phone").value;
      var email = document.getElementById("email").value;
      var address = document.getElementById("address").value;
      var doB = document.getElementById("doB").value;
      var error_message = document.getElementById("fatal_message");

      error_message.style.padding = "10px";

      var text;
      const regex = /\d/;

      if((name.length < 5 && regex.test(name) == true) || name.length > 100){
        text = "Vui Lòng Nhập Tên Phù Hợp";
        error_message.innerHTML = text;
        return false;
      }
      if(isNaN(student_id) || student_id.length < 6){
        text = "Vui Lòng Mã Số Sinh Viên Phù Hợp";
        error_message.innerHTML = text;
        return false;
      }
      if(subject.length < 2 || subject.length > 40){
        text = "Vui Lòng Nhập Khoa Phù Hợp";
        error_message.innerHTML = text;
        return false;
      }
      if(isNaN(phone) || phone.length != 10){
        text = "Vui Lòng Nhập Số Điện Thoại Phù Hợp";
        error_message.innerHTML = text;
        return false;
      }
      if(email.indexOf("@") == -1 || email.length < 6){
        text = "Vui Lòng Nhập Tên Phù Hợp";
        error_message.innerHTML = text;
        return false;
      }
      if(address.length <= 10){
        text = "Vui Lòng Nhập Địa Chỉ Phù Hợp";
        error_message.innerHTML = text;
        return false;
      }
      alert("Form Submitted Successfully!");
      return true;
    }

    </script>

  </body>
</html>
