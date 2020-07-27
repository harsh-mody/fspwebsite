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
	<style>

.input100 
{
  height: 50px;
	border: none;
  padding-top: 10px !important;
  padding-bottom: 6px !important;
  outline:0px !important;
}
textarea 
{
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}
.container {
	max-width: 1200px;
}
.container-contact100 {
  width: 100%;  
  min-height: 100vh;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background:  white !important; 
}

.wrap-contact100 {
  width: 85%;
  background: white !important;
  border-radius: 10px;
  overflow: hidden;
  padding: 42px 55px 45px 55px;
  box-shadow: 13px 13px 17px rgba(0, 0, 0, 0.25),
	  -9px -9px 11px rgba(255, 255, 255, 0.3);
    
}
.contact100-form {
  width: 100%;

}

.contact100-form-title {
  display: block;
  font-family: Poppins-Bold;
  font-size: 40px;
  color: white;
  line-height: 1.2;
  text-align: center;
  padding-bottom: 44px;
  background: #c7b198;
  
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}

.wrap-input100 {
  width: 100%;
  position: relative;
  border-bottom: 2px solid #CCC8FF;
  padding-bottom: 13px;
  margin-bottom: 27px;
}

.label-input100 {
  font-family: Poppins-Regular;
  font-size: 20px;
  color: #000000;
  line-height: 1.2;
  padding-left: 5px;
}

.input100 {
  display: block;
  width: 100%;
  background: transparent;
  font-family: Poppins-Medium;
  font-size: 18px;
  color: #596e79;
  line-height: 1.2;
  padding: 0 5px;
  border-radius: 8px;
  box-shadow: inset 1px 1px 4px rgba(0, 0, 0, 0.25),
              inset -2px -2px 6px rgba(255, 255, 255, 0.3);
}

.focus-input100 {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}

.focus-input100::before {
  content: "";
  display: block;
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 2px;
  transition: all 0.4s;
  background: #dfd3c3;
}

input.input100 {
  padding-top: 10px;
}

textarea.input100 {
  min-height: 250px;
  padding-top: 10px;
  padding-bottom: 10px;
}
.input100:focus + .focus-input100::before {
  width: 100%;
}

.has-val.input100 + .focus-input100::before {
  width: 100%;
}
.container-contact100-form-btn {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-top: 13px;
}

.wrap-contact100-form-btn {
  width: 100%;
  display: block;
  position: relative;
  z-index: 1;
  border-radius: 25px;
  overflow: hidden;
  margin: 0 auto;
}

.contact100-form-bgbtn {
  position: absolute;
  z-index: -1;
  width: 300%;
  height: 100%;
  background-color: #c7b198;
 
}
.contact100-form-btn {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 50px;
  font-family: Poppins-Medium;
  font-size: 16px;
  color: #FFFFFF;
  line-height: 1.2;
}
.success {
	font-family: Poppins-Medium;
  font-size: 16px;
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}

.contact100-form-btn:hover
{
	  background-color: #c7b198;
  	opacity: 1 !important;
  	transition: all 0.4s;
} 
.wrap-contact100-form-btn:hover .contact100-form-bgbtn {
  left: 0;
}
.contact100-form-btn i 
{
  	transition: all 0.4s;
}
.contact100-form-btn:hover i 
{
  transform: translateX(10px);
}

@media (max-width: 576px) 
{
  .wrap-contact100 {
    padding: 72px 15px 65px 15px;
  }
}


</style>
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
					
					
					
						
						    
