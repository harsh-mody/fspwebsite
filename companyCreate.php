
<html>
<head>

<?php include 'navigation.php';
session_start(); ?>

</head>
<body>
<?php
//this file creates company profile 
	$email=$_POST['email'];
	$Cemail=$_POST['Cemail'];				
	$cname=$_POST['companyName'];
	$desc=$_POST['desc'];
	$facebook=$_POST['facebook'];
	$linkedin=$_POST['linkedin'];
	$location=$_POST['location'];
	$phno=$_POST['phno'];
	
	$interest=$_POST['interest'];
					
	if(!empty($cname)||!empty($location)||!empty($email)||!empty($Cemail)||!empty($interest)||!empty($facebook)||!empty($phno)
						||!empty($linkedin)||!empty($desc))
	{

						
		$host="localhost";
		$dbUsername="root";
		$dbPassword="password";
		$dbname="fsp_db";
    //create connection change port if required
		$conn =   mysqli_connect($host, $dbUsername, $dbPassword,$dbname,3307);
			if ($conn->connect_error) 
			{
				die("Connection failed: " . $conn->connect_error);
			}
			else 
			{
				$SELECT = "SELECT category  From RegisteredUsers Where email = '$email'  ";
				$result = $conn->query($SELECT);
				
				if ($result->num_rows > 0) 
				{
					$row = $result->fetch_assoc();
				//to find table for suitabe category 
					switch($row["category"])
					{
						
							case "man" :{$sql= "CREATE TABLE IF NOT EXISTS Manufacturers(Id INT PRIMARY KEY  NOT NULL AUTO_INCREMENT ,
									cname Varchar(40), email VARCHAR(100) , Cemail VARCHAR(100),descrip VARCHAR(300) , facebook VARCHAR(300), 
									linkedin VARCHAR(300),interest VARCHAR(20) ,phno VARCHAR(10),location VARCHAR(40))";
								
										 $INSERT = "INSERT Into Manufacturers(cname, email ,Cemail, descrip,facebook,linkedin,
										 interest,phno,location) values('$cname','$email','$Cemail','$desc','$facebook',
										 '$linkedin','$interest','$phno','$location')";
										
							break;}
							case "dis":{$sql= "CREATE TABLE IF NOT EXISTS Distributors(Id INT PRIMARY KEY  NOT NULL AUTO_INCREMENT ,
									cname Varchar(40), email VARCHAR(100) , Cemail VARCHAR(100),descrip VARCHAR(300) , facebook VARCHAR(300), 
									linkedin VARCHAR(300),interest VARCHAR(20) ,phno VARCHAR(10),location VARCHAR(40))";
								
								
										 $INSERT = "INSERT Into Distributors(cname, email ,Cemail, descrip,facebook,linkedin,
										 interest,phno,location) values('$cname','$email','$Cemail','$desc','$facebook',
										 '$linkedin','$interest','$phno','$location')";
									
							break;}
							case "ret":{$sql= "CREATE TABLE IF NOT EXISTS Retailers(Id INT PRIMARY KEY  NOT NULL AUTO_INCREMENT ,
									cname Varchar(40), email VARCHAR(100) , Cemail VARCHAR(100),descrip VARCHAR(300) , facebook VARCHAR(300), 
									linkedin VARCHAR(300),interest VARCHAR(20) ,phno VARCHAR(10),location VARCHAR(40))";
								
							
										 $INSERT = "INSERT Into Retailers(cname, email ,Cemail, descrip,facebook,linkedin,
										 interest,phno,location) values('$cname','$email','$Cemail','$desc','$facebook',
										 '$linkedin','$interest','$phno','$location')";
										
							break;}
							case "InsP":{$sql= "CREATE TABLE IF NOT EXISTS InstituitonalPartners(Id INT PRIMARY KEY  NOT NULL AUTO_INCREMENT ,
									cname Varchar(40), email VARCHAR(100) , Cemail VARCHAR(100),descrip VARCHAR(300) , facebook VARCHAR(300), 
									linkedin VARCHAR(300),interest VARCHAR(20) ,phno VARCHAR(10),location VARCHAR(40))";
								
										 $INSERT = "INSERT Into InstituitonalPartners(cname, email ,Cemail, descrip,facebook,linkedin,
										 interest,phno,location) values('$cname','$email','$Cemail','$desc','$facebook',
										 '$linkedin','$interest','$phno','$location')";
										
							break;}
							case "serv":{$sql= "CREATE TABLE IF NOT EXISTS ServiceProviders(Id INT PRIMARY KEY  NOT NULL AUTO_INCREMENT ,
									cname Varchar(40), email VARCHAR(100) , Cemail VARCHAR(100),descrip VARCHAR(300) , facebook VARCHAR(300), 
									linkedin VARCHAR(300),interest VARCHAR(20) ,phno VARCHAR(10),location VARCHAR(40))";
								
										 $INSERT = "INSERT Into ServiceProviders(cname, email ,Cemail, descrip,facebook,linkedin,
										 interest,phno,location) values('$cname','$email','$Cemail','$desc','$facebook',
										 '$linkedin','$interest','$phno','$location')";
										
									
							break;}
							case "stock":{$sql= "CREATE TABLE IF NOT EXISTS Stockist(Id INT PRIMARY KEY  NOT NULL AUTO_INCREMENT ,
									cname Varchar(40), email VARCHAR(100) , Cemail VARCHAR(100),descrip VARCHAR(300) , facebook VARCHAR(300), 
									linkedin VARCHAR(300),interest VARCHAR(20) ,phno VARCHAR(10),location VARCHAR(40))";
								 
      
										 $INSERT = "INSERT Into Stockist(cname, email ,Cemail, descrip,facebook,linkedin,
										 interest,phno,location) values('$cname','$email','$Cemail','$desc','$facebook',
										 '$linkedin','$interest','$phno','$location')";
										
							break;}
							case "trad":{$sql= "CREATE TABLE IF NOT EXISTS Traders(Id INT PRIMARY KEY  NOT NULL AUTO_INCREMENT ,
									cname Varchar(40), email VARCHAR(100) , Cemail VARCHAR(100),descrip VARCHAR(300) , facebook VARCHAR(300), 
									linkedin VARCHAR(300),interest VARCHAR(20) ,phno VARCHAR(10),location VARCHAR(40))";
								
      
										 $INSERT = "INSERT Into Traders(cname, email ,Cemail, descrip,facebook,linkedin,
										 interest,phno,location) values('$cname','$email','$Cemail','$desc','$facebook',
										 '$linkedin','$interest','$phno','$location')";
										
							break;}
							
				
					}//switch end
					$r=$conn->query($sql);
								if($r===FALSE)
								{
									echo "ERROR FATAL " ;
								}
								else
								 	{ 
										$stmt = $conn->query($INSERT);
										if($stmt===TRUE)
  						    					{
													//update the value of variable profile created
													$sql = "UPDATE RegisteredUsers SET profilecreated='1' WHERE email='$email'";

														if ($conn->query($sql) === TRUE) {
																		
																		header("Location:company.php");
																						} else {
																		echo "Error updating record: " . $conn->error;
																}
											
												
											}
										else
											{echo $conn->error;
										die();}
										$conn->close();
									}
					
					
					
					
					
					
					
					
					
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