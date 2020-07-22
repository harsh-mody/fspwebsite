
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <?php
//this page is a form for login 
 
 include 'includes/header.php'; ?>
</head>

<body>

	 <?php
	 //this page checks login details from database 
				session_start();
					
					$email=$_POST['email'];
					$password=$_POST['password'];
					
					if(!empty($email)||!empty($password))
					{


						$host="localhost";
						$dbUsername="root";
						$dbPassword="password";
						$dbname="fsp_db";
 						   $conn =   mysqli_connect($host, $dbUsername, $dbPassword,$dbname,3307);
						   
						  //change port to your mysql port 
							if ($conn->connect_error) 
							{
								die("Connection failed: " . $conn->connect_error);
							}
							else 
							{
    								
								$sql= "CREATE TABLE IF NOT EXISTS RegisteredUsers(Id INT PRIMARY KEY,username Varchar(40), email VARCHAR(100), password VARCHAR(20), category VARCHAR(40))";
								$r=$conn->query($sql);
								if($r===FALSE)
								{
									echo "ERROR FATAL " ;
								}
								else
								{
									$SELECT = "SELECT email,password  From RegisteredUsers Where email = '$email'  ";
									$result = $conn->query($SELECT);
									 if ($result->num_rows > 0) 
									 {
											$row = $result->fetch_assoc();
										if($row["email"]==$email&&$row["password"]==$password)
										{
											?>
										<div class="content"><div class = "success">
  										 <h2> VALID EMAIL OR PASSSWORD<h2> </div></div>
								
										<?php
												 

												$_SESSION['email'] = $email;
												$_SESSION['loggedin'] = "yes";
											header("location:home.php?success=1");
										
										}
										else
										{	

									   
									   header("location:login.php?success=2");
    									 	} 
									}
									else
								 	{ 
										
										header("location:login.php?success=3");
											
   									}
									
								}
							  }
   
     						$conn->close();
    					}

						
else {
 echo "All field are required";
 die();
}
?>

</body>
</html>