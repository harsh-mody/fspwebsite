<!DOCTYPE html>
<html>
<title> HOME  </title>
<link rel = "icon" href ="images/logo1.jpg"  type = "image/x-icon">
<head></head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">	
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="home/carousel.css" rel="stylesheet">
<style>
/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding-top: 3rem;
  padding-bottom: 3rem;
  color: #5a5a5a;
  font-family: Poppins-Regular;    line-height: 24px; font-size: 100%;
}
p{
	font-family:Verdana, Geneva, sans-serif   font-size: 100%;
}

/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
  background-color: #777;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}

</style>
<?php session_start();
 if($_SESSION['loggedin']=="yes")
{
$email = $_SESSION['email'];}
else
{
	$email = " ";
}

 ?>

  </head>
  <body>
    
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
  

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="help3.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left"><br><br>
                <h1>Your requirements are just a click away !! </h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="distributor.php" role="button">Search Now</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="help2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>WE are there for you! Sign up today </h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="register.php" role="button">Sign up Now </a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="help4.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Hear From our clients !</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Client testimonials</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <h3>
<marquee direction="right" align="centre" behavior="alternate" bgcolor="" scrolldelay="100" scrollamount="4" width="100%">
<br>!! Welcome To FSP CONSULTANTS  <?php echo $email; ?>!!!<br>&nbsp</marquee>

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="home/client1.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Client one </h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="home/client2.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Client two</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="home/client3.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Client three</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
		<div class="container-fluid" style=" color:black;-webkit-background-size: cover; 
-moz-background-size: cover; 
-o-background-size: cover;">
		<button class="open-button" class="btn btn-secondary" onclick="openForm()">Add Your Comment</button>

		<!-- form for adding comment -->
<div class="form-popup" id="myForm" style="display:none; text-align: justify">
  <form action="/action_page.php" class="form-container">
    <h1>ADD YOUR COMMENTS</h1><br>

    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="Name" required>
	<br>
    <label for="Profession"><b>Profession</b></label>
    <input type="Text" placeholder="Enter Profession" name="Profession" required>
	<br>
	<label for="COMMENTS"><b>COMMENTS</b></label>
    <input type="Text" placeholder="Share your views" name="comment" required>
	<br><br>
    <button type="submit" class="open-button" class="btn">Submit</button>
    <button type="button" class="open-button" class="btn cancel" onclick="closeForm()">Cancel</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</div>

        <!-- START THE FEATURETTES -->
		<hr class="featurette-divider">

   
<div class="row padding0">
    <div class="col-md-12 padding0">
	
      <h1 >Creating impact</h1>
    </div>
  </div>
  <div class="row padding0">
<div class="col-md-3 bdr-ryt">
<div class="usp-box" >
<h1>50+</h1>
<p>Years of market leadership</p>
</div>
</div>
<div class="col-md-3 bdr-ryt">
<div class="usp-box">
<h1>165K</h1>
<p>Careers made till date</p>
</div>
</div>
<div class="col-md-3 bdr-ryt">
<div class="usp-box">
<h1>465+</h1>
<p>Consultants</p>
</div>
</div>
<div class="col-md-3">
<div class="usp-box">
<h1>24</h1>
<p>Industries covered</p>
</div>
</div>
  <div class="clear"></div>
</div>


<hr class="featurette-divider" >



       

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Why FSP consultants ? <span class="text-muted">We help you become successfull!</span></h2>
            <p >FSP Consultants is the pioneer of organised recruitment in India. Our roots in management consulting enable us to bring a unique approach to recruitment. We provide a range of talent acquisition services by leveraging our domain knowledge built over four decades.sque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="home/help5.jpg" alt="Generic placeholder image">
          </div>
        </div>

	



        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"><span class="text-muted">See for yourself.</span></h2>
            <p >Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="home/help.jpg" alt="Generic placeholder image">
          </div>
        </div>
        <hr class="featurette-divider">

        
        
        <fieldset class="container-fluid" style=" overflow: hidden; color:black;-webkit-background-size: cover; 
-moz-background-size: cover; 
-o-background-size: cover;  height: 300px ">
<div>
<b> <h1>Industry Practices</h1></b>
<p>In order to provide clients with specialised recruiting solutions,
   FSP has developed expertise in the following industry segments:</p>
<div class="row">

	<div class="col-sm-3" style="float: left;"> 			 
		<span> 
		Distributor
		<br>			
		<a href="distributor.php"><img class="rounded-circle" src="img/warehouse.jpg" style="width: 50px; height: 50px;"/></a>
		</span>
	</div>
		
	<div class="col-sm-3" style="float: left;"> 
		<span> 
		Manufacturer
		<br>
		<a href="distributor.php"><img class="rounded-circle" src="img/labourer.png" style="width: 50px; height: 50px;"/></a>
		</span>
	</div>
	
	<div class="col-sm-3" style="float: left; "> 
		<span> 
		Super Stockist
		<br>			
		<a href="distributor.php"><img class="rounded-circle" src="img/retailer.png" style="width: 50px; height: 50px;"/></a>
		</span>
	</div>
	
	<div class="col-sm-3" style="float: left;"> 
		<span> 
		Service Provider
		<br>			
		<a href="distributor.php"><img class="rounded-circle" src="img/institutional trade.jpg" style="width: 50px; height: 50px;"/></a>
		</span>
	</div>
</div>
<br><br>
<div class="row">
	<div class="col-sm-3" style="float: left;"> 
		<span> 
		Retailer
		<br>			
		<a href="distributor.php"><img class="rounded-circle" src="img/brand oem.png" style="width: 50px; height: 50px;"/></a>
		</span>
	</div>
	
	<div class="col-sm-3" style="float: left;"> 
		<span> 
		Buy/Sell
		<br>			
		<a href="distributor.php"><img class="rounded-circle" src="img/super stockist.png" style="width: 50px; height: 50px;"/></a>
		</span>
	</div>
	
	<div class="col-sm-3" style="float: left;"> 
		<span> 
		Trader
		<br>			
		<a href="distributor.php"><img class="rounded-circle" src="img/buysell.jpg" style="width: 50px; height: 50px;"/></a>
		</span>
	</div>
		
	<div class="col-sm-3" style="float: left; "> 
		<span> 
		Institutional Partner
		<br>			
		<a href="distributor.php"><img class="rounded-circle" src="img/service provider.png" style="width: 50px; height: 50px;"/></a>
		</span>
	</div>
</div>
	</div>
<br><br>
</fieldset>
<br>
<!-- /END THE FEATURETTES -->

<hr class="featurette-divider">

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
 
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   
  </body>
  <?php include 'includes/footer.php'; ?>
</html>
