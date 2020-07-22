<!DOCTYPE html>
<html>
<title> Contact Us  </title>
<link rel = "icon" href ="images/logo1.jpg"  type = "image/x-icon">
<head>

<?php
//this page is for registering a user .
 include 'navigation.php';
 
 ?>
</head>

<body>
<fieldset style="
	overflow: hidden; 
	color:white;
	background: #111; 
	text-align: center; 
	margin-top: 5em;
	width: 100%; ">
	<br>
     <h1 > CONTACT US</h1>
	<br>
	<p> 
	PHNO: +91-1010101010<br>
	EMAIL : FSPConsultants@gmail.com<br>
	ADDRESS: abc location <br>
	or <br>
	Send your message to us, we will surely respond as soon as possible .</p>
	<br>
	
	<!-- THIS FORM IS TO BE CONNECTED TO DATABASE -->
  <form style="width:30%" method="post" >
  	
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" placeholder="Enter UserName" required>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	 <input type="text" name="email" placeholder="Enter E-Mail"required>
  	</div>

  	<div class="input-group">
  	  <label>Message</label>
  	  <input type="text" name="message" placeholder="Enter  YOUR message "required>
  	</div>
  
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">SEND QUERY</button>
  	</div>
	
    

  </form>
  <br>
	<p> 
	
	
	</p>
	<br>
	</fieldset >
  
</body>
<?php include 'includes/footer.php'; ?>
</html>