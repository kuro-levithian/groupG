<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact us form validation</title>
	<link rel="stylesheet" href="styles.css">
	<script src="scripts.js"></script>
</head>
<body>

<div class="wrapper">
  <h2>Contact us</h2>
  <div id="error_message"></div>
  <form id="myform" onsubmit="return validate();" method="POST" action="contact_run.php">
    <div class="input_field">
        <input type="text" placeholder="Name" id="name" name="name">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Phone" id="phone" name="phone">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Email" id="email" name="email">
    </div>
		<div class="input_field">
				<input type="text" placeholder="Subject" id="subject" name="subject">
		</div>
    <div class="input_field">
        <textarea placeholder="What do you need from us" id="message" name="message"></textarea>
    </div>
    <div class="btn">
      <input type="submit" value="Submit" class="button" name="contact-submit">
    </div>
  </form>
</div>

</body>
</html>
