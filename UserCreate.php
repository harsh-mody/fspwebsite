
<html>
<title> REGISTER ERROR</title><head>
<link rel = "icon" href ="images/logo1.jpg"  type = "image/x-icon">
<?php
//this page is a form for login 

 include 'includes/header.php';?> 
</head>
<body>
<?php

				//THIS PAGE UPLOADS  user profiles TO DATABASE 
					$name=$_POST['username'];
					$category=$_POST['category'];
					$email=$_POST['email'];
					$password=$_POST['password_1'];
					$confirmpas=$_POST['password_2'];
					
					if(!empty($name)||!empty($category)||!empty($email)||!empty($password)||!empty($confirmpas)||!empty($profilecreated))
					{
						if($password==$confirmpas)
						{

						$host="localhost";
						$dbUsername="root";
						$dbPassword="password";
						$dbname="fsp_db";
    //create connection


 						   $conn =   mysqli_connect($host, $dbUsername, $dbPassword,$dbname,3307);
							if ($conn->connect_error) 
							{
								die("Connection failed: " . $conn->connect_error);
							}
							else 
							{
    								
								$sql= "CREATE TABLE IF NOT EXISTS RegisteredUsers(Id INT PRIMARY KEY,username Varchar(40), email VARCHAR(100), password VARCHAR(20), category VARCHAR(40),profilecreated INT DEFAULT '0')";
								$r=$conn->query($sql);
								if($r===FALSE)
								{
									//echo "ERROR FATAL " ;
								}
								else
								{
									//checking if email is already registered 
									$SELECT = "SELECT email  From RegisteredUsers Where email = '$email'  ";
									$result = $conn->query($SELECT);
									 if ($result->num_rows > 0)  {
										header("Location:register.php?error=3");
   
    									 } 
									else
								 	{ 
      
										 $INSERT = "INSERT Into RegisteredUsers(username, email , password, category ) values('$name','$email','$password','$category')";
										$stmt = $conn->query($INSERT);
										if($stmt===TRUE)
  						    					{
													header("Location:login.php?success=1");	
												
									 
										
										
											}
										else
											{echo $conn->error;
												die();
   											}
									}
								}
							  }
   
     						$conn->close();
    						}

						else{
							header("Location:register.php?error=2");
   
						}
					}
else {
 echo "All field are required";
 die();
}
?>
</body>
</html>