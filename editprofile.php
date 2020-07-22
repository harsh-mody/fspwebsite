<html>
<title> Edit Profile </title>
<link rel = "icon" href ="images/logo1.jpg"  type = "image/x-icon">
<head>

<?php include 'navigation.php';

$email=$_SESSION['email'] ; ?>

</head>
<body>
<?php 
//this page has a form for editing details 
$host="localhost";
		$dbUsername="root";
		$dbPassword="password";
		$dbname="fsp_db";
    //create connection change port to 3306 in case ur settings are different 
		$conn =   mysqli_connect($host, $dbUsername, $dbPassword,$dbname,3307);
			if ($conn->connect_error) 
			{
				die("Connection failed: " . $conn->connect_error);
			}
			else
			{
				$SELECT = "SELECT *  From registeredUsers Where email = '$email'  ";
				$result1 = $conn->query($SELECT);
				if ($result1->num_rows > 0) 
				{
					$row1 = $result1->fetch_assoc();
					
					
					//checking category and finding suitable table 
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

						//the input groups marked readonly are un editable 
						?>
						<!-- FORM FOR EDITING  , redirects to updateprofile.php-->
					<div class="header">
						YOUR PROFILE  
					  </div>
						
					  <form method="post" action="updateprofile.php" >
						
						<div class="input-group">
						  <label>User ID (Email)</label>
						  
						 <input type="text" name="email" placeholder="Enter E-Mail" value="<?php echo $row2["email"] ?>" readonly >
						</div>
						<div class="input-group">
						  <label>Username</label>
						  <input type="text" name="username" placeholder="Enter UserName"  value="<?php echo $row1["username"] ?>" readonly>
						</div>
  	
						<div class="input-group">
						  <label>Password</label>
						  <input type="text" name="password"    value="<?php echo $row1["password"] ?>" >
						</div>
						<div class="input-group">
						  <label>Company Email</label>
						 <input type="text"  name="Cemail" value="<?php echo $row2["Cemail"] ?>" >
						</div>
						<div class="input-group">
						  <label>Company Name</label>
						  <input type="text" name="cname" value="<?php echo $row2["cname"] ?>"  >
						</div>
					<div class="input-group">
						  <label>Description</label>
						 <input type="text" name="desc" value="<?php echo $row2["descrip"]?>"  >
						</div>
						
					<div class="input-group">
						  <label>Facebook Profile</label>
						 <input type="text" name="facebook" value="<?php echo $row2["facebook"]?>" >
						</div>
					<div class="input-group">
						  <label>LinkedIn Profile</label>
						 <input type="text" name="linkedin" value="<?php echo $row2["linkedin"]?>" >
						</div>
					<div class="input-group">
						  <label>Phone Number</label>
						 <input type="text" name="phno" value="<?php echo $row2["phno"]?>" >
						</div>
					<div class="input-group">
						  <label>Location</label>
						 <input type="text" name="location" value="<?php echo $row2["location"]?>" >
						</div>
					<div class="input-group">
						  <label>Interested In</label>
						 <input type="text" name="interest"  value="<?php echo $row2["interest"]?>" >
						</div>
						<div class="input-group">
						  <button type="submit" class="btn" name="reg_user">SUBMIT  </button>
						</div>
						
					  </form>

					
					
					
					
					
					
				<?php
				}//if no row in manufacturers etc 
				
					else
					echo "error 0 results ";
					
				}//if no row category with this email
					else
			echo "error  ";}
				
			


?>


</body>
</html>