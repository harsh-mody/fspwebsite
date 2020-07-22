<html>
<title> Profile </title>
<link rel = "icon" href ="images/logo1.jpg"  type = "image/x-icon">
<head>

<?php include 'navigation.php';



$email=$_SESSION['email'] ;
if($_SESSION['email']==NULL)
{ echo "THESE ERRORS HAVE ARRIVED BECAUSE  DATABASE IS NOT CONNECTED AND U HAVE NOT LOGGED IN ";
}
	?>
	<br>
  <link rel="stylesheet" type="text/css" href="includes/rstyle.css">
  <?php include 'includes/header.php'; ?>
</head>
<body>
<?php 
//this page has 2 forms onw in case you are a registered user 
//and company both and one for only as a registered user which is checked by profilecreated variable 
$host="localhost";
		$dbUsername="root";
		$dbPassword="password";
		$dbname="fsp_db";
    //create connection
	//change port to your mysql port 
		$conn =   mysqli_connect($host, $dbUsername, $dbPassword,$dbname,3307);
			if ($conn->connect_error) 
			{
				die("Connection failed: " . $conn->connect_error);
			}
			else
			{
				//checking if the logged  in user has created a company profile or not 
				$SELECT = "SELECT *  From RegisteredUsers Where email = '$email'  ";
				$result = $conn->query($SELECT);
				if ($result->num_rows > 0) 
				{
					$row = $result->fetch_assoc();
					$status=(int) $row["profilecreated"];
				//if profile is not  created (0) then a form to create profile shows up 
					if($status==0){
					?>
					<div class="header">
						COMPANY PROFILE SET UP  
					  </div>
						<!-- FORM IN CASE COMPANY PROFILE IS NOT SET UP -->
						  <form method="post" action="companyCreate.php" >
							
							<div class="input-group">
							  <label>User ID (Email)</label>
							  <?php  $email = $_SESSION['email'];?>
							 <input type="text" name="email" placeholder="Enter E-Mail" value="<?php echo $email?>" readonly>
							</div>
							
					  <div class="input-group">
						  <label>Username</label>
						  <input type="text" name="username" placeholder="Enter UserName"  value="<?php echo $row["username"] ?>" readonly>
						</div>
  	
						<div class="input-group">
						  <label>Password</label>
						  <input type="text" name="password_1"    value="<?php echo $row["password"] ?>" readonly>
						</div>
							<div class="input-group">
							  <label>Company Email</label>
							 <input type="text" name="Cemail" placeholder="Enter E-Mail"required>
							</div>
							<div class="input-group">
							  <label>Company Name</label>
							  <input type="text" name="companyName" placeholder="Enter Company Name" required>
							</div>
						<div class="input-group">
							  <label>Description</label>
							 <input type="text" name="desc" required>
							</div>
							
						<div class="input-group">
							  <label>Facebook Profile</label>
							 <input type="text" name="facebook" placeholder="Enter Facebook Profile URL"required>
							</div>
						<div class="input-group">
							  <label>LinkedIn Profile</label>
							 <input type="text" name="linkedin" placeholder="Enter LinkedIn Profile URL"required>
							</div>
						<div class="input-group">
							  <label>Phone Number</label>
							 <input type="text" name="phno" placeholder="Enter Phone number"required>
							</div>
						<div class="input-group">
							  <label>Location</label>
							 <input type="text" name="location" placeholder="Enter Location"required>
							</div>
						<div class="input-group">
							  <label>Interested In</label>
							 <input type="text" name="interest" placeholder="FOR EG: Pipes"required>
							</div>
							<div class="input-group">
							  <button type="submit" class="btn" name="reg_user">PROCEED </button>
							</div>
							
						  </form>
				<?php	
					}
					else
					{
						//if profile is created already the prfile is just shown in read only mode  with edit optn 
						$SELECT = "SELECT *  From registeredUsers Where email = '$email'  ";
				$result1 = $conn->query($SELECT);
				if ($result1->num_rows > 0) 
				{
					$row1 = $result1->fetch_assoc();
					
					//searches category of the user 
					?>
					<!-- FORM IN CASE COMPANY PROFILE IS  SET UP -->
								<div class="header">
						YOUR PROFILE 
					  </div>
						
					  <form method="post" action="editprofile.php" >
					  
					  <div class="input-group">
						  <label>User ID (Email)</label>
						  
						 <input type="text"  placeholder="Enter E-Mail" value="<?php echo $row1["email"] ?>" readonly>
						</div>
					  <div class="input-group">
						  <label>Username</label>
						  <input type="text" name="username" placeholder="Enter UserName"  value="<?php echo $row1["username"] ?>" readonly>
						</div>
  	
						<div class="input-group">
						  <label>Password</label>
						  <input type="text" name="password_1"    value="<?php echo $row1["password"] ?>" readonly>
						</div>
						
						
					  
					  
					<?php
				switch($row1["category"])
					{
						
							case "man" :{$sql = "SELECT *  From manufacturers Where email = '$email'  ";
										
							break;}
							case "dis":{$sql = "SELECT *  From distributors Where email = '$email'  ";		
							break;}
							case "ret":{$sql = "SELECT *  From retailers Where email = '$email'  ";
										
							break;}
							case "InsP":{$sql = "SELECT *  From instituitonalPartners Where email = '$email'  ";
										
							break;}
							case "serv":{ $sql = "SELECT *  From serviceProviders Where email = '$email'  ";
									
							break;}
							case "stock":{ $sql = "SELECT *  From stockist Where email = '$email'  ";
										 
										
							break;}
							case "trad":{$sql = "SELECT *  From traders Where email = '$email'  ";
										
							break;}
							
				
					}
					
					$result = $conn->query($sql);
					
				if ($result->num_rows > 0) {
				
					$row2 = $result->fetch_assoc();

						
						?>
							
						
						
						
						
						<div class="input-group">
						  <label>Company Email</label>
						 <input type="text" value="<?php echo $row2["Cemail"] ?>" readonly >
						</div>
						<div class="input-group">
						  <label>Company Name</label>
						  <input type="text" value="<?php echo $row2["cname"] ?>" readonly >
						</div>
					<div class="input-group">
						  <label>Description</label>
						 <input type="text" value="<?php echo $row2["descrip"]?>" readonly >
						</div>
						
					<div class="input-group">
						  <label>Facebook Profile</label>
						 <input type="text"  value="<?php echo $row2["facebook"]?>" readonly>
						</div>
					<div class="input-group">
						  <label>LinkedIn Profile</label>
						 <input type="text"  value="<?php echo $row2["linkedin"]?>" readonly>
						</div>
					<div class="input-group">
						  <label>Phone Number</label>
						 <input type="text" value="<?php echo $row2["phno"]?>" readonly>
						</div>
					<div class="input-group">
						  <label>Location</label>
						 <input type="text"  value="<?php echo $row2["location"]?>" readonly>
						</div>
					<div class="input-group">
						  <label>Interested In</label>
						 <input type="text"  value="<?php echo $row2["interest"]?>" readonly>
						</div>
						<div class="input-group">
						  <button type="submit" class="btn" name="reg_user">EDIT </button>
						</div>
						
					  </form>

					
					
					
					
					
					
				<?php
				}//if no row in manufacturers etc 
				
					else
					echo "error 0 results ";
					
				}//if no row category with this email
					else
					echo "error  ";
					}//if else  profile is created 
				}
					else
						echo "  error no value for  profile created i.e problem in fetching of value  ";
				
			}


?>

<?php include 'includes/footer.php'; ?> 
</body>
</html>