<!-- form -->
<?php  $email = $_SESSION['email'];?>
<div class="container-contact100">
            <div class="wrap-contact100">
			<form method="post" action="companyCreate.php" >
                    <span class="contact100-form-title">
                        REGISTER
                    </span>
					<div class="wrap-input100 validate-input" >
                        <span class="label-input100">  Username </span>
						<input class="input100"  type="text" name="username" placeholder="Enter UserName" value="<?php echo $row["username"] ?>" readonly>
                        
                        <span class="focus-input100"></span>
                    </div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: example@email-provider.com">
                        <span class="label-input100"> User-Id (Email)</span>
                        <input class="input100" type="email" id="email" name="email" placeholder="Enter your email address" value="<?php echo $email?>" readonly>
                        <span class="focus-input100"></span>
                    </div>
					

					<div class="wrap-input100 validate-input" data-validate=""> 
                        
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" id="password" name="password" placeholder="Enter a password" value="<?php echo $row["password"] ?>" readonly>
                        <span class="focus-input100"></span>
                    </div>

    
                    
                        <span class="focus-input100"></span>

                    	   
						<div class="wrap-input100 validate-input" data-validate=data-validate = "Valid email is required: example@email-provider.com"> 
							<span class="label-input100"> Company Email</span>
							 <input  class="input100" type="text" name="Cemail" placeholder="Enter E-Mail"required>
							 <span class="focus-input100"></span>
							</div> 
							<span class="focus-input100"></span>

							<<div class="wrap-input100 validate-input" data-validate=""> 
							<span class="label-input100"> Company Name</span>
							  <input  class="input100" type="text" name="cname" placeholder="Enter Company Name" required>
							  <span class="focus-input100"></span>
							</div>
							<span class="focus-input100"></span>  

							<div class="wrap-input100 validate-input" data-validate=""> 
						<span class="label-input100">Description</span>
							 <input class="input100" type="text" name="desc" required>
							 <span class="focus-input100"></span>
							</div>
							<span class="focus-input100"></span> 

							<div class="wrap-input100 validate-input" data-validate=""> 
						<span class="label-input100"> Facebook Profile</span>
							 <input class="input100" type="text" name="facebook" placeholder="Enter Facebook Profile URL"required>
							<span class="focus-input100"></span>
							</div>
							<span class="focus-input100"></span>

							<div class="wrap-input100 validate-input" data-validate=""> 
						<span class="label-input100"> LinkedIn Profile</span>
							 <input  class="input100"type="text" name="linkedin" placeholder="Enter LinkedIn Profile URL"required>
							<span class="focus-input100"></span>
							</div>
							<span class="focus-input100"></span>


							<div class="wrap-input100 validate-input" data-validate=""> 
						<span class="label-input100"> Phone Number</span>
							 <input  class="input100"type="text" name="phno" placeholder="Enter Phone number"required>
							<span class="focus-input100"></span></div>
							<span class="focus-input100"></span>

							<div class="wrap-input100 validate-input" data-validate=""> 
						<span class="label-input100"> Location</label></span>
							 <input  class="input100" type="text" name="location" placeholder="Enter Location"required>
							<span class="focus-input100"></span></div>
							<span class="focus-input100"></span>
						<div class="wrap-input100 validate-input" data-validate=""> 
						<span class="label-input100">Interested In</span>
							 <input class="input100" type="text" name="interest" placeholder="FOR EG: Pipes"required>
							 <span class="focus-input100"></span>
							</div>
							<span class="focus-input100"></span>
                    
                   
	
		
										<div class="container-contact100-form-btn ">
                        <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>

							<div class="input-group">
		  <button class="contact100-form-btn" value="submit" name="Proceed">
                                <span>
                                    SUBMIT 
									<br>
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            </button>
							</div>
                    </div>
					</div>
		 

  </form>
            </div>
        </div>
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
					<div class="container-contact100">
            <div class="wrap-contact100">
			<form method="post" action="editprofile.php" >
                    <span class="contact100-form-title">
                        YOUR PROFILE
                    </span>
					<div class="wrap-input100 validate-input" >
                        <span class="label-input100">  Username </span>
						<input class="input100"  type="text" name="username" placeholder="Enter UserName" value="<?php echo $row["username"] ?>" readonly>
                        
                        <span class="focus-input100"></span>
                    </div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: example@email-provider.com">
                        <span class="label-input100"> User-Id (Email)</span>
                        <input class="input100" type="email" id="email" name="email" placeholder="Enter your email address" value="<?php echo $email?>" readonly>
                        <span class="focus-input100"></span>
                    </div>
					

					<div class="wrap-input100 validate-input" data-validate=""> 
                        
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" id="password" name="password" placeholder="Enter a password" value="<?php echo $row["password"] ?>" readonly>
                        <span class="focus-input100"></span>
                    </div>

    
                    
                        <span class="focus-input100"></span>
					
								
						
					  
					  
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
							
						  
							<div class="wrap-input100 validate-input" data-validate=data-validate = "Valid email is required: example@email-provider.com"> 
							<span class="label-input100"> Company Email</span>
							 <input  class="input100" input type="text" value="<?php echo $row2["Cemail"] ?>" readonly >
							 <span class="focus-input100"></span>
							</div> 
							<span class="focus-input100"></span>

							<div class="wrap-input100 validate-input" data-validate=""> 
							<span class="label-input100"> Company Name</span>
							  <input  class="input100" value="<?php echo $row2["cname"] ?>" readonly >
							  <span class="focus-input100"></span>
							</div>
							<span class="focus-input100"></span>  

							<div class="wrap-input100 validate-input" data-validate=""> 
						<span class="label-input100">Description</span>
							 <input class="input100" 	 type="text" value="<?php echo $row2["descrip"]?>" readonly >

							 <span class="focus-input100"></span>
							</div>
							<span class="focus-input100"></span> 

							<div class="wrap-input100 validate-input" data-validate=""> 
						<span class="label-input100"> Facebook Profile</span>
							 <input class="input100" value="<?php echo $row2["facebook"]?>" readonly>
							<span class="focus-input100"></span>
							</div>
							<span class="focus-input100"></span>

							<div class="wrap-input100 validate-input" data-validate=""> 
						<span class="label-input100"> LinkedIn Profile</span>
							 <input  class="input100"value="<?php echo $row2["linkedin"]?>" readonly>
							<span class="focus-input100"></span>
							</div>
							<span class="focus-input100"></span>


							<div class="wrap-input100 validate-input" data-validate=""> 
						<span class="label-input100"> Phone Number</span>
							 <input  class="input100" value="<?php echo $row2["phno"]?>" readonly>
							<span class="focus-input100"></span></div>
							<span class="focus-input100"></span>

							<div class="wrap-input100 validate-input" data-validate=""> 
						<span class="label-input100"> Location</label></span>
							 <input  class="input100"value="<?php echo $row2["location"]?>" readonly>
							<span class="focus-input100"></span></div>
							<span class="focus-input100"></span>
						<div class="wrap-input100 validate-input" data-validate=""> 
						<span class="label-input100">Interested In</span>
							 <input class="input100" value="<?php echo $row2["interest"]?>" readonly>
							 <span class="focus-input100"></span>
							</div>
							<span class="focus-input100"></span>
						
						
						
						
							<div class="container-contact100-form-btn ">
                        <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>

							<div class="input-group">
		  <button class="contact100-form-btn" value="submit" name="proceed">
                                <span>
                                   EDIT 
									<br>
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            </button>
							</div>
                    </div>
					</div>
		 

  </form>
            </div>
        </div>
					
					
					
					
					
					
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