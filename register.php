
<!DOCTYPE html>
<html>
<title> Register </title>
<link rel = "icon" href ="images/logo1.jpg"  type = "image/x-icon">
<head>
<?php
//this page is for registering a user .
 include 'navigation.php';
 
 ?>
 
</head>

<body>
  <div class="header">
  	REGISTER
  </div>
	
  <form method="post" action="UserCreate.php">
  	
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" placeholder="Enter UserName" required>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	 <input type="text" name="email" placeholder="Enter E-Mail"required>
  	</div>
<div class="input-group">
  <label>Your Category</label>
<select name="category" required>
							<option selected hidden value="">SELECT </option>
							<option value="man">Manufacturer</option>
							<option value="dis">Distributor</option>
							<option value="ret">Retailor</option>
							<option value="InsP">Institutional Partner</option>
							<option value="serv">Service Provider</option>
							<option value="stock">Stockist</option>
							<option value="trad">Trader</option>
							


						</select>
</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  
  	
	  <?php
	  if(isset($_GET['error']) && $_GET['error'] == 2)
	  {
		  ?>
		  
						<div class="success">
  						  <h3><p style=" color: red; ">ERROR!!Password and confirm password must be equal!!</p></h3>
										</div>
			<br>							
		  <button type="submit" class="btn" name="reg_user">Register</button>
		  <?php
	  }
	  else if(isset($_GET['error']) && $_GET['error'] == 3) 
	  {
		?>
		
  										 
		<div class ="success">
		<p style=" color: red; "> ERROR !!WE HAVE A  USER REGISTERED using this email  ,TRY AGAIN</p></div>
										
		<br>
			<button type="submit" class="btn" name="reg_user">Register</button>
		<?php
	  }
	 else
	 {
		 ?>
		 <button type="submit" class="btn" name="reg_user">Register</button>
		 <?php
		
	 }
	 ?>
  		
  	</div>
    

  	<p>
  		Already a member? <a href="login.php"><u>LOGIN</u></a>
  	</p>
  </form>
  
</body>
<?php include 'includes/footer.php'; ?>
</html>