
<html>
<title> Login</title>
<link rel = "icon" href ="images/logo1.jpg"  type = "image/x-icon">
<head>
<?php
//this page is a form for login 
 include 'navigation.php';

if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
  ?> 
     
  										 REGISTRATION SUCCESSFULL! <?php
}?>
</head>

<body>

<div class="header">
<br>LOGIN

</div>
  <form method="post" action="logincheck.php">
  	
  	<div class="input-group">
  		<label>User id (EMAIL)</label>
  		<input type="text" name="email" required >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" required>
  	</div>
  	<div class="input-group">
	  <?php
	  if(isset($_GET['success']) && $_GET['success'] == 2)
	  {
		  ?>
		  <div class ="success">
		<p  style=" color: red; ">INVALID  PASSSWORD!</p>
										</div>
		  <
		  <button type="submit" class="btn" name="login_user">Login</button>
		  <?php
	  }
	  else if(isset($_GET['success']) && $_GET['success'] == 3) 
	  {
		?>
		<div class ="success">
		<p style=" color: red; ">No User Registered With this email , Please Register First!</p>
										</div>
		
		<button type="submit" class="btn" name="login_user">Login</button>
		<?php
	  }
	 else
	 {
		 ?>
		 <button type="submit" class="btn" name="login_user">Login</button>
		 <?php
		
	 }
	 ?>
  		
  	</div>
  	<p>
  		Not yet a member? <a href="register.php"><u>REGISTER HERE</u> </a>
  	</p>
  </form>
</body>
<?php include 'includes/footer.php'; ?>
</html>
