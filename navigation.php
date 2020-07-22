<html>
<head>

<?php
 session_start();
 include 'includes/header.php'; ?>
 
	</head>	
	<body>
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="font-size: 20px">
<a class="navbar-brand our-brand brand-logo" href="home.php" style="font-size: 20px">FSP Consultants</a>

  
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mx-2"  style="font-size: 20px">
     
        <li class="nav-item active">
            <a class="nav-link" href="home.php">
              <i class="fa fa-home" aria-hidden="true"></i> Home<span class="sr-only">(current)</span></a
              >
            </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="distributor.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a  class="dropdown-item" href="distributor.php">MANUFACTURER</a>
         			<a class="dropdown-item" href="distributor.php">DISTRIBUTOR</a>
         			<a class="dropdown-item"  href="distributor.php">SUPER STOCKIST</a>
         			<a class="dropdown-item" href="distributor.php">SERVICE PROVIDER</a>
         			<a class="dropdown-item"  href="distributor.php">RETAILER</a>
         			<a class="dropdown-item"  href="distributor.php">BUYSELL</a>
         			<a class="dropdown-item" href="distributor.php">OEM MANUFACTURING</a>
         		    <a  class="dropdown-item" href="distributor.php">MODERN TRADE PARTNER</a>
         			<a  class="dropdown-item" href="distributor.php">INSTITUTIONAL PARTNER</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="directory.php">Directory</a></li>
      <li class="nav-item">
        <a class="nav-link"  href="blog.php">Blog</a></li>	 
      <li class="nav-item">
        <a class="nav-link" href="OVERSEAS.php">Overseas <span class="sr-only">(current)</span> </a></li>
      

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="aboutus.php">About Us </a>
          <a class="dropdown-item" href="contactus.php">Contact Us </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="howitworks.php">How it works!</a>
        </div>
      </li>
   
   
      <?php
if( $_SESSION['loggedin']=="yes")
{
	?>
	<li class="nav-item">
        <a class="nav-link"  href="company.php">Profile</a></li>
	  
        <li class="nav-item" >
        <a class="nav-link"  href="logout.php">Logout</a></li>
    
	<?php
}
else
{
	?>
	<li class="nav-item" >
        <a class="nav-link"  href="login.php">Login</a></li>
	  
        <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a></li>
    
	<?php
	
}		 ?>
    
  </div>
</nav>





</body>
</html>