<html>
<head>
<?php
 session_start();?>

<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">FSP Consultants</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="distributor.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CATEGORIES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="distributor.php">Action</a>
          <a class="dropdown-item" href="distributor.php">Another action</a>
          <a  class="dropdown-item" href="distributor.php">MANUFACTURER</a>
         			<a class="dropdown-item" href="distributorphp">DISTRIBUTOR</a>
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
        <a class="nav-link" href="OVERSEAS.php">Overseas </a></li>
      

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="aboutus.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="contactus.php">Contact Us </a>
          <a class="dropdown-item" href="howitworks.php">How it works!</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>





         
	  
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <?php
if( $_SESSION['loggedin']=="yes")
{
	?>
	<li class="nav-item" class="nav navbar-nav navbar-right">
        <a class="nav-link"  href="company.php">Profile</a></li>
	  
        <li class="nav-item" class="nav navbar-nav navbar-right">
        <a class="nav-link"  href="logout.php">Logout</a></li>
    </ul>
	<?php
}
else
{
	?>
	<li  class="nav navbar-nav navbar-right">
        <a class="nav-link"  href="login.php">Login</a></li>
	  
        <li  class="nav navbar-nav navbar-right">
        <a class="nav-link" href="register.php">Register</a></li>
    </ul>
	<?php
	
}		 ?>
    </ul>
  </div>
</nav>

</head>
<body>


</body>
</html>