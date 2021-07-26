<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js"></script>
    <title>Medical Register</title>
  </head>

  <body>
    <div class="wrapper">
      <div class="title">
        Medical Register Form for Foreigner Student
      </div>
    <div id="fault_message" style="background: pink;"></div>
    <br>
     <form id="myform" action="foreign_insert.php" onsubmit="return validate();" method="POST">

       <div class="input-fields">
         <span class="details">Full Name</span>
         <input type="text" id="name" name="username" required>
       </div>

       <div class="input-fields">
         <span class="details">Nationality</span>
         <input type="text" id="nation" name="nation" required>
       </div>

       <div class="input-fields">
         <span class="details">Student Id</span>
         <input type="number" id="stu_id" name="student_id" required>
       </div>

       <div class="input-fields">
         <span class="details">Subject study at school</span>
         <input type="text" id="subject" name="subject" required>
       </div>

       <div class="input-fields">
         <span class="details">Email</span>
         <input type="email" id="email" name="email" required>
       </div>

       <div class="input-fields">
         <span class="details">Phone number<br>(In VietNam)</span>
         <input type="text" id="phone" name="phone" required>
       </div>

       <div class="input-fields">
         <span class="details">Living address in VN</span>
         <input type="text" id="address" name="address" required>
       </div>

       <div class="input-fields">
         <span class="details">Date of Birth </span>
         <input type="date" id="doB" name="dob" required>
       </div>

       <div class="input-fields">
          <span class="details">Gender</span>
         <div class="custom-select">
           <select name="gender">
             <option value="male">male</option>
             <option value="female">Female</option>
           </select>
         </div>
       </div>

       <div class="input-fields">
         <span class="details">For the past 14 days, Did you travel to any epidemic area </span>
         <div class="custom-select">
           <select name="travel">
             <option value="yes">Yes</option>
             <option value="no">No</option>
           </select>
         </div>
       </div>


       <div class="input-fields">
         <span class="details">For the past 14 days, Did you have any COVID-19 symptom</span>
         <div class="custom-select">
           <select name="symptom">
             <option value="cough">Heavy Cough</option>
             <option value="fever">Fever</option>
             <option value="stuffy">Heavy Breath</option>
             <option value="headache">Headache</option>
             <option value="exhausted">Exhausted</option>
             <option value="none">None</option>
           </select>
         </div>
       </div>



       <div class="input-fields">
         <span class="details">For the past 14 days,Did you contact with any infected people</span>
         <div class="custom-select">
           <select name="contact">
             <option value="yes">Yes</option>
             <option value="no">No</option>
           </select>
         </div>
       </div>

       <div class="input-fields">
         <span class="details">Have you been vaccinated with COVID vaccines</span>
         <div class="custom-select">
           <select name="vaccine">
             <option value="1 dose">1 dose of vaccine</option>
             <option value="2 dose">Full 2 dose of vaccine</option>
             <option value="none">Have not yet</option>
           </select>
         </div>
       </div>

       <div class="inputfield">
        <input type="submit" value="Submit" class="button" name="submit">
      </div>

     </form>
    </div>

    <script type="text/javascript">

    function validate(){
      var name = document.getElementById("name").value;
      var nation = document.getElementById("nation").value;
      var subject = document.getElementById("subject").value;
      var phone = document.getElementById("phone").value;
      var email = document.getElementById("email").value;
      var address = document.getElementById("address").value;
      var doB = document.getElementById("doB").value;
      var error_message = document.getElementById("fault_message");

      error_message.style.padding = "10px";

      var text;
      const regex = /\d/;

      if((name.length < 5 && regex.test(name) == true) || name.length > 100){
        text = "Please Enter valid Name";
        error_message.innerHTML = text;
        return false;
      }
      if(subject.length < 2 || subject.length > 40){
        text = "Please Enter Correct Subject";
        error_message.innerHTML = text;
        return false;
      }
      if(isNaN(phone) || phone.length != 10){
        text = "Please Enter valid Phone Number";
        error_message.innerHTML = text;
        return false;
      }
      if(email.indexOf("@") == -1 || email.length < 6){
        text = "Please Enter valid Email";
        error_message.innerHTML = text;
        return false;
      }
      if(address.length <= 10){
        text = "Please Enter valid address";
        error_message.innerHTML = text;
        return false;
      }
      if(dob.inclues("/") == false){
        text = "Please Enter valid date of birth";
        error_message.innerHTML = text;
        return false;
      }
      alert("Form Submitted Successfully!");
      return true;
    }

    </script>

  </body>
</html>
