
<html>
<head>

<?php include 'navigation.php'; 
session_start();?>


</head>
<body>
<?php
//THIS PAGE UPDATES TABLES WITH THE UPDATED INFO FROM editprofile.php
	$email=$_POST['email'];
	$Cemail=$_POST['Cemail'];				
	$cname=$_POST['cname'];
	$desc=$_POST['desc'];
	$facebook=$_POST['facebook'];
	$linkedin=$_POST['linkedin'];
	$location=$_POST['location'];
	$phno=$_POST['phno'];
	$password=$_POST['password'];
	$interest=$_POST['interest'];
					
	if(!empty($cname)||!empty($location)||!empty($email)||!empty($Cemail)||!empty($interest)||!empty($facebook)||!empty($phno)
						||!empty($linkedin)||!empty($desc)||!empty($password))
	{

						
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
				$SELECT = "SELECT category  From RegisteredUsers Where email = '$email'  ";
				//query to get category to find desired table 
				$result = $conn->query($SELECT);
				
				if ($result->num_rows > 0) 
				{
					$row = $result->fetch_assoc();
				$editpassword = "UPDATE  RegisteredUsers  SET password='$password' WHERE email='$email'  ";
				//query to update password in registered users page 
					switch($row["category"])
					{
						//query to update in desired category table 
							case "man" :{
								
										 $UPDATE = "UPDATE  Manufacturers SET cname='$cname',Cemail='$Cemail', descrip='$desc',facebook='$facebook',linkedin='$linkedin',
										 interest='$interest',phno='$phno',location='$location' WHERE email='$email'  ";
										
							break;}
							case "dis":{
								
								
										 $UPDATE = "UPDATE  Distributors SET cname='$cname',Cemail='$Cemail', descrip='$desc',facebook='$facebook',linkedin='$linkedin',
										 interest='$interest',phno='$phno',location='$location' WHERE email='$email'  ";
									
							break;}
							case "ret":{$UPDATE = "UPDATE  Retailers SET cname='$cname',Cemail='$Cemail', descrip='$desc',facebook='$facebook',linkedin='$linkedin',
										 interest='$interest',phno='$phno',location='$location' WHERE email='$email'  ";
										
							break;}
							case "InsP":{$UPDATE = "UPDATE  InstituitonalPartners SET cname='$cname',Cemail='$Cemail', descrip='$desc',facebook='$facebook',linkedin='$linkedin',
										 interest='$interest',phno='$phno',location='$location' WHERE email='$email'  ";
										
							break;}
							case "serv":{$UPDATE = "UPDATE  ServiceProviders SET cname='$cname',Cemail='$Cemail', descrip='$desc',facebook='$facebook',linkedin='$linkedin',
										 interest='$interest',phno='$phno',location='$location' WHERE email='$email'  ";
										
									
							break;}
							case "stock":{$UPDATE = "UPDATE  Stockist SET cname='$cname',Cemail='$Cemail', descrip='$desc',facebook='$facebook',linkedin='$linkedin',
										 interest='$interest',phno='$phno',location='$location' WHERE email='$email'  ";
							break;}
							case "trad":{$UPDATE = "UPDATE  Traders SET cname='$cname',Cemail='$Cemail', descrip='$desc',facebook='$facebook',linkedin='$linkedin',
										 interest='$interest',phno='$phno',location='$location' WHERE email='$email'  ";
										
							break;}
							
				
					}//switch end
					
										$stmt = $conn->query($UPDATE);
										$stmt2 = $conn->query($editpassword);
										if($stmt2===TRUE)
  						    					{
													
													echo " updated password " ;
											
												
											}
										else
											{echo "Error updating password " .$conn->error;
										die();}
										if($stmt===TRUE)
  						    					{
													//after updating redirect to company.php
													header("Location:company.php");;
													
											
												
											}
										else
											{echo "Error updating record: " .$conn->error;
										die();}
										
										$conn->close();
									
					
					
					
					
					
					
					
					
					
				}//if no email in database 
				
			}/*else database connected */			
	}/*if not empty */
	else
	{
		echo "All field are required";
		die();
	}
?>

</body>
</html>