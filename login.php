
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
 <link rel="stylesheet" href="../includes/contact.css">
    <link rel="stylesheet" href="../includes/index.css">
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
  width: 70%;
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
<!-- form -->
<div class="container-contact100">
            <div class="wrap-contact100">
			<form method="post" action="logincheck.php">
                    <span class="contact100-form-title">
                        Login 
                    </span>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: example@email-provider.com">
                        <span class="label-input100"> User-Id (Email)</span>
                        <input class="input100" type="email" id="email" name="email" placeholder="Enter your email addess" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate=""> 
                        <!-- PLS NOTE DATA VALIDATE ClASS AFTER JS IS CONNECTED... CREATE IT'S UI TOO..... -->
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" id="password" name="password" placeholder="Enter a password" required>
                        <span class="focus-input100"></span>
                    </div>

    
                    
                        <span class="focus-input100"></span>
                    
                   
	  <?php
	  if(isset($_GET['success']) && $_GET['success'] == 2)
	  {
		  ?>
		  <div class ="success">
		<p  style=" color: red; ">INVALID  PASSSWORD!</p>
										</div>
										<div class="container-contact100-form-btn ">
                        <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>

							<div class="input-group">
		  <button class="contact100-form-btn" value="Login" name="Login">
                                <span>
                                    PROCEED
									<br>
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            </button>
							</div>
                    </div>
		  <?php
	  }
	  else if(isset($_GET['success']) && $_GET['success'] == 3) 
	  {
		?>
		<div class ="success">
		<p style=" color: red; ">No User Registered With this email , Please Register First!</p>
										</div>
										<div class="container-contact100-form-btn ">
                        <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>

							<div class="input-group">
										<button class="contact100-form-btn" value="Login" name="Login">
                                <span>
                                    PROCEED
									<br>
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
								
                            </button>
							</div>
                    </div>
		<?php
	  }
	 else
	 {
		 ?>
		 	<div class="container-contact100-form-btn ">
                        <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>

							<div class="input-group">
		 <button class="contact100-form-btn" value="Login" name="Login">
                                <span>
                                    PROCEED
									<br>
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            </button>
							</div>
                    </div>
		 <?php
		
	 }
	 ?>















                        
					<p>
  		Not yet a member? <a href="register.php"><u>REGISTER HERE</u> </a>
  	</p>
  </form>
            </div>
        </div>
		</div>   
		
</body>
<?php include 'includes/footer.php'; ?>
</html>